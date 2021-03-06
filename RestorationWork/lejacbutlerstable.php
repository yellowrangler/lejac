<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------

$DisplayMsg1 = "<p>This is an example of a normal refinishing repair (if such exists).  This butler table had considerable water damage to the top (see pictures) and side wings.</p>";

$DisplayMsg2 = "<p>Because the finish was removed, exposing the unprotected wood,  there was an excellent chance that the wood had been contaminated which can create an event called 
						&quot;fish-eye&quot; when a finish is applied.  In this instance the finish separates leaving little craters in the finish. This table was stripped, neutralized, washed, and then sealed with a 
						fish-eye sealer.</p>";
                        
$DisplayMsg3 = "<p>Next the table received a light staining with an alcohol dye followed by a lacquer coating and then hand rubbed for a satin finish.  Brass was polished and reinstalled.</p>";

?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="lejacHeader">Butler Table Restoration</td> 
	</tr>

</table>
<br><br>

<div class="marginLeft20">

<table width="90%" class="regTextsmall">
	<tr>
		<td valign="top">
			<table width="400" valign="top">
				<tr>
                    <td align="left" valign="top" class="regText">
                        <table width="100%" class="regTextsmall">
                            <tr>
                                <td align="left" valign="top" class="regText"><?php print $DisplayMsg1; ?></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td align="left"  valign="top" class="regText"><?php print $DisplayMsg2; ?></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td align="left"  valign="top" class="regText"><?php print $DisplayMsg3; ?></td>
                            </tr>
                        </table>
                    </td>
				</tr>
			</table>
		</td>	
		<td align="left" width=5>&nbsp;</td>
		<td valign="top">
            <table valign="top">
				<tr>
					<td align="left" valign="top"><a href="#" onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/btable1.bmp\' width=\'500\'> <br>')" 
                                                                onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/btable1.bmp', 'pic', 600, 650, 1))">
                                                                <img  height=145 width=139 align="left" border="0" src="<?php print $productDir; ?>images/btable1.bmp"></a></td>
					<td align="left" width=5>&nbsp;</td>
                </tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>		
				<tr>
					<td align="left" width=5>&nbsp;</td>
                    <td align="right" valign="top"><a href="#" onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/btable2.bmp\' width=\'500\'> <br>')" 
                                                                onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/btable2.bmp', 'pic', 600, 650, 1))">
                                                                <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/btable2.bmp"></a></td>
				</tr>	
			</table>
		</td>	
	</tr>	
</table>

</div>
