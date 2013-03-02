<?php

//----------------------------------------------------------------------------------------------------------
// first we make sure the cookie has been set
//----------------------------------------------------------------------------------------------------------
session_start();

//
// Login Types loose these later on
//
$WWBUser = 'W';
$AdminUser = 'A';
$PrivateUser = 'P';

//
// DB stuff
//
$DB = "WhippoorwillbridgeDB";

$selectID = $_POST[selectID];
$NextPage = "Location: /WWB/index.html?selectID=$selectID";

$WhichHost = $_SESSION[WhichHost];    

//---------------------------------------------------------------------------------------------------------- 
// Check for required fields
//----------------------------------------------------------------------------------------------------------
if ( (!isset($_POST[userid])) || (!isset($_POST[password])) )
{
	$errmsg = "Empty field $_POST[userid] $_POST[password]";
	$location = "Location: /WWB/index.html?msg=$errmsg&selectID=$selectID";
	LogErr($shortmsg, $errmsg, $location, $module, $severity);
}

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
			$host = "family";
			$user = "tarryc";
			$password = "janetc";
			break;		
	}			
}  // end of func

//----------------------------------------------------------------------------------------------------------
// LogErr funtion -- gets cur date time then writes errmsg to file.  Then displays msg to user. Then exit.
//----------------------------------------------------------------------------------------------------------
function LogErr($shortmsg, $errmsg, $location, $module, $severity)
{
	global $WhichHost;
	
	$time = time();
	$strDateTime = date("Y-m-d H:i:s", $time);
	$logname="../logs/errlog.log";
   
	$fp = fopen($logname, "a") or die("could not open $logname");
	$logmsg = "$strDateTime : $severity : $errmsg : $module : $WhichHost\n";
	fwrite($fp, $logmsg);
	fclose($fp);
	
	if ($location != "")
	{
		header($location);
		exit;
	}
	
} // end of LogErre func


//----------------------------------------------------------------------------------------------------------
// LogLogin funtion -- add people who login or try to login
//----------------------------------------------------------------------------------------------------------
function accessLog($msg, $module, $result)
{
	
	$time = time();
	$strDateTime = date("Y-m-d H:i:s", $time);
	$logname="../logs/access.log";
   
	$fp = fopen($logname, "a") or die("could not open $logname");
	$logmsg = "$strDateTime : $result : $msg : $module\n";
	fwrite($fp, $logmsg);
	fclose($fp);
	
} // end of LogErre func

 ?>
