<?php require('header.php'); ?>


<div align="center">

<?php if ($logo != '') {echo $logo . '<br><br>';} ?>
<table border="0" cellspacing="0" cellpadding="10" class="title">
<tr><td>
<?php echo '&#171;&nbsp;' . $titletext . '&nbsp;&#187'; ?>
</tr></td>
</table><br><br>

<table border="0" cellspacing="10" cellpadding="0">
 <tr align="center">
  <td><a href="http://ubar.bf2s.com/ribbons.php" target="_blank"><img src="<?php echo $resources_dir; ?>/graphics/awards/ribbons/3242303.png" width="96" height="96" border=0><br>Ribbons</a></td>
  <td><a href="http://ubar.bf2s.com/badges.php" target="_blank"><img src="<?php echo $resources_dir; ?>/graphics/awards/badges/1190601_2.png" width="96" height="96" border=0><br>Badges</a></td>
  <td><a href="http://ubar.bf2s.com/medals.php" target="_blank"><img src="<?php echo $resources_dir; ?>/graphics/awards/medals/2020913.png" width="96" height="96" border=0><br>Medals</a></td>
  <td><a href="http://ubar.bf2s.com/ranks.php" target="_blank"><img src="<?php echo $resources_dir; ?>/graphics/ranks/rank_3.png" width="96" height="96" border=0><br>Ranks</a></td>
  <td><a href="http://wiki.bf2s.com/weapons/unlocks/" target="_blank"><img src="<?php echo $resources_dir; ?>/graphics/unlocks/g36e.png" width="96" height="96" border=0><br>Unlocks</a></td>
  <td><a href="http://wiki.bf2s.com/classes/" target="_blank"><img src="<?php echo $resources_dir; ?>/graphics/kits/kit_6.jpg" width="96" height="96" border=0><br>Kits</a></td>
 </tr>
</table><br>

<table border="0" cellspacing="0" cellpadding="0">
 <tr>
  <td class="search">
   <form action="player.php" method="get">
    Player ID: <br><input type="text" name="pid">&nbsp;<input type="submit" value="Find">
   </form>
  </td>
 </tr>
 <tr>
  <td class="search">
   <form action="search.php" method="get">
    Player Name:<br><input type="text" name="search_pid" value="<?php echo $_GET['search_pid'] ?>">
    <select name="searchAt">
     <option value="a"<?php if( $_GET['searchAt'] == 'a' ) echo ' selected="selected"';?>>partial match</option>
     <option value="b"<?php if( $_GET['searchAt'] == 'b' ) echo ' selected="selected"';?>>match at start</option>
     <option value="e"<?php if( $_GET['searchAt'] == 'e' ) echo ' selected="selected"';?>>match at end</option>
     <option value="x"<?php if( $_GET['searchAt'] == 'x' ) echo ' selected="selected"';?>>exact match</option>
    </select>&nbsp;<input type="submit" value="Find">
   </form>
  </td>
 </tr>
</table><br><br>

	<?php if( $stats->loadLeaderboard() ) { ?>

		<table cellspacing="0" cellpadding="5" class="leaderboard">
			<tr>
				<td class="light1" style="padding: 5px" colspan="2" align="left"> &nbsp; <b><?php echo $title; ?> Leaderboard - Top <?php echo $topnum; ?></b></td>
				<td class="light1" align="center"><b>Score</b></td>
				<td class="light1" align="center"><b>Time Played</b></td>
				<td class="light1" align="center"><b>Country</b></td>
			</tr>
			<?php foreach( $stats->leaderboard as $place => $r ) { ?>
			<tr>
				<td align="center" class="light2"><?php echo $place ?></td>
				<td align="left"><img src="<?php echo $resources_dir ?>/graphics/ranks/rank_small_<?php echo $r['playerrank'] ?>.gif" alt="<?php echo $stats->rankKey[$r['playerrank']]['long'] ?>"><a href="player.php?pid=<?php echo $r['pid'] ?>">
<?php
if ($clantag != '') {if (strpos($r['nick'], $clantag) !== false) {echo '<font style="color:' . $clancolor . '">' . htmlspecialchars($r['nick']) . '</font>';}}
else {echo htmlspecialchars($r['nick']);}
?>
</a></td>
				<td align="center"><?php echo $r['score'] ?></td>
				<td align="center"><?php echo $r['totaltime'] ?></td>
				<td align="center"><img src="<?php echo $resources_dir ?>/graphics/flagsmini/<?php echo strtolower($r['countrycode']) ?>.png" alt=" &nbsp; <?php echo $r['countrycode']; ?> &nbsp; "></td>
			</tr>
			<?php } ?>
		</table>
	<?php } ?>

</div>

<?php require('footer.php'); ?>