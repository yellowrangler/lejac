<?php

//-------------------------------------------------------------------------------------------------
// Column globals
//-------------------------------------------------------------------------------------------------
$gridLeftColumn1 = 0;
$gridWidthColumn1 = 180;
$gridMarginColumn1 = 0;

$gridLeftColumn2 = $gridLeftColumn1 + $gridWidthColumn1 + (2 * $gridMarginColumn1);
$gridWidthColumn2 = 175;
$gridMarginColumn2 = 0;

$gridLeftColumn3 = $gridLeftColumn2 + $gridWidthColumn2 + (2 * $gridMarginColumn2);
$gridWidthColumn3 = 275;
$gridMarginColumn3 = 0;

$gridLeftColumn4 = $gridLeftColumn3 + $gridWidthColumn3 + (2 * $gridMarginColumn3);
$gridWidthColumn4 = 175;
$gridMarginColumn4 = 0;

//-------------------------------------------------------------------------------------------------
// Check List processing
//-------------------------------------------------------------------------------------------------
$gridWidthCheckList = $gridWidthColumn1;
$gridDisplayNameCheckLIst = "Check List";
$gridNameCheckLIst = "checklist";

$gridDataArrayCheckListTitles = Array (
'QA & Dev Lead Resourced', 'Project Plan', 'Design A', 'Design B', 'Design C', 'Application Criticality', 'Analysis of Product Scope changes',
'Analysis of Testing effort', 'Business Requirements', 'Use Cases', 'SRA', 'SRA Signoff', 'DRB', 'Where data is going to', 'Data and process methods',
'Environment definition', 'Systems impacted', 'Applications impacted', 'Databases impacted', 'SDS', 'SDS Signoff', 'Commited Software Release', 'TSD',
'TSD Sign off', 'Unit Test Sign off', 'Charted Evironemnt Migration', 'DataLoads (back compat)', 'DataLoads (Not back compat)', 'ERB',
'Peer Code Review', 'Peer Code Review Doc', 'Test Plan Review', 'RCB', 'TRB', 'Secure Code Review', 'Performance Testing', 'Regression Testing',
'GORE Validation', 'Sandbar', 'Flounder', 'QA 1st Pass', 'QA 2nd Pass', 'QA Sign off', 'Go/NoGo', 'Prod Validation plan', 'FBSI Install', 'Portal Install',
'Change control', 'Tech Ops Doc', 'Test Backout Plan', 'Proj on Dan Carty List'
					);
					
$gridDataArrayCheckListFields = "";
$k = count($gridDataArrayCheckListTitles);
for ($i = 0; $i < $k; $i++)
{
	$gridDataArrayCheckListFields[$i] = sprintf("checklist%i", $i);
} // end of for	

$gridDataArrayCheckListValues = "";
$k = count($gridDataArrayCheckListTitles);
for ($i = 0; $i < $k; $i++)
{
	$gridDataArrayCheckListValues[$i] = "N";
} // end of for	
//-------------------------------------------------------------------------------------------------
// now get the list data
//-------------------------------------------------------------------------------------------------
$DisplaygridBodyCheckList = "";
$maxRow = count($gridDataArrayCheckListTitles);
$checked = " ";

for ($i = 0; $i < $maxRow; $i++) 
{	 
	if ($gridDataArrayCheckListValues[$i] == "Y")
	{
		$checked = " checked ";
	}
	else
	{
		$checked = " ";
	}	
	$DisplaygridBodyCheckList .= "
		<tr class=\"normal\">
			<td align=left valign=center width=\"100%\">
				<input valign=center name=\"".$gridDataArraySystemsImpactedFields[$i]."\" type=\"checkbox\" ".$checked." value=\"".$gridDataArraySystemsImpactedFields[$i]."\">
					".$gridDataArrayCheckListTitles[$i]."
			</td>
		</tr>
	";
	
//	$DisplaygridBodyCheckList .= "
//	<tr style=\"background-color:#fffff;\" onMouseOver=\"this.className='highlight'\" onMouseOut=\"this.className='normal'\">
//		<td onMouseOver=\"this.className='highlight'\" onMouseOut=\"this.className='normal'\" align=left width=\"100%\">
//		    ".$gridDataArrayCheckListTitles[$i]."
//		</td>
//	</tr>
//	";


} // end of while

