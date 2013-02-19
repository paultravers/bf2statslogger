<?php
$page_title = "Player: " . $_GET['pid'];
require('header.php');


if ($stats->loadStats($_GET['pid'])) { ?>

<div align="center">

<table border="0" cellpadding="10" cellspacing="0" class="playertop">
 <tr>
  <td align="center">
   <img src="<?php echo $resources_dir ?>/graphics/ranks/rank_<?php $stats->stat('rank') ?>.png" height="83" width="83">
   <?php htmlspecialchars($stats->stat('nick')) ?>, <?php echo $stats->rankKey[$stats->getStat('rank')]['long'] ?>
   &nbsp; <img src="<?php echo $resources_dir ?>/graphics/flags/<?php echo $stats->stat('mng-24') ?>.png" height="32" width="32">
  </td>
 </tr>
</table><br>
<table border="0" cellpadding="5" cellspacing="0" class="player">
 <tr valign="top">
  <td class="fav">
   <img src="<?php echo $resources_dir ?>/graphics/soldiers/<?php echo $stats->stat('farm') ?>_<?php $stats->stat('fkit') ?>_<?php $stats->stat('fwea') ?>.jpg" alt="<?php htmlspecialchars($stats->stat('nick')) ?><br>Army: <?php echo $stats->armyKey[$stats->getStat('farm')] ?><br>Kit: <?php echo $stats->kitKey[$stats->getStat('fkit')] ?><br>Weapon: <?php echo $stats->weaponKey[$stats->getStat('fwea')] ?>" height="280" width="190">
   <table class="fav" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td>
      <img src="<?php echo $resources_dir ?>/graphics/weapons/weapon_<?php $stats->stat('fwea') ?>.jpg" alt="<?php echo $stats->weaponKey[$stats->getStat('fwea')] ?>" height="64" width="64"><br>
      <img src="<?php echo $resources_dir ?>/graphics/vehicles/vehicles_<?php $stats->stat('fveh') ?>.jpg" alt="<?php echo $stats->vehicleKey[$stats->getStat('fveh')] ?>" height="64" width="64"><br>
      <img src="<?php echo $resources_dir ?>/graphics/kits/kit_<?php $stats->stat('fkit') ?>.jpg" alt="<?php echo $stats->kitKey[$stats->getStat('fkit')] ?>" height="64" width="64"><br>
      <img src="<?php echo $resources_dir ?>/graphics/maps/map_<?php $stats->stat('fmap') ?>.jpg" alt="<?php echo $stats->mapKey[$stats->getStat('fmap')] ?>" height="64" width="64">
     </td>
    </tr>
   </table>
  </td>
  <td>
   <table cellpadding="0" cellspacing="0" class="info">
    <tr>
     <td colspan="2" align="center" style="background-color: #222222">
      <b>Player Profile</b>
     </td>
    </tr>
    <tr>
     <td colspan="2" align="center" style="background-color: #3f3f3f">
      <b>Scores</b>
     </td>
    </tr>
    <tr>
     <td align="left">Total</td>
     <td align="right"><?php echo $stats->stat('scor'); ?></td>
    </tr>
    <tr>
     <td align="left">Teamwork</td>
     <td align="right"><?php echo $stats->stat('twsc'); ?></td>
    </tr>
    <tr>
     <td align="left">Combat</td>
     <td align="right"><?php echo $stats->stat('cmsc'); ?></td>
    </tr>
    <tr>
     <td align="left">Commander</td>
     <td align="right"><?php echo $stats->stat('cdsc'); ?></td>
    </tr>
    <tr>
     <td colspan="2" align="center" style="background-color: #3f3f3f">
      <b>Time</b>
     </td>
    </tr>
    <tr>
     <td align="left">Commander</td>
     <td align="right"><?php echo $stats->stat('tcdr'); ?></td>
    </tr>
    <tr>
     <td align="left">Squad Leader</td>
     <td align="right"><?php echo $stats->stat('tsql'); ?></td>
    </tr>
    <tr>
     <td align="left">Squad Member</td>
     <td align="right"><?php echo $stats->stat('tsqm'); ?></td>
    </tr>
    <tr>
     <td align="left">Lone Wolf</td>
     <td align="right"><?php echo $stats->stat('tlwf'); ?></td>
    </tr>
    <tr>
     <td align="left">Total</td>
     <td align="right"><?php echo $stats->stat('time'); ?></td>
    </tr>
   </table>
  </td>
  <td>
   <table cellpadding="0" cellspacing="0" class="info">
    <tr>
     <td colspan="2" align="center" style="background-color: #222222">
      <b>Team Profile</b>
     </td>
    </tr>
    <tr>
     <td colspan="2" align="center" style="background-color: #3f3f3f">
      <b>Capture Points</b>
     </td>
    </tr>
    <tr>
     <td align="left">Captures</td>
     <td align="right"><?php echo $stats->stat('cpcp'); ?></td>
    </tr>
    <tr>
     <td align="left">Assists</td>
     <td align="right"><?php echo $stats->stat('cacp'); ?></td>
    </tr>
    <tr>
     <td align="left">Defends</td>
     <td align="right"><?php echo $stats->stat('dfcp'); ?></td>
    </tr>
    <tr>
     <td colspan="2" align="center" style="background-color: #3f3f3f">
      <b>Teamwork</b>
     </td>
    </tr>
    <tr>
     <td align="left">Kill Assists</td>
     <td align="right"><?php echo $stats->stat('kila'); ?></td>
    </tr>
    <tr>
     <td align="left">Heals</td>
     <td align="right"><?php echo $stats->stat('heal'); ?></td>
    </tr>
    <tr>
     <td align="left">Revives</td>
     <td align="right"><?php echo $stats->stat('rviv'); ?></td>
    </tr>
    <tr>
     <td align="left">Ammos</td>
     <td align="right"><?php echo $stats->stat('rsup'); ?></td>
    </tr>
    <tr>
     <td align="left">Repairs</td>
     <td align="right"><?php echo $stats->stat('rpar'); ?></td>
    </tr>
    <tr>
     <td align="left">Driver Ability</td>
     <td align="right"><?php echo $stats->stat('dsab'); ?></td>
    </tr>
   </table>
  </td>
  <td>
   <table cellpadding="0" cellspacing="0" class="info">
    <tr>
     <td colspan="2" align="center" style="background-color: #222222">
      <b>Combat Profile</b>
     </td>
    </tr>
    <tr>
     <td align="left">Accuracy</td>
     <td align="right"><?php echo $stats->stat('osaa'); ?></td>
    </tr>
    <tr>
     <td colspan="2" align="center" style="background-color: #3f3f3f">
      <b>Kills</b>
     </td>
    </tr>
    <tr>
     <td align="left">Total</td>
     <td align="right"><?php echo $stats->stat('kill'); ?></td>
    </tr>
    <tr>
     <td align="left">Kills/minute</td>
     <td align="right"><?php echo $stats->stat('klpm'); ?></td>
    </tr>
    <tr>
     <td align="left">Kills/round</td>
     <td align="right"><?php echo $stats->stat('klpr'); ?></td>
    </tr>
    <tr>
     <td align="left">Kill Streak</td>
     <td align="right"><?php echo $stats->stat('bksk'); ?></td>
    </tr>
    <tr>
     <td colspan="2" align="center" style="background-color: #3f3f3f">
      <b>Deaths</b>
     </td>
    </tr>
    <tr>
     <td align="left">Total</td>
     <td align="right"><?php echo $stats->stat('deth'); ?></td>
    </tr>
    <tr>
     <td align="left">Deaths/minute</td>
     <td align="right"><?php echo $stats->stat('dtpm'); ?></td>
    </tr>
    <tr>
     <td align="left">Deaths/round</td>
     <td align="right"><?php echo $stats->stat('dtpr'); ?></td>
    </tr>
    <tr>
     <td align="left">Death Streak</td>
     <td align="right"><?php echo $stats->stat('wdsk'); ?></td>
    </tr>
   </table>
  </td>
 </tr>
</table><br>
<table border="0" cellspacing="10" cellpadding="0" width="750">
 <tr>
  <td>
   <table border="0" cellspacing="0" cellpadding="0" class="info">
    <tr>
     <td align="left" style="background-color: #3f3f3f"><b>Map</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Time</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Wins</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Losses</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Best Round</b></td>
    </tr>
    <?php foreach( $stats->mapKey as $n => $name ) { ?>
    <tr>
     <td align="left" nowrap><?php echo $name; ?></td>
     <td align="center" nowrap><?php echo $stats->stat('mtm-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('mwn-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('mls-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('mbs-'.$n); ?></td>
    </tr>
    <?php } ?>
   </table><br>
   <table border="0" cellspacing="0" cellpadding="0" class="info">
    <tr>
     <td align="left" style="background-color: #3f3f3f"><b>Vehicle</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Time</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Kills</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Deaths</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>K/D Ratio</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Road Kills</b></td>
    </tr>
    <?php foreach( $stats->vehicleKey as $n => $name ) { ?>
    <tr>
     <td align="left" nowrap><?php echo $name; ?></td>
     <td align="center" nowrap><?php echo $stats->stat('vtm-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('vkl-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('vdt-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('vkd-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('vkr-'.$n); ?></td>
    </tr>
    <?php } ?>
   </table><br>
   <table border="0" cellspacing="0" cellpadding="0" class="info">
    <tr>
     <td align="center" colspan="2" style="background-color: #3f3f3f"><b>Miscellaneous Stats</b></td>
    </tr>
    <tr>
     <td align="left">First Battle</td>
     <td align="right" nowrap><?php echo $stats->stat('jond'); ?></td>
    </tr>
    <tr>
     <td align="left">Last Battle</td>
     <td align="right" nowrap><?php echo $stats->stat('lbtl'); ?></td>
    </tr>
    <tr>
     <td align="left">Page Updated</td>
     <td align="right" nowrap><?php echo $stats->stat('asof'); ?></td>
    </tr>
    <tr>
     <td align="left">Favorite Victim</td>
     <td align="right"><img src="<?php echo $resources_dir; ?>/graphics/ranks/rank_small_<?php echo $stats->stat('mvrs'); ?>.gif"> <?php echo $stats->stat('mvns'); ?> (<?php echo $stats->stat('mvks'); ?>)</td>
    </tr>
    <tr>
     <td align="left">Worst Enemy</td>
     <td align="right"><img src="<?php echo $resources_dir; ?>/graphics/ranks/rank_small_<?php echo $stats->stat('vmrs'); ?>.gif"> <?php echo $stats->stat('vmns'); ?> (<?php echo $stats->stat('vmks'); ?>)</td>
    </tr>
    <tr>
     <td align="left">Kicked / Banned</td>
     <td align="right"><?php echo $stats->stat('kick'); ?> / <?php echo $stats->stat('ban'); ?></td>
    </tr>
    <tr>
     <td align="left">Wins / Losses</td>
     <td align="right"><?php echo $stats->stat('wins'); ?> / <?php echo $stats->stat('loss'); ?></td>
    </tr>
    <tr>
     <td align="left">Team: Kills / Damage / Vehicle Damage </td>
     <td align="right"><?php echo $stats->stat('tkills'); ?> / <?php echo $stats->stat('tdmg'); ?> / <?php $stats->stat('tvdmg') ?></td>
    </tr>
   </table>
  </td>
  <td valign="top">
   <table border="0" cellspacing="0" cellpadding="0" class="info">
    <tr>
     <td align="left" style="background-color: #3f3f3f"><b>Army</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Time</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Wins</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Losses</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Best Round</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Worst Round</b></td>
    </tr>
    <?php foreach( $stats->armyKey as $n => $name ) { ?>
    <tr>
     <td align="left"><?php echo $name; ?></td>
     <td align="center" nowrap><?php echo $stats->stat('atm-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('awn-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('alo-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('abs-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('aws-'.$n); ?></td>
    </tr>
    <?php } ?>
   </table><br>
   <table border="0" cellspacing="0" cellpadding="0" class="info">
    <tr>
     <td align="left" style="background-color: #3f3f3f"><b>Kit</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Time</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Kills</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Deaths</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>K/D Ratio</b></td>
    </tr>
    <?php foreach( $stats->kitKey as $n => $name ) { ?>
    <tr>
     <td align="left"><?php echo $name; ?></td>
     <td align="center" nowrap><?php echo $stats->stat('ktm-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('kkl-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('kdt-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('kkd-'.$n); ?></td>
    </tr>
    <?php } ?>
   </table><br>
   <table border="0" cellspacing="0" cellpadding="0" class="info">
    <tr>
     <td align="left" style="background-color: #3f3f3f"><b>Weapon</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Time</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Kills</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Deaths</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>K/D Ratio</b></td>
     <td align="center" style="background-color: #3f3f3f"><b>Accuracy</b></td>
    </tr>
    <?php foreach( $stats->weaponKey as $n => $name ) { ?>
    <tr>
     <td align="left"><?php echo $name; ?></td>
     <td align="center" nowrap><?php echo $stats->stat('wtm-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('wkl-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('wdt-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('wkd-'.$n); ?></td>
     <td align="center"><?php echo $stats->stat('wac-'.$n); ?></td>
    </tr>
    <?php } ?>
   </table>
  </td>
 </tr>
</table><br>
<?php if( $stats->awards ) { ?>
<table border="0" cellspacing="0" cellpadding="0" class="awards">
 <tr>
  <td align="center" style="background-color: #3f3f3f" colspan="2"><b>Awards</b></td>
 </tr>

<?php
	foreach( $stats->awards as $data )
	{
		$award = $data['award'];
		$award_name = $data['award'];
		if( $data['type'] == '1' )
		{
			// badges
			$award_name .= "_" . $data['level'];
			$badges .= '<img height="96" width="96" src="' . $resources_dir . '/graphics/awards/badges/' . $award_name . '.png" alt="<big><big><big>' . $stats->awardsKey[$award_name]['name'] . '</big></big></big><br>' . str_replace(array("\n",'"'),'',nl2br($stats->awardsKey[$award_name]['desc'])) . '"> ' . "\n\t";
		} else if( $data['type'] == '2' ) {
			// medals
			$medals .= '<img height="96" width="96" src="' . $resources_dir . '/graphics/awards/medals/' . $award_name . '.png" alt="<big><big><big>' . $stats->awardsKey[$award_name]['name'] . ' x ' . $data['level'] . '</big></big></big><br>' . str_replace(array("\n",'"'),'',nl2br($stats->awardsKey[$award_name]['desc'])) . '"> ' . "\n\t";
		} else if( $data['type'] == '3' ) {
			// ribbons
			$ribbons .= '<img height="96" width="96" src="' . $resources_dir . '/graphics/awards/ribbons/' . $award_name . '.png" alt="<big><big><big>' . $stats->awardsKey[$award_name]['name'] . '</big></big></big><br>' . str_replace(array("\n",'"'),'',nl2br($stats->awardsKey[$award_name]['desc'])) . '"> ' . "\n\t";
		}
	}
?>

 <tr>
  <td align="center"><b>Badges</b></td>
  <td align="left"><?php echo $badges; ?></td>
 </tr>
 <tr>
  <td align="center"><b>Medals</b></td>
  <td align="left"><?php echo $medals; ?></td>
 </tr>
 <tr>
  <td align="center"><b>Ribbons</b></td>
  <td align="left"><?php echo $ribbons; ?></td>
 </tr>
</table>

<?php } else { ?>

<table border="0" cellspacing="0" cellpadding="0" class="awards">
 <tr>
  <td align="center" style="background-color: #3f3f3f" colspan="2"><b>Awards</b></td>
 </tr>
 <tr>
  <td align="center">Badges, Medals, Ribbons</td>
  <td align="center">None yet. Get on that soldier!</td>
 </tr>
</table>

<?php } ?>
<br>

<? include("unlocks.php"); ?>
<table border="0" cellspacing="0" cellpadding="0" class="awards">
 <tr>
  <td align="center" style="background-color: #3f3f3f"><b>Unlocks</b></td>
 </tr>
 <tr>
  <td>
   <?php foreach($weaponIsUnlocked as $number => $unlocked) { ?>
   <img src="<?php echo $resources_dir; ?>/graphics/unlocks/<? echo $number ?>_<? echo $unlocked ?>.png" alt="<? echo $weaponDesc[$number] ?>" align="left">
   <? } ?>
  </td>
 </tr>
</table><br>

</div>

<?php } else { ?>

<div align="center">
<b>Error:</b> <?php echo $stats->error; ?><br><br>
Could not load stats for PID "<?php echo $_GET['pid']; ?>"<br><br>
<input type="button" value="Back" onclick="history.back();">
</div>
<br><hr width="600">

<?php } ?>

<?php require('footer.php'); ?>
