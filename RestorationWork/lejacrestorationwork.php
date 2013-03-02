<?php

//----------------------------------------------------------------------------------------------------------
// Set Display variables
//----------------------------------------------------------------------------------------------------------
$DisplayMsg1 = "<p>I have been working for over ten years restoring all types of damage made to various forms of furniture. From fire and water 
damage to fine furniture that was painted over. You will be supprised at what we can bring out regardless of the furnitures condition.</p>";

$DisplayMsg2 = "<p>As I find especially challenging pieces I try to put them up on my web site for you to view. I find the best way to do this 
is to display before and after pictures interspersed with a short narrative of what I did.</p>";

$DisplayMsg3 = "<p>Each pictue can be clicked to render a larger more detailed view. Please feel free to browse my work and let me know if you have any
questions.</p>";

$DisplaySelections = "<table width=\"90%\" class=\"regTextsmall\">
                            <tr>";

$instance = getNavArrayInstance($selectID);
$key = $NavArray[$instance] ['child'];
for ($i = getNavArrayInstance($key); $i < count($NavArray); $i++)
{
    if ($NavArray[$i] ['floatimg'] != 'None')
    {
        $dispKey = $NavArray[$i] ['key'];
        $dispImg = $NavArray[$i] ['floatimg'];
        $dispTitle = $NavArray[$i] ['title'];
        $DisplaySelections .= "
          <td>
            <table>
                <tr>
                    <td class=\"verysmallText\" align=center valign=top <a href=\"index.html?selectID=$dispKey\"
                        onmouseover=\"Tip('<center> <img src=".$productDir."images/$dispImg width=500> <br>')\" 
                        onmouseout=\"UnTip()\">
                        <img  height=100 width=100 align=center border=0 src=".$productDir."images/$dispImg></a>
                        <br>
                        <center>
                        $dispTitle
                        </center>
                    </td>
               </tr>
            </table>
          </td>  
                ";
       
       $key = $NavArray[$i] ['NextPeer'];
       
       if ($key == 'None')
           break;
    }
    else
    {
        break;
    }
}
  
$DisplaySelections .= "
                            </tr>	
                        </table>
                     ";

?>

<br>

<table width="100%">	
	<tr>
		<td align=center class="lejacHeader">Furniture Repair and Restoration Projects</td> 
	</tr>

</table>
<br><br>

<div class="marginLeft20">
<table width="90%" class="regTextsmall">
	<tr>
		<td align="left" valign="top" class="regText"><?php print $DisplayMsg1; ?></td>
	</tr>
</table>
<br>
<table width="90%">
	<tr>
		<td align="left"  valign="top" class="regText"><?php print $DisplayMsg2; ?></td>
	</tr>
</table>

<br>
<br>
<center>
<?php print $DisplaySelections; ?>
</center>

</div>
