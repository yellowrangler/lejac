<?php

//----------------------------------------------------------------------------------------------------------
// globals
//----------------------------------------------------------------------------------------------------------
require ('WWBconfig.php');

$maxLines = 10000;

//----------------------------------------------------------------------------------------------------------
// get showfilename
//----------------------------------------------------------------------------------------------------------
if (isset($_GET[showfilename]) && ($_GET[showfilename] != "") )
{
	$showfilename = $_GET[showfilename];
}


$DisplayFile = "";

$handle = @fopen($showfilename, "r");
if ($handle) 
{
   while (!feof($handle)) 
   {
	   $i = $i +1;
       $buffer = fgets($handle, 4096);
       $DisplayFile .= $buffer."<br>";
	   
	   if ($i > $maxLines)
	   {
		   $DisplayFile .= "<br><b>Max Lines reached ($i)</b><br>";
		   break;
	   }  
   }
   fclose($handle);
}
else
{
	$DisplayFile .= "Could not open file $showfilename.<br>";
}	

?> 

<html>

<head>
<title>File Reader</title>

<style type="text/css">
<?php require ("WWBStyleSheet.css"); ?>
</style>

<script type="text/javascript">
<?php require ("WWBJavaScript.js"); ?>
</script>
 
</head>

<body>
<b>Contents of <?php print $showfilename; ?>
<br>
<?php print $i; ?> Lines read.</b>
<br>
<br>
<?php print $DisplayFile; ?>

</body>
</html>
