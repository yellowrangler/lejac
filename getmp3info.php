<?php
// $mp3dir = "C:\\apachefriends\\xampp\\htdocs\\DDJB\Jazz\\";

//--- Tag Vars. 
$tag = ""; 
$title = ""; 
$artist = ""; 
$album = ""; 
$year = ""; 
$comm = ""; 
$track = ""; 
$genre = ""; 
$var = "";

$file = "";
$file_name = "";

$file_name = $_POST[mp3file]; 

//
// read tag
//
$file = fopen($file_name, "rb"); 
if($file == false) 
{ 
  echo "File is false"; 
} 
else 
{ 
  fseek($file, -128, SEEK_END);
  
  $tag = fgets($file, 4); 
  if($tag == 'TAG') 
  { 
	$title = fgets($file, 31); 
	$artist = fgets($file, 31); 
	$album = fgets($file, 31); 
	$year = fgets($file, 5); 
	$comm = fgets($file, 29); 
	$temp = fgets($file, 2); 
	$track = fgets($file, 2); 
	$track = hexdec(bin2hex($track)); 
	$genre = fgets($file, 2); 
	$genre = hexdec(bin2hex($genre)); 
	$genre_list = array("Blues","ClassicRock","Country","Dance","Disco","Funk","Grunge","HipHop","Jazz", 
	  "Metal","NewAge","Oldies","Other","Pop","R&B","Rap","Reggae","Rock","Techno", 
	  "Industrial","Alternative","Ska","DeathMetal","Pranks","Soundtrack","Euro-Techno", 
	  "Ambient","TripHop","Vocal","Jazz-Funk","Fusion","Trance","Classical","Instrumental", 
	  "Acid", "House", "Game", "SoundClip", "Gospel", "Noise", "Alt.Rock", "Bass", "Soul", "Punk", 
	  "Space", "Meditative", "InstrumentalPop", "InstrumentalRock", "Ethnic", "Gothic", "Darkwave", 
	  "Techno-Industrial", "Electronic", "Pop/Folk", "Eurodance", "Dream", "SouthernRock", "Comedy", 
	  "Cult", "GangstaRap", "Top40", "ChristianRap", "Pop/Funk", "Jungle", "NativeAmerican", "Cabaret", 
	  "NewWave", "Psychedelic", "Rave", "Showtunes", "Trailer", "Lo-fi", "Tribal", "AcidPunk", 
	  "AcidJazz", "Polka", "Retro", "Musical", "Rock'n'Roll", "HardRock", "Folk", "Folk/Rock", 
	  "NationalFolk","Swing", "FastFusion", "Bebob", "Latin", "Revival", "Celtic", "BlueGrass", 
	  "AvantGarde", "GothicRock", "ProgressiveRock", "PsychedelicRock", "SymphonicRock", 
	  "SlowRock", "BigBand", "Chorus", "EasyListening", "Acoustic", "Humour", "Speech", "Chanson", 
	  "Opera", "ChamberMusic", "Sonata", "Symphony", "BootyBass", "Primus", "PornGroove", "Satire", 
	  "SlowJam", "Club", "Tango", "Samba", "Folklore", "Ballad", "PowerBallad", "RhythmicSoul", 
	  "Freestyle", "Duet", "PunkRock", "DrumSolo", "Euro-House", "DanceHall", "Goa", "Drum&Bass", 
	  "Club-House", "Hardcore", "Terror", "Indie", "BritPop", "Negerpunk", "PolskPunk", "Beat", 
	  "ChristianGangstaRap", "HeavyMetal", "BlackMetal", "Crossover", "ContemporaryChristian", 
	  "ChristianRock", "Merengue", "Salsa", "ThrashMetal","Anime","JPop","SynthPop"); 
	$genre = @$genre_list[$genre]; 
	
	$DisplayBody = "
	<tr>
		<td>MP3 Title:</td>
		<td>$title</td>
	</tr>
	<tr>
		<td>MP3 Artist:</td>
		<td>$artist</td>
	</tr>
	<tr>
		<td>MP3 Album:</td>
		<td>$album</td>
	</tr>
	<tr>
		<td>MP3 Year:</td>
		<td>$year</td>
	</tr>
	<tr>
		<td>MP3 Comm:</td>
		<td>$comm</td>
	</tr>
	<tr>
		<td>MP3 Temp:</td>
		<td>$temp</td>
	</tr>
	<tr>
		<td>MP3 Track:</td>
		<td>$track</td>
	</tr>
	<tr>
		<td>MP3 Genre:</td>
		<td>$genre</td>
	</tr>
	";
  } 
  else { 
	$DisplayBody = "Not found tag informations!"; 
  } 
} 

fclose($file); 

?>
<html>
<head>
<title>MP3 Return</title>
</head>
<body bgcolor=#ffffff>
</body>
<br>
<table>
	<tr>
		<td>MP3 File Name:</td>
		<td><?php print $file_name; ?></td>
	</tr>
	<?php print $DisplayBody; ?>
</table>	
</form>
</html>
