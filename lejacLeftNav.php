<?php

$DisplayLeftNav = GetLeftNav($selectID);

//
// add buttons for supported causes
//
$imageWidth = $supportedCausesWidth - 40;
$DisplayLeftNavBody = "
    <div class=\"supportedCauses\">
    <center>
    <table width = \"100%\">
        <tr>
            <td align=center> 
                <a href=\"#\" onClick=\"(PopUP('http://www.franconianotch.org/', 'fcc', 840, 840, 0))\">
                    <img  border=0 alt=\"Member of Franconia Chamber of Commerce\" 
                    src=\"images/Franconia Chamber logo.gif\" 
                    align=center width=\"".$imageWidth."\">
                </a>	
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td align=center> 
                <a href=\"#\" onClick=\"(PopUP('http://www.littletonareachamber.com/', 'lcc', 840, 840, 0))\">
                    <img  border=0 alt=\"Member of Littleton Chamber of Commerce\" 
                    src=\"images/littletonchamberlogo.png\" 
                    align=center width=\"".$imageWidth."\">
                </a>
            </td>
        </tr>
		<tr>
            <td>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td align=center> 
                <a href=\"#\" onClick=\"(PopUP('http://www.aconservationtrust.org/', 'acc', 840, 840, 0))\">
                    <img  border=0 alt=\"Member of Ammonoosuc Conservation Trust\" 
                    src=\"images/act_logo2.jpg\" 
                    align=center width=\"".$imageWidth."\">
                </a>
            </td>
        </tr>
    </table>
    </center>
    </div>
";
   
?>

<?php print $DisplayLeftNav; ?>

<?php print $DisplayLeftNavBody; ?>
