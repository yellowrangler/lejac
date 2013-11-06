<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------

$DisplayMsg1 = "<p>Hand woven caning is a completely different beast. Here caning comes in reeds of different diameters. The diameter used is determined by the size
of the holes drilled into the wood and by the distance apart each hole is. Unlike the machine woven cane which has a groove, the hand woven cane
 has holes which the weaver passes the caning reed through.</p>";
                        
$DisplayMsg2 = "<p>Once the weaver has completed their weave and tied off the last bit, they cover the wholes 
 with a binder. The binder is a wider piece of caning which encircles the chair covering the holes through which the cane is weaved. The binder is tied down through each hole
 giving the seat a clean polished look</p>";
                        
$DisplayMsg3 = "<p>This is evident in the first picture above and the picture at the bottom. These pictures are all of the same chair. The picture in the middle 
shows the damage to the chair, with the last picture the completed repaired seat.</p>";
                        
?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="lejacHeader">Hand Woven Cane Restoration</td> 
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
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/handcane1.png\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/handcane1.png', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/handcane1.png"></a></td>
					<td align="left" width=5>&nbsp;</td>
                </tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>	
				<tr>
					<td align="left" width=5>&nbsp;</td>
					<td align="right" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/handcane2.png\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/handcane2.png', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/handcane2.png"></a></td>				
                </tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>	
				<tr>
					<td align="left" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/handcane3.png\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/handcane3.png', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/handcane3.png"></a></td>
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
