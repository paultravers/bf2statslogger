<?php 
$page_title = "Find a Player";
require('header.php'); 


echo '<div align="center">';

if( $_GET['search_pid'] ) { 

	echo '<h1>Find Player: "' . $_GET['search_pid'] . '"</h1>';
	
	$players = $stats->findPlayer($_GET['search_pid'], $_GET['searchAt']);
	
	if( $players ) {
	
		echo "<ol>";
		foreach( $players as $r ) echo "<li><a href=\"player.php?pid=$r[pid]\">$r[nick]</a></li>";
		echo "</ol>";
		echo "Not finding your nick? Try to get more specific.<br>The BF2 stat servers only return 100 matches in a set.<br>Also, players with a score of 0 are exlcuded.";

	} else {
	
		echo "<p>" . $stats->error . "</p>";
		
	}
	
} else {

	echo "<h1>Find Player</h1>";
	
}

?>
<br><br>
   <form action="search.php" method="get">
    Player Name:<br><input type="text" name="search_pid" value="<?php echo $_GET['search_pid'] ?>">
    <select name="searchAt">
     <option value="a"<?php if( $_GET['searchAt'] == 'a' ) echo ' selected="selected"';?>>fuzzy match</option>
     <option value="b"<?php if( $_GET['searchAt'] == 'b' ) echo ' selected="selected"';?>>match start</option>
     <option value="e"<?php if( $_GET['searchAt'] == 'e' ) echo ' selected="selected"';?>>match end</option>
     <option value="x"<?php if( $_GET['searchAt'] == 'x' ) echo ' selected="selected"';?>>exact match</option>
    </select>&nbsp;<input type="submit" value="Find">
   </form><br>
<input type="button" value="Back" onclick="history.back();">
<hr width="600">
</div>

<?php require('footer.php'); ?>