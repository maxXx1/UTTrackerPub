<?php

$gameTypes=array(
	"DM"=>"Deathmatch",
	"CTF"=>"Capture the flag",
	"TDM"=>"Team deathmatch",
	"Insta"=>"InstaGib",
	"Combo"=>"Combo InstaGib",
	"BT"=>"BunnyTrack",
	"MH"=>"MonsterHunt",
	"SGI"=>"Siege",
	"PUG"=>"Pick Up Game",
	"AS"=>"Assault",
	"LMS"=>"Last Man Standing",
	"DOM"=>"Domination",
	"FN"=>"Funnel",
	"Coop"=>"Co-op",
	"TH"=>"Thievery",
	"JB"=>"Jailbreak",
	"SH"=>"Scavenger Hunt",
	"SCR"=>"Soccer Tournament",
	"ALLWP"=>"All Weapons",
	"NW3"=>"NaliWeapons III",
	"Grapple"=>"Grapple",
	"Sniper"=>"Sniper",
	"RA"=>"Rocket Arena",
	"DEMO"=>"UT Demo",
	"TO"=>"~Tactical Ops",
	"ONS"=>"~Onslaught",
	"SV"=>"~Survival",
	"MutDJ"=>":Double Jump",
	"MutMV"=>":Map Vote",
	"MutRL"=>":Relics",
	"MutSCTF"=>":SmartCTF",
	"MutCP"=>":Checkpoints",
);
	
	
$btRecordSources=array(
	1=>array('name'=>"i4Games","url"=>"http://www.i4games.eu/","icon"=>"i4g.gif"),
	2=>array('name'=>"BunnyTrack.net","url"=>"http://www.bunnytrack.net/","icon"=>"btnet.png"),
);

$inventoryTypes=array(
	"Health"=>array('HealthVial'=>"Vial",'MedBox'=>"Pack",'HealthPack'=>"Big Keg",'NaliFruit'=>"Nali Fruit",'Bandages'=>"Bandages",'SuperHealth'=>"Super Health"),
	"Shield"=>array('UT_ShieldBelt'=>"Belt",'ShieldBelt'=>"Belt",'PowerShield'=>"Belt",'Armor2'=>"Armor",'Armor'=>"Armor",'ThighPads'=>"ThighPads"),
	"Others"=>array('UDamage'=>"Damage Amp","UT_Jumpboots"=>"Jump Boots","JumpBoots"=>"Jump Boots","SCUBAGear"=>"SCUBA Gear"),
	"Weapons"=>array(
		'ChainSaw'=>"Chainsaw",
		'Enforcer'=>"Enforcer",
		'ImpactHammer'=>"Impact Hammer",
		'Minigun2'=>"Minigun",
		'PulseGun'=>"Pulse Gun",
		'Ripper'=>"Ripper",
		'ShockRifle'=>"Shock Rifle",
		'SuperShockRifle'=>"SuperShock Rifle",
		'SniperRifle'=>"Sniper Rifle",
		'Translocator'=>"Translocator",
		'UT_BioRifle'=>"Bio Rifle",
		'UT_Eightball'=>"Rocket Launcher",
		'UT_FlakCannon'=>"Flak Cannon",
		'WarheadLauncher'=>"Redeemer"
	),
	"Oldskool Weapons"=>array(
		'FlakCannon'=>"Flak Cannon",
		'GESBioRifle'=>"BioRifle",
		'Minigun'=>"Minigun",
		'QuadShot'=>"Quad Shot",
		'RazorJack'=>"Razorjack",
		'Rifle'=>"Rifle",
		'ASMD'=>"ASMD",
		'AutoMag'=>"Automag",
		'DispersionPistol'=>"Dispersion Pistol",
		'Eightball'=>"Eightball Gun",
		'Stinger'=>"Stinger"
	),
	"Sin2UT Weapons"=>array(
		//sin2ut
		'SinShotgun'=>"Shotgun",
		'RocketLauncher'=>"Rocket Launcher",
		'ChainGun'=>"Chaingun",
		'TrueChainGun'=>"Chaingun",
		'ChainGunBeta'=>"Chaingun",
		'Magnum'=>"Magnum",
		'doubleMagnum'=>"Magnum",
		//chaosut
	),"ChaosUT Weapons"=>array(
		'CUTUG'=>"Utility Gun", 
		'CUTSG'=>"CAS12", 
		'sword'=>"Bastard Sword", 
		'Flak2'=>"The Claw" 
	),"Other Weapons"=>array(
		'tec9'=>"HaVoC Stinger",
		'Black'=>"HaVoC Stinger",
		'AuKIBubbleGun'=>"AuKI BubbleGun",
		'AAA_Auki_HayWirev2_LS'=>"AAA_Auki_HayWirev2_LS",
		'BOO'=>"AAA BOO Gun",
		'AAA_DigitalNeonRifleV2_LS'=>"AAA-Digital-Neon Rifle",
		'bonebar'=>"AAA-Digital-Flame-Rifle",
		'AAA_Micro_Mouse'=>"AAA_Micro_Mouse",
		'AAA_ElectroStatic'=>"AAA_SoulTaker",
		'AAA_SweetNSour'=>"AAA_SweetNSour_LS",
		'AAA_Wavemon_LS'=>"AAA_Wavemon_LS",
		'boneM4'=>"AAA_EnergyRifle_LS",
		'Red_Bomb'=>"Red Hot Bomb..",
		'NCSBinSlayer'=>"The TomyGunn",
		'NukeBlaster'=>"War's Nuke Blaster",
		'TraceNuker'=>"War's Trace Nuker",
		'War_Nuker'=>"War_Nuker",
		'War_SeekNuker'=>"War_SeekNuker",
		'Konglauncher'=>"RocketX6"
	)

);

