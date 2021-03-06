<?php

//----------------------------------------------------------------------------------------------------------
// Define constants
//----------------------------------------------------------------------------------------------------------
$EmptyTag = "No Tags"; 
$JustTag = "Tagged"; 
$AllTag = "All"; 

$ToolTips = "on"; 
//$ToolTips = "off";

//----------------------------------------------------------------------------------------------------------
// Define host
//----------------------------------------------------------------------------------------------------------
include ('lejacsetHost.php');

//----------------------------------------------------------------------------------------------------------
// Define directories
//----------------------------------------------------------------------------------------------------------
$lejacqualDir = "/var/www/html/";

//----------------------------------------------------------------------------------------------------------
// all content
//----------------------------------------------------------------------------------------------------------
$allcontentWidth = 951;

//----------------------------------------------------------------------------------------------------------
// Banner variables
//----------------------------------------------------------------------------------------------------------
$BannerHeight = 70;
$BannerWidth = 950;

$BannerTextHeight = $BannerHeight - 30; 
$BannerTextLeft = 550; 
$BannerTextWidth = $BannerWidth - $BannerTextLeft; 
$BannerBackgroundColor = "white";
// $BannerBackgroundColor = "#89b2b4";

//----------------------------------------------------------------------------------------------------------
// Main Nav variables
//----------------------------------------------------------------------------------------------------------
$MainNavTop = $BannerHeight + 2;
$MainNavHeight = 30;
$MainNavWidth = $BannerWidth;
$MainNavBackgroundColor = "white";

//
// Define upper tab variables
//
$MainNavTabUpperColor = "#a23636";
$MainNavTabUpperTextColor = "white";
$MainNavTabUpperTextHoverColor = "#b0a3a5";
$MainNavTabUpperCellSelectColor = "#c6d0d0";
$MainNavTabUpperCellSelectTextColor = "black";

$MainNavTabUpperHeight = 20;
$MainNavTabUpperWidth = 150;
$MainNavTabUpperGap = 1;

//
// Define lower tab variables
//
$ManinNavLowerHeight = 10;
$ManinNavLowerTop = $MainNavTabUpperHeight;

$ManinNavLowerColor = $MainNavTabUpperCellSelectColor;

//----------------------------------------------------------------------------------------------------------
// Define Menu Titles (All) and Actions
//----------------------------------------------------------------------------------------------------------

// number of levels down you can go
$NBROFLEVELS = 4;

$NavArray [0] ['type'] = 'M';
$NavArray [0] ['title'] = 'LEJAC';
$NavArray [0] ['key'] = 'Home';
$NavArray [0] ['proddir'] = 'Home/';
$NavArray [0] ['tooltip'] = 'LEJAC main link to home page.';
$NavArray [0] ['filename'] = 'Home';
$NavArray [0] ['floatimg'] = 'None';
$NavArray [0] ['parent'] = 'None';
$NavArray [0] ['child'] = 'ContactUs';
$NavArray [0] ['NextPeer'] = 'RestorationWork';
$NavArray [0] ['PrevPeer'] = 'None';
		
$NavArray [1] ['type'] = 'S';
$NavArray [1] ['title'] = 'Contact Us';
$NavArray [1] ['key'] = 'ContactUs';
$NavArray [1] ['proddir'] = 'Home/';
$NavArray [1] ['tooltip'] = 'Information on how to Contact Us';
$NavArray [1] ['filename'] = 'ContactUs';
$NavArray [1] ['floatimg'] = 'None';
$NavArray [1] ['parent'] = 'Home';
$NavArray [1] ['child'] = 'None';
$NavArray [1] ['NextPeer'] = 'None';
$NavArray [1] ['PrevPeer'] = 'None';
		
