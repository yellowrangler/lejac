<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------

$DisplayMsg1 = "<p>Hand woven rush seating is probably one of the most beautiful seats, but also the most difficult to learn
and consitently produce good results. Though there are different types of rush, the most common is the reed known as \"cat Tails\".
The weaver receives them dried and bundled like corn stalks. Before they can be used they must be dampended and set
asside to let stand.</p>";
                        
$DisplayMsg2 = "<p>The chair seat is just a frame shaped to the design of the furniture maker. The weaver takes these
damp flattened reeds and twists them around the frame to create the design shown. For the lines traveling through the seats
to be even and straight, each reed must be twisted and tensioned properly.</p>";
                        
$DisplayMsg3 = "<p>You can always tell a genuine rush seat because when you flip it over the reeds are
flat. This is shown in the bottom picture.</p>";
                        
?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="lejacHeader">Hand Woven Rush Information</td> 
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
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/handrush1.png\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/handrush1.png', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/handrush1.png"></a></td>
					<td align="left" width=5>&nbsp;</td>
                </tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>	
				<tr>
					<td align="left" width=5>&nbsp;</td>
					<td align="right" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/handrush2.png\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/handrush2.png', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/handrush2.png"></a></td>				
                </tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>	
				<tr>
					<td align="left" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/handrush3.png\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/handrush3.png', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/handrush3.png"></a></td>
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
