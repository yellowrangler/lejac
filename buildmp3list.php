<?php

//----------------------------------------------------------------------------------------------
// Get mp3 stuff from db
//----------------------------------------------------------------------------------------------
$body = "SELECT MusicMasterTBL.ID as MMid, FileName, SongTitle, Artist, Album, Track, SongYear,
				GenreID, MusicGenreTBL.ID as MGid, Genre, FileSize
				from MusicMasterTBL 
					left join MusicGenreTBL on MusicMasterTBL.GenreID = MusicGenreTBL.ID";
//
// start building where clause
//
$whereset = 0;
$where = "";

if ( isset($edittags) and ($edittags == 'Y') )
{
	if ($mp3tagFltr != "") 
	{
		if ($whereset == 0)
		{
			$whereset = 1;
			switch ($mp3tagFltr)
			{
				case "$EmptyTag":		
					$where = " where (Artist = '$EmptyTag') ";
					break;
					
				case "$JustTag":		
					$where = " where (Artist != '$EmptyTag') ";
					break;
					
				case "$AllTag":		
					$whereset = 0;
					break;	
			} // end of switch		
		}
	}	
}
else
{
	if (($mp3genreFltr != "") && ($mp3genreFltr != "-1"))
	{
		if ($whereset == 0)
		{
			$whereset = 1;
			$where = " where (GenreID = '$mp3genreFltr') ";
		}
		else
		{
		
			$where .= " and	(GenreID = '$mp3genreFltr') ";
		}
	}	
}

if ($search != "")
{
	if ($whereset == 0)
	{
		$whereset = 1;
		$where = " where ( (SongTitle like '%$search%') OR
							(Artist like '%$search%') OR
							(Album like '%$search%') 
						)";
	}
	else
	{
		$where .= " and	( (SongTitle like '%$search%') OR
							(Artist like '%$search%') OR
							(Album like '%$search%') 
						)";
	}	
}	

//
// build sort clause
//
$sort = " order by ";
switch ($mp3SortType)
{
	case 'T':
		$sort .= "SongTitle";
		break;
		
	case 'A':
		$sort .= "Artist";
		break;
		
	case 'L':
		$sort .= "Album";
		break;
		
	case 'G':
		$sort .= "Genre";
		break;	
		
	default:
		$sort .= " Album, Track";
		break;

} // end of switch 

$sql = $body.$where.$sort;				

//echo "sql = '$sql'";
//exit;

//----------------------------------------------------------------------------------------------------------
// Make the call
//----------------------------------------------------------------------------------------------------------
if (!$sql_result = mysql_query($sql, $conn))
{
	$sqlerr = mysql_error();
	$errmsg = "$sqlerr - Error doing mysql_query for MusicMasterTBL MusicGenreTBL  (110)";
	$shortmsg = $errmsg;
	$location .= "&msgTxt=$DisplayMsg";
	$severity = 1;
	LogErr($shortmsg, $errmsg, $location, $module, $severity);		
}

//----------------------------------------------------------------------------------------------------------
// initialize display block
//----------------------------------------------------------------------------------------------------------
$DisplayMusic = "";

//----------------------------------------------------------------------------------------------------------
// Now lets first see if there is anything to run through
//----------------------------------------------------------------------------------------------------------
$countRows = mysql_num_rows($sql_result);
if ($countRows >  0) 
{	
	$MusicListNbr = 0;
	
	// now lets run the table 
	while ($result_array = mysql_fetch_assoc($sql_result))
	{
		$MMid = $result_array[MMid];
		$mp3filename = $result_array[FileName];
		$Artist = $result_array[Artist];
		$Album = $result_array[Album];
		$SongTitle = $result_array[SongTitle];
		$Track = $result_array[Track];
		$SongYear = $result_array[SongYear];
		$Genre = $result_array[Genre];
		$filesize = $result_array[FileSize];
		
		$MusicListNbr = $MusicListNbr + 1;
		
		if ( isset($edittags) and ($edittags == 'Y') )
		{
			$DisplaySelect = "
			<td align=center width=\"5%\">
					<a href=\"".$productDir."if_edittagDetail.php?selectID=".$selectID."&mp3SortType=".$mp3SortType."&mp3tagFltr=".$mp3tagFltr."&search=".$search."&getMMid=".$MMid."\" target=\"edittagDetail\">
						<img border=0 height=15 src=\"".$productDir."images/first-transistor-radio.jpg\">
					</a>
				</td>
				";
		}
		else
		{
			$DisplaySelect = "
			<td align=center width=\"5%\">
					<input type=\"checkbox\" name=\"mp3select".$MusicListNbr."\" value=\"".$MMid."\">
				</td>
				";
		}	
		
		
		
		$DisplayMusic .= "
		<table cellpadding=0 cellspacing=0 width=\"100%\">
			<tr>
				".$DisplaySelect."
				
				<td align=left width=\"30%\">
					".substr($SongTitle, 0, 40)."
				</td>
			
				<td align=left  width=\"20%\">
					".$Artist."
				</td>
			
				<td align=left  width=\"15%\">
					".substr($Album, 0, 20)."
				</td>
			
				<td align=center  width=\"5%\">
					".$Track."
				</td>
			
				<td align=left  width=\"15%\">
					".$Genre."
				</td>
				<td align=left  width=\"10%\">
					".$filesize."
				</td>
			</tr>
		</table>	
		";
	}
}	
else
{
	$DisplayMusic .= "
		<table width=\"100%\">
			<tr>
				<td align=center>
					&nbsp;
				</td>
				
				<td align=left width=".$SongTitleSz.">
					".$SongTitle."
				</td>
			
				<td align=right width=".$ArtistSz.">
					".$Artist."
				</td>
				
				<td align=left width=".$AlbumSz.">
					".$Album."
				</td>
			
				<td align=center width=".$TrackSz.">
					".$Track."
				</td>
			
				<td align=right width=".$GenreSz.">
					".$Genre."
				</td>
				<td align=left >
					".$filesize."
				</td>
			</tr>
		</table>	
		";
}		

print $DisplayMusic; 

?>