//-------------------------------------------------------------------------------------------------
// Project Details processing
//-------------------------------------------------------------------------------------------------
$gridWidthProjectDetail = $gridWidthColumn2;
$gridDisplayNameProjectDetail = "Project Details";
$gridNameProjectDetail = "ProjectDetail";

$gridDataArrayProjectDetailTitles = Array (
'Status', '% Complete', 'Milestone', 'Sponsor', 'Proj Nbr', 'ITG TEB Nbr', 'Install'
					);
					
$gridDataArrayProjectDetailFields = Array (
'projstatus', 'projcomplete', 'projmilestone', 'projsponsor', 'projnbr', 'projtebb', 'projinstall'
					);

$gridDataArrayProjectDetailValues = Array (
'Green', '50%', 'SDS', 'FRIAG', '716666 001', '125584', '6.4'
					);					
//--------------------------------------------------------------------------------------------------
// now get the project data
//--------------------------------------------------------------------------------------------------
$DisplaygridBodyProjectDetail = "";
$maxRow = count($gridDataArrayProjectDetailTitles);

for ($i = 0; $i < $maxRow; $i++) 
{	 
	$DisplaygridBodyProjectDetail .= "
	<tr class=\"normal\">
		<td  style=\"border-top: 1px solid rgb(204, 204, 204);\" align=left width=\"45%\">
		    ".$gridDataArrayProjectDetailTitles[$i]."
		</td>
		<td  style=\"border-left: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204);\" align=center width=\"55%\">
		    ".$gridDataArrayProjectDetailValues[$i]."
		</td>
	</tr>
	";
} // end of while

//-------------------------------------------------------------------------------------------------
//  Budget processing
//-------------------------------------------------------------------------------------------------
$gridWidthBudget = $gridWidthColumn2;
$gridDisplayNameBudget = "Budget";
$gridNameBudget = "Budget";

$gridDataArrayBudgetTitles = Array (
'Approved', 'Current', 'Remaining', 'Remaining %'
					);
					
$gridDataArrayBudgetFields = Array (
'budgetapproved', 'budgetcurrent', 'budgetremaining', 'budgetremainingpercent'
					);

$gridDataArrayBudgetValues = Array (
'$250,000.00', '$100,000.00', '$150,00.00', '60%'
					);					
//--------------------------------------------------------------------------------------------------
// now get the project data
//--------------------------------------------------------------------------------------------------
$DisplaygridBodyBudget = "";
$maxRow = count($gridDataArrayBudgetTitles);

for ($i = 0; $i < $maxRow; $i++) 
{	 
	$DisplaygridBodyBudget .= "
	<tr class=\"normal\">
		<td  style=\"border-top: 1px solid rgb(204, 204, 204);\" align=left width=\"45%\">
		    ".$gridDataArrayBudgetTitles[$i]."
		</td>
		<td  style=\"border-left: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204);\" align=center width=\"55%\">
		    ".$gridDataArrayBudgetValues[$i]."
		</td>
	</tr>
	";
} // end of while

//-------------------------------------------------------------------------------------------------
//  Testing stats processing
//-------------------------------------------------------------------------------------------------
$gridWidthTestingStats = $gridWidthColumn2;
$gridDisplayNameTestingStats = "Testing Statistics";
$gridNameTestingStats = "TestingStats";

$gridDataArrayTestingStatsTitles = Array (
'Total Cases', 'Complete', 'Incomplete', 'Passed', 'Failed', 'Open CQs', 'Closed CQs', 'Crital', 'High'
					);
					
$gridDataArrayTestingStatsFields = Array (
'testtotalcases', 'testcasecomplete', 'testcaseincomplete', 'testcasepassed', 'testcasefailed', 'testopencq', 'testclosecq', 'testcritical', 'testhigh'
					);

$gridDataArrayTestingStatsValues = Array (
'200', '125', '75', '100', '25', '20', '5', '3', '2'
					);					
//--------------------------------------------------------------------------------------------------
// now get the testing data
//--------------------------------------------------------------------------------------------------
$DisplaygridBodyTestingStats = "";
$maxRow = count($gridDataArrayTestingStatsTitles);

