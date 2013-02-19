<?
ini_set(user_agent,"GameSpyHTTP/1.0"); 

// usefull info
// http://bf2.fun-o-matic.org/index.php/Main_Page

function toZeroOrOne($char) {
if($char == "s") {
return 1;
} else {
return 0;
}
}

if(is_numeric($_GET['pid'])) {
$url = $asp.'/getunlocksinfo.aspx?pid=' . $_GET['pid'];
} else {
$url = $asp.'/getunlocksinfo.aspx?nick=' . $_GET['pid'];
}

if(!($raw_stats = @file($url))) {
 die("error checking for unlocked weapons, maybe the given id/name is wrong or the stats server is too busy");
}

// vanaf 7e element in $raw_stats array staat er info over wapen unlocks
$currentWeaponNumber = 1;

// array maken met als elementen booleans die aangeven of wapens unlocked zijn of niet
while($currentWeaponNumber <= 12) {
$weaponIsUnlocked[$currentWeaponNumber] = toZeroOrOne($raw_stats[$currentWeaponNumber+5]{5});
$currentWeaponNumber++;
}

// array maken met als elementen strings die een korte beschrijving van het wapen geven
$weaponDesc = array('1'=>"
<big><big><big>DAO-12</big></big></big><br><i>
Anti-tank</i><br>
<img src=$resources_dir/graphics/unlocks/dao.png>
",

'2'=>"
<big><big><big>G3</big></big></big><br><i>
Assault</i><br>
<img src=$resources_dir/graphics/unlocks/G3A3.png>
",

'3'=>"
<big><big><big>Jackhammer Mk3A1</big></big></big><br><i>
Engineer</i><br>
<img src=$resources_dir/graphics/unlocks/Jackh.png>
",

'4'=>"
<big><big><big>L85A1</big></big></big><br><i>
Medic</i><br>
<img src=$resources_dir/graphics/unlocks/sa80.png>
",

'5'=>"
<big><big><big>G36C</big></big></big><br><i>
Spec-ops</i><br>
<img src=$resources_dir/graphics/unlocks/g36c.png>
",

'6'=>"
<big><big><big>PKM</big></big></big><br><i>
Support</i><br>
<img src=$resources_dir/graphics/unlocks/pkm.png>
",

'7'=>"
<big><big><big>M95</big></big></big><br><i>
Sniper</i><br>
<img src=$resources_dir/graphics/unlocks/m95.png>
",

'8'=>"
<big><big><big>FN2000</big></big></big><br><i>
Assault(SF)</i><br>
<img src=$resources_dir/graphics/unlocks/fn2000.png>
",

'9'=>"
<big><big><big>MP-7</big></big></big><br><i>
Engineer(SF)</i><br>
<img src=$resources_dir/graphics/unlocks/mp7.png>
",

'10'=>"
<big><big><big>G36E</big></big></big><br><i>
Medic(SF)</i><br>
<img src=$resources_dir/graphics/unlocks/g36e.png>
",

'11'=>"
<big><big><big>FN SCAR-L</big></big></big><br><i>
Spec-ops(SF)</i><br>
<img src=$resources_dir/graphics/unlocks/fnscarl.png>
",

'12'=>"
<big><big><big>MG36</big></big></big><br><i>
Support(SF)</i><br>
<img src=$resources_dir/graphics/unlocks/mg36.png>
");

?>
