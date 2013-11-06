<?php

//----------------------------------------------------------------------------------------------------------
// Function to get NavArray instance based on keyword
// Pass in KEYname to parse.  This runs through array and then and returns instance (selectID 
//----------------------------------------------------------------------------------------------------------
function getNavArrayInstance($selectID) 
{
    global $NavArray;
   
     
    $c = count($NavArray);
	for($i = 1; $i < $c; $i++)
    {
      //      echo " level 1 i = $i <br>";  
      //  echo " level 1 key = ".$KEYname[$i][0][0][0]." count = ".count($KEYname[$i])." <br>";  
        if ($NavArray[$i]['key'] == $selectID)
        {
            return($i);
        }
    }
	
    return(0);
    
} // end of getNavArrayInstance


//----------------------------------------------------------------------------------------------------------
// Function to get MainNavInstance instance based on keyword
// We have item which has been selected - now we need to know what Main Nav item must be seleted too.
// Pass in KEYname to parse.  This runs through array and then and returns instance (selectID 
//----------------------------------------------------------------------------------------------------------
function getMainNavInstance($selectID) 
{
    global $NavArray;
    
    
    //
	// Get instance and see if have parent
	//
    $instance = getNavArrayInstance($selectID);
    
    //
    // Run through hierarchy
    // This could be done another way - look for type = M.  I like this way better for now
    //
    while ($NavArray[$instance] ['parent'] != 'None')
    {
        $instance = getNavArrayInstance($NavArray[$instance] ['parent']);
            
    }
    
    return($instance);
    
} // end of getMainNavInstance

//----------------------------------------------------------------------------------------------------------
// Function to return html for top tabs
// Pass in selct values to parse.  This builds html and returns string. 
//----------------------------------------------------------------------------------------------------------
function GetMainNav($selectID) 
{
	global $NavArray;
	global $MainNavTabUpperWidth;
    global $ToolTips;
	
	
    //
	// Get instance and see if have parent
	//
    $instance = getNavArrayInstance($selectID);
    
    //
	// Get main nav instance that must be selected
	//
    $MainNavSelectinstance = getMainNavInstance($selectID);
	//
	// First build the upper part of the Nav.  
	//
    $result = "<table class=\"MainNavTabsUpper\" >
		<tr>";

    $c = count($NavArray);
    for ($i = 0; $i < $c; $i++)
	{	
		switch ($NavArray[$i] ['type'])
		{
			case 'M':
				$DisplayToolTips = "";
                if ($ToolTips == "on")
                {
                    $DisplayToolTips = "onmouseover=\"Tip('".$NavArray[$i] ['tooltip']."')\" onmouseout=\"UnTip()\"";
                }
                
                //
                // ok we are at main nav seleted
                //
                if ($MainNavSelectinstance == $i)
                {
                    $result .=
                    "
                    <td width=".$MainNavTabUpperWidth." class=\"MainNavTabsUpperCellSelect\"> 
                        <a href=\"index.php?selectID=".$NavArray [$i] ['key']."\" $DisplayToolTips class=\"MainNavTabsUpperCellSelect\">".$NavArray[$i] ['title']."</a>
                    </td>
                    
                    ";		
                }
                else
                {
                    $result .=
                    "
                    <td width=".$MainNavTabUpperWidth." class=\"MainNavTabsUpperCell\"> 
                        <a href=\"index.php?selectID=".$NavArray [$i] ['key']."\"  $DisplayToolTips class=\"MainNavTabsUpperCell\">".$NavArray[$i] ['title']."</a>
                    </td>
                    
                    ";	
                }	
				break;
				
			case 'S':
				break;	
		
		} // end oi switch		
				
	} // end of for
    
    //
    // add end of table
    //
	$result .= "<td >&nbsp;</td>
			</tr>
	</table>
	";
	
	//
	// Second build the lower part of the Nav
	//
	$result .= "	
	<table class=\"MainNavLower\" cellspacing=0 cellpadding=0>
		<tr>
			<td width=\"100%\"> 
				&nbsp;
			</td>
		</tr>	
	</table>
	";
	
	return $result;
	
} // end of GetMainNav