for ($i = 0; $i < $maxRow; $i++) 
{	 
	$DisplaygridBodyTestingStats .= "
	<tr class=\"normal\">
		<td  style=\"border-top: 1px solid rgb(204, 204, 204);\" align=left width=\"45%\">
		    ".$gridDataArrayTestingStatsTitles[$i]."
		</td>
		<td  style=\"border-left: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204);\" align=right width=\"55%\">
		    ".$gridDataArrayTestingStatsValues[$i]."
		</td>
	</tr>
	";
} // end of while

//-------------------------------------------------------------------------------------------------
//  Systems impacted processing
//-------------------------------------------------------------------------------------------------
$gridWidthSystemsImpacted = $gridWidthColumn2;
$gridDisplayNameSystemsImpacted = "Systems Impacted";
$gridNameSystemsImpacted = "SystemsImpacted";

$gridDataArraySystemsImpactedTitles = Array (
'StreetScape for Windows', 'StreetScape frame relay', 'StreetScape web', 
'MyStreetsScape web', 'MyStreetsScape phones', 'MyStreetsScape wireless', 'MyStreetsScape demo',
'Advisor Channel web', 'Advisor Channel Workstation', 'Advisor Channel Old', 'Account View',
'A la Carte', 'Single Sign on', 'API web services', 'OFX', 'EPS'
					);
					
$gridDataArraySystemsImpactedFields = Array (
'ssforwindows', 'ssframe', 'ssweb', 
'myssweb', 'myssphones', 'mysswireless', 'myssdemo',
'acweb', 'acworkstation', 'acold', 'accountview',
'alacarte', 'sso', 'apiws', 'ofx', 'eps'
					);

$gridDataArraySystemsImpactedValues = Array (
'Y', 'Y', 'Y', 
'N', 'N', 'N', 'N',
'Y', 'N', 'N', 'Y',
'Y', 'Y', 'N', 'N', 'N'
					);					
//--------------------------------------------------------------------------------------------------
// now get the testing data
//--------------------------------------------------------------------------------------------------
$DisplaygridBodySystemsImpacted = "";
$maxRow = count($gridDataArraySystemsImpactedTitles);
$checked = " ";

for ($i = 0; $i < $maxRow; $i++) 
{	 
	if ($gridDataArraySystemsImpactedValues[$i] == "Y")
	{
		$checked = " checked ";
	}
	else
	{
		$checked = " ";
	}	

	$DisplaygridBodySystemsImpacted .= "
	<tr class=\"normal\">
		<td align=left valign=center width=\"100%\">
			<input valign=center name=\"".$gridDataArraySystemsImpactedFields[$i]."\" type=\"checkbox\" ".$checked." value=\"".$gridDataArraySystemsImpactedFields[$i]."\">
				".$gridDataArraySystemsImpactedTitles[$i]."
		</td>
	</tr>
	";
} // end of while

//-------------------------------------------------------------------------------------------------
// Milestone processing
//-------------------------------------------------------------------------------------------------
$gridWidthMilestones = $gridWidthColumn3;
$gridDisplayNameMilestones = "Milestones";
$gridNameMilestones = "Milestones";
$MBase = 0;
$MStart = 1;
$MEnd = 2;
$MDur = 3;

$gridDataArrayMilestonesTitles = Array (
'PPI','Proj Kick-off','Bus Req','SecReq','SRA','DR (A)','DRB','SDS','CSR','TSD','DR (B)','Coding','PeerCodeRev',
'DR(C)','TestPlanRev','Unit Test Signoff','eRB','SandBar','TestBackoutPlan','TestCaseRev','RCB','SecCodeRev','Open',
'Open','Open','Open','Open',
'Flounder','Open','DL Freeze','Last RCB','Performance','Seagull','Open','Tech Ops Doc','Regression','Go/No Go',	
'FBSI Install','Portal Install','Post val'	
					);
					
$gridDataArrayMilestonesFields[$MBase] = Array (
'ppi','projkickoff','busreq','secreq','sra','drA','drb','sds','csr','tsd','drB','coding','peercoderev',
'drC','testplanrev','unittestsignoff','erb','sandbar','testbackoutplan','testcaserev','rcb','seccoderev','open',
'open','open','open','open',
'flounder','open','dlfreeze','lastrcb','performance','seagull','open','techopsdoc','regression','gonogo',	
'fbsiinstall','portalinstall','postval'
					);

