<?php

//
// Parse out select 
//
if (isset($_GET[search]) && ($_GET[search] != ""))
{
	$search = $_GET[search];
}
else
{
	$search = "";
}

if (isset($_GET[sort]) && ($_GET[sort] != ""))
{
	$sort = $_GET[sort];
}
else
{
	$sort = "";
}

if (isset($_GET[select]) && ($_GET[select] != ""))
{
	$select = $_GET[select];
}
else
{
	$select = "";
}

if (isset($_GET[fromfilter]) && ($_GET[fromfilter] != ""))
{
	$fromfilter = $_GET[fromfilter];
}
else
{
	$fromfilter = "";
}

if (isset($_GET[clear]) && ($_GET[clear] == "Clear"))
{
	$search = "";
	$sort = "";
	$select = "";
	$fromfilter = "";
}

//
// Global variables
//
$dbName = "mailinputfolder";
$tblName = "email";
$spacer = "&nbsp;&nbsp;&nbsp;";

//
// Open the server connetcion
//
$link = mysql_connect('localhost', 'root', '');
if (!$link) 
{
   die('Could not connect: ' . mysql_error());
}

//
// select the database
//
mysql_select_db($dbName) or die('Could not select database'  . mysql_error());

//
// Get from name list for filter
//
$sql = "SELECT DISTINCT FromName FROM $tblName order by FromName";

//
// execute the query and check the results
//
$result = mysql_query($sql) or die('Query1 failed: ' . mysql_error() . 'SQL = ' . $sql);

//
// now get the list data
//
$DisplayFromfilter = "";

while ($row = mysql_fetch_assoc($result)) 
{
	$DisplayFromfilter .= "
		<option value=\"".trim($row[FromName])."\"> ".trim($row[FromName])."	
	";
} // end of while

//
// Get list to display emails to select from
//
$sql = "SELECT ID, FromName, Subject FROM $tblName";

//
// check for sort or search
//
if ($search != "")
{
	$sql .= " where (Subject like '%$search%') and (Body like '%$search%') ";
} 

if ($fromfilter != "")
{
	if ($search != "")
	{
		$sql .= " and (FromName = '$fromfilter') ";
	}
	else
	{	
		$sql .= " where (FromName = '$fromfilter') ";
	}	
} 

if ($sort != "")
{
	if ($sort == "fromname")
	{
		$sql .= " order by FromName ";
	}
	else if ($sort == "subject")
	{	
		$sql .= " order by Subject ";
	}
} // end of if sort

//
// execute the query and check the results
//
$result = mysql_query($sql) or die('Query1 failed: ' . mysql_error() . 'SQL = ' . $sql);

//
// now get the list data
//
$DisplayList = "";
$firstTime = 1;

while ($row = mysql_fetch_assoc($result)) 
{
	if ($select != "")
	{
		if ($firstTime == 1)
		{
			if ($row['ID'] !== $select)
				continue;
				
			$firstTime = 0;	
		}	
	}
	 
	$DisplayList .= "
	<tr style=\"background-color:#fffff;\" 
		onMouseOver=\"this.className='highlight'\" onMouseOut=\"this.className='normal'\">
		<td onMouseOver=\"this.className='highlight'\" onMouseOut=\"this.className='normal'\" align=left width=\"25%\">
			<a onMouseOver=\"this.className='highlight'\" onMouseOut=\"this.className='normal'\" href=\"mail.html?select=".$row['ID']."&sort=".$sort."&search=".$search."&fromfilter=".$fromfilter."\">".sprintf("%30.30s", trim(htmlentities($row['FromName'])))."</a>
		</td>
		<td onMouseOver=\"this.className='highlight'\" onMouseOut=\"this.className='normal'\" align=left width=\"75%\">
			<a onMouseOver=\"this.className='highlight'\" onMouseOut=\"this.className='normal'\" href=\"mail.html?select=".$row['ID']."&sort=".$sort."&search=".$search."&fromfilter=".$fromfilter."\">".sprintf("%100.100s", trim(htmlentities($row['Subject'])))."</a>
		</td>  
	</tr>
	";
} // end of while

//
// Get body data if selected to display email body
//
$borderPad = 0;
$bodybackground = "white";
if ($select != "")
{
	//
	// process to get body
	//
	$sql = "SELECT Body, ID  FROM $tblName where ID = $select";
	$result = mysql_query($sql) or die('Query2 failed: ' . mysql_error() . 'SQL = ' . $sql);

	//
	// now get the data
	//
	$DisplayBody = "";
	
	$row = mysql_fetch_assoc($result);
	
	$bodyTmp = $row['Body'];
	$body = "";
	
	$i = strlen($bodyTmp);
	for ($k = 0; $k < $i; $k++)
	{
		if ($bodyTmp[$k] == "\n")
		{
			$body .= "</p><p>";
		}
		
		$n = strlen($body);
		$body .= $bodyTmp[$k]; 
		// $body[$n] = $bodyTmp[$k]; 
	}	
	
	$DisplayBody .= "
		<p>
			".trim($body)."
		</p>
	";
	
 	$borderPad = 5;
	$bodybackground = "#f8f797";
	
} // end of Get Body Data	

?>

<html>
<head>
<title>Archived Mail</title>

<style type="text/css">
.searchArea {
	position: absolute;
	top:70px;
	left: 25px;
	width: 770px;
	height: 35px;
	overflow: hide; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: white; 
	border: 0px solid #70b1af;
	}	

.searchArea select {
	font: 500 10px Helvetica, Arial,Geneva;
	color: black; 
	line-height: 11px; 
	width: 250px;
	text-decoration: none;	
	}
		
