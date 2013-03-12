<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------

$DisplayMsg1 = "<p>This is an example of a chair seat that is made of machine woven cane and installed with a wooden spline. This tends to be the least expensive caning to replace.
The caning is machine woven into sheets and comes with various sized holes and diameters. We measure out the size we need and cut out a piece to fit from the sheet</p>";
                        
$DisplayMsg2 = "<p>Around the edge of the seat's open area is a grove. The caning sheet is placed over the grove and centered. The wooden spline is then glued and gently hammered into the grove taking 
the caning sheet with it.</p>";
                        
$DisplayMsg3 = "<p>Once the spline is in place, any excess cane sheeting is trimmed leaving a clean edge between the outer edge of the spine and the seat.</p>";
                        
?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="lejacHeader">Machine Cane</td> 
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
					<td align="left" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/machinecane.png\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/machinecane.png', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/machinecane.png"></a></td>
					<td align="left" width=5>&nbsp;</td>
                </tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>		
			</table>
		</td>	
	</tr>	
</table>

</div>