$k = count($gridDataArrayMilestonesTitles);
for ($i = 0; $i < $k; $i++) 	
{
	$gridDataArrayMilestonesFields[$MStart][$i] = sprintf("startdate_%s", $gridDataArrayMilestonesFields['Base'][$i]);
}

for ($i = 0; $i < $k; $i++) 	
{
	$gridDataArrayMilestonesFields[$MEnd][$i] = sprintf("enddate_%s", $gridDataArrayMilestonesFields['Base'][$i]);
}

for ($i = 0; $i < $k; $i++) 	
{
	$gridDataArrayMilestonesFields[$MDur][$i] = sprintf("duration_%s", $gridDataArrayMilestonesFields['Base'][$i]);
}


$k = count($gridDataArrayMilestonesTitles);
for ($i = 0; $i < $k; $i++) 
{
	$gridDataArrayMilestonesValues[$MStart] = Array (
'01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006',
'01/10/2006','01/10/2006','01/10/2006','NA','01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006','01/10/2006',
'NA','NA','NA','NA',
'01/10/2006','NA','01/10/2006','01/10/2006','01/10/2006','01/10/2006','NA','01/10/2006','01/10/2006','01/10/2006',	
'01/10/2006','01/10/2006','01/10/2006'
					);	
}

for ($i = 0; $i < $k; $i++) 
{
	$gridDataArrayMilestonesValues[$MEnd] = Array (
'06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006',
'06/22/2006','06/22/2006','06/22/2006','NA','06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006','06/22/2006',
'NA','NA','NA','NA',
'06/22/2006','NA','06/22/2006','06/22/2006','06/22/2006','06/22/2006','NA','06/22/2006','06/22/2006','06/22/2006',	
'06/22/2006','06/22/2006','06/22/2006'
					);	
}

for ($i = 0; $i < $k; $i++) 
{
	$gridDataArrayMilestonesValues[$MDur] = Array (
'20.5','20.5','20.5','20.5','20.5','20.5','20.5','20.5','20.5','20.5','20.5','20.5','20.5',
'20.5','20.5','20.5','NA','20.5','20.5','20.5','20.5','20.5','20.5',
'NA','NA','NA','NA',
'20.5','NA','20.5','20.5','20.5','20.5','NA','20.5','20.5','20.5',	
'20.5','20.5','20.5'
					);	
}
//--------------------------------------------------------------------------------------------------
// now get the milestone data
//--------------------------------------------------------------------------------------------------
$DisplaygridBodyMilestones = "";
$maxRow = count($gridDataArrayMilestonesTitles);
$firstTime = 1;

for ($i = 0; $i < $maxRow; $i++) 
{	 
	if ($firstTime == 1)
	{
		$DisplaygridBodyMilestones .= "
			<tr class=\"normal\">
				<td  style=\"border-top: 1px solid rgb(204, 204, 204);\" align=center width=\"35%\">
					Item
				</td>
				<td  style=\"border-left: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204);\" align=center width=\"25%\">
					Start
				</td>
				<td  style=\"border-left: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204);\" align=center width=\"25%\">
					End
				</td>
				<td  style=\"border-left: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204);\" align=center width=\"15%\">
					Dur
				</td>
			</tr>
		";
		
		$firstTime = 0;
		
	}
	else
	{	
		$DisplaygridBodyMilestones .= "
			<tr class=\"normal\">
				<td  style=\"border-top: 1px solid rgb(204, 204, 204);\" align=right width=\"35%\">
					".$gridDataArrayMilestonesTitles[$i]."
				</td>
				<td  style=\"border-left: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204);\" align=right width=\"25%\">
					".$gridDataArrayMilestonesValues[$MStart][$i]."
				</td>
				<td  style=\"border-left: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204);\" align=right width=\"25%\">
					".$gridDataArrayMilestonesValues[$MEnd][$i]."
				</td>
				<td  style=\"border-left: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204);\" align=center width=\"15%\">
					".$gridDataArrayMilestonesValues[$MDur][$i]."
				</td>
			</tr>
		";
	}	
} // end of for

?>
<html>
<head>
	<title>Grid test</title>
	