.searchArea input {
	font: 500 10px Helvetica, Arial,Geneva;
	color: black; 
	line-height: 11px; 	
	}
	
.listAreaHdr {
	position: absolute;
	top: 125px;
	left: 25px;
	width: 770px;
	height: 30px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: #70b1af; 
	border: 1px solid #70b1af;
	}
	
.listAreaHdr td a {
	font: 700 11px Helvetica, Arial,Geneva;
	color: black; 
	line-height: 11px; 
	text-decoration: none;	
	}
	
.listAreaHdr td a:hover   { 
	color: #a23636;
	font: 700 11px Helvetica, Arial,Geneva;
	line-height: 13px; 
	}
	
.listAreaList {
	position: absolute;
	top:145px;
	left: 25px;
	width: 770px;
	height: 200px;
	overflow: auto; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: white; 
	border: 1px solid #70b1af;
	}	

.listAreaList td a {
	color: black; 
	font: 500 11px Helvetica, Arial,Geneva;
	text-decoration: none;	
	}	

/*	
.listAreaList td a:hover {
	color: red; 
	font: 500 11px Helvetica, Arial,Geneva;
	text-decoration: underline;	
	}
*/

.normal { background-color: #ffffff }

.highlight { background-color: #f8f797 }
  
.BodyArea {
	position: absolute;
	top:355px;
	left: 25px;
	width: 770px;
	height: 375px;
	overflow: auto; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 2px;
	background: <?php print $bodybackground; ?>; 
	border-left: <?php print $borderPad; ?>px solid white;
	/*
	border-left: <?php print $borderPad; ?>px solid #fdca99;
	*/	
	}	

.BodyArea p {
	font: 500 11px Helvetica, Arial,Geneva;
	}	
	
h2 {
	color:red;
	}
	
.leftLink   { 
		font: 700 11px Helvetica, Arial,Geneva;
		color: black; 
		line-height: 13px; 
		text-decoration: none;
		}
				
.leftLink:hover   { 
		color: blue;
		font: 700 11px Helvetica, Arial,Geneva;
		line-height: 13px; 
		text-decoration: underline;
		}

.leftLinkSelect   { 
		font: 700 11px Helvetica, Arial,Geneva;
		color: black; 
		line-height: 13px; 
		text-decoration: none;
		background-color:#99CC99;
		}
				
.leftLinkSelect:hover   { 
		color: black;
		font: 700 11px Helvetica, Arial,Geneva;
		line-height: 13px; 
		text-decoration: underline;
		background-color:#99CC99;
		}	
		
.regText {
		font: 500 11px Arial,Helvetica;
		}

.regTextsmall {
		font: 500 11px Arial,Helvetica;
		}

.regTextsmallBlockOn {
		font: 500 11px Arial,Helvetica;
		background = "#ccffff";
		}

.regTextsmallBlockOff {
		font: 500 11px Arial,Helvetica;
		background = white;
		}
		
.regTextBold {
		font: 700 15px Arial,Helvetica;
		}			
</style>

<script type="text/javascript">
function printDoc()
{
	if (self.print)
		self.print();
	else
		alert("Your browser does not support this feature.");
}

function ShowStatusBarMsg(msg)
{
	window.status = "msg";
}

function PopUP (urlParm, wname, ht, wt, restrict) 
{
	var winLeft, winTop;
	
	winLeft = (screen.width-wt)/2;
	winTop = (screen.height-(ht+110))/2; 

	if (restrict == 1)
	{
		popNew = window.open(urlParm,wname,"toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,width="+wt+",height="+ht+",left="+ winLeft+",top="+winTop+",resizable=0");	
	}
	else
	{
		popNew = window.open(urlParm,wname,"toolbar=yes,location=yes,directories=no,status=no,menubar=yes,scrollbars=yes,width="+wt+",height="+ht+",left="+ winLeft+",top="+winTop+",resizable=1"); 		
	}
	return false;
}
</script>

</head>
<body>

<form name="mail" action="mail.php" method="get">
<center>
<h2>Archived Mail Reveiw</h2>
</center>
<div class="searchArea">
<table width="100%">
	<tr>
		<td align=right>
			From:
		</td>
		<td align=left>
			<select width=50 name="fromfilter"> 
				<option value="<?php print $fromfilter; ?>"> <?php print $fromfilter; ?>											
				<?php print $DisplayFromfilter; ?>
			</select>
		</td>
		<td>&nbsp;</td>
		<td align=right>
			Search:
		</td>
		<td align=left>
			<input type="text" name="search" size="25" maxwidth="255" value="<?php print $search; ?>"> 
			&nbsp;
			<input type="submit" name="searchbutton" value="Go"></td>	
		<td>&nbsp;</td>
		<td align=left>
			<input type="submit" name="clear" value="Clear"></td>
		</tr>
	</tr>
</table>

</div>

<div class="listAreaHdr">
<table width="100%" class="regText">
	<tr>
		<td valign=top align=center width="25%">
			<a href="mail.php?sort=fromname&search=<?php print $search; ?>">From Name</a> 
		</td>
		<td valign=top align=center width="75%">	
			<a href="mail.php?sort=subject&search=<?php print $search; ?>">Subject</a>
		</td>  
	</tr>
</table>
</div>
<div class="listAreaList">
<table width="100%" class="regText" cellspacing="0" cellpadding="0">
<?php print $DisplayList; ?>
</table>
</div>
<input type="hidden" name="sort" value="<?php print $sort; ?>">
</form>

<div class="BodyArea">
<?php print $DisplayBody; ?>
</div>

</body>
</html>
