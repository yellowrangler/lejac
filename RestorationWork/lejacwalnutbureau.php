<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------

$DisplayMsg1 = "<p>When I received this piece of furniture below it was covered in heavy white latex paint.  The customer wanted to use the piece in her dining room and was interested 
						in what kind of wood was underneath the paint.  She had bought the item at either a yard sale or second hand shop.</p>";
                        
$DisplayMsg2 = "<p>We stripped one of the small drawer faces and uncovered a beautiful walnut burl.  Needless to say we were both surprised.  The customer decide to go ahead and let 
						me strip it the rest of the way.</p>";
                 
$DisplayMsg3 = "<p>Prior to stripping the piece I cautioned the customer that the reason why the past owner had painted it white might have been to conceal some damage to the piece.  
						I agreed to keep her informed if I came across any such damage.</p>";
                        
$DisplayMsg4 = "<p>To my surprise, with the exception of a small cigarette burn, there was no damage to the bureau.  The piece was stripped, washed, sealed, coated with lacquer and 
						hand buffed.</p>";
                        
$DisplayMsg5 = "<p>The brass (some unmatched) was polished and reinstalled.</p>";

?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="lejacHeader">Walnut Bureau Restoration</td> 
	</tr>

</table>
<br><br>

<div class="marginLeft20">

<table width="90%" class="regTextsmall">
	<tr>
		<td valign="top">
			<table valign="top">
				<tr>
                
             		<td align="left" valign="top"><a href="#" 
                        onmouseover="Tip('<center> <img src=\'<?php print $productDir; ?>images/bureau.bmp\' width=\'500\'> <br>')" 
                        onmouseout="UnTip()"  OnClick="(PopUP('pulejacsingleslide.php?filename=<?php print $productDir; ?>images/bureau.bmp', 'pic', 600, 650, 1))">
                        <img  height=278 width=290 align="left" border="0" src="<?php print $productDir; ?>images/bureau.bmp"></a></td>
                  
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
