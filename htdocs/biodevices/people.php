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

	<h2>Bio-Devices - Physical Interfaces to Living Systems</h2>
	<p>
	An overview paragraph.
	</p>
	
	<h3>Lab on a chip/system on chip: microfluidics, high throughput analysis</h3>

<?php

try{
	
	require_once 'ECS/utils.php';
	require_once 'ECS/People/ECS_People.php';
	
	ECS_OpenCoreDb();
	
	$lsi_people = ECS_People::getPeopleByFacet('lsi');
	
	foreach ($lsi_people as $person) {
	    echo '<p>';
	    echo $person->renderLink();
	    echo '<br/>';
	    echo $person->getFullName();
	    echo '<br/>';
	    echo $person->getStatus();
	    echo '<br/>';
	    echo $person->getRoleDescription();
	    echo '<br/>';
	    echo $person->getGroup();
	    echo '</p>';
	}
}
catch (Exception $e) {
 	print("<p>people listing not available</p>");
}

?>


	<!-- end of content -->
</div>
	<div class="span-1 last">&nbsp;</div>
	<div class="span-24 small footer last"><? include '../footer.php';?></div>
</div>
</body>
</html>