$NavArray [2] ['type'] = 'M';
$NavArray [2] ['title'] = 'Restoration Work';
$NavArray [2] ['key'] = 'RestorationWork';
$NavArray [2] ['proddir'] = 'RestorationWork/';
$NavArray [2] ['tooltip'] = 'Examples of Restoration Work';
$NavArray [2] ['filename'] = 'RestorationWork';
$NavArray [2] ['floatimg'] = 'None';
$NavArray [2] ['parent'] = 'None';
$NavArray [2] ['child'] = 'DiningRoomTable';
$NavArray [2] ['NextPeer'] = 'None';
$NavArray [2] ['PrevPeer'] = 'Home';
		
$NavArray [3] ['type'] = 'S';
$NavArray [3] ['title'] = 'Dining Room Table';
$NavArray [3] ['key'] = 'DiningRoomTable';
$NavArray [3] ['proddir'] = 'RestorationWork/';
$NavArray [3] ['tooltip'] = 'Dining Room Table';
$NavArray [3] ['filename'] = 'DiningRoomTable';
$NavArray [3] ['floatimg'] = 'dinetbl3.bmp';
$NavArray [3] ['parent'] = 'RestorationWork';
$NavArray [3] ['child'] = 'None';
$NavArray [3] ['NextPeer'] = 'ButlersTable';
$NavArray [3] ['PrevPeer'] = 'None';
			
$NavArray [4] ['type'] = 'S';
$NavArray [4] ['title'] = 'Butlers Table';
$NavArray [4] ['key'] = 'ButlersTable';
$NavArray [4] ['proddir'] = 'RestorationWork/';
$NavArray [4] ['tooltip'] = 'Butlers Table';
$NavArray [4] ['filename'] = 'ButlersTable';
$NavArray [4] ['floatimg'] = 'btable2.bmp';
$NavArray [4] ['parent'] = 'RestorationWork';
$NavArray [4] ['child'] = 'None';
$NavArray [4] ['NextPeer'] = 'WalnutBureau';
$NavArray [4] ['PrevPeer'] = 'DiningRoomTable';
		
$NavArray [5] ['type'] = 'S';
$NavArray [5] ['title'] = 'Walnut Bureau';
$NavArray [5] ['key'] = 'WalnutBureau';
$NavArray [5] ['proddir'] = 'RestorationWork/';
$NavArray [5] ['tooltip'] = 'Walnut Bureau';
$NavArray [5] ['filename'] = 'WalnutBureau';
$NavArray [5] ['floatimg'] = 'bureau.bmp';
$NavArray [5] ['parent'] = 'RestorationWork';
$NavArray [5] ['child'] = 'None';
$NavArray [5] ['NextPeer'] = 'CherryBureau';
$NavArray [5] ['PrevPeer'] = 'ButlersTable';

$NavArray [6] ['type'] = 'S';
$NavArray [6] ['title'] = 'Cherry Bureau';
$NavArray [6] ['key'] = 'CherryBureau';
$NavArray [6] ['proddir'] = 'RestorationWork/';
$NavArray [6] ['tooltip'] = 'Cherry Bureau';
$NavArray [6] ['filename'] = 'CherryBureau';
$NavArray [6] ['floatimg'] = 'cherry3.bmp';
$NavArray [6] ['parent'] = 'RestorationWork';
$NavArray [6] ['child'] = 'None';
$NavArray [6] ['NextPeer'] = 'MachineCane';
$NavArray [6] ['PrevPeer'] = 'WalnutBureau';

//-- Added 3/11/2013
$NavArray [7] ['type'] = 'S';
$NavArray [7] ['title'] = 'Machine Woven Cane';
$NavArray [7] ['key'] = 'MachineCane';
$NavArray [7] ['proddir'] = 'RestorationWork/';
$NavArray [7] ['tooltip'] = 'Machine Woven Cane';
$NavArray [7] ['filename'] = 'MachineCane';
$NavArray [7] ['floatimg'] = 'machinecane.png';
$NavArray [7] ['parent'] = 'RestorationWork';
$NavArray [7] ['child'] = 'None';
$NavArray [7] ['NextPeer'] = 'HandCane';
$NavArray [7] ['PrevPeer'] = 'CherryBureau';

