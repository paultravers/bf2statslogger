<?php

/*
 * This work is licensed under the Creative Commons Attribution-NonCommercial-ShareAlike License. 
 * To view a copy of this license, visit http://creativecommons.org/licenses/by-nc-sa/2.5/ 
 * or send a letter to Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.
 *
 * Code Source: http://bf2s.com/
 * Created by Jeff Minard, http://jrm.cc
 */

if(!function_exists('array_combine')) { 
	function array_combine($a, $b) {
		$c = array();
		$at = array_values($a);
		$bt = array_values($b);
		foreach($at as $key=>$aval) $c[$aval] = $bt[$key];
		return $c;
	}
}

function file_trim(&$value, $key) { 
	$value = trim($value); 
}

function sec2log($seconds) {
	$secPerYear   = 31556926;
	$secPerWeek   = 604800;
	$secPerDay    = 86400;
	$secPerHour   = 3600;
	$secPerMinute = 60;
	
	$y = floor(     $seconds / $secPerYear );
	$w = floor(    ($seconds % $secPerYear) / $secPerWeek );
	$d = floor(   (($seconds % $secPerYear) % $secPerWeek) / $secPerDay );
	$h = floor(  ((($seconds % $secPerYear) % $secPerWeek) % $secPerDay) / $secPerHour );
	$m = floor( (((($seconds % $secPerYear) % $secPerWeek) % $secPerDay) % $secPerHour) / $secPerMinute );
	$s = floor( (((($seconds % $secPerYear) % $secPerWeek) % $secPerDay) % $secPerHour) % $secPerMinute );
		
//	$y=sprintf("%02d",$y); 
//	$w=sprintf("%02d",$w); 
	
//	$d=sprintf("%02d",$d); 
//	$h=sprintf("%02d",$h); 
	
	$m=sprintf("%02d",$m); 
	$s=sprintf("%02d",$s);
		
	if( $y != 0 )
		return "{$y}y {$w}w {$d}d {$h}h {$m}m {$s}s";
		
	if( $w != 0 )
		return "{$w}w {$d}d {$h}h {$m}m {$s}s";
		
	if( $d != 0 )
		return "{$d}d {$h}h {$m}m {$s}s";
		
	return "{$h}h {$m}m {$s}s";
}

// Quote variable to make safe
function quote_smart($value) {
	if (get_magic_quotes_gpc()) // Stripslashes
		$value = stripslashes($value);
	if (!is_numeric($value)) // Quote if not integer
		$value = "'" . mysql_real_escape_string($value) . "'";
	return $value;
}

function microtime_float() {
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}

class BF2Stats {
	
	var $player_id;
	var $stats;
	var $awards;
	var $leaderboard;
	
	var $db_link;
	var $prefix;
	var $stats_table;
	var $data_table;
	var $use_db;
	
	var $alog = array();
	var $qlog = array();
	var $errors;
	var $total_time = 0;
		
	function BF2Stats() {
		if( !@include('./BF2Stats-keys.php') )
			die("I could not locate the file 'BF2Stats-keys.php' and without it this stats system will not run.");
			
		if( !@include('./BF2Stats-config.php') ) {
			$this->log("I could not locate the file 'BF2Stats-config.php'. A default one comes with the package. Just edit, rename, and upload it.");
			$this->debug = true;
			$this->useFileFunction = true;
			$this->prefix = "bf2s_";
			global $resources_dir, $resources_http;
			$resources_dir  = './resources';	
			$resources_http  = '/resources';	
		}
		
		$this->stats_table = $this->prefix . 'stats';
		$this->data_table  = $this->prefix . 'data';
		
		if( !is_numeric($this->refresh_every_minutes) ) 
			$this->refresh_every_minutes = 60;
		
		$this->use_db = $this->useMySQL($this->db_name, $this->db_user, $this->db_pass, $this->db_srvr);
		
		$this->player_id = '';
	}
	