$knownPackages=array(
	"UnrealEngine"=>array("Core","Engine"),
	"Unreal"=>array(
		"UnrealI","UnrealShare","UMenu","Fire",
		"AlfaFX","Ancient","Belt_Fx","BluffFX","Castle1","ChizraEFX","Credits","Crypt","DecayedS","Detail","DMeffects","Female1Skins","Female2Skins","FireEng","GenEarth","GenFluid","GenFX","GenIn","GenTerra","GenWarp","GreatFire","GreatFire2","HubEffects","ISVFX","Japanese","JWSky","Langs","LavaFX","Liquids","Male1Skins","Male2Skins","Male3Skins","MenuGr","Mine","NaliCast","NaliFX","OldWeaponsTex","Palettes","PlayrShp","Queen","Render","ShaneDay","ShaneSky","Skaarj","SkTrooperSkins","SkyBox","SkyCity","SpaceFX","Starship","TCrystal","Terranius","UBlueWindowFonts","UGoldCredits","UGreenWindowFonts","UPakFonts","URedWindowFonts","UWindowFonts","XFX",
		"Activates","AmbAncient","AmbModern","AmbOutside","DMatch","DoorsAnc","DoorsMod","EndSnd","Extro","Footsteps","Interm1","Interm10","Interm11","Interm12","Interm13","Interm14","Interm2","Interm3","Interm4","Interm5","Interm6","Interm7","Interm8","Interm9","IntroSnd2","Marine","OldWeaponsSounds","Scout","VRikers",
		"BeyondTheSun","Boundary","ChemRec","Chizra1","Crater","DigSh","Dusk","EndEx","Ending","EverSmoke","Fifth","Flyby","Found99","Fourth","Gala","Guardian","Hub2","Inter","Isotoxin","Journey","Kran2","Kran32","K_vision","Moroset","Mountain","Nali","Neve","Newmca13","Newmca16","Newmca7","Newmca9","Opal","QueenSong","Return","Sacred","Seti","SkyTwn","SpaceMarines","Spire","Starseek","Surface","Title","Twilight","Unreal4","UTemple","utend","Vortex","WarGate","Warlord","Watcher"),
	"Unreal Tournament"=>array(
		"Botpack","UTMenu",
		"LadderFonts","LadrArrow","LadrStatic","ArenaTex","BossSkins","city","Coret_FX","Creative","commandoskins","DacomaFem","Crypt2","Crypt_FX","CTF","DacomaSkins","DDayFX","Egypt","Faces","FCommandoSkins","eol","EgyptPan","FractalFX","FlareFX","GothFem","GothSkins","Indus5","Indus1","Indus2","Indus3","Indus4","Indus6","Indus7","Metalmys","Lian-X","Logo","of1","Old_FX","RainFX","PhraelFx","NivenFX","Scripted","SGirlSkins","ShaneChurch","RotatingU","Slums","Soldierskins","UTbase1","UTcrypt","TrenchesFX","UT","UTtech1","UTtech3","XbpFX","UT_ArtFX","Xtortion","UTtech2","tnalimeshskins","tcowmeshskins","xutfx","tskmskins","noxxpack",
		"Addon1","AmbCity","Announcer","DDay","BossVoice","Male1Voice","noxxsnd","FemaleSounds","Female2Voice","Female1Voice","Male2Voice","LadderSounds","MaleSounds","openingwave","Pan1","rain","TutVoiceCTF","TutVoiceAS","TutVoiceDM","TutVoiceDOM")
);

