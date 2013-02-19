<?php

/*

 * This work is licensed under the Creative Commons Attribution-NonCommercial-ShareAlike License. 

 * To view a copy of this license, visit http://creativecommons.org/licenses/by-nc-sa/2.5/ 

 * or send a letter to Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.

 *

 * Code Source: http://bf2s.com/

 * Created by Jeff Minard, http://jrm.cc

 * Added ubar criteria to awards and updated for patch 1.03 by Thomas "Hydra_be" Himpe

 * Added Special Forces Awards and updated for patch 1.12 by MrNiceGuy

 */

 

$this->awardsKey = array(

// badges 

"1300002_1" => array("name" => "The 29th Combat Badge", "desc" => "Awarded to 29th personnel."),
"1300002_2" => array("name" => "The 29th Combat Badge", "desc" => "Awarded to 29th personnel."),
"1300002_3" => array("name" => "The 29th Combat Badge", "desc" => "Awarded to 29th personnel."),
"3300000" => array("name" => "The 29th Combat Ribbon", "desc" => "Awarded to 29th personnel."),

"1031105" => array("name" => "The Basic Engineer Combat Badge", "desc" => "Awarded to engineer personnel who have proven themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nCombat Rating: Satisfactory"),

"1031109" => array("name" => "The Basic Sniper Combat Badge", "desc" => "Awarded to sniper personnel who have proven themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nCombat Rating: Satisfactory"),

"1031113" => array("name" => "The Basic Medic Combat Badge", "desc" => "Awarded to medical personnel who have proven themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nCombat Rating: Satisfactory"),

"1031115" => array("name" => "The Basic Spec Ops Combat Badge", "desc" => "Awarded to spec ops personnel who have proven themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nCombat Rating: Satisfactory"),

"1031119" => array("name" => "The Basic Assault Combat Badge", "desc" => "Awarded to assault personnel who have proven themselves during any period the unit was engaged in active combat\n\n

Criteria:\nCombat Rating: Satisfactory"),

"1031120" => array("name" => "The Basic Anti-tank Combat Badge", "desc" => "Awarded to anti-tank personnel who have proven themselves during any period the unit was engaged in active combat\n\n

Criteria:\nCombat Rating: Satisfactory"),

"1031121" => array("name" => "The Basic Support Combat Badge", "desc" => "Awarded to support personnel who have proven themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nCombat Rating: Satisfactory"),

"1031406" => array("name" => "The Basic Knife Combat Badge", "desc" => "Awarded to personnel who have proven themselves with a knife during any period the unit was engaged in active combat\n\n

Criteria:\nWeapon Rating: Satisfactory"),

"1031619" => array("name" => "The Basic Pistol Combat Badge", "desc" => "Awarded to personnel who have proven themselves with a handgun during any period the unit was engaged in active combat\n\n

Criteria:\nWeapon Rating: Satisfactory"),

"1031923" => array("name" => "The Basic Ground Defense Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in a ground defense vehicle.\n\n

Criteria:\nCombat Qualification:  Satisfactory"),

"1032415" => array("name" => "The Basic Explosives Ordinance Badge", "desc" => "Awarded to personnel who have proven themselves with explosive ordinance during any period the unit was engaged in active combat.\n\n

Criteria:\nWeapon Rating: Satisfactory"),

"1190304" => array("name" => "The Basic Command Badge", "desc" => "Awarded on the basis of proven skill in the area of command.\n\n

Criteria:\nCommand Rating: Satisfactory"),

"1190507" => array("name" => "The Basic Engineer Badge", "desc" => "Awarded to engineering personnel on the basis of proven skill in the area of repair.\n\n

Criteria:\nSpecialist Rating: Satisfactory"),

"1190601" => array("name" => "The Basic First Aid Badge", "desc" => "Awarded to medical personnel on the basis of proven skill in the area of field medicine.\n\n

Criteria:\nSpecialist Rating: Satisfactory"),

"1191819" => array("name" => "The Basic Resupply Badge", "desc" => "Awarded to support personnel on the basis of proven skill in the area of ammo resupply.\n\n

Criteria:\nSpecialist Rating: Satisfactory"),

"1220104" => array("name" => "The Basic Air Defense Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in an air defense vehicle.\n\n

Criteria:\nCombat Qualification:  Satisfactory"),

"1220118" => array("name" => "The Basic Armor Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in an armored vehicle.\n\n

Criteria:\nCombat Qualification:  Satisfactory"),

"1220122" => array("name" => "The Basic Aviator Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in an airplane,\n\n

Criteria:\nCombat Qualification:  Satisfactory"),

"1220803" => array("name" => "The Basic Helicopter Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in a helicopter.\n\n

Criteria:\nCombat Qualification:  Satisfactory"),

"1222016" => array("name" => "The Basic Transport Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in a transport vehicle.\n\n

Criteria:\nCombat Qualification:  Satisfactory"),



"1031105_1" => array("name" => "The Basic Engineer Combat Badge", "desc" => "Awarded to engineer personnel who have proven themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 10 kills while an Engineer"),

// engineer SF

"1261105_1" => array("name" => "The Basic Engineer Specialist Combat Badge", "desc" => "Awarded to engineer personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 11 kills while Engineer"),



"1031109_1" => array("name" => "The Basic Sniper Combat Badge", "desc" => "Awarded to sniper personnel who have proven themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 5 kills while a Sniper"),

// sniper SF

"1261109_1" => array("name" => "The Basic Sniper Specialist Combat Badge", "desc" => "Awarded to sniper personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 11 kills while a Sniper "),



"1031113_1" => array("name" => "The Basic Medic Combat Badge", "desc" => "Awarded to medical personnel who have proven themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 10 kills while a Medic"),

// medic SF

"1261113_1" => array("name" => "The Basic Medic Specialist Combat Badge", "desc" => "Awarded to medical personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 11 kills while a Medic "),



"1031115_1" => array("name" => "The Basic Spec Ops Combat Badge", "desc" => "Awarded to spec ops personnel who have proven themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 5 kills while a SpecOp "),

// spec ops SF

"1261115_1" => array("name" => "The Basic Spec Ops Specialist Combat Badge", "desc" => "Awarded to spec ops personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 6 kills while a SpecOp "),



"1031119_1" => array("name" => "The Basic Assault Combat Badge", "desc" => "Awarded to assault personnel who have proven themselves during any period the unit was engaged in active combat\n\n

Criteria:\nIn a round: 5 kills while Assault"),

// assault SF

"1261119_1" => array("name" => "The Basic Assault Specialist Combat Badge", "desc" => "Awarded to assault personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 6 kills while Assault "),



"1031120_1" => array("name" => "The Basic Anti-tank Combat Badge", "desc" => "Awarded to anti-tank personnel who have proven themselves during any period the unit was engaged in active combat\n\n

Criteria:\nIn a round: 10 kills while Anti-tank"),

// at SF

"1261120_1" => array("name" => "The Basic Anti-tank Combat Badge", "desc" => "Awarded to anti-tank personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 11 kills while Anti-tank "),



"1031121_1" => array("name" => "The Basic Support Combat Badge", "desc" => "Awarded to support personnel who have proven themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 10 kills while Support"),

// support SF

"1261121_1" => array("name" => "The Basic Support Combat Badge", "desc" => "Awarded to support personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 11 kills while Support "),

// tactical support SF

"1260602_1" => array("name" => "The Basic Tactical Support Combat Badge", "desc" => "Awarded to support personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nThrow 10 Flashbangs"),

// grappling Hook

"1260708_1" => array("name" => "The Basic Grappling Hook Specialist Badge", "desc" => "Awarded to personnel displaying expert and intrepid use of a grappling hook in combat situations\n\n

Criteria:\nGrapple 10 buildings"),

// zip line

"1262612_1" => array("name" => "The Basic Zip Line Specialist Badge", "desc" => "Awarded to personnel displaying above average use of a zip line in combat situations\n\n

Criteria:\nGrapple 10 buildings"),



"1031406_1" => array("name" => "The Basic Knife Combat Badge", "desc" => "Awarded to personnel who have proven themselves with a knife during any period the unit was engaged in active combat\n\n

Criteria:\nIn a round: 7 kills with a knife"),

"1031619_1" => array("name" => "The Basic Pistol Combat Badge", "desc" => "Awarded to personnel who have proven themselves with a handgun during any period the unit was engaged in active combat\n\n

Criteria:\nIn a round: 5 kills with a pistol"),

"1031923_1" => array("name" => "The Basic Ground Defense Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in a ground defense vehicle.\n\n

Criteria:\nIn a round: 5 minutes in ground defense (Mounted MG or TOW)"),

"1032415_1" => array("name" => "The Basic Explosives Ordinance Badge", "desc" => "Awarded to personnel who have proven themselves with explosive ordinance during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 13 Kills with any combination of C4/Claymore/AT-Mine"),

"1300000_1" => array("name" => "The Basic Grenadier Badge", "desc" => "Awarded to personnel who have proven themselves with hand grenade during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 10 Kills with Hand Grenade\nAnd 100 global grenade kills"),

"1190304_1" => array("name" => "The Basic Command Badge", "desc" => "Awarded on the basis of proven skill in the area of command.\n\n

Criteria:\nIn a round: 40 Command Points "),

"1190507_1" => array("name" => "The Basic Engineer Badge", "desc" => "Awarded to engineering personnel on the basis of proven skill in the area of repair.\n\n

Criteria:\nIn a round: 5 Repair points "),

"1190601_1" => array("name" => "The Basic First Aid Badge", "desc" => "Awarded to medical personnel on the basis of proven skill in the area of field medicine.\n\n

Criteria:\nIn a round: 5 Heal points"),

"1191819_1" => array("name" => "The Basic Resupply Badge", "desc" => "Awarded to support personnel on the basis of proven skill in the area of ammo resupply.\n\n

Criteria:\nIn a round: 5 Ammo points"),

"1220104_1" => array("name" => "The Basic Air Defense Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in an air defense vehicle.\n\n

Criteria:\nIn a round: 5 minutes on Air Defense (Stinger or AA Vehicle)"),

"1220118_1" => array("name" => "The Basic Armor Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in an armored vehicle.\n\n

Criteria:\nIn a round: 10 minutes in Armor"),

"1220122_1" => array("name" => "The Basic Aviator Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in an airplane,\n\n

Criteria:\nIn a round: 10 minutes in an Airplane"),

"1220803_1" => array("name" => "The Basic Helicopter Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in a helicopter.\n\n

Criteria:\nIn a round: 15 minutes in a Helicopter"),

"1222016_1" => array("name" => "The Basic Transport Badge", "desc" => "Awarded to personnel who have been exposed to enemy fire while performing their duties in a transport vehicle.\n\n

Criteria:\nIn a round: 10 minutes in a Transport"),

"1300001_1" => array("name" => "The Basic Roadkill Badge", "desc" => "Awarded to personnel who during combat situations have excelled while performing their duties in a transport vehicle.\n\n

Criteria:\nYou Need 10 Hours In A Transport vehicle\n200 Global Roadkills"),



"1031105_2" => array("name" => "The Veteran Engineer Combat Badge", "desc" => "Awarded to engineer personnel who distinguished themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 20 kills while an Engineer\n15h Total time played while Engineer"),

// engineer SF

"1261105_2" => array("name" => "The Veteran Engineer Specialist Combat Badge", "desc" => "Awarded to engineer personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 22 kills while Engineer\n16h Total time played while Engineer"),



"1031109_2" => array("name" => "The Veteran Sniper Combat Badge", "desc" => "Awarded to sniper personnel who distinguished themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 15 kills while a Sniper\n15h Total time played while Sniper"),

// sniper SF

"1261109_2" => array("name" => "The Veteran Sniper Specialist Combat Badge", "desc" => "Awarded to sniper personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 17 kills while a Sniper\n16h Total time played while Sniper "),



"1031113_2" => array("name" => "The Veteran Medic Combat Badge", "desc" => "Awarded to medical personnel who distinguished themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 20 kills while a Medic\n15h Total time played while Medic"),

// medic SF

"1261113_2" => array("name" => "The Veteran Medic Specialist Combat Badge", "desc" => "Awarded to medical personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 22 kills while a Medic\n16h Total time played while Medic "),



"1031115_2" => array("name" => "The Veteran Spec Ops Combat Badge", "desc" => "Awarded to spec ops personnel who distinguished themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 20 kills while a SpecOp\n15h Total time played while Spec-ops"),

// spec ops SF

"1261115_2" => array("name" => "The Veteran Spec Ops Specialist Combat Badge", "desc" => "Awarded to spec ops personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 22 kills while a SpecOp\n16h Total time played while Spec-ops"),



"1031119_2" => array("name" => "The Veteran Assault Combat Badge", "desc" => "Awarded to assault personnel who distinguished themselves during any period the unit was engaged in active combat\n\n

Criteria:\nIn a round: 20 kills while Assault\n15h Total time played while Assault "),

// assault SF

"1261119_2" => array("name" => "The Veteran Assault Specialist Combat Badge", "desc" => "Awarded to assault personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 22 kills while Assault\n16h Total time played while Assault"),



"1031120_2" => array("name" => "The Veteran Anti-tank Combat Badge", "desc" => "Awarded to anti-tank personnel who distinguished themselves during any period the unit was engaged in active combat\n\n

Criteria:\nIn a round: 20 kills while Anti-tank\n15h Total time played while Anti-tank"),

// at SF

"1261120_2" => array("name" => "The Veteran Anti-tank Combat Badge", "desc" => "Awarded to anti-tank personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 22 kills while Anti-tank\n16h Total time played while Anti-tank"),



"1031121_2" => array("name" => "The Veteran Support Combat Badge", "desc" => "Awarded to support personnel who distinguished themselves during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 20 kills while Support\n15h Total time played while Support"),

// support SF

"1261121_2" => array("name" => "The Veteran Support Combat Badge", "desc" => "Awarded to support personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 22 kills while Support\n16h Total time played while Support"),

// tactical support SF

"1260602_2" => array("name" => "The Veteran Tactical Support Combat Badge", "desc" => "Awarded to support personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nThrow 1000 Flashbangs"),

// grappling Hook

"1260708_2" => array("name" => "The Veteran Grappling Hook Specialist Badge", "desc" => "Awarded to personnel displaying expert and intrepid use of a grappling hook in combat situations\n\n

Criteria:\nGrapple 3000 buildings"),

// zip line

"1262612_2" => array("name" => "The Veteran Zip Line Specialist Badge", "desc" => "Awarded to personnel displaying above average use of a zip line in combat situations\n\n

Criteria:\nGrapple 3000 buildings"),

"1031406_2" => array("name" => "The Veteran Knife Combat Badge", "desc" => "Awarded to personnel who distinguished themselves using a knife during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 7 kills with a knife\n50 kills with a knife"),

"1031619_2" => array("name" => "The Veteran Pistol Combat Badge", "desc" => "Awarded to personnel who distinguished themselves using a handgun during any period the unit was engaged in active combat\n\n

Criteria:\nIn a round: 7 kills with a pistol\n50 kills with a pistol"),

"1031923_2" => array("name" => "The Veteran Ground Defense Badge", "desc" => "Awarded to personnel who during combat situations have distinguished themselves while performing their duties in a ground defense vehicle.\n\n

Criteria:\nIn a round: 12 kills with ground defense (Mounted MG or TOW)\n15h Total time using Ground Defense"),

"1032415_2" => array("name" => "The Veteran Explosives Ordinance Badge", "desc" => "Awarded to personnel who distinguished themselves using explosive ordinance during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 23 Kills with any combination of C4/Claymore/AT-Mine\n50 kills with explosives (C4/claymore/AT-mine)"),

"1300000_2" => array("name" => "The Veteran Grenadier Badge", "desc" => "Awarded to personnel who have proven themselves with hand grenade during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 15 Kills with Hand Grenade\nAnd 200 global grenade kills"),

"1190304_2" => array("name" => "The Veteran Command Badge", "desc" => "Awarded on the basis of distinguished skill in the area of command.\n\n

Criteria:\nIn a round: 25 minutes as commander\n1000 commander score"),

"1190507_2" => array("name" => "The Veteran Engineer Badge", "desc" => "Awarded to engineering personnel on the basis of distinguished skill in the area of repair.\n\n

Criteria:\nIn a round: 10 Repair points\n15h Total time played while Engineer"),

"1190601_2" => array("name" => "The Veteran First Aid Badge", "desc" => "Awarded to medical personnel on the basis of distinguished skill in the area of field medicine.\n\n

Criteria:\nIn a round: 10 Heal points\n15h Total time played while Medic"),

"1191819_2" => array("name" => "The Veteran Resupply Badge", "desc" => "Awarded to support personnel on the basis of distinguished skill in the area of ammo resupply.\n\n

Criteria:\nIn a round: 10 Ammo points\n15h Total time played while Support"),

"1220104_2" => array("name" => "The Veteran Air Defense Badge", "desc" => "Awarded to personnel who during combat situations have distinguished themselves while performing their duties in an air defense vehicle.\n\n

Criteria:\nIn a round: 12 kills while on Air Defense (Stinger or AA Vehicle)\n30h Total time using Air Defense"),

"1220118_2" => array("name" => "The Veteran Armor Badge", "desc" => "Awarded to personnel who during combat situations have distinguished themselves while performing their duties in an armored vehicle.\n\n

Criteria:\nIn a round: 12 kills in Armor\n100h Total time using Armor "),

"1220122_2" => array("name" => "The Veteran Aviator Badge", "desc" => "Awarded to personnel who during combat situations have distinguished themselves while performing their duties in an airplane.\n\n

Criteria:\nIn a round: 12 kills in an Airplane\n100h Total time using Aviator"),

"1220803_2" => array("name" => "The Veteran Helicopter Badge", "desc" => "Awarded to personnel who during combat situations have distinguished themselves while performing their duties in a helicopter.\n\n

Criteria:\nIn a round: 12 kills in a Helicopter\n100h Total time using Helicopter"),

"1222016_2" => array("name" => "The Veteran Transport Badge", "desc" => "Awarded to personnel who during combat situations have distinguished themselves while performing their duties in a transport vehicle.\n\n

Criteria:\nIn a round: 5 road kills while in Transport\n50h Total time using Transport\n200 Driver points"),

"1300001_2" => array("name" => "The Veteran Roadkill Badge", "desc" => "Awarded to personnel who during combat situations have excelled while performing their duties in a transport vehicle.\n\n

Criteria:\nYou Need 20 Hours In A Transport vehicle\n400 Global Roadkills"),

// engineer

"1031105_3" => array("name" => "The Expert Engineer Combat Badge", "desc" => "Awarded to engineer personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 40 kills while an Engineer\n100h Total time played while Engineer"),

// engineer SF

"1261105_3" => array("name" => "The Expert Engineer Specialist Combat Badge", "desc" => "Awarded to engineer personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 44 kills while Engineer\n100h Total time played while Engineer"),

// sniper

"1031109_3" => array("name" => "The Expert Sniper Combat Badge", "desc" => "Awarded to sniper personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 35 kills while a Sniper\n100h Total time played while Sniper "),

// sniper SF

"1261109_3" => array("name" => "The Expert Sniper Specialist Combat Badge", "desc" => "Awarded to sniper personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 38 kills while a Sniper\n100h Total time played while Sniper "),

// medic

"1031113_3" => array("name" => "The Expert Medic Combat Badge", "desc" => "Awarded to medical personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 40 kills while a Medic\n100h Total time played while Medic "),

// medic SF

"1261113_3" => array("name" => "The Expert Medic Specialist Combat Badge", "desc" => "Awarded to medical personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 44 kills while a Medic\n100h Total time played while Medic "),

// spec ops

"1031115_3" => array("name" => "The Expert Spec Ops Combat Badge", "desc" => "Awarded to spec ops personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 40 kills while a SpecOp\n100h Total time played while Spec-ops"),

// spec ops SF

"1261115_3" => array("name" => "The Expert Spec Ops Specialist Combat Badge", "desc" => "Awarded to spec ops personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 44 kills while a SpecOp\n100h Total time played while Spec-ops"),

// assault

"1031119_3" => array("name" => "The Expert Assault Combat Badge", "desc" => "Awarded to assault personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 40 kills while Assault\n100h Total time played while Assault"),

// assault SF

"1261119_3" => array("name" => "The Expert Assault Specialist Combat Badge", "desc" => "Awarded to assault personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 44 kills while Assault\n100h Total time played while Assault"),

// at

"1031120_3" => array("name" => "The Expert Anti-tank Combat Badge", "desc" => "Awarded to anti-tank personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 40 kills while Anti-tank\n100h Total time played while Anti-tank"),

// at SF

"1261120_3" => array("name" => "The Expert Anti-tank Combat Badge", "desc" => "Awarded to anti-tank personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 44 kills while Anti-tank\n100h Total time played while Anti-tank"),

// support

"1031121_3" => array("name" => "The Expert Support Combat Badge", "desc" => "Awarded to support personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 40 kills while Support\n100h Total time played while Support"),

// support SF

"1261121_3" => array("name" => "The Expert Support Combat Badge", "desc" => "Awarded to support personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 44 kills while Support\n100h Total time played while Support"),

// tactical support SF

"1260602_3" => array("name" => "The Expert Tactical Support Combat Badge", "desc" => "Awarded to support personnel who served with excellence during any period the unit was engaged in active combat.\n\n

Criteria:\nThrow 3000 Flashbangs"),

// grappling Hook

"1260708_3" => array("name" => "The Expert Grappling Hook Specialist Badge", "desc" => "Awarded to personnel displaying expert and intrepid use of a grappling hook in combat situations\n\n

Criteria:\nGrapple 6500 buildings"),

// zip line

"1262612_3" => array("name" => "The Expert Zip Line Specialist Badge", "desc" => "Awarded to personnel displaying above average use of a zip line in combat situations\n\n

Criteria:\nGrapple 6500 buildings"),

// knife

"1031406_3" => array("name" => "The Expert Knife Combat Badge", "desc" => "Awarded to personnel who excelled in the use of a knife during any period the unit was engaged in active combat\n\n

Criteria:\nIn a round: 18 kills with a knife\n100 kills with a knife"),

// pistol

"1031619_3" => array("name" => "The Expert Pistol Combat Badge", "desc" => "Awarded to personnel who excelled in the use of a handgun during any period the unit was engaged in active combat\n\n

Criteria:\nIn a round: 18 kills with a pistol\n500 kills with a pistol"),

// ground defense

"1031923_3" => array("name" => "The Expert Ground Defense Badge", "desc" => "Awarded to personnel who during combat situations have excelled while performing their duties in a ground defense vehicle.\n\n

Criteria:\nIn a round: 24 kills with ground defense (Mounted MG or TOW)\n60h Total time using Ground Defense"),

// explosives

"1032415_3" => array("name" => "The Expert Explosives Ordinance Badge", "desc" => "Awarded to personnel who excelled in the use of explosive ordinance during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 37 Kills with any combination of C4/Claymore/AT-Mine\n300 kills with explosives (C4/claymore/AT-mine)"),

// hand grenade

"1300000_3" => array("name" => "The Expert Grenadier Badge", "desc" => "Awarded to personnel who have proven themselves with hand grenade during any period the unit was engaged in active combat.\n\n

Criteria:\nIn a round: 20 Kills with Hand Grenade\nAnd 400 global grenade kills"),

// command

"1190304_3" => array("name" => "The Expert Command Badge", "desc" => "Awarded on the basis of excellence in the area of command.\n\n

Criteria:\nIn a round: 30 minutes as commander\n10000 commander score"),

// engineer

"1190507_3" => array("name" => "The Expert Engineer Badge", "desc" => "Awarded to engineering personnel on the basis of excellence in the area of repair.\n\n

Criteria:\nIn a round: 25 Repair points\n100h Total time played while Engineer\n250 Repairs"),

// first aid

"1190601_3" => array("name" => "The Expert First Aid Badge", "desc" => "Awarded to medical personnel on the basis of excellence in the area of field medicine.\n\n

Criteria:\nIn a round: 25 Heal points\n15h Total time played while Medic\n750 Heals"),

// resupply

"1191819_3" => array("name" => "The Expert Resupply Badge", "desc" => "Awarded to support personnel on the basis of excellence in the area of ammo resupply.\n\n

Criteria:\nIn a round: 25 Ammo points\n100h Total time played while Support\n500 Resupplies"),

// air defense

"1220104_3" => array("name" => "The Expert Air Defense Badge", "desc" => "Awarded to personnel who during combat situations have excelled while performing their duties in an air defense vehicle.\n\n

Criteria:\nIn a round: 24 kills while on Air Defense (Stinger or AA Vehicle)\n100h Total time using Air Defense"),

// armor

"1220118_3" => array("name" => "The Expert Armor Badge", "desc" => "Awarded to personnel who during combat situations have excelled while performing their duties in an armored vehicle.\n\n

Criteria:\nIn a round: 24 kills in Armor\n400h Total time using Armor"),

// aviator

"1220122_3" => array("name" => "The Expert Aviator Badge", "desc" => "Awarded to personnel who during combat situations have excelled while performing their duties in an airplane.\n\n

Criteria:\nIn a round: 24 kills in an Airplane\n300h Total time using Aviator"),

// heli

"1220803_3" => array("name" => "The Expert Helicopter Badge", "desc" => "Awarded to personnel who during combat situations have excelled while performing their duties in a helicopter.\n\n

Criteria:\nIn a round: 24 kills in a Helicopter\n400h Total time using Helicopter"),

// transport

"1222016_3" => array("name" => "The Expert Transport Badge", "desc" => "Awarded to personnel who during combat situations have excelled while performing their duties in a transport vehicle.\n\n

Criteria:\nIn a round: 11 road kills while in Transport\n150h Total time using Transport\n2000 Driver points"),

// roadkills

"1300001_3" => array("name" => "The Expert Roadkill Badge", "desc" => "Awarded to personnel who during combat situations have excelled while performing their duties in a transport vehicle.\n\n

Criteria:\nYou Need 40 Hours In A Transport vehicle\n800 Global Roadkills"),



// Medals

"2051907" => array("name" => "The Gold Star", "desc" => "Awarded to those individuals who have distinguished themselves through excellent skill and teamwork\n\n

Criteria:\nPlace First (1st) overall in a server at the end of the round "),



"2051902" => array("name" => "The Bronze Star", "desc" => "Awarded to those individuals who have distinguished themselves through proven skill and teamwork\n\n

Criteria:\nPlace Third (3rd) overall in a server at the end of the round "),



"2051919" => array("name" => "The Silver Star", "desc" => "Awarded to those individuals who have distinguished themselves through superior skill and teamwork\n\n

Criteria:\nPlace Second (2nd) overall in a server at the end of the round "),



"2020419" => array("name" => "The Distinguished Service Medal", "desc" => "Awarded to an individual who distinguishes themselves by exceptionally meritorious service in a duty of great responsibility\n\n

Criteria:

100 Global Hours as a Commander

100 Global Hours as a Squad Leader

100 Global Hours as Squad Member

Team Score of 53 in 1 Round"),

"2020719" => array("name" => "The Golden Scimitar", "desc" => "Awarded to members of the Middle Eastern Coalition for extraordinary heroism in action while engaged in military operations involving conflict with an opposing foreign force\n\n

Criteria:

Participant -- As best as we can tell, you get this simply for playing the game for an extended period"),

"2020903" => array("name" => "The Combat Infantry Medal", "desc" => "Awarded to individuals who have distinguished themselves above and beyond that normally expected of infantry in a combat situation.\n\n

Criteria:

500 Total Hours

All Basic Combat Badges: Knife, Pistol, Assault, Anti-Tank, Sniper, Support, Spec Ops, Engineer, Medic

In a round: play for 34 minutes"),

"2020913" => array("name" => "The Marksman Infantry Medal", "desc" => "Awarded to individuals who have distinguished themselves by sustained meritorious achievement during combat situations.\n\n

Criteria:

Combat Infantry Medal

All Veteran Combat Badges: Knife, Pistol, Assault, Anti-Tank, Sniper, Support, Spec Ops, Engineer, Medic

In a round: play for 34 minutes"),

"2020919" => array("name" => "The Sharpshooter Infantry Medal", "desc" => "Awarded to individuals who have excelled in every action expected of the infantry in a combat situation\n\n

Criteria:

Marksman Infantry Medal

All Expert Combat Badges: Knife, Pistol, Assault, Anti-Tank, Sniper, Support, Spec Ops, Engineer, Medic

In a round: play for 34 minutes"),

"2021322" => array("name" => "The Medal of Valor", "desc" => "Awarded to the individual who distinguishes themselves by gallantry and intrepidity at the risk of their life above and beyond the call of duty; the deed performed must have been one of personal bravery or self sacrifice so conspicuous as to clearly distinguish the individual above his/her comrades and must have involved the risk of life.\n\n

Criteria:

250h Total time played

5000 Driver Points

1000 Defended CP Points

30000 Global Teamwork Score"),

"2021403" => array("name" => "The Navy Cross", "desc" => "Awarded to members of the United States Armed Forces for extraordinary heroism in action while engaged in military operations involving conflict with an opposing foreign force\n\n

Criteria:

Participant -- As best as we can tell, you get this simply for playing the game for an extended period. "),

"2021613" => array("name" => "The People's Medallion", "desc" => "Awarded to members of the People's Liberation Army for extraordinary heroism in action while engaged in military operations involving conflict with an opposing foreign force\n\n

Criteria:

Participant -- As best as we can tell, you get this simply for playing the game for an extended period"),

"2190303" => array("name" => "The Combat Action Medal", "desc" => "Awarded to any person who has distinguished themselves by superior achievement while participating in infantry combat.\n\n

Criteria:

250 Total time played

25,000 Kills

25 or better Kill Streak

In a round: play for 33 minutes"),



"2190308" => array("name" => "The Helicopter Combat Medal", "desc" => "Awarded to any person who has distinguished themselves by superior achievement while participating in helicopter combat.\n\n

Criteria:

250 Global Hours in a Helicopter

20,000 Global Kills in a Helicopter

In a round: 30 Kills while in a Helicopter"),

"2190309" => array("name" => "The Air Combat Medal", "desc" => "Awarded to any person who has distinguished themselves by superior achievement while participating in aerial combat.\n\n

Criteria:

200 Global Hours in an Airplane

10,000 Global Kills in an Airplane

25 Kills during 1 round in an Airplane"),

"2190318" => array("name" => "The Armor Combat Medal", "desc" => "Awarded to any person who has distinguished themselves by superior achievement while participating in armored combat.\n\n

Criteria:

250 Global Hours in Armor Vehicle (Tank/APC type)

10,000 Global Kills in Armor Vehicle (Tank/APC type)

In a round: 25 Kills in Armor Vehicle (Tank/APC type) "),

"2190703" => array("name" => "The Good Conduct Medal", "desc" => "Awarded to those individuals who, through exemplary conduct to their comrades, have shown themselves to be models of efficiency and fidelity\n\n

Criteria:

250 Total Hours

27 Kills in 1 Round

AND No Team Kills, Team Damage, or Team Vehicle Damage in the same round"),

"2191319" => array("name" => "The Meritorious Service Medal", "desc" => "Awarded to an individual for exceptional conduct in the performance of outstanding services and achievements in support of their comrades\n\n

Criteria:

250 Total Hours

1000 Global Heals

1000 Global Repairs

1000 Global Re-supplies"),

"2191608" => array("name" => "The Purple Heart", "desc" => "Awarded to any member of the armed forces who has been killed in any action with an opposing armed force of a foreign country \n\n

Criteria:\n

In a round: A Kill to Death Ratio of 1:4 with a minimum of 5 kills/20 deaths)"),



//SF Medals



"2261913" => array("name" => "The U.S. Navy Seals Special Service Medal", "desc" => "Awarded to Navy Seal personnel for outstanding service during an active tour of duty \n\n

Criteria:\n

4,500h Total time played (Seals)"),

"2261919" => array("name" => "The British SAS Special Service Medal", "desc" => "Awarded to SAS personnel for outstanding service during an active tour of duty \n\n

Criteria:\n

4,500h Total time played (SAS)"),

"2261613" => array("name" => "The Russian Spetsnaz Special Service Medal", "desc" => "Awarded to Spetsnaz personnel for outstanding service during an active tour of duty \n\n

Criteria:\n

4,500h Total time played (SPETZNAS)"),

"2261303" => array("name" => "The MEC SF Special Service Medal", "desc" => "Awarded to MEC Special Forces personnel for outstanding service during an active tour of duty \n\n

Criteria:\n

4,500h Total time played (MECSF)"),

"2261802" => array("name" => "The Rebels Special Service Medal", "desc" => "Awarded to Rebel personnel for outstanding service during an active tour of duty \n\n

Criteria:\n

4,500h Total time played (Rebel)"),

"2260914" => array("name" => "The Insurgent Forces Special Service Medal", "desc" => "Awarded to Insurgent personnel for outstanding service during an active tour of duty \n\n

Criteria:\n

4,500h Total time played (Insurgent)"),



 // Ribbons



"3040109" => array("name" => "The Air-Defense Ribbon", "desc" => "Awarded to recognize the individual who performed their duty while engaged in active air-defense combat\n\n

Criteria:\n3 Minutes in Stinger (Surface to Air Missile) \n11 Kills in Stinger (Surface to Air Missile) "),

"3040718" => array("name" => "The Ground Defense Ribbon", "desc" => "Awarded to recognize the individual who participated in sustained ground combat\n\n

Criteria:\n3 Minutes in TOW/Mounted Machine Gun in 1 Round \n5 Kills in TOW/Mounted Machine Gun in 1 Round "),

"3150914" => array("name" => "The Infantry Officer Ribbon", "desc" => "Awarded to recognize the superior dedication of unit leaders during combat situations\n\n

Criteria:\n25 Minutes as Squad Leader in 1 Round \n250 Global Teamwork Points "),

"3151920" => array("name" => "The Staff Officer Ribbon", "desc" => "Awarded to recognize superior achievement by unit commanders during sustained combat situations\n\n

Criteria: \n28 Minutes as Commander in 1 Game \nCommander Score of 50 in 1 Round (before 2x) "),

"3190105" => array("name" => "The Aerial Service Ribbon", "desc" => "Awarded to recognize the individual who performed their duty while engaged in active aerial combat\n\n

Criteria:\n15 Minutes in an Airplane \n19 Kills in an Airplane"),

"3190118" => array("name" => "The Armored Service Ribbon", "desc" => "Awarded to recognize the individual who performed their duty while engaged in active armored combat\n\n

Criteria:\n20 Minutes in an Armor Vehicle (Tank/APC type) \n19 Kills in an Armor Vehicle (Tank/APC type) "),

"3190318" => array("name" => "The Crew Service Ribbon", "desc" => "Awarded to recognize the individual who performed satisfactory duty while on flying status as a crewmember.\n\n

Criteria:\n13 Driver Kill Assists in 1 Round \n5 Kills in 1 Round (within the same round as the previous)\n1 Driver special ability point  (within the same round as the previous)"),

"3190409" => array("name" => "The Distinguished Service Ribbon", "desc" => "Awarded to recognize the superior achievement of an individual in all aspects of unit command.\n\n

Criteria:\n10 Global Hours as Squad Member \n10 Global Hours as Squad Leader \n10 Global Hours as Commander \nTeam Score of 15 in 1 Round (Reviving/Healing/Re-Supplying, Capturing/Defending/Neutralizing Control Points) "),

"3190605" => array("name" => "The Far East Service Ribbon", "desc" => "Awarded to recognize service in the Far East Theater.\n\n

Criteria:\nN/A"),

"3190803" => array("name" => "The Helicopter Service Ribbon", "desc" => "Awarded to recognize the individual who performed their duty while engaged in active helicopter combat\n\n

Criteria:\n15 Minutes in Helicopter \n19 Kills in Helicopter"),

"3191305" => array("name" => "The Mid-East Service Ribbon", "desc" => "Awarded to recognize service in the Middle East Theater \n\n

Criteria:\nN/A"),

"3211305" => array("name" => "The Meritorious Unit Ribbon", "desc" => "Awarded to recognize an individual's contribution to their unit during sustained combat situations\n\n

Criteria:\n26 Minutes in a Squad \nTeam Score of 40 in 1 Round (Reviving/Healing/Re-Supplying, Capturing/Defending/Neutralizing Control Points) "),

"3212201" => array("name" => "The Valorous Unit Ribbon", "desc" => "Awarded to recognize extraordinary heroism in action against an armed enemy.\n\n

Criteria:\n25 Global Hours as Squad Member \n25 Global Hours as Squad Leader \nTeam Score of 45 in 1 Round (Reviving/Healing/Re-Supplying, Capturing/Defending/Neutralizing Control Points) "),

"3240102" => array("name" => "The Airborne Ribbon", "desc" => "Awarded to recognize individuals who have  participated in sustained airborne operations during combat situations\n\n

Criteria:\n10 seconds in a Parachute in one round"),

"3240301" => array("name" => "The Combat Action Ribbon", "desc" => "Awarded to recognize active participation in ground or air combat\n\n

Criteria:\n10 Kill Streak \n18 Kills in 1 Round "),

"3240703" => array("name" => "The Good Conduct Ribbon", "desc" => "Awarded to recognize exemplary behavior, efficiency, and fidelity in active service\n\n

Criteria:\n50 Global Hours of Play Time \n14 Kills in One Round \nNo Team Kills in the round you receive the medal \nNo Team Damage in the round you receive the medal "),

"3241213" => array("name" => "The Legion of Merit Ribbon", "desc" => "Awarded to recognize the individual who, through gallantry, determination and esprit de corps, succeeds in his/her mission while under difficult and hazardous conditions\n\n

Criteria:\n200 Hours of Playing Time \nbest Kill Streak of 10 or greater\nWorst Death Streak of 8 or greater \nTeam Score of 50 in 1 Round (Reviving/Healing/Re-Supplying, Capturing/Defending/Neutralizing Control Points) "),

"3242303" => array("name" => "The War College ribbon", "desc" => "Awarded to recognize achievements which, through their dedication and gallantry, have set the individual apart and above other commanders.\n\n

Criteria:\nCommander Score of 45 in 1 Game \n50 Global Hours as Commander \nGlobal Win to Loss Ratio Must be Greater than 3 "),

//SF Ribbons

"3261919" => array("name" => "The U.S. Navy Seals Service ribbon", "desc" => "Awarded to Navy Seal personnel exhibiting excellence and honor in completing their tour of duty.\n\n

Criteria:\n5h Total time played (Seals)"),

"3261901" => array("name" => "The British SAS Service ribbon", "desc" => "Awarded to Special Air Service personnel exhibiting intrepid gallantry in completing their tour of duty.\n\n

Criteria:\n5h Total time played (SAS)"),

"3261819" => array("name" => "The Russian Spetsnaz Service ribbon", "desc" => "Awarded to Spetsnaz personnel exhibiting meritorious valor in completing their tour of duty.\n\n

Criteria:\n5h Total time played (SPETZNAS)"),

"3261319" => array("name" => "The MEC Special Forces Service ribbon", "desc" => "Awarded to MEC Special Forces personnel exhibiting undaunted bravery in completing their tour of duty.\n\n

Criteria:\n5h Total time played (MECSF)"),

"3261805" => array("name" => "The Rebels Service ribbon", "desc" => "Awarded to Rebel personnel exhibiting outstanding mettle in completing their tour of duty.\n\n

Criteria:\n5h Total time played (Rebel)"),

"3260914" => array("name" => "The Insurgent Forces Service ribbon", "desc" => "Awarded to Insurgent personnel exhibiting heroic selflessness in completing their tour of duty.\n\n

Criteria:\n5h Total time played (Insurgent)"),

"3260318" => array("name" => "The Crew Specialist ribbon", "desc" => "Awarded to recognize the individual who performed satisfactory duty while on flying status as a crewmember.\n\n

Criteria:\n1 Driver Special Ability Point \n20 Driver Kill Assists \n10 kills "),

"3260118" => array("name" => "The Armored Transport Specialist ribbon", "desc" => "Awarded to recognize the individual who performed their duty while engaged in active armored combat.\n\n

Criteria:\n20 minutes in an Armor Vehicle \n22 kills in an Armor Vehicle "),

"3260105" => array("name" => "The Airborne Specialist ribbon", "desc" => "Awarded to recognize the individual who performed their duty while engaged in active aerial combat.\n\n

Criteria:\n15 minutes in an Airplane \n22 kills in an Airplane "),

"3260803" => array("name" => "The Helicopter Specialist ribbon", "desc" => "Awarded to recognize the individual who performed their duty while engaged in active helicopter combat.\n\n

Criteria:\n15 minutes in an Helicopter \n22 kills in an Helicopter ")

);





// ARMY DESIGNATORS

$this->armyKey = array(

"0" => "USA",

"1" => "MEC",

"2" => "CHINA",

"3" => "SEALS",

"4" => "SAS",

"5" => "SPETZNAS",

"6" => "MECSF",

"7" => "REBELS",

"8" => "INSURGENTS"

   );



// KIT NUMBERS

$this->kitKey = array(

"0" => "Anti-tank",

"1" => "Assault",

"2" => "Engineer",

"3" => "Medic",

"4" => "Special-Ops",

"5" => "Support",

"6" => "Sniper"

   );



// MAP DESIGNATORS

$this->mapKey = array(

"0" => "Kubra Dam",

"1" => "Mashtuur City",

"2" => "Operation Clean Sweep",

"3" => "Zatar Wetlands",

"4" => "Strike at Karkand",

//"99" => "Strike at Karkand 2",

"5" => "Sharqi Peninsula",

"6" => "Gulf of Oman",

"100" => "Daqing Oilfields",

"101" => "Dalian Plant",

"102" => "Dragon Valley",

"103" => "FuShe Pass",

"105" => "Songhua Stalemate",

"300" => "Devils Perch",

"301" => "Iron Gator",

"302" => "Night Flight",

"303" => "Warlord",

"304" => "Leviathan",

"305" => "Mass Destruction",

"306" => "Surge",

"307" => "Ghost Town",

"601" => "Wake Island 2007"

    );



// INFANTRY WEAPON DESIGNATORS

$this->weaponKey = array(

"0" => "Assault Rifles",

"1" => "Grenade Launcher Attachment",

"2" => "Carbines",

"3" => "Light Machine Guns",

"4" => "Sniper Rifles",

"5" => "Pistols",

"6" => "AT/AA",

"7" => "Submachine Guns",

"8" => "Shotguns",

"9" => "Knife",

"10" => "Defibrillator",

"11" => "Explosives (C4, Claymore, AT Mine)",

"12" => "Hand Grenade",

//"13" => "Crossbow"

 );



// VEHICLE DESIGNATORS

$this->vehicleKey = array(

"0" => "Armor",

"1" => "Aviator",

"2" => "Air Defense",

"3" => "Helicopter",

"4" => "Transport",

"5" => "Artillery",

"6" => "Ground Defense",

  );



// RANK DESIGNATORS

$this->rankKey = array(

"0" => array("short" => "PVT", "long" => "Private"),

"1" => array("short" => "PFC", "long" => "Private First Class"),

"2" => array("short" => "LCpl", "long" => "Lance Corporal"),

"3" => array("short" => "Cpl", "long" => "Corporal"),

"4" => array("short" => "Sgt", "long" => "Sergeant"),

"5" => array("short" => "SSgt", "long" => "Staff Sergeant"),

"6" => array("short" => "GySgt", "long" => "Gunnery Sergeant"),

"7" => array("short" => "MSgt", "long" => "Master Sergeant"),

"8" => array("short" => "1stSgt", "long" => "First Sergeant"),

"9" => array("short" => "MgySgt", "long" => "Master Gunnery Sergeant"),

"10" => array("short" => "SgtMaj", "long" => "Sergeant Major"),

"11" => array("short" => "SgtMajC", "long" => "Sergeant Major of the Corps"),

  );

  



/*

 * One big 'ol array of all the keys, their data type, and friendly name

 */



$this->statsKey = array(

"asof" => array('type' => "T",'friendly' => "Rank date"),

"ban" => array('type' => "N",'friendly' => "# times banned"),

"bbrs" => array('type' => "N",'friendly' => "Best round score"),

"bksk" => array('type' => "N",'friendly' => "Best kill streak"),

"bmap" => array('type' => "N",'friendly' => "Best round map"),

"cacp" => array('type' => "N",'friendly' => "# assists capturing control point"),

"cdsc" => array('type' => "N",'friendly' => "Commander score"),

"cmsc" => array('type' => "N",'friendly' => "Combat score"),

"cpcp" => array('type' => "N",'friendly' => "# times captured control point"),

"deth" => array('type' => "N",'friendly' => "# deaths"),

"dfcp" => array('type' => "N",'friendly' => "# times defended control point"),

"dkas" => array('type' => "N",'friendly' => "# kill assists as driver"),

"dsab" => array('type' => "N",'friendly' => "Driver special ability"),

"dtpm" => array('type' => "F",'friendly' => "# deaths/minute"),

"dtpr" => array('type' => "F",'friendly' => "# deaths/round played"),

"fkit" => array('type' => "N",'friendly' => "Favorite kit"),

"fmap" => array('type' => "N",'friendly' => "Favorite map"),

"fveh" => array('type' => "N",'friendly' => "Favorite vehicle"),

"fwea" => array('type' => "N",'friendly' => "Favorite weapon"),

"heal" => array('type' => "N",'friendly' => "# heals"),

"jond" => array('type' => "T",'friendly' => "Date joined"),

"kick" => array('type' => "N",'friendly' => "# times kicked"),

"kila" => array('type' => "N",'friendly' => "# kill assists"),

"kill" => array('type' => "N",'friendly' => "# kills"),

"klpm" => array('type' => "F",'friendly' => "# kills/minute"),

"klpr" => array('type' => "F",'friendly' => "# kills/round played"),

"klsc" => array('type' => "N",'friendly' => "Kill score"),

"loss" => array('type' => "N",'friendly' => "# losses"),

"mode0" => array('type' => "N",'friendly' => "Game mode 0"),

"mode1" => array('type' => "N",'friendly' => "Game mode 1"),

"mode2" => array('type' => "N",'friendly' => "Game mode 2"),

"nick" => array('type' => "S",'friendly' => "Account name"),

"osaa" => array('type' => "%",'friendly' => "Overall small-arms accuracy"),

"ospm" => array('type' => "F",'friendly' => "Overall score/minute"),

"pid" => array('type' => "N",'friendly' => "Account ID"),

"pkas" => array('type' => "N",'friendly' => "# kill assists as passenger"),

"rank" => array('type' => "N",'friendly' => "Rank"),

"rpar" => array('type' => "N",'friendly' => "# repairs"),

"rsup" => array('type' => "N",'friendly' => "# resupplies"),

"rviv" => array('type' => "N",'friendly' => "# revives"),

"scor" => array('type' => "N",'friendly' => "Global score"),

"smoc" => array('type' => "S",'friendly' => "Rank = SgtMaj of the Corps?"),

"suic" => array('type' => "N",'friendly' => "# suicides"),

"tcdr" => array('type' => "E",'friendly' => "Time as commander"),

"tsql" => array('type' => "E",'friendly' => "Time as squad leader"),

"tsqm" => array('type' => "E",'friendly' => "Time as squad member"),

"tlwf" => array('type' => "E",'friendly' => "Time as lone wolf"),

"tgte" => array('type' => "N",'friendly' => "# times targeted enemy"),

"time" => array('type' => "E",'friendly' => "Total time played"),

"topr" => array('type' => "P",'friendly' => "Top opponent in round"),

"tvcr" => array('type' => "P",'friendly' => "Top victim in round"),

"twsc" => array('type' => "N",'friendly' => "Teamwork score"),

"wdsk" => array('type' => "N",'friendly' => "Worst death streak"),

"wins" => array('type' => "N",'friendly' => "# wins"),

"lbtl" => array('type' => "T",'friendly' => "Last battle time"),

"vacc" => array('type' => "%",'friendly' => "Vehicle accuracy"),

"tkil" => array('type' => "N",'friendly' => "Team Kill"),

"tdmg" => array('type' => "N",'friendly' => "Team Damage"),

"tvdm" => array('type' => "N",'friendly' => "Team Vehicle Damage"),

"vrk" => array('type' => "N",'friendly' => "Road kill with vehicle"),

"mvns" => array('type' => "S",'friendly' => "Top victim name"),

"mvrs" => array('type' => "S",'friendly' => "Top victim rank"),

"mvks" => array('type' => "N",'friendly' => "Top victim kills"),

"vmns" => array('type' => "S",'friendly' => "Top opponent's name"),

"vmrs" => array('type' => "S",'friendly' => "Top opponent's rank"),

"vmks" => array('type' => "N",'friendly' => "Top opponent's kills"),

"abs-0" => array('type' => "N",'friendly' => "Best round score (USA)"),

"abs-1" => array('type' => "N",'friendly' => "Best round score (MEC)"),

"abs-2" => array('type' => "N",'friendly' => "Best round score (China)"),

"abs-3" => array('type' => "N",'friendly' => "Best round score (SEALS)"),

"abs-4" => array('type' => "N",'friendly' => "Best round score (SAS)"),

"abs-5" => array('type' => "N",'friendly' => "Best round score (SPETZNAS)"),

"abs-6" => array('type' => "N",'friendly' => "Best round score (MECSF)"),

"abs-7" => array('type' => "N",'friendly' => "Best round score (REBELS)"),

"abs-8" => array('type' => "N",'friendly' => "Best round score (INSURGENTS)"),

"aws-0" => array('type' => "N",'friendly' => "Worst round score (USA)"),

"aws-1" => array('type' => "N",'friendly' => "Worst round score (MEC)"),

"aws-2" => array('type' => "N",'friendly' => "Worst round score (China)"),

"aws-3" => array('type' => "N",'friendly' => "Worst round score (SEALS)"),

"aws-4" => array('type' => "N",'friendly' => "Worst round score (SAS)"),

"aws-5" => array('type' => "N",'friendly' => "Worst round score (SPETZNAS)"),

"aws-6" => array('type' => "N",'friendly' => "Worst round score (MECSF)"),

"aws-7" => array('type' => "N",'friendly' => "Worst round score (REBELS)"),

"aws-8" => array('type' => "N",'friendly' => "Worst round score (INSURGENTS)"),

"alo-0" => array('type' => "N",'friendly' => "# losses (USA)"),

"alo-1" => array('type' => "N",'friendly' => "# losses (MEC)"),

"alo-2" => array('type' => "N",'friendly' => "# losses (China)"),

"alo-3" => array('type' => "N",'friendly' => "# losses (SEALS)"),

"alo-4" => array('type' => "N",'friendly' => "# losses (SAS)"),

"alo-5" => array('type' => "N",'friendly' => "# losses (SPETZNAS)"),

"alo-6" => array('type' => "N",'friendly' => "# losses (MECSF)"),

"alo-7" => array('type' => "N",'friendly' => "# losses (REBELS)"),

"alo-8" => array('type' => "N",'friendly' => "# losses (INSURGENTS)"),

"atm-0" => array('type' => "E",'friendly' => "Time played (USA)"),

"atm-1" => array('type' => "E",'friendly' => "Time played (MEC)"),

"atm-2" => array('type' => "E",'friendly' => "Time played (China)"),

"atm-3" => array('type' => "E",'friendly' => "Time played (SEALS)"),

"atm-4" => array('type' => "E",'friendly' => "Time played (SAS)"),

"atm-5" => array('type' => "E",'friendly' => "Time played (SPETZNAS)"),

"atm-6" => array('type' => "E",'friendly' => "Time played (MECSF)"),

"atm-7" => array('type' => "E",'friendly' => "Time played (REBELS)"),

"atm-8" => array('type' => "E",'friendly' => "Time played (INSURGENTS)"),

"awn-0" => array('type' => "N",'friendly' => "# wins (USA)"),

"awn-1" => array('type' => "N",'friendly' => "# wins (MEC)"),

"awn-2" => array('type' => "N",'friendly' => "# wins (China)"),

"awn-3" => array('type' => "N",'friendly' => "# wins (SEALS)"),

"awn-4" => array('type' => "N",'friendly' => "# wins (SAS)"),

"awn-5" => array('type' => "N",'friendly' => "# wins (SPETZNAS)"),

"awn-6" => array('type' => "N",'friendly' => "# wins (MECSF)"),

"awn-7" => array('type' => "N",'friendly' => "# wins (REBELS)"),

"awn-8" => array('type' => "N",'friendly' => "# wins (INSURGENTS)"),

"kdt-0" => array('type' => "N",'friendly' => "# deaths while anti-tank"),

"kdt-1" => array('type' => "N",'friendly' => "# deaths while assault"),

"kdt-2" => array('type' => "N",'friendly' => "# deaths while engineer"),

"kdt-3" => array('type' => "N",'friendly' => "# deaths while medic"),

"kdt-4" => array('type' => "N",'friendly' => "# deaths while spec-ops"),

"kdt-5" => array('type' => "N",'friendly' => "# deaths while support"),

"kdt-6" => array('type' => "N",'friendly' => "# deaths while sniper"),

"kkd-0" => array('type' => "R",'friendly' => "Kill:death ratio while anti-tank"),

"kkd-1" => array('type' => "R",'friendly' => "Kill:death ratio while assault"),

"kkd-2" => array('type' => "R",'friendly' => "Kill:death ratio while engineer"),

"kkd-3" => array('type' => "R",'friendly' => "Kill:death ratio while medic"),

"kkd-4" => array('type' => "R",'friendly' => "Kill:death ratio while spec-ops"),

"kkd-5" => array('type' => "R",'friendly' => "Kill:death ratio while support"),

"kkd-6" => array('type' => "R",'friendly' => "Kill:death ratio while sniper"),

"kkl-0" => array('type' => "N",'friendly' => "# kills while anti-tank"),

"kkl-1" => array('type' => "N",'friendly' => "# kills while assault"),

"kkl-2" => array('type' => "N",'friendly' => "# kills while engineer"),

"kkl-3" => array('type' => "N",'friendly' => "# kills while medic"),

"kkl-4" => array('type' => "N",'friendly' => "# kills while spec-ops"),

"kkl-5" => array('type' => "N",'friendly' => "# kills while support"),

"kkl-6" => array('type' => "N",'friendly' => "# kills while sniper"),

"ktm-0" => array('type' => "E",'friendly' => "Time played while anti-tank"),

"ktm-1" => array('type' => "E",'friendly' => "Time played while assault"),

"ktm-2" => array('type' => "E",'friendly' => "Time played while engineer"),

"ktm-3" => array('type' => "E",'friendly' => "Time played while medic"),

"ktm-4" => array('type' => "E",'friendly' => "Time played while spec-ops"),

"ktm-5" => array('type' => "E",'friendly' => "Time played while support"),

"ktm-6" => array('type' => "E",'friendly' => "Time played while sniper"),

"mbs-0" => array('type' => "N",'friendly' => "Best round score on Kubra Dam"),

"mbs-1" => array('type' => "N",'friendly' => "Best round score on Mashtuur City"),

"mbs-2" => array('type' => "N",'friendly' => "Best round score on Operation Clean Sweep"),

"mbs-3" => array('type' => "N",'friendly' => "Best round score on Zatar Wetlands"),

"mbs-4" => array('type' => "N",'friendly' => "Best round score on Strike at Karkand"),

"mbs-5" => array('type' => "N",'friendly' => "Best round score on Sharqi Peninsula"),

"mbs-6" => array('type' => "N",'friendly' => "Best round score on Gulf of Oman"),

"mbs-100" => array('type' => "N",'friendly' => "Best round score on Daqing Oilfields"),

"mbs-101" => array('type' => "N",'friendly' => "Best round score on Dalian Plant"),

"mbs-102" => array('type' => "N",'friendly' => "Best round score on Dragon Valley"),

"mbs-103" => array('type' => "N",'friendly' => "Best round score on FuShe Pass (The Glowing Pass?)"),

"mbs-105" => array('type' => "N",'friendly' => "Best round score on Songhua Stalemate"),

"mbs-300" => array('type' => "N",'friendly' => "Best round score on Devils Perch"),

"mbs-301" => array('type' => "N",'friendly' => "Best round score on Iron Gator"),

"mbs-302" => array('type' => "N",'friendly' => "Best round score on Night Flight"),

"mbs-303" => array('type' => "N",'friendly' => "Best round score on Warlord"),

"mbs-304" => array('type' => "N",'friendly' => "Best round score on Leviathan"),

"mbs-305" => array('type' => "N",'friendly' => "Best round score on Mass Destruction"),

"mbs-306" => array('type' => "N",'friendly' => "Best round score on Surge"),

"mbs-307" => array('type' => "N",'friendly' => "Best round score on Ghost Town"),

"mbs-601" => array('type' => "N",'friendly' => "Best round score on Wake Island 2007"),

// added by mng for custom stats

"mws-1" => array('type' => "N",'friendly' => "Worst round score on Mashtuur City"),

"mws-2" => array('type' => "N",'friendly' => "Worst round score on Operation Clean Sweep"),

"mws-3" => array('type' => "N",'friendly' => "Worst round score on Zatar Wetlands"),

"mws-4" => array('type' => "N",'friendly' => "Worst round score on Strike at Karkand"),

"mws-5" => array('type' => "N",'friendly' => "Worst round score on Sharqi Peninsula"),

"mws-6" => array('type' => "N",'friendly' => "Worst round score on Gulf of Oman"),

"mws-100" => array('type' => "N",'friendly' => "Worst round score on Daqing Oilfields"),

"mws-101" => array('type' => "N",'friendly' => "Worst round score on Dalian Plant"),

"mws-102" => array('type' => "N",'friendly' => "Worst round score on Dragon Valley"),

"mws-103" => array('type' => "N",'friendly' => "Worst round score on FuShe Pass (The Glowing Pass?)"),

"mws-105" => array('type' => "N",'friendly' => "Worst round score on Songhua Stalemate"),

"mws-300" => array('type' => "N",'friendly' => "Worst round score on Devils Perch"),

"mws-301" => array('type' => "N",'friendly' => "Worst round score on Iron Gator"),

"mws-302" => array('type' => "N",'friendly' => "Worst round score on Night Flight"),

"mws-303" => array('type' => "N",'friendly' => "Worst round score on Warlord"),

"mws-304" => array('type' => "N",'friendly' => "Worst round score on Leviathan"),

"mws-305" => array('type' => "N",'friendly' => "Worst round score on Mass Destruction"),

"mws-306" => array('type' => "N",'friendly' => "Worst round score on Surge"),

"mws-307" => array('type' => "N",'friendly' => "Worst round score on Ghost Town"),

"mws-601" => array('type' => "N",'friendly' => "Worst round score on Wake Island 2007"),

/***************************************************************************************/

"mcm-0" => array('type' => "N",'friendly' => "# completed on Kubra Dam"),

"mcm-1" => array('type' => "N",'friendly' => "# completed on Mashtuur City"),

"mcm-2" => array('type' => "N",'friendly' => "# completed on Operation Clean Sweep"),

"mcm-3" => array('type' => "N",'friendly' => "# completed on Zatar Wetlands"),

"mcm-4" => array('type' => "N",'friendly' => "# completed on Strike at Karkand"),

"mcm-5" => array('type' => "N",'friendly' => "# completed on Sharqi Peninsula"),

"mcm-6" => array('type' => "N",'friendly' => "# completed on Gulf of Oman"),

"mcm-100" => array('type' => "N",'friendly' => "# completed on Daqing Oilfields"),

"mcm-101" => array('type' => "N",'friendly' => "# completed on Dalian Plant"),

"mcm-102" => array('type' => "N",'friendly' => "# completed on Dragon Valley"),

"mcm-103" => array('type' => "N",'friendly' => "# completed on FuShe Pass (The Glowing Pass?)"),

"mcm-105" => array('type' => "N",'friendly' => "# completed on Songhua Stalemate"),

"mcm-300" => array('type' => "N",'friendly' => "# completed on Devils Perch"),

"mcm-301" => array('type' => "N",'friendly' => "# completed on Iron Gator"),

"mcm-302" => array('type' => "N",'friendly' => "# completed on Night Flight"),

"mcm-303" => array('type' => "N",'friendly' => "# completed on Warlord"),

"mcm-304" => array('type' => "N",'friendly' => "# completed on Leviathan"),

"mcm-305" => array('type' => "N",'friendly' => "# completed on Mass Destruction"),

"mcm-306" => array('type' => "N",'friendly' => "# completed on Surge"),

"mcm-307" => array('type' => "N",'friendly' => "# completed on Ghost Town"),

"mcm-601" => array('type' => "N",'friendly' => "# completed on Wake Island 2007"),

"mic-0" => array('type' => "N",'friendly' => "# incomplete on Kubra Dam"),

"mic-1" => array('type' => "N",'friendly' => "# incomplete on Mashtuur City"),

"mic-2" => array('type' => "N",'friendly' => "# incomplete on Operation Clean Sweep"),

"mic-3" => array('type' => "N",'friendly' => "# incomplete on Zatar Wetlands"),

"mic-4" => array('type' => "N",'friendly' => "# incomplete on Strike at Karkand"),

"mic-5" => array('type' => "N",'friendly' => "# incomplete on Sharqi Peninsula"),

"mic-6" => array('type' => "N",'friendly' => "# incomplete on Gulf of Oman"),

"mic-100" => array('type' => "N",'friendly' => "# incomplete on Daqing Oilfields"),

"mic-101" => array('type' => "N",'friendly' => "# incomplete on Dalian Plant"),

"mic-102" => array('type' => "N",'friendly' => "# incomplete on Dragon Valley"),

"mic-103" => array('type' => "N",'friendly' => "# incomplete on FuShe Pass (The Glowing Pass?)"),

"mic-105" => array('type' => "N",'friendly' => "# incomplete on Songhua Stalemate"),

"mic-300" => array('type' => "N",'friendly' => "# incomplete on Devils Perch"),

"mic-301" => array('type' => "N",'friendly' => "# incomplete on Iron Gator"),

"mic-302" => array('type' => "N",'friendly' => "# incomplete on Night Flight"),

"mic-303" => array('type' => "N",'friendly' => "# incomplete on Warlord"),

"mic-304" => array('type' => "N",'friendly' => "# incomplete on Leviathan"),

"mic-305" => array('type' => "N",'friendly' => "# incomplete on Mass Destruction"),

"mic-306" => array('type' => "N",'friendly' => "# incomplete on Surge"),

"mic-307" => array('type' => "N",'friendly' => "# incomplete on Ghost Town"),

"mic-601" => array('type' => "N",'friendly' => "# incomplete on Wake Island 2007"),

"mls-0" => array('type' => "N",'friendly' => "# losses on Kubra Dam"),

"mls-1" => array('type' => "N",'friendly' => "# losses on Mashtuur City"),

"mls-2" => array('type' => "N",'friendly' => "# losses on Operation Clean Sweep"),

"mls-3" => array('type' => "N",'friendly' => "# losses on Zatar Wetlands"),

"mls-4" => array('type' => "N",'friendly' => "# losses on Strike at Karkand"),

"mls-5" => array('type' => "N",'friendly' => "# losses on Sharqi Peninsula"),

"mls-6" => array('type' => "N",'friendly' => "# losses on Gulf of Oman"),

"mls-100" => array('type' => "N",'friendly' => "# losses on Daqing Oilfields"),

"mls-101" => array('type' => "N",'friendly' => "# losses on Dalian Plant"),

"mls-102" => array('type' => "N",'friendly' => "# losses on Dragon Valley"),

"mls-103" => array('type' => "N",'friendly' => "# losses on FuShe Pass (The Glowing Pass?)"),

"mls-105" => array('type' => "N",'friendly' => "# losses on Songhua Stalemate"),

"mls-300" => array('type' => "N",'friendly' => "# losses on Devils Perch"),

"mls-301" => array('type' => "N",'friendly' => "# losses on Iron Gator"),

"mls-302" => array('type' => "N",'friendly' => "# losses on Night Flight"),

"mls-303" => array('type' => "N",'friendly' => "# losses on Warlord"),

"mls-304" => array('type' => "N",'friendly' => "# losses on Leviathan"),

"mls-305" => array('type' => "N",'friendly' => "# losses on Mass Destruction"),

"mls-306" => array('type' => "N",'friendly' => "# losses on Surge"),

"mls-307" => array('type' => "N",'friendly' => "# losses on Ghost Town"),

"mls-601" => array('type' => "N",'friendly' => "# losses on Wake Island 2007"),

"mtm-0" => array('type' => "E",'friendly' => "Time on Kubra Dam"),

"mtm-1" => array('type' => "E",'friendly' => "Time on Mashtuur City"),

"mtm-2" => array('type' => "E",'friendly' => "Time on Operation Clean Sweep"),

"mtm-3" => array('type' => "E",'friendly' => "Time on Zatar Wetlands"),

"mtm-4" => array('type' => "E",'friendly' => "Time on Strike at Karkand"),

"mtm-5" => array('type' => "E",'friendly' => "Time on Sharqi Peninsula"),

"mtm-6" => array('type' => "E",'friendly' => "Time on Gulf of Oman"),

"mtm-100" => array('type' => "E",'friendly' => "Time on Daqing Oilfields"),

"mtm-101" => array('type' => "E",'friendly' => "Time on Dalian Plant"),

"mtm-102" => array('type' => "E",'friendly' => "Time on Dragon Valley"),

"mtm-103" => array('type' => "E",'friendly' => "Time on FuShe Pass (The Glowing Pass?)"),

"mtm-105" => array('type' => "E",'friendly' => "Time on Songhua Stalemate"),

"mtm-300" => array('type' => "E",'friendly' => "Time on Devils Perch"),

"mtm-301" => array('type' => "E",'friendly' => "Time on Iron Gator"),

"mtm-302" => array('type' => "E",'friendly' => "Time on Night Flight"),

"mtm-303" => array('type' => "E",'friendly' => "Time on Warlord"),

"mtm-304" => array('type' => "E",'friendly' => "Time on Leviathan"),

"mtm-305" => array('type' => "E",'friendly' => "Time on Mass Destruction"),

"mtm-306" => array('type' => "E",'friendly' => "Time on Surge"),

"mtm-307" => array('type' => "E",'friendly' => "Time on Ghost Town"),

"mtm-601" => array('type' => "E",'friendly' => "Time on Wake Island 2007"),

"mwn-0" => array('type' => "N",'friendly' => "# wins on Kubra Dam"),

"mwn-1" => array('type' => "N",'friendly' => "# wins on Mashtuur City"),

"mwn-2" => array('type' => "N",'friendly' => "# wins on Operation Clean Sweep"),

"mwn-3" => array('type' => "N",'friendly' => "# wins on Zatar Wetlands"),

"mwn-4" => array('type' => "N",'friendly' => "# wins on Strike at Karkand"),

"mwn-5" => array('type' => "N",'friendly' => "# wins on Sharqi Peninsula"),

"mwn-6" => array('type' => "N",'friendly' => "# wins on Gulf of Oman"),

"mwn-100" => array('type' => "N",'friendly' => "# wins on Daqing Oilfields"),

"mwn-101" => array('type' => "N",'friendly' => "# wins on Dalian Plant"),

"mwn-102" => array('type' => "N",'friendly' => "# wins on Dragon Valley"),

"mwn-103" => array('type' => "N",'friendly' => "# wins on FuShe Pass (The Glowing Pass?)"),

"mwn-105" => array('type' => "N",'friendly' => "# wins on Songhua Stalemate"),

"mwn-300" => array('type' => "N",'friendly' => "# wins on  Devils Perch"),

"mwn-301" => array('type' => "N",'friendly' => "# wins on  Iron Gator"),

"mwn-302" => array('type' => "N",'friendly' => "# wins on  Night Flight"),

"mwn-303" => array('type' => "N",'friendly' => "# wins on  Warlord"),

"mwn-304" => array('type' => "N",'friendly' => "# wins on  Leviathan"),

"mwn-305" => array('type' => "N",'friendly' => "# wins on  Mass Destruction"),

"mwn-306" => array('type' => "N",'friendly' => "# wins on  Surge"),

"mwn-307" => array('type' => "N",'friendly' => "# wins on  Ghost Town"),

"mwn-601" => array('type' => "N",'friendly' => "# wins on Wake Island 2007"),

/*

"svr-0" => array('type' => "S",'friendly' => "0 Server IP or name"),

"svr-1" => array('type' => "S",'friendly' => "1 Server IP or name"),

"svr-2" => array('type' => "S",'friendly' => "2 Server IP or name"),

"svr-3" => array('type' => "S",'friendly' => "3 Server IP or name"),

"svr-4" => array('type' => "S",'friendly' => "4 Server IP or name"),

"svr-5" => array('type' => "S",'friendly' => "5 Server IP or name"),

"svr-6" => array('type' => "S",'friendly' => "6 Server IP or name"),

"svr-7" => array('type' => "S",'friendly' => "7 Server IP or name"),

"svr-8" => array('type' => "S",'friendly' => "8 Server IP or name"),

"svr-9" => array('type' => "S",'friendly' => "9 Server IP or name"), */



"vdt-0" => array('type' => "N",'friendly' => "# deaths by armor"),

"vdt-1" => array('type' => "N",'friendly' => "# deaths by aviator"),

"vdt-2" => array('type' => "N",'friendly' => "# deaths by air defense"),

"vdt-3" => array('type' => "N",'friendly' => "# deaths by helicopter"),

"vdt-4" => array('type' => "N",'friendly' => "# deaths by transport"),

"vdt-5" => array('type' => "N",'friendly' => "# deaths by artillery"),

"vdt-6" => array('type' => "N",'friendly' => "# deaths by ground defense"),

"vkl-0" => array('type' => "N",'friendly' => "# kills with armor"),

"vkl-1" => array('type' => "N",'friendly' => "# kills with aviator"),

"vkl-2" => array('type' => "N",'friendly' => "# kills with air defense"),

"vkl-3" => array('type' => "N",'friendly' => "# kills with helicopter"),

"vkl-4" => array('type' => "N",'friendly' => "# kills with transport"),

"vkl-5" => array('type' => "N",'friendly' => "# kills with artillery"),

"vkl-6" => array('type' => "N",'friendly' => "# kills with ground defense"),

"vkr-0" => array('type' => "N",'friendly' => "# roadkills with armor"),

"vkr-1" => array('type' => "N",'friendly' => "# roadkills with aviator"),

"vkr-2" => array('type' => "N",'friendly' => "# roadkills with air defense"),

"vkr-3" => array('type' => "N",'friendly' => "# roadkills with helicopter"),

"vkr-4" => array('type' => "N",'friendly' => "# roadkills with transport"),

"vkr-5" => array('type' => "N",'friendly' => "# roadkills with artillery"),

"vkr-6" => array('type' => "N",'friendly' => "# roadkills with ground defense"),

"vtm-0" => array('type' => "E",'friendly' => "Time using armor"),

"vtm-1" => array('type' => "E",'friendly' => "Time using aviator"),

"vtm-2" => array('type' => "E",'friendly' => "Time using air defense"),

"vtm-3" => array('type' => "E",'friendly' => "Time using helicopter"),

"vtm-4" => array('type' => "E",'friendly' => "Time using transport"),

"vtm-5" => array('type' => "E",'friendly' => "Time using artillery"),

"vtm-6" => array('type' => "E",'friendly' => "Time using ground defense"),

"vac-0" => array('type' => "%",'friendly' => "Accuracy with armor"),

"vac-1" => array('type' => "%",'friendly' => "Accuracy with aviator"),

"vac-2" => array('type' => "%",'friendly' => "Accuracy with air defense"),

"vac-3" => array('type' => "%",'friendly' => "Accuracy with helicopter"),

"vac-4" => array('type' => "%",'friendly' => "Accuracy with transport"),

"vac-5" => array('type' => "%",'friendly' => "Accuracy with artillery"),

"vac-6" => array('type' => "%",'friendly' => "Accuracy with ground defense"),

"vkd-0" => array('type' => "R",'friendly' => "Kill:death ratio using armor"),

"vkd-1" => array('type' => "R",'friendly' => "Kill:death ratio using aviator"),

"vkd-2" => array('type' => "R",'friendly' => "Kill:death ratio using air defense"),

"vkd-3" => array('type' => "R",'friendly' => "Kill:death ratio using helicopter"),

"vkd-4" => array('type' => "R",'friendly' => "Kill:death ratio using transport"),

"vkd-5" => array('type' => "R",'friendly' => "Kill:death ratio using artillery"),

"vkd-6" => array('type' => "R",'friendly' => "Kill:death ratio using ground defense"),

"wac-0" => array('type' => "%",'friendly' => "Accuracy with assault rifles"),

"wac-1" => array('type' => "%",'friendly' => "Accuracy with assault w/ grenade launcher"),

"wac-2" => array('type' => "%",'friendly' => "Accuracy with carbines"),

"wac-3" => array('type' => "%",'friendly' => "Accuracy with light machine guns"),

"wac-4" => array('type' => "%",'friendly' => "Accuracy with sniper rifles"),

"wac-5" => array('type' => "%",'friendly' => "Accuracy with pistols"),

"wac-6" => array('type' => "%",'friendly' => "Accuracy with AT/AA"),

"wac-7" => array('type' => "%",'friendly' => "Accuracy with submachine guns"),

"wac-8" => array('type' => "%",'friendly' => "Accuracy with shotguns"),

"wac-9" => array('type' => "%",'friendly' => "Accuracy with knife"),

"wac-10" => array('type' => "%",'friendly' => "Accuracy with defibrillator"),

"wac-11" => array('type' => "%",'friendly' => "Accuracy with explosives (C4; claymore; AT mine)"),

"wac-12" => array('type' => "%",'friendly' => "Accuracy with hand grenade"),

"wac-13" => array('type' => "%",'friendly' => "Accuracy with Crossbow"),

"wdt-0" => array('type' => "N",'friendly' => "# deaths by assault rifles"),

"wdt-1" => array('type' => "N",'friendly' => "# deaths by assault w/ grenade launcher"),

"wdt-2" => array('type' => "N",'friendly' => "# deaths by carbines"),

"wdt-3" => array('type' => "N",'friendly' => "# deaths by light machine guns"),

"wdt-4" => array('type' => "N",'friendly' => "# deaths by sniper rifles"),

"wdt-5" => array('type' => "N",'friendly' => "# deaths by pistols"),

"wdt-6" => array('type' => "N",'friendly' => "# deaths by AT/AA"),

"wdt-7" => array('type' => "N",'friendly' => "# deaths by submachine guns"),

"wdt-8" => array('type' => "N",'friendly' => "# deaths by shotguns"),

"wdt-9" => array('type' => "N",'friendly' => "# deaths by knife"),

"wdt-10" => array('type' => "N",'friendly' => "# deaths by defibrillator"),

"wdt-11" => array('type' => "N",'friendly' => "# deaths by explosives (C4; claymore; AT mine)"),

"wdt-12" => array('type' => "N",'friendly' => "# deaths by hand grenade"),

"wdt-13" => array('type' => "N",'friendly' => "# deaths by Crossbow"),

"wkl-0" => array('type' => "N",'friendly' => "# kills with assault rifles"),

"wkl-1" => array('type' => "N",'friendly' => "# kills with assault w/ grenade launcher"),

"wkl-2" => array('type' => "N",'friendly' => "# kills with carbines"),

"wkl-3" => array('type' => "N",'friendly' => "# kills with light machine guns"),

"wkl-4" => array('type' => "N",'friendly' => "# kills with sniper rifles"),

"wkl-5" => array('type' => "N",'friendly' => "# kills with pistols"),

"wkl-6" => array('type' => "N",'friendly' => "# kills with AT/AA"),

"wkl-7" => array('type' => "N",'friendly' => "# kills with submachine guns"),

"wkl-8" => array('type' => "N",'friendly' => "# kills with shotguns"),

"wkl-9" => array('type' => "N",'friendly' => "# kills with knife"),

"wkl-10" => array('type' => "N",'friendly' => "# kills with defibrillator"),

"wkl-11" => array('type' => "N",'friendly' => "# kills with explosives (C4; claymore; AT mine)"),

"wkl-12" => array('type' => "N",'friendly' => "# kills with hand grenade"),

"wkl-13" => array('type' => "N",'friendly' => "# kills with Crossbow"),

"wtm-0" => array('type' => "E",'friendly' => "Time using assault rifles"),

"wtm-1" => array('type' => "E",'friendly' => "Time using assault w/ grenade launcher"),

"wtm-2" => array('type' => "E",'friendly' => "Time using carbines"),

"wtm-3" => array('type' => "E",'friendly' => "Time using light machine guns"),

"wtm-4" => array('type' => "E",'friendly' => "Time using sniper rifles"),

"wtm-5" => array('type' => "E",'friendly' => "Time using pistols"),

"wtm-6" => array('type' => "E",'friendly' => "Time using AT/AA"),

"wtm-7" => array('type' => "E",'friendly' => "Time using submachine guns"),

"wtm-8" => array('type' => "E",'friendly' => "Time using shotguns"),

"wtm-9" => array('type' => "E",'friendly' => "Time using knife"),

"wtm-10" => array('type' => "E",'friendly' => "Time using defibrillator"),

"wtm-11" => array('type' => "E",'friendly' => "Time using explosives (C4; claymore; AT mine)"),

"wtm-12" => array('type' => "E",'friendly' => "Time using hand grenade"),

"wtm-13" => array('type' => "E",'friendly' => "Time using Crossbow"),

"wkd-0" => array('type' => "R",'friendly' => "Kill:death ratio using assault rifles"),

"wkd-1" => array('type' => "R",'friendly' => "Kill:death ratio using assault w/ grenade launcher"),

"wkd-2" => array('type' => "R",'friendly' => "Kill:death ratio using carbines"),

"wkd-3" => array('type' => "R",'friendly' => "Kill:death ratio using light machine guns"),

"wkd-4" => array('type' => "R",'friendly' => "Kill:death ratio using sniper rifles"),

"wkd-5" => array('type' => "R",'friendly' => "Kill:death ratio using pistols"),

"wkd-6" => array('type' => "R",'friendly' => "Kill:death ratio using AT/AA"),

"wkd-7" => array('type' => "R",'friendly' => "Kill:death ratio using submachine guns"),

"wkd-8" => array('type' => "R",'friendly' => "Kill:death ratio using shotguns"),

"wkd-9" => array('type' => "R",'friendly' => "Kill:death ratio using knife"),

"wkd-10" => array('type' => "R",'friendly' => "Kill:death ratio using defibrillator"),

"wkd-11" => array('type' => "R",'friendly' => "Kill:death ratio using explosives (C4; claymore; AT mine)"),

"wkd-12" => array('type' => "R",'friendly' => "Kill:death ratio using hand grenade"),

"wkd-13" => array('type' => "R",'friendly' => "Kill:death ratio using Crossbow"),

// added for custom stats

"mng-1" => array('type' => "E",'friendly' => "Time using c4"),

"mng-2" => array('type' => "E",'friendly' => "Time using claymore"),

"mng-3" => array('type' => "E",'friendly' => "Time using  at mine"),

"mng-4" => array('type' => "E",'friendly' => "Time using  tactical (flashbang)"),

"mng-5" => array('type' => "E",'friendly' => "Time using  grapplinghook"),

"mng-6" => array('type' => "E",'friendly' => "Time using  Crossbow"),

"mng-7" => array('type' => "N",'friendly' => "# kills with c4"),

"mng-8" => array('type' => "N",'friendly' => "# kills with claymore"),

"mng-9" => array('type' => "N",'friendly' => "# kills with at mine"),

"mng-10" => array('type' => "N",'friendly' => "# deaths by c4"),

"mng-11" => array('type' => "N",'friendly' => "# deaths by claymore"),

"mng-12" => array('type' => "N",'friendly' => "# deaths by at mine"),

"mng-13" => array('type' => "N",'friendly' => "# deaths by Crossbow"),

"mng-14" => array('type' => "N",'friendly' => "# deaths by grapplinghook"),

"mng-15" => array('type' => "N",'friendly' => "tacticaldeployed"),

"mng-16" => array('type' => "N",'friendly' => "grapplinghookdeployed"),

"mng-17" => array('type' => "N",'friendly' => "ziplinedeployed"),

"mng-18" => array('type' => "N",'friendly' => "c4fired"),

"mng-19" => array('type' => "N",'friendly' => "claymorefired"),

"mng-20" => array('type' => "N",'friendly' => "atminefired"),

"mng-21" => array('type' => "N",'friendly' => "c4hit"),

"mng-22" => array('type' => "N",'friendly' => "claymorehit"),

"mng-23" => array('type' => "N",'friendly' => "atminehit"),

"mng-24" => array('type' => "N",'friendly' => "player country")

);



?>

