<? include '../config.php';?>
<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <? include '../header.php';?>
</head>
<body>
<div class="container mainImage">
	<div class="heading"><h1><?=$projectTitle?></h1></div>
	<div class="menu">
		<? include '../menu.php'; ?>
	</div>	
	<div class="span-1">&nbsp;</div>
	<div class="span-4 projectInfo">
		<? include '../projectInfo.php'; ?>
	</div>
	<div class="span-1">&nbsp;</div>
	<div class="span-17 mainContent">
	<div class="span-17 breadcrumbs"><? include '../breadcrumbs.php';?></div>
	<!-- content goes here-->

	<h2>People involved in the <?=$projectTitle?>:</h2>
	
<?php

try{
	require_once 'ECS/utils.php';
	require_once 'ECS/People/ECS_People.php';
	ECS_OpenCoreDb();
	$lsi_people = ECS_People::getPeopleByFacet('lsi');
	print('<table>');
	foreach ($lsi_people as $person) {
		print('<tr><td>'.$person->renderLink().'</td><td>'.$person->getRoleDescription().'</td></tr>');
	}
	print('</table>');
}
catch (Exception $e) {
 	print("<p>people listing not available</p>");
}
?>


<?php include '../footer.php'; ?>