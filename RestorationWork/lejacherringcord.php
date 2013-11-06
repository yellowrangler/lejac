<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------

$DisplayMsg1 = "<p>Corded and Paper Rush are products made to look like true rush, but are actually pre-twist materials sold on spools similar to rope. The top two images to the left 
represent a bench we did in a paper or kraft product.</p>";
                        
$DisplayMsg2 = "<p>Popular cords include Danish cords and sea grass cords. In addition you can now find cat tail cords. These pre-twisted cord products can be woven directly into
the chair without the wetting and standing period required by authentic rushes. However, unlike true cat tails, characteristics of the cord make it difficult to 
manage design in complicated seats or chair backs.</p>";
                        
$DisplayMsg3 = "<p>The final seating is called herring bone named for its beautiful weave design. Here the weaver is utilizing a type of caning, but instead of weaving through holes, 
they weave over a frame (as is done with the rush and cord work). The image to the left shows the herring bone weave.</p>";
                        
?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="lejacHeader">Paper Rush, Hearing Bone & Cord Seat Weaving</td> 
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
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/herringcord1.png\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/herringcord1.png', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/herringcord1.png"></a></td>
					<td align="left" width=5>&nbsp;</td>
                </tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>	
				<tr>
					<td align="left" width=5>&nbsp;</td>
					<td align="right" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/herringcord2.png\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/herringcord2.png', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/herringcord2.png"></a></td>				
                </tr>
				<tr>
					<td align="left" width=5>&nbsp;</td>
				</tr>	
				<tr>
					<td align="left" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/herringcord3.png\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/herringcord3.png', 'pic', 600, 650, 1))">
                        <img  height=139 width=139 align="left" border="0" src="<?php print $productDir; ?>images/herringcord3.png"></a></td>
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