<style type="text/css">
/*--------------------------------------------------------------------*/
/*  Column 1                                                          */
/*--------------------------------------------------------------------*/
.columnOne {
	position: absolute;
	left: <?php print $gridLeftColumn1; ?>px;
	width: <?php print $gridWidthColumn1; ?>px;
	display: block; 
	margin:  <?php print $gridMarginColumn1; ?>px;
	padding: 0px 0px 0px 0px;
	}
	
/*--------------------------------------------------------------------*/
/*  Column 2                                                          */
/*--------------------------------------------------------------------*/
.columnTwo {
	position: absolute;
	left: <?php print $gridLeftColumn2; ?>px;
	width: <?php print $gridWidthColumn2; ?>px;
	display: block; 
	margin:  <?php print $gridMarginColumn2; ?>px;
	padding: 0px 0px 0px 0px;
	}	
	
/*--------------------------------------------------------------------*/
/*  Column 3                                                          */
/*--------------------------------------------------------------------*/
.columnThree {
	position: absolute;
	left: <?php print $gridLeftColumn3; ?>px;
	width: <?php print $gridWidthColumn3; ?>px;
	display: block; 
	margin:  <?php print $gridMarginColumn3; ?>px;
	padding: 0px 0px 0px 0px;
	}		
	
/*--------------------------------------------------------------------*/
/*  Column 4                                                          */
/*--------------------------------------------------------------------*/
.columnFour {
	position: absolute;
	left: <?php print $gridLeftColumn4; ?>px;
	width: <?php print $gridWidthColumn4; ?>px;
	display: block; 
	margin:  <?php print $gridMarginColumn4; ?>px;
	padding: 0px 0px 0px 0px;
	}		
		
/*--------------------------------------------------------------------*/
/*  CheckList Box     (Put these in Arrays later                      */
/*--------------------------------------------------------------------*/
.gridCheckList {
	position: float;
	float: left;
	width: <?php print $gridWidthCheckList; ?>px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
/*	background: #70b1af;  */ 
	border: 1px solid black;
	}
	
.gridHdrCheckList {
	width: <?php print $gridWidthCheckList; ?>px;
	height: 15px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: #70b1af; 
	}
	
.gridHdrCheckList td a {
	font: 700 9px Verdana, Arial,Geneva;
	color: black; 
	line-height: 11px; 
	text-decoration: none;	
	}
	
.gridHdrCheckList td a:hover   { 
	color: #a23636;
	font: 700 9px Verdana, Arial,Geneva;
	line-height: 13px; 
	}
	
.gridBodyCheckList {
	width: <?php print $gridWidthCheckList; ?>px; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: white; 
	}	

.gridBodyCheckList td a {
	color: black; 
	font: 500 10px Verdana, Arial,Geneva;
	text-decoration: none;	
	}	

/*	
.gridBodyCheckList td a:hover {
	color: red; 
	font: 500 11px Helvetica, Arial,Geneva;
	text-decoration: underline;	
	}
*/
.gridBodyCheckList td input {
	color: black; 
	font: 500 9px  Verdana;
	height:11px; 
	width:11px; 
	margin:0px;
	text-decoration: none;	
	}	
/*--------------------------------------------------------------------*/
/*  ProjectDetail Box                                                 */
/*--------------------------------------------------------------------*/
.gridProjectDetail {
	position: float;
/*	float: left; */
	width: <?php print $gridWidthProjectDetail; ?>px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
/*	background: #70b1af;  */ 
	border: 1px solid black;
	}
	
.gridHdrProjectDetail {
	width: <?php print $gridWidthProjectDetail; ?>px;
	height: 15px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: #70b1af; 
	}
	
.gridHdrProjectDetail td a {
	font: 700 9px Verdana, Arial,Geneva;
	color: black; 
	line-height: 11px; 
	text-decoration: none;	
	}
	
.gridHdrProjectDetail td a:hover   { 
	color: #a23636;
	font: 700 9px Verdana, Arial,Geneva;
	line-height: 13px; 
	}
	
.gridBodyProjectDetail {
	width: <?php print $gridWidthProjectDetail; ?>px;
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: white; 
	}	

.gridBodyProjectDetail td {
	color: black; 
	border: 0 solid black;
	text-decoration: none;	
	}	
	