$rulesDescriptions=array(
	"adminemail"=>"Admin Email",
	"adminname"=>"Admin Name",
	"balanceteams"=>"Bots balance teams?",
	"bgameended"=>"Game ended?",
	"bovertime"=>"Overtime?",
	"changelevels"=>"Game changes the levels?",
	"countrys"=>"Server country;XSQ",
	"elapsedtime"=>"Elapsed time",
	"fraglimit"=>"Goal score",
	"friendlyfire"=>"Friendly fire",
	"gamemode"=>"GameSpy Gamemode",
	"gamename"=>"Game name",
	"gamestyle"=>"Game style",
	"gametype"=>"Game type",
	"gamever"=>"Game engine version",
	"goalteamscore"=>"Goal team score",
	"goalscore"=>"Goal score",
	"homepage"=>"Homepage",
	"hostname"=>"Server name",
	"hostport"=>"Game port",
	"idealplayercount"=>"Ideal player count",
	"listenserver"=>"In-game server?",
	"location"=>"Geographical location",
	"mapauthor"=>"Map author;XSQ",
	"mapname"=>"Map file",
	"maptitle"=>"Full map name",
	"maxplayers"=>"Server slots",
	"maxteams"=>"Number of teams",
	"minnetver"=>"Min. engine version",
	"minplayers"=>"Min. number of players",
	"monsterstotal"=>"Monsters left",
	"mutators"=>"Mutators",
	"netmode"=>"Type of server;XSQ",
	"numplayers"=>"Players online",
	"password"=>"Password protected?",
	"playersbalanceteams"=>"Force team balancing?",
	"protection"=>"Anticheat protection",
	"queryid"=>"GameSpy QueryId",
	"remainingtime"=>"Remaining time;XSQ",
	"teamname_^"=>"Team # name;XSQ",
	"teamscore_^"=>"Team # score;XSQ",
	"teamsize_^"=>"Team # size;XSQ",
	"timelimit"=>"Time limit",
	"tournament"=>"Tournament mode?",
	"spectators"=>"Spectators;XSQ",
	"worldlog"=>"World Stats Logging active?",
	"wantworldlog"=>"World Stats Logging supported?",
	"xserverquery"=>"XServerQuery version;XSQ",
	"__uttfirsttimetest"=>"ServerScannerWorker.firstTimeTest",
	"__uttgamecurrentid"=>"SaveGame.tryUpdateGameInfo().thisGameCurrentID",
	"__uttgamespeed"=>"ServerScannerWorker.caps.gameSpeed",
	"__uttgamestart"=>"SaveGame.tryUpdateGameInfo().timeGameStart",
	"__utthaspropertyinterface"=>"ServerScannerWorker.caps.hasPropertyInterface",
	"__uttlastupdate"=>"SaveGame.uttServerScanTime",
	"__uttrealplayers"=>"ServerScannerWorker.parseInfoExtended().incomingPacket(\"numplayers\")",
	"__uttspectators"=>"ServerScannerWorker.parseInfoExtended().incomingPacket(\"numspectators\")",
	"__utttimetestdelta"=>"ServerScannerWorker.secondTimeTest - ServerScannerWorker.firstTimeTest",
	"__utttimetestdeltalocal"=>"(ServerScannerWorker.secondTimeTestLocal - ServerScannerWorker.firstTimeTestLocal).TotalSeconds",
	"__utttimetestpassed"=>"ServerScannerWorker.caps.timeTestPassed",
	"__uttxserverquery"=>"ServerScannerWorker.caps.hasXSQ"
);
	
$rulesDetails=array(
	"balanceteams"=>"Bots can switch teams to keep the game balanced.",
	"gamemode"=>"Always \"openplaying\"",
	"listenserver"=>"True if server was set from game menu, False if it's dedicated.",
	"tournament"=>"Tournament mode game can be started only when all players have sent the 'ready' signal.",
);
?>