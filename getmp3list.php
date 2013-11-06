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

$dirname = $_POST[mp3dir]; 
$Nbr = 0;
$DisplayBody = "";

//
// read directory
//
$handle = opendir($dirname);
while ($filename = readdir($handle))
{
	if (filetype($dirname."/".$filename) != "file")
	{
		continue;
	}	

	$file = fopen($dirname."/".$filename, "rb"); 
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
		$title = htmlentities(fgets($file, 31), ENT_QUOTES); 
		$artist = htmlentities(fgets($file, 31), ENT_QUOTES); 
		$album = htmlentities(fgets($file, 31), ENT_QUOTES); 
		$year = htmlentities(fgets($file, 5), ENT_QUOTES); 
		$comm = htmlentities(fgets($file, 29), ENT_QUOTES); 
		$temp = htmlentities(fgets($file, 2), ENT_QUOTES); 
		
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
		
		$Nbr = $Nbr + 1;
		
		$filename = substr($filename, 0, 20);
		
		$DisplayBody .= "
		
		<tr>
			<td>$Nbr</td>
		
			<td>$filename</td>
		
			<td>$title</td>
		
			<td>$artist</td>
		
			<td>$album</td>
		
			<td>$year</td>
		
			<td>$comm</td>
		
			<td>$temp</td>
		
			<td>$track</td>
		
			<td>$genre</td>
		</tr>
		";
	  } 
	  else { 
		$DisplayBody .= "
		<tr>
			<td>$Nbr</td>
		
			<td>$filename</td>
		
			<td>Not found tag informations!</td>
		
			<td>&nbsp;</td>
		
			<td>&nbsp;</td>
		
			<td>&nbsp;</td>
		
			<td>&nbsp;</td>
		
			<td>&nbsp;</td>
		
			<td>&nbsp;</td>
		
			<td>&nbsp;</td>
		</tr>
		"; 
	  } 
	} 
	
	fclose($file); 
}

?>
<html>
<head>
<title>MP3 Return</title>
<style type="text/css">
.smallText {
		font: 500 9px Arial,Helvetica;
		}
</style>		
</head>
<body bgcolor=#ffffff>
</body>
<br>
<table class="smallText">
	<tr>
		<td>Nbr</td>
		
		<td>File Name</td>
	
		<td>Title</td>
	
		<td>Artist</td>
	
		<td>Album</td>
	
		<td>Year</td>
	
		<td>Comm</td>
	
		<td>Temp</td>
	
		<td>Track</td>
	
		<td>Genre</td>
	</tr>

	<?php print $DisplayBody; ?>
</table>	
</form>
</html>
