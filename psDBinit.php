<?php

$WhichHost = 1;

//----------------------------------------------------------------------------------------------------------
// function to set host variables for connection
//----------------------------------------------------------------------------------------------------------
function setHostVariables($HostID, &$host, &$user, &$password)
{
	switch ($HostID)
	{
		case 1:
			$host = "localhost";
			$user = "tarryc";
			$password = "janetc";
			break;
			
		case 2:
			$host = "localhost";
			$user = "tarryc";
			$password = "janetc";
			break;
			
		case 3:
			$host = "localhost";
			$user = "tarryc";
			$password = "janetc";
			break;
			
		case 4:
			$host = "family";
			$user = "tarryc";
			$password = "janetc";
			break;	
	}			
	
}  // end of func

$DataBase = "PhotoDB";

setHostVariables($WhichHost, $host, $user, $password);

// open connection to host
$conn = mysql_connect($host, $user, $password);
if (!$conn) 
{
	$sqlerr = mysql_error();
	$errmsg = "$sqlerr - Error doing mysql_query for connect to PhotoDB  (1110) - '$filename'";
	$shortmsg = $errmsg;
	$location = "Location: index.php?selectID=$selectID&msgTxt=$DisplayMsg&photofilename=$filename&filter=$filter";
	$severity = 1;
	LogErr($shortmsg, $errmsg, $location, $module, $severity);		
}

// pick the database to use
if (!mysql_select_db($DataBase, $conn)) 
{
	$sqlerr = mysql_error();
	$errmsg = "$sqlerr - Error doing mysql_query for connect to PhotoDB  (1100) - '$filename'";
	$shortmsg = $errmsg;
	$location = "Location: index.php?selectID=$selectID&msgTxt=$DisplayMsg&photofilename=$filename&filter=$filter";
	$severity = 1;
	LogErr($shortmsg, $errmsg, $location, $module, $severity);		
}	
?>
