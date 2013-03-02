<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------
$DisplayMsg = "<p> I blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah .  </p>";
$DisplayMsg .= "<p>blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah .</p>";
$DisplayMsg .= "<p>blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah </p>";

$DisplayMsg2a = "<p>blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah .</p>";
$DisplayMsg2b = "<p><br>blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah .</p>";

?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="Header">Stores Page</td> 
	</tr>

</table>
<br>

<table width="95%" class="regTextsmall">
	<tr>
		<td valign=center align=center width="60%"><img width=415 align=top border=0 src="<?php print $productDir; ?>images/legacproductA.jpg"></td>	
		<td align=left valign=top width="40%"><? print $DisplayMsg; ?></td>  
	</tr>
</table>
<br><br>
<table width="95%">
	<tr>
		<td class="regTextBold" valign=top align=center width="100%"><?php print $DisplayMsg2a; ?></td>	
	</tr>
</table>
<br>
<table width="95%">
	<tr>
		<td class="regText" align=center width="100%"><?php print $DisplayMsg2b; ?></td>	
	</tr>
</table>