	function log($msg, $err=false) {
		$this->alog[] = $msg;
		if($err) $this->errors .= "$msg<br />";
	}
	
	function query($q) {
		$time_start = microtime_float();
		$res = mysql_query($q);
		$time_end = microtime_float();
		
		$time = $time_end - $time_start;
		$this->total_time += $time ;
		$this->qlog[] = "Query($time): $q";
		
		return $res;
	}
		
	function getData($url) { // get data from a URL using either file() or CURL
		$this->log("getData(): url == $url");

		if( function_exists('file') && function_exists('fopen') && $this->useFileFunction ) { // try file() first
			$this->log("getData(): useFileFunction");
			$raw = @file($url);
		}
			
		if( !$raw ) { // either there was no function, or it failed -- try curl
			$this->log("getData(): file() failed or disabled, trying CURL");
			$curl_handle = curl_init();
			curl_setopt($curl_handle, CURLOPT_URL, $url);
			curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 1);
			curl_setopt($curl_handle, CURLOPT_TIMEOUT, 10);
			$raw = curl_exec($curl_handle);
			$err = curl_error($curl_handle);
			if( $err != '' ) {
				$this->log("getData(): CURL failed: ");
				$this->log("$err",1);
				return false;
			}
			$raw = explode("\n",trim($raw));
			curl_close($curl_handle);
		}
		
		if( !$raw ) // still nothing, forgetd a'bout it
			return false;
		
		// trim it up!
		
		@array_walk($raw, 'file_trim');
		