//----------------------------------------------------------------------------------------------------------
// Function to return html for left nav
// Pass in selct values to parse.  This builds html and returns string. BIGGY
//----------------------------------------------------------------------------------------------------------
function GetLeftNav($selectID) 
{
	global $NavArray;
	global $LeftNavMenuWidth;
	global $LeftNavMenuCellBackgroundColor;
	global $LeftNavMenuCellSelectBackgroundColor;
    global $productDir;
    global $ToolTips;
	
	
    //
	// Get instance and see if have parent
	//
    $instance = getNavArrayInstance($selectID);
    
    //
    // see if we are end of selection or have more
    //
    
    if ($NavArray[$instance] ['child'] != 'None')
    {
        $selectLeftNav = 0;
        $Parentkey = $NavArray[$instance] ['key'];   
    }
    else
    {
        $selectLeftNav = 1;
        $selectLeftNavInstance = $instance;
        $Parentkey = $NavArray[$instance] ['parent'];
    }
    $ParentInstance = getNavArrayInstance($Parentkey);
        
    //
    // start building our left nav
    //
    $result = "
                <ul id=\"LeftNav-side-nav\">
                ";

    //
    // loop thru elements
    //
    $c = count($NavArray);
    for ($i = 0; $i < $c; $i++)
	{	
        if ($ParentInstance == $i)
        {
                $result .=
                "
                <li><strong>
                    &nbsp;".$NavArray[$i]['title']."
                </strong></li>
                ";		  
        }
        else if ($NavArray[$i] ['parent'] == $Parentkey)
        {
                        //
            // Tool tips and images
            //
            $DisplayToolTips = "";
            if ($ToolTips == "on")
            { 
                $tip = $NavArray[$i] ['tooltip'];
                $tipimg = $NavArray[$i] ['floatimg'];
                if ($NavArray[$i]['floatimg'] == 'None')
                {
                    $DisplayToolTips = "onmouseover=\"Tip('$tip')\" onmouseout=\"UnTip()\"";
                }
                else
                {
                    $DisplayToolTips = "onmouseover=\"Tip('$tip  <br><hr><center> <img src=".$productDir."images/$tipimg width=60> <br><br>')\" onmouseout=\"UnTip()\"";
                }
            }
                
            //
            // if selected index is also select list index (ir = 0) we do not want to select. 
            // So we build top name and only react to selected ind if > 0.
            //
            if ( ($selectLeftNavInstance == $i) && ($selectLeftNav == 1) )
            {
                $result .=
                "
                <li><strong>
                    <a href=\"index.php?selectID=".$NavArray[$i]['key']."\" $DisplayToolTips  >".$NavArray[$i]['title']."</a>
                </strong></li>
                ";		
            }
            else
            {
                $result .=
                "
                <li>
                    <a href=\"index.php?selectID=".$NavArray[$i]['key']."\" $DisplayToolTips >".$NavArray[$i]['title']."</a>
                </li>
                ";	
            }	
        }
				
	} // end of for

    $result .= "</ul>";
    
   	return $result;
	
} // end of GetLeftNav

//----------------------------------------------------------------------------------------------------------
// Function to return html for breadcrumb area
// Pass in selct values to parse.  This builds html and returns string. 
//----------------------------------------------------------------------------------------------------------
function GetBreadCrumbs($selectID)
{
	global $NavArray;
	
    $stackKey = array();
    
   
	//
    // build stack
    //
   
    $key = $selectID;
    $c = count($NavArray) - 1;
    $k = 0;
    for ($i = $c; $i >= 0; $i--)
    {
        if ($NavArray[$i] ['key'] == $key)
        {
            $stackKey[$k] = $key;
            $k++;
            
            $key = $NavArray[$i] ['parent'];
        }
    } // end of for;
    
    //
	// Now build the display variable
	//
	$DisplayBreadCrumbs = "
			<table>
				<tr>
				";
				
	while ($k = array_pop($stackKey))
	{
        if ($selectID == $k)
            continue;
        
        
        $i = getNavArrayInstance($k);
		$DisplayBreadCrumbs .= "
			<td class=\"breadCrumb\"> 
				<a href=\"index.php?selectID=".$k."\" class=\"breadCrumb\">
					".$NavArray[$i] ['title']."
				</a>
			</td>
			<td class=\"breadCrumb\">
				>
			</td>	
		";
	} // end of for 	
	
	$DisplayBreadCrumbs .= "
			</tr>
		</table>
		";
	
	//
	// Return the display string
	//
	return($DisplayBreadCrumbs);
	
} // end of GetBreadCrumbs	

//----------------------------------------------------------------------------------------------------------
// Function to return html for title banner area
// Pass in selct values to parse.  This builds html and returns string. 
//----------------------------------------------------------------------------------------------------------
function GetTitleBanner($selectID)
{
	global $NavArray;
		
	
	$instance = getNavArrayInstance($selectID);
 	
	//
	// Now build the display variable
	//
	$DisplayTitleBanner = "
			<table width=\"95%\" class=\"titleBorder\">
				<tr>
					<td> 
						".$NavArray [$instance] ['title']."
					</td>
				</tr>
			</table>
		";
		
	//
	// Return the display string
	//
	return($DisplayTitleBanner);
	
} // end of GetTitleBanner	

?>
