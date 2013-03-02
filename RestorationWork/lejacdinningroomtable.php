<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------
$DisplayMsg1 = "<p>This beautiful mahogany dining room table had been kept in a damp basement for almost a generation. The table had a solid mahogany top and leaves with 
						a mahogany veneered pedestal that split in half to accommodate the 4 leaves.</p>";
                        
$DisplayMsg2 = "<p>The finish throughout the table had completed degraded with signs of mold. The top and leaves had water stains and physical damage.</p>";

$DisplayMsg3 = "<p>Almost every piece of veneer on the pedestal was falling off or showed some separation. The veneer around the center post was cracked and warped so badly 
						it had to be removed and replaced with new mahogany veneer.</p>";
                        
$DisplayMsg4 = "<p>The top and leaves were stripped, washed, and grain filled. All veneer on the pedestal was stripped, washed, adhesion tested, re-glued or replaced as necessary, 
						and grain filled.</p>";
                        
$DisplayMsg5 = "<p>The table was then lightly stained with a red mahogany dye, coated with lacquer, and hand rubbed to a satin finish</p>";

?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="lejacHeader">Dinning Room Table Restoration</td> 
	</tr>

</table>
<br><br>

<div class="marginLeft20">

<table width="90%" class="regTextsmall">
	<tr>
		<td valign="top">
			<table valign="top">
				<tr>
					<td align="left" valign="top"><a href="#" OnClick="(PopUP('<?php print $productDir; ?>images/dinetbl1.bmp', 'pic', 600, 400, 1))"><img  height=145 width=139 align="left" border="0" src="<?php print $productDir; ?>images/dinetbl1.bmp"></a></td>
					<td align="left" width=5>&nbsp;</td>
					<td align="left" valign="top"><a href="#" OnClick="(PopUP('<?php print $productDir; ?>images/dinetbl2.bmp', 'pic', 600, 400, 1))"><img  height=145 width=139 align="left" border="0" src="<?php print $productDir; ?>images/dinetbl2.bmp"></a></td>
				</tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>		
				<tr>
					<td align="left" valign="top"><a href="#" OnClick="(PopUP('<?php print $productDir; ?>images/dinetbl3.bmp', 'pic', 600, 400, 1))"><img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/dinetbl3.bmp"></a></td>
					<td align="left" width=5>&nbsp;</td>
					<td align="left" valign="top"><a href="#" OnClick="(PopUP('<?php print $productDir; ?>images/dinetbl4.bmp', 'pic', 600, 400, 1))"><img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/dinetbl4.bmp"></a></td>
				</tr>	
			</table>
		</td>	
		<td align="left" width=5>&nbsp;</td>
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
                        <br>
                        <table width="100%">
                            <tr>
                                <td align="left"  valign="top" class="regText"><?php print $DisplayMsg4; ?></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td align="left"  valign="top" class="regText"><?php print $DisplayMsg5; ?></td>
                            </tr>
                        </table>
                    </td>
				</tr>
			</table>
		</td>	
	</tr>	
</table>

</div>