		return $raw;
		
	}
	
	function findPlayer($nick, $where='a') {
		$this->log("Finding $nick");

global $asp;
$url = $asp . '/searchforplayers.aspx?where=' . $where . '&sort=a&pos=' . $p . '&before=0&after=9999&nick=' . urlencode($nick);

		$this->log("Loading search results...");
		$raw_player = $this->getData( $url );
		
		if( !$raw_player ) { // bad fetch or no results 
			$this->log("Error loading file: $url",1);
			return false;
		}
		
		if( count($raw_player) <= 5 ) { // bad fetch or no results 
			$this->log("No Results. Try a different query.",1);
			return false;
		}
		
		if( !$results = $this->parseRaw( $raw_player ) ) 
			return false;
	
		return $results;
	}
	
	function printLog() {
		echo "<b>ERRORS:</b>\n";
		echo "$this->errors\n";
			
		echo "<b>LOG:</b>\n";
		foreach( $this->alog as $message ) 
			echo "$message\n";
		
		echo "\n<b>QUERIES ($this->total_time):</b>\n";
		foreach( $this->qlog as $message ) 
			echo "$message\n";
	}
	
	function parseRaw($data) {
		if( !$data ) {
			$this->log("No data passed",1);
			return false;
		}
	
		if( substr($data[0], 0, 1) == 'E' ) {
			$this->log("Error loading data: $data[0]",1);
			return false;
		}
	
		// get raw keys
		$key_raw = array_slice($data, 3, 1);
		
		// get col raw
		$end = count($data)-5;
		$col_raw = array_slice($data, 4, $end);
		
		// clean the keys
		$keys = array();
		$keyz = explode("\t",$key_raw[0]);
		foreach( $keyz as $key ) {
			if( trim($key) != 'H' )
				$keys[] = trim($key);
		}
		
		// get key -> cols
		$return = array();
		foreach( $col_raw as $indy ) {
		
			$colz = explode("\t",$indy);
			$cols = array();
			foreach( $colz as $col ) {
				if( trim($col) != 'D' )
					$cols[] = trim($col);
			}
			
			$return[] = array_combine($keys, $cols);
		}
		
		return $return;
	}
	
	function useMySQL($db_name, $db_user, $db_pass, $db_server) { // establish mysql connection to store/retreive stats from.
		
		if( $db_name == '' || $db_user == '' || $db_pass == '' || $db_server == '' ) {
			$this->log("MySQL unavailable, no stats will be stored for local retreival.");
			return false;
		}
		
		$this->db_link = @mysql_pconnect($db_server, $db_user, $db_pass);
		$selected = @mysql_select_db($db_name, $this->db_link);
		
		if( !$this->db_link ) {
			$this->log("Could not connect to the supplied MySQL server, no stats will be stored for local retreival.");
			return false;
		} else if( !$selected ) {
			$this->log("Could not select the supplied MySQL database name, no stats will be stored for local retreival.");
			return false;
		} else {
			
			$stats_query = "CREATE TABLE $this->stats_table (`update_time` INT NOT NULL, `awards` TEXT NOT NULL, ";
								
			foreach( $this->statsKey as $k => $v ) {
				if(  $v['type'] == 'N' || $v['type'] == 'E' ) {
					$stats_query .= "`$k` BIGINT NOT NULL, ";
				} else {
					$stats_query .= "`$k` VARCHAR( 100 ) NOT NULL, ";
				}
			}
				
			$stats_query .= "INDEX ( `nick` ), INDEX ( `bksk` ), INDEX ( `scor` ), UNIQUE ( `pid` ) ) TYPE = MYISAM";
			
			$data_query = "
			CREATE TABLE `$this->data_table` (
			`stat` VARCHAR( 100 ) NOT NULL ,
			`data` TEXT NOT NULL ,
			`pid` VARCHAR( 100 ) NOT NULL ,
			`nick` VARCHAR( 100 ) NOT NULL ,
			`update_time` INT NOT NULL ,
			UNIQUE (`stat`)
			)";
			
			$st = $this->maybeAddTable($this->stats_table, $stats_query);
			$dt = $this->maybeAddTable($this->data_table, $data_query);
			
			if( $st == false || $dt == false ) 
				return false;
				
			return true;
			
		}
		
	}
	
	function maybeAddTable($table, $add_query) {
		// check to see if our main stats table is there or not
		if( mysql_num_rows($this->query("SHOW TABLES LIKE '" . $table . "'"))==1) {
			// connection made and table exists
			$this->log("MySQL table ($table) is ready to go.");
			return true;
		} else {
			// connection made and table DOES NOT exist, attempt to creat it
			$this->log("Table ($table) does not exist...");
			
			$result = $this->query($add_query);
			if( $result ) {
				$this->log("...Table ($table) succesfully added.");
				return true;
			} else {
				$this->log('...Table ($table) addition failed: ' . mysql_error() . ' -- Whole query: ' . $add_query);
				return false;
			}
		}
	}
	
	
	function getURLStats() { // get stats straight from website
		if( !$this->player_id ) return false;
		
        //$info = "per*,cmb*,twsc,cpcp,cacp,dfcp,kila,heal,rviv,rsup,rpar,tgte,dkas,dsab,cdsc,rank,cmsc,kick,kill,deth,suic,ospm,klpm,klpr,dtpr,bksk,wdsk,bbrs,tcdr,ban,dtpm,lbtl,osaa,vrk,tsql,tsqm,tlwf,mvks,vmks,mvn*,vmr*,fkit,fmap,fveh,fwea,wtm-,wkl-,wdt-,wac-,wkd-,vtm-,vkl-,vdt-,vkd-,vkr-,atm-,awn-,alo-,abr-,ktm-,kkl-,kdt-,kkd-";
        //$info = "per*,cmb*,twsc,cpcp,cacp,dfcp,kila,heal,rviv,rsup,rpar,tgte,dkas,dsab,cdsc,rank,cmsc,kick,kill,deth,suic,ospm,klpm,klpr,dtpr,bksk,wdsk,bbrs,tcdr,ban,dtpm,lbtl,osaa,vrk,tsql,tsqm,tlwf,mvks,vmks,mvn*,vmr*,fkit,fmap,fveh,fwea,wtm-,wkl-,wdt-,wac-,wkd-,vtm-,vkl-,vdt-,vkd-,vkr-,atm-,awn-,alo-,abr-,ktm-,kkl-,kdt-,kkd-,mng-,mbs-,abs-,aws-,tkills,tdmg,tvdmg,vac-";
        //$info = "ban,bbrs,bksk,bmap,cacp,cdsc,cmsc,cpcp,deth,dfcp,dkas,dsab,dtpm,dtpr,fkit,fmap,fveh,fwea,heal,jond,kick,kila,kill,klpm,klpr,klsc,loss,mode0,mode1,mode2,osaa,ospm,pkas,rank,rpar,rsup,rviv,scor,smoc,suic,tcdr,tsql,tsqm,tlwf,tgte,time,topr,tvcr,twsc,wdsk,wins,lbtl,vacc,tkil,tdmg,tvdm,vrk,mvns,mvrs,mvks,vmns,vmrs,vmks,abr-,awr-,alo-,atm-,awn-,kdt-,kkd-,kkl-,ktm-,mbr-,mcm-,mic-,mls-,mtm-,mwn-,svr-,vdt-,vkl-,vkr-,vtm-,vac-,vkd-,wac-,wdt-,wkl-,wtm-,wkd-,mvn*,vmr*,all*,ar*-,-ar*,brd*,cdr*,cmb*,fav*,kt*-,-kt*,mp*-,-mp*,per*,pif*,st*-,-st*,sv*-,-sv*,svr*,tem*,vh*-,-vh*,wp*-,-wp*";

$info = 'per*,cmb*,twsc,cpcp,cacp,dfcp,kila,heal,rviv,rsup,rpar,tgte,dkas,dsab,cdsc,rank,cmsc,kick,kill,deth,suic,ospm,klpm,klpr,dtpr,bksk,wdsk,bbrs,tcdr,ban,dtpm,lbtl,osaa,vrk,tsql,tsqm,tlwf,mvks,vmks,mvn*,vmr*,fkit,fmap,fveh,fwea,wtm-,wkl-,wdt-,wac-,wkd-,vtm-,vkl-,vdt-,vkd-,vkr-,atm-,awn-,alo-,abr-,ktm-,kkl-,kdt-,kkd-,mng-';
global $asp;

		if( is_numeric($this->player_id) ) {
$url = $asp . '/getplayerinfo.aspx?pid=' . $this->player_id . '&info=' . $info;
		} else {
$url = $asp . '/getplayerinfo.aspx?nick='. urlencode($this->player_id) . '&info=' . $info;
		}
		
		$this->log("Retrieving stats directly from website...");
		$raw_stats = $this->getData($url);
		if( !$raw_stats ) {
			$this->log("Could not retrieve stats from the server...probably too busy.",1);
			return false;
		}
		$this->log("...successful.");
		
		if( !$parsed_stats = $this->parseRaw($raw_stats) )
			return false;
		
		$freshness_date = explode("\t", $raw_stats[2]);
		$parsed_stats[0]['asof'] = trim($freshness_date[1]);
		
		if( $parsed_stats[0]['pid'] == "-1" || !$parsed_stats[0]['pid'] ) {
			$this->removeMySQLStats();
			$this->log("Invalid Player ID",1);
			return false;
		}
		if( $parsed_stats[0]['scor'] == "0" || !$parsed_stats[0]['scor'] ) {
			$this->removeMySQLStats();
			$this->log("Go play on a ranked server before checking your stats.",1);
			return false;
		}
		
		$this->stats = $parsed_stats[0];
		
		
		
		
		$this->log("Retrieving awards directly from website...");
		$raw_awards = $this->getData($asp . "/getawardsinfo.aspx?pid=" . $this->getStat('pid'));
		if( !$raw_awards ) {
			$this->log("Could not retrieve awards from the server...probably too busy.",1);
			return false;
		}
		$this->log("...successful.");
		
		if( $parsed_awards = $this->parseRaw($raw_awards) ) {
		
			foreach($parsed_awards as $key => $award_data)
				$parsed_awards[$key]['type'] = substr($award_data['award'], 0, 1);
				
			$this->awards = $parsed_awards;
			
		}
		
		
		if( $this->use_db ) // keep the stats around if possible
			$this->storeMySQLStats();
		
		$this->log("Stats/Awards parsed");
		return true;
	}
	
	function removeMySQLStats() {
	
		if( is_numeric($this->player_id) ) {
			$where = "pid='" . $this->player_id . "'";
		} else {
			$where = "nick='" . $this->player_id . "'";
		}
		
		$delete_query = "DELETE FROM $this->stats_table WHERE $where LIMIT 1";
		$results = $this->query($delete_query);
		
		$rows = mysql_affected_rows();
		if( $rows == -1 ) {
			$this->log("Player not in the MySQL DB, thus not deleted. Query: " . $delete_query);
		} else if( $rows  == 1 ) {
			$this->log("Player removed from the MySQL DB. Query: " . $delete_query);
		} else {
			$this->log("Player<b>s</b> ($rows) removed from the MySQL DB?? Query: " . $delete_query);
		}
		
	}
	
	function getMySQLStats() { // get stats from mysql cache
		
		if( !$this->use_db )
			return false;
		
		if( is_numeric($this->player_id) ) {
			$where = "pid='" . $this->player_id . "'";
		} else {
			$where = "nick='" . $this->player_id . "'";
		}
		
		$select_query = "SELECT * FROM $this->stats_table WHERE $where ";
		$results = $this->query($select_query);
		
		if( mysql_num_rows($results) <= 0 ) {
			$this->log("No stats are in the MySQL DB. Query: " . $select_query);
			return false;
		}
		
		$row = mysql_fetch_assoc($results);
		$elapsed_time = time() - $row['update_time'];
		
		if( $elapsed_time > 60 * $this->refresh_every_minutes ){
			$this->log("Data was older than maximum limit(max=" . 60 * $this->refresh_every_minutes .  ")(age=$elapsed_time).");
			return false;
		}
		
		$this->awards = unserialize(gzuncompress(base64_decode($row['awards'])));
		$this->stats  = $row;
		
		if( !$this->stats ) {
			$this->log("Stats didn't load from MySQL.");
			return false;
		} 
		
		$this->log("Stats/Awards retreived from the MySQL DB.");
		return true;
	}
	

	function storeMySQLStats() {
		if( !$this->stats ) {
			$this->log("Can't store stats yet: call loadStats() first.");
			return false;
		} 
		$this->log("Saving stats to MySQL DB...");
		
		$s_awards = base64_encode(gzcompress(serialize($this->awards)));
		
		$set = "`update_time`=(".time()."), `awards`=(" . quote_smart($s_awards) . "), ";
		
		foreach( $this->statsKey as $k => $v ) {
			$stat = $this->stats[$k];
			if(  $v['type'] == 'N' || $v['type'] == 'E' ) {
				$set .= "`$k`=($stat), ";
			} else {
				$set .= "`$k`=('$stat'), ";
			}
		}
		
		$set = substr($set, 0, -2);
		
		$update_query = "UPDATE $this->stats_table SET $set WHERE `pid`=" . $this->stats['pid'] . " LIMIT 1";
		$u_results = $this->query($update_query);
			
		if( mysql_affected_rows() != 1  ){
			$this->log("Updating stats in the MySQL DB failed: " . mysql_error());
			
			$insert_query = "INSERT INTO $this->stats_table SET $set";
			$i_results = $this->query($insert_query);
			if( mysql_affected_rows() != 1  ){
				$this->log("Inserting stats into the MySQL DB failed: " . mysql_error());
				return false;
			}
		}
		
		$this->log("Stats saved in the MySQL DB.");
		return true;
	}
	
	function loadStats($pid) { // returns true/false based on stat retrieval.
		
		$this->player_id = urldecode($pid);
		unset($this->stats);
		
		if( isset($this->allowedPID) && $this->allowedPID != '' ) {
			$allowedPID = explode(',', $this->allowedPID);
			if( !in_array($this->player_id, $allowedPID) ) {
				$this->removeMySQLStats();
				$this->log("You may only look up stats for certain players on this site, and $this->player_id is not one of them. Sorry.",1);
				return false;
			}
		}
		
		if( isset($this->bannedPID) && $this->bannedPID != '' ) {
			$bannedPID = explode(',', $this->bannedPID);
			if( in_array($this->player_id, $bannedPID) ) {
				$this->removeMySQLStats();
				$this->log("This Player ($this->player_id) has been banned on this site. Sorry.",1);
				return false;
			}
		}
		
		if( !$this->getMySQLStats() ) { // try to get stats from db first
			$this->log("loadStats(): mysql load failed");
			// mysql failed (or was out of date), try URL
			if( !$this->getURLStats() ) {
				$this->log("loadStats(): URL load failed");
				// failed -- couldn't load URL, get old mysql data
				$temp = $this->refresh_every_minutes; // hold orginal
				$this->refresh_every_minutes = 9999;  // set to way high
				if( !$this->getMySQLStats() ) { // get oldies
					$this->log("loadStats(): mysql -age unrestrict- load failed");
				}
				$this->refresh_every_minutes = $temp; // reset original
			}
			
		}
		
		if( !$this->stats ) // still no stats, return a failure.
			return false;
		
        /*

		if( $this->stats['atm-0'] > $this->stats['atm-1'] && $this->stats['atm-0'] > $this->stats['atm-2'] )

			$farm = 0;

		if( $this->stats['atm-1'] > $this->stats['atm-0'] && $this->stats['atm-1'] > $this->stats['atm-2'] )

			$farm = 1;

		if( $this->stats['atm-2'] > $this->stats['atm-0'] && $this->stats['atm-2'] > $this->stats['atm-1'] )

			$farm = 2;

        */

        // added by MrNiceGuy for SF stats

        if( $this->stats['atm-0'] > $this->stats['atm-1'] && $this->stats['atm-0'] > $this->stats['atm-2'] && $this->stats['atm-0'] > $this->stats['atm-3'] && $this->stats['atm-0'] > $this->stats['atm-4'] && $this->stats['atm-0'] > $this->stats['atm-5'] && $this->stats['atm-0'] > $this->stats['atm-6'] && $this->stats['atm-0'] > $this->stats['atm-7'] && $this->stats['atm-0'] > $this->stats['atm-8'] )

			$farm = 0;

		if( $this->stats['atm-1'] > $this->stats['atm-0'] && $this->stats['atm-1'] > $this->stats['atm-2'] && $this->stats['atm-1'] > $this->stats['atm-3'] && $this->stats['atm-1'] > $this->stats['atm-4'] && $this->stats['atm-1'] > $this->stats['atm-5'] && $this->stats['atm-1'] > $this->stats['atm-6'] && $this->stats['atm-1'] > $this->stats['atm-7'] && $this->stats['atm-1'] > $this->stats['atm-8'] )

			$farm = 1;

		if( $this->stats['atm-2'] > $this->stats['atm-0'] && $this->stats['atm-2'] > $this->stats['atm-1'] && $this->stats['atm-2'] > $this->stats['atm-3'] && $this->stats['atm-2'] > $this->stats['atm-4'] && $this->stats['atm-2'] > $this->stats['atm-5'] && $this->stats['atm-2'] > $this->stats['atm-6'] && $this->stats['atm-2'] > $this->stats['atm-7'] && $this->stats['atm-2'] > $this->stats['atm-8'] )

			$farm = 2;

        if( $this->stats['atm-3'] > $this->stats['atm-0'] && $this->stats['atm-3'] > $this->stats['atm-1'] && $this->stats['atm-3'] > $this->stats['atm-2'] && $this->stats['atm-3'] > $this->stats['atm-4'] && $this->stats['atm-3'] > $this->stats['atm-5'] && $this->stats['atm-3'] > $this->stats['atm-6'] && $this->stats['atm-3'] > $this->stats['atm-7'] && $this->stats['atm-3'] > $this->stats['atm-8'] )

			$farm = 3;

		if( $this->stats['atm-4'] > $this->stats['atm-0'] && $this->stats['atm-4'] > $this->stats['atm-1'] && $this->stats['atm-4'] > $this->stats['atm-2'] && $this->stats['atm-4'] > $this->stats['atm-3'] && $this->stats['atm-4'] > $this->stats['atm-5'] && $this->stats['atm-4'] > $this->stats['atm-6'] && $this->stats['atm-4'] > $this->stats['atm-7'] && $this->stats['atm-4'] > $this->stats['atm-8'] )

			$farm = 4;

        if( $this->stats['atm-5'] > $this->stats['atm-0'] && $this->stats['atm-5'] > $this->stats['atm-1'] && $this->stats['atm-5'] > $this->stats['atm-2'] && $this->stats['atm-5'] > $this->stats['atm-3'] && $this->stats['atm-5'] > $this->stats['atm-4'] && $this->stats['atm-5'] > $this->stats['atm-6'] && $this->stats['atm-5'] > $this->stats['atm-7'] && $this->stats['atm-5'] > $this->stats['atm-8'] )

			$farm = 5;

        if( $this->stats['atm-6'] > $this->stats['atm-0'] && $this->stats['atm-6'] > $this->stats['atm-1'] && $this->stats['atm-6'] > $this->stats['atm-2'] && $this->stats['atm-6'] > $this->stats['atm-3'] && $this->stats['atm-6'] > $this->stats['atm-4'] && $this->stats['atm-6'] > $this->stats['atm-5'] && $this->stats['atm-6'] > $this->stats['atm-7'] && $this->stats['atm-6'] > $this->stats['atm-8'] )

            $farm = 6;

        if( $this->stats['atm-7'] > $this->stats['atm-0'] && $this->stats['atm-7'] > $this->stats['atm-1'] && $this->stats['atm-7'] > $this->stats['atm-2'] && $this->stats['atm-7'] > $this->stats['atm-3'] && $this->stats['atm-7'] > $this->stats['atm-4'] && $this->stats['atm-7'] > $this->stats['atm-5'] && $this->stats['atm-7'] > $this->stats['atm-6'] && $this->stats['atm-7'] > $this->stats['atm-8'] )

            $farm = 7;

        if( $this->stats['atm-8'] > $this->stats['atm-0'] && $this->stats['atm-8'] > $this->stats['atm-1'] && $this->stats['atm-8'] > $this->stats['atm-2'] && $this->stats['atm-8'] > $this->stats['atm-3'] && $this->stats['atm-8'] > $this->stats['atm-4'] && $this->stats['atm-8'] > $this->stats['atm-5'] && $this->stats['atm-8'] > $this->stats['atm-6'] && $this->stats['atm-8'] > $this->stats['atm-7'] )

            $farm = 8;
		
		$this->stats['farm'] = $farm;
		
		return true;
	}
	
	function stat($stat) {
		echo $this->getStat($stat);
	}
	
	function getStat($stat, $raw=false) {
		$stat = trim($stat);
		
		if( !$this->stats ) {
			$this->log("No stats have been queried yet -- call loadStats('pid') first.");
			return false;
		} 
		
		if( !isset($this->stats[$stat]) ) {
			$this->log("No stat by the code '$stat' exists ... assuming 'n/a'.");
			return "n/a";
		}
		
		$value = $this->stats[$stat];
		
		if($raw) 
			return $value;
		
		switch ($this->statsKey[$stat]['type']) {
			
			case "E":
				$value = sec2log($value);
				break;
				
			case "T":

$value = date('F jS, Y @ g:i:s A', $value);
				#$value = date("F j, Y, g:i a", $value);

				break;
				
			case "%":
				$value = $value . "%";
				break;
				
		}

if ($value == '') {$value = 0;}

		return $value;
	
	}
	
	// Dealing with LeaderBoards
	
	function loadLeaderboard() {
	
		if( $this->use_db ) {
			// load the leaderboard from DB
			if( !$this->getMySQLLeaderboard() ) $this->getURLLeaderboard();
		} else {
			$this->getURLLeaderboard();
		}
		
		if( !$this->leaderboard )
			return false;
			
		return true;
	
	}
	
	function getMySQLLeaderboard() {
	
		$results = $this->query("SELECT * FROM $this->data_table WHERE stat = 'leader-board'");
		
		if( mysql_num_rows($results) <= 0 ) {
			$this->log("No leaderboard are in the MySQL DB.");
			return false;
		}
		
		$row = mysql_fetch_assoc($results);
		$elapsed_time = time() - $row['update_time'];
		
		if( $elapsed_time > 60 * $this->refresh_every_minutes ){
			$this->log("Leaderboard data was older than maximum limit(max=" . 60 * $this->refresh_every_minutes .  ")(age=$elapsed_time).");
			return false;
		}

		$this->leaderboard = unserialize(gzuncompress(base64_decode($row['data'])));
		
		if( !$this->leaderboard ) {
			$this->log("Leaderboard didn't load correctly from MySQL: ". $row['data']);
			return false;
		} 
		
		$this->log("Leaderboard retrieved from the MySQL DB.");
		return true;
	
	}
	
	function getURLLeaderboard() {

global $asp, $topnum;
$url = $asp . "/getleaderboard.aspx?type=score&id=overall&after=" . $topnum;

		$raw_leaderboard = $this->getData($url);
		$this->log("Retrieving leaderboard directly from website...");
		if( !$raw_leaderboard ) {
			$this->log("...failed.");
			$this->log("Could not retrieve leaderboard from the server...probably too busy.",1);
			return false;
		}
		$this->log("...successful.");
		
		if( substr($raw_leaderboard[0], 0, 1) == 'E' ) {
			$this->log("Error retrieving leadboard: Error #" . $raw_leaderboard[0],1);
			return false;
		}
		
		$c = count($raw_leaderboard)-1;
		for($i=4; $i<$c; $i++) {
			
			list(, $n, $pid, $nick, $score, $totaltime, $playerrank, $countrycode) = explode("\t",$raw_leaderboard[$i]);
			$this->leaderboard[$n] = array(
									"pid" => trim($pid),
									"nick"  => trim($nick),
									"score"  => trim($score),
									"totaltime"  => sec2log(trim($totaltime)),
									"playerrank"  => trim($playerrank),
									"countrycode"  => trim($countrycode)
									);
		}
		
		if( $this->use_db ) // keep the board around if possible
			$this->storeMySQLLeaderboard();
			
		return true;
		
	}
	
	function storeMySQLLeaderboard() {
		if( !$this->use_db ){
			$this->log('storeMySQLLeaderboard() : no db access');
			return false;
		}
	
		$s_leaderboard  = base64_encode(gzcompress(serialize($this->leaderboard)));

		$set = "`update_time`=(".time()."), `data`=(" . quote_smart($s_leaderboard) . "), `stat`=('leader-board')";
		
		$update_query = "UPDATE $this->data_table SET $set WHERE `stat`='leader-board' LIMIT 1";
		$u_results = $this->query($update_query);
			
		if( mysql_affected_rows() != 1 ){
			$this->log("Updating leaderboard in the MySQL DB failed: " . mysql_error());
			
			$insert_query = "INSERT INTO $this->data_table SET $set";
			$i_results = $this->query($insert_query);
			
			if( mysql_affected_rows() != 1 ){
				$this->log("Inserting leaderboard in the MySQL DB failed: " . mysql_error());
				return false;
			}
			
		}
		
		$this->log("Leaderboard saved in the MySQL DB.");
		return true;
	}

}

?>
