<?php

function GetBreadCrumbs($selectID)
{
	//
	// Break out values into array
	//
	$tmpLevelValue = GetSelectValues($selectID);
	
	//
	// Get count of levels in array
	//
	$c = count($tmpLevelValues);
	
	//
	// Step through each level creating bread crumb
	//
	$k = 0;
	for ($i = 0; $i < $c; $i++)
	{	
		//
		// Set counter.  This will help walk us through levels
		//
		$k = $k + 1;
		for ($x = 0; $x < $k; $x++)
		{
			$tmpBCtitleValue[$x] = $tmpLevelValue[$x];
		} // end of for	
		
		//
		// Fill the rest with zeroes. In this way we work down
		//
		for ($z = $x; $z < $c; $z++)
		{
			$tmpBCtitleValue[$z] = 0;
		} // end of for	
		
		//
		// Add selected values and actual titles to variables to build display
		//
		$tmpBCtitleValueImplode = BuildValue($tmpBCtitleValue);
		$BCtitleValue[$i] = $tmpBCtitleValueImplode;
		$BCtitle[$i] = $NavTitle[$tmpBCtitleValue[0]][$tmpBCtitleValue[1]][$tmpBCtitleValue[2]][$tmpBCtitleValue[3]];
		
	} // end of for	
	
	//
	// Now build the display variable
	//
	$DisplayBreadCRumbs = "
			<table>
				<tr>
				";
	$c = count($BCtitle);			
	for ($i = 0; $i < $c; $i++)
	{
		$DisplayBreadCRumbs .= "
			<td  class=\"breadCrumb\"> 
				<a href=\"index.php?selectID=".$BCtitleValue[$i]."\" class=\"breadCrumb\">
					".$BCtitle[$i]."
				</a>
		";
	} // end of for 	
	
	$DisplayBreadCRumbs .= "
			</tr>
		</table>
		";
	
	//
	// Return the display string
	//
	return($DisplayBreadCRumbs);
	
} // end of GetBreadCrumbs	

?>