$NavArray [8] ['type'] = 'S';
$NavArray [8] ['title'] = 'Hand Woven Cane';
$NavArray [8] ['key'] = 'HandCane';
$NavArray [8] ['proddir'] = 'RestorationWork/';
$NavArray [8] ['tooltip'] = 'Hand Woven Cane';
$NavArray [8] ['filename'] = 'HandCane';
$NavArray [8] ['floatimg'] = 'handcane2.png';
$NavArray [8] ['parent'] = 'RestorationWork';
$NavArray [8] ['child'] = 'None';
$NavArray [8] ['NextPeer'] = 'HandRush';
$NavArray [8] ['PrevPeer'] = 'MachineCane';

$NavArray [9] ['type'] = 'S';
$NavArray [9] ['title'] = 'Hand Woven Rush';
$NavArray [9] ['key'] = 'HandRush';
$NavArray [9] ['proddir'] = 'RestorationWork/';
$NavArray [9] ['tooltip'] = 'Hand Woven Rush';
$NavArray [9] ['filename'] = 'HandRush';
$NavArray [9] ['floatimg'] = 'handrush1.png';
$NavArray [9] ['parent'] = 'RestorationWork';
$NavArray [9] ['child'] = 'None';
$NavArray [9] ['NextPeer'] = 'HerringCord';
$NavArray [9] ['PrevPeer'] = 'HandCane';

$NavArray [10] ['type'] = 'S';
$NavArray [10] ['title'] = 'Hearing Bone & Cord';
$NavArray [10] ['key'] = 'HerringCord';
$NavArray [10] ['proddir'] = 'RestorationWork/';
$NavArray [10] ['tooltip'] = 'Paper Rush, Hearing Bone & Cord Seat Weaving';
$NavArray [10] ['filename'] = 'HerringCord';
$NavArray [10] ['floatimg'] = 'herringcord2.png';
$NavArray [10] ['parent'] = 'RestorationWork';
$NavArray [10] ['child'] = 'None';
$NavArray [10] ['NextPeer'] = 'None';
$NavArray [10] ['PrevPeer'] = 'HandRush';

//----------------------------------------------------------------------------------------------------------
// LefT Nav variables
//----------------------------------------------------------------------------------------------------------
$LeftNavTop = $MainNavTop + $MainNavHeight;
$LeftNavHeight = 650;
$LeftNavWidth = 150;
$LeftNavBackgroundColor = $MainNavTabUpperCellSelectColor;

//
// Left Nav Menu variables
//

$LeftNavMenuBorderColor = $MainNavTabUpperCellSelectColor;
$LeftNavMenuBorderWidth = 0;
$LeftNavMenuBorderTopWidth = 0;
$LeftNavMenuBorderBottomWidth = 1;
$LeftNavMenuPadding = 0;
$LeftNavMenuMargin = 0;

$LeftNavMenuHdrCellTextColor = $MainNavTabUpperCellSelectColor;
$LeftNavMenuHdrCellTextFonts= "Verdana, Arial, Helvetica, sans-serif";
$LeftNavMenuHdrCellTextFontSize= "13";
$LeftNavMenuHdrCellTextWeight= "700";
$LeftNavMenuHdrCellPaddingTopBottom = 4;
$LeftNavMenuHdrCellPaddingLeftRight = 6;
$LeftNavMenuHdrCellBackgroundColor = "#1b5f5d";
$LeftNavMenuBorderWidth = 0;

$LeftNavMenuCellTextColor = "black";
$LeftNavMenuCellTextFonts= "Verdana, Arial, Helvetica, sans-serif";
$LeftNavMenuCellTextFontSize= "12";
$LeftNavMenuCellTextWeight= "500";
$LeftNavMenuCellLineHeight = 15; 
$LeftNavMenuCellBackgroundColor = "#468e8b";