/*--------------------------------------------------------------------*/
/*  Budget Box                                                        */
/*--------------------------------------------------------------------*/
.gridBudget {
	position: float;
/*	float: relative; */
	left: 5px;
	width: <?php print $gridWidthBudget; ?>px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
/*	background: #70b1af;  */ 
	border: 1px solid black;
	}
	
.gridHdrBudget {
	width: <?php print $gridWidthBudget; ?>px;
	height: 15px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: #70b1af; 
	}
	
.gridHdrBudget td a {
	font: 700 9px Verdana, Arial,Geneva;
	color: black; 
	line-height: 11px; 
	text-decoration: none;	
	}
	
.gridHdrBudget td a:hover   { 
	color: #a23636;
	font: 700 9px Verdana, Arial,Geneva;
	line-height: 13px; 
	}
	
.gridBodyBudget {
	width: <?php print $gridWidthBudget; ?>px;
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: white; 
	}	

.gridBodyBudget td {
	color: black; 
	border: 0 solid black;
	text-decoration: none;	
	}	

/*--------------------------------------------------------------------*/
/*  TestingStats Box                                                  */
/*--------------------------------------------------------------------*/
.gridTestingStats {
	position: float;
/*	float: relative; */
	left: 5px;
	width: <?php print $gridWidthTestingStats; ?>px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
/*	background: #70b1af;  */ 
	border: 1px solid black;
	}
	
.gridHdrTestingStats {
	width: <?php print $gridWidthTestingStats; ?>px;
	height: 15px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: #70b1af; 
	}
	
.gridHdrTestingStats td a {
	font: 700 9px Verdana, Arial,Geneva;
	color: black; 
	line-height: 11px; 
	text-decoration: none;	
	}
	
.gridHdrTestingStats td a:hover   { 
	color: #a23636;
	font: 700 9px Verdana, Arial,Geneva;
	line-height: 13px; 
	}
	
.gridBodyTestingStats {
	width: <?php print $gridWidthTestingStats; ?>px;
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: white; 
	}	

.gridBodyTestingStats td {
	color: black; 
	border: 0 solid black;
	text-decoration: none;	
	}	

/*--------------------------------------------------------------------*/
/*  SystemsImpacted Box                                               */
/*--------------------------------------------------------------------*/
.gridSystemsImpacted {
	position: float;
/*	float: relative; */
	left: 5px;
	width: <?php print $gridWidthSystemsImpacted; ?>px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
/*	background: #70b1af;  */ 
	border: 1px solid black;
	}
	
.gridHdrSystemsImpacted {
	width: <?php print $gridWidthSystemsImpacted; ?>px;
	height: 15px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: #70b1af; 
	}
	
.gridHdrSystemsImpacted td a {
	font: 700 9px Verdana, Arial,Geneva;
	color: black; 
	line-height: 11px; 
	text-decoration: none;	
	}
	
.gridHdrSystemsImpacted td a:hover   { 
	color: #a23636;
	font: 700 9px Verdana, Arial,Geneva;
	line-height: 13px; 
	}
	
.gridBodySystemsImpacted {
	width: <?php print $gridWidthSystemsImpacted; ?>px;
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: white; 
	}	

.gridBodySystemsImpacted td {
	color: black; 
	border: 0 solid black;
	text-decoration: none;	
	}	
	
.gridBodySystemsImpacted td input {
	color: black; 
	font: 500 9px  Verdana;
	height:11px; 
	width:11px; 
	margin:0px;
	text-decoration: none;	
	}	

/*--------------------------------------------------------------------*/
/*  Milestones Box                                                    */
/*--------------------------------------------------------------------*/
.gridMilestones {
	position: float;
/*	float: left; */
	width: <?php print $gridWidthMilestones; ?>px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
/*	background: #70b1af;  */ 
	border: 1px solid black;
	}
	
.gridHdrMilestones {
	width: <?php print $gridWidthMilestones; ?>px;
	height: 15px;
	overflow: hidden; 
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: #70b1af; 
	}
	
.gridHdrMilestones td a {
	font: 700 9px Verdana, Arial,Geneva;
	color: black; 
	line-height: 11px; 
	text-decoration: none;	
	}
	
.gridHdrMilestones td a:hover   { 
	color: #a23636;
	font: 700 9px Verdana, Arial,Geneva;
	line-height: 13px; 
	}
	
