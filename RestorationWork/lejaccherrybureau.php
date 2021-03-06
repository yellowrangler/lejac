<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------

$DisplayMsg1 = "<p>This cherry bureau was one of the few pieces of furniture that made it through a house fire.  Because the bureau belonged to her father, the customer primarily wanted it 
						restored for sentimental purposes.</p>";
                        
$DisplayMsg2 = "<p>The bureau had sustained major water and smoke damage as you can see from the pictures. The top was stained, the finish was flaking off, and  the wood slightly warped from 
						water damage.  Some of the glued joints on the boards  that made up the bureau top had degraded and separated leaving cracks along the top.  The front was stained by smoke and water.  The sides 
						were also stained by smoke and water and showed splitting down the side similar to the splitting on the top of the table.</p>";
                        
$DisplayMsg3 = "<p>The bureau was broken down with the top and sides run through a saw where they had split and then through a joiner.  They were then biscuited and rejoined.  The rest was 
						stripped, neutralized, a chemical wash to restore natural color, sealed, finished in lacquer and hand rubbed.</p>";
                        
$DisplayMsg4 = "<p>The brass was polished and reinstalled.</p>";

?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="lejacHeader">Cherry Bureau Restoration</td> 
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
                            <br>
                        <table width="100%">
                            <tr>
                                <td align="left"  valign="top" class="regText"><?php print $DisplayMsg4; ?></td>
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
					<td align="left" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/cherry1.bmp\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/cherry1.bmp', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/cherry1.bmp"></a></td>
					<td align="left" width=5>&nbsp;</td>
                </tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>		
                <tr>
                    <td align="left" width=5>&nbsp;</td>
					<td align="left" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/cherry2.bmp\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/cherry2.bmp', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/cherry2.bmp"></a></td>
                </tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>		
				<tr>
                    <td align="right" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/cherry3.bmp\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/cherry3.bmp', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/cherry3.bmp"></a></td>
                    <td align="left" width=5>&nbsp;</td>
				</tr>	
			</table>
		</td>	
	</tr>	
</table>

</div>