$LeftNavMenuCellHoverTextColor = "blue";
$LeftNavMenuCellHoverBackgroundColor = "#70b1af";

$LeftNavMenuCellSelectBackgroundColor = "white";

//----------------------------------------------------------------------------------------------------------
// LefT Nav Supported Causes logo variables
//----------------------------------------------------------------------------------------------------------
$supportedCausesTop = 280;
$supportedCausesHeight = 200;
$supportedCausesWidth = 150;
$supportedCausesBackgroundColor = $MainNavTabUpperCellSelectColor;

//----------------------------------------------------------------------------------------------------------
//  Workarea variables
//----------------------------------------------------------------------------------------------------------

$WATop = $MainNavTop + $MainNavHeight;
$WAHeight = $LeftNavHeight;
$WALeft= $LeftNavWidth;
$WAWidth = $BannerWidth - $LeftNavWidth;
$WABackgroundColor = "white";

//
// WA Breadcrumb variables
//
$WAbreadcrumbTop = 2; 
$WAbreadcrumbHeight = 15;
$WAbreadcrumbLeft= 5;
$WAbreadcrumbWidth = $WAWidth - ($WAbreadcrumbLeft + 2);
$WAbreadcrumbBackgroundColor = "white";

$WAbreadcrumbTextColor= "#333";
$WAbreadcrumbTextFonts= "verdana,sans-serif";
$WAbreadcrumbTextFontSize= "11";
$WAbreadcrumbTextWeight= "500";
$WAbreadcrumbTextColoHover= "red";
$WAbreadcrumbTextLineHeight = 11;

//
// WA Title Border variables
//
$WAtitleborderTop = $WAbreadcrumbTop + $WAbreadcrumbHeight; 
$WAtitleborderHeight = 30;
$WAtitleborderLeft= 5;
$WAtitleborderWidth = $WAWidth - ($WAtitleborderLeft + 2);
$WAtitleborderBackgroundColor = "white";

$WAtitleborderBottomColor = "#d1b60c";
$WAtitleborderBottomSize = "2";

$WAtitleborderTextColor= "#a23636";
$WAtitleborderTextFonts= "Arial,Helvetica";
$WAtitleborderTextFontSize= "15";
$WAtitleborderTextWeight= "700";
$WAtitleborderTextLineStyle = "italic";
$WAtitleborderTextLineHeight = 15;
$WAtitleborderTextAlign = "right";

//
// WA home variables
//
$WAhomeTop = $WAtitleborderTop + $WAtitleborderHeight; 
$WAhomeHeight = $WAHeight;
$WAhomeLeft= 0;
$WAhomeWidth = $WAWidth - 1;
$WAhomeBackgroundColor = "white";


//
// WA main variables
//
$WAmainTop = $WAtitleborderTop + $WAtitleborderHeight; 
$WAmainHeight = 200;
$WAmainLeft= 0;
$WAmainWidth = $WAWidth - 1;
$WAmainBackgroundColor = "white";

//
// WA select variables
//
$WAselectTop = $WAmainTop + $WAmainHeight; 
$WAselectHeight = $WAHeight - $WAselectTop;
$WAselectLeft= 0;
$WAselectWidth = $WAWidth - 1;
$WAselectBackgroundColor = "white";

//
// Used to create Names of files to include for top level work area
//
$WAgo = "lejacwaSTDtrans.php";
$WAstay = "lejacwaSTDfinal.php";

//----------------------------------------------------------------------------------------------------------
// Footer variables
//----------------------------------------------------------------------------------------------------------
$FooterTop = $LeftNavTop + $LeftNavHeight + 2;
$FooterLeft = 0;
$FooterWidth = $BannerWidth;

//----------------------------------------------------------------------------------------------------------
// Miscelaneous global variables
//----------------------------------------------------------------------------------------------------------
$Spacer = "&nbsp;&nbsp;";
$module = 'index.php';

?>