.gridBodyMilestones {
	width: <?php print $gridWidthMilestones; ?>px;
	display: block; 
	margin: 0px;
	padding: 0px 0px 0px 0px;
	background: white; 
	}	

.gridBodyMilestones td {
	color: black; 
	border: 0 solid black;
	text-decoration: none;	
	}	
		
.normal { background-color: #ffffff }

.highlight { background-color: #cbeef4 }

h2 {
	color:red;
	}

.gridText {
		font: 500 9px  Verdana;
		}

.gridTextsmall {
		font: 500 6px Arial,Helvetica;
		}
		
.gridTextBold {
		font: 700 10px Arial,Helvetica;
		}			
</style>
	
</head>
<body>

<div class="columnOne">

<div class="gridCheckList">
<div class="gridHdrCheckList">
<table width="100%" class="gridText">
	<tr>
		<td valign=top align=center width="100%">
			<a href="grid.php?grid=<?php print $gridNameCheckLIst; ?>"><?php print $gridDisplayNameCheckLIst; ?></a> 
		</td> 
	</tr>
</table>
</div>

<div class="gridBodyCheckList">
<table width="100%" class="gridText" cellspacing="0" cellpadding="0">
<?php print $DisplaygridBodyCheckList; ?>
</table>
</div>
</div>

</div>


<div class="columnTwo">

<div class="gridProjectDetail">
<div class="gridHdrProjectDetail">
<table width="100%" class="gridText">
	<tr>
		<td valign=top align=center width="100%">
			<a href="grid.php?grid=<?php print $gridNameProjectDetail; ?>"><?php print $gridDisplayNameProjectDetail; ?></a> 
		</td> 
	</tr>
</table>
</div>

<div class="gridBodyProjectDetail">
<table width="100%" class="gridText" cellspacing="0" cellpadding="0">
<?php print $DisplaygridBodyProjectDetail; ?>
</table>
</div>
</div>

<div class="gridBudget">
<div class="gridHdrBudget">
<table width="100%" class="gridText">
	<tr>
		<td valign=top align=center width="100%">
			<a href="grid.php?grid=<?php print $gridNameBudget; ?>"><?php print $gridDisplayNameBudget; ?></a> 
		</td> 
	</tr>
</table>
</div>

<div class="gridBodyBudget">
<table width="100%" class="gridText" cellspacing="0" cellpadding="0">
<?php print $DisplaygridBodyBudget; ?>
</table>
</div>
</div>

<div class="gridTestingStats">
<div class="gridHdrTestingStats">
<table width="100%" class="gridText">
	<tr>
		<td valign=top align=center width="100%">
			<a href="grid.php?grid=<?php print $gridNameTestingStats; ?>"><?php print $gridDisplayNameTestingStats; ?></a> 
		</td> 
	</tr>
</table>
</div>

<div class="gridBodyTestingStats">
<table width="100%" class="gridText" cellspacing="0" cellpadding="0">
<?php print $DisplaygridBodyTestingStats; ?>
</table>
</div>
</div>

<div class="gridSystemsImpacted">
<div class="gridHdrSystemsImpacted">
<table width="100%" class="gridText">
	<tr>
		<td valign=top align=center width="100%">
			<a href="grid.php?grid=<?php print $gridNameSystemsImpacted; ?>"><?php print $gridDisplayNameSystemsImpacted; ?></a> 
		</td> 
	</tr>
</table>
</div>

<div class="gridBodySystemsImpacted">
<table width="100%" class="gridText" cellspacing="0" cellpadding="0">
<?php print $DisplaygridBodySystemsImpacted; ?>
</table>
</div>
</div>

</div>

<div class="columnThree">

<div class="gridMilestones">
<div class="gridHdrMilestones">
<table width="100%" class="gridText">
	<tr>
		<td valign=top align=center width="100%">
			<a href="grid.php?grid=<?php print $gridNameMilestones; ?>"><?php print $gridDisplayNameMilestones; ?></a> 
		</td> 
	</tr>
</table>
</div>

<div class="gridBodyMilestones">
<table width="100%" class="gridText" cellspacing="0" cellpadding="0">
<?php print $DisplaygridBodyMilestones; ?>
</table>
</div>
</div>

</div>

</body>
</html>
