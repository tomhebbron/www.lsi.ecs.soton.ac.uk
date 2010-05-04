<? include 'config.php';?>
<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <? include 'header.php';?>
</head>
<body>
<div class="container mainImage">
	<div class="heading"><h1><?=$projectTitle?></h1></div>
	<div class="menu">
		<? include 'menu.php'; ?>
	</div>
	<div class="span-1">&nbsp;</div>
	<div class="span-4 projectInfo">
		<? include 'projectInfo.php'; ?>
	</div>
	<div class="span-1">&nbsp;</div>
	<div class="span-17 mainContent">
	<div class="span-17 breadcrumbs"><? include 'breadcrumbs.php';?></div>
	<!-- content goes here-->

<?php 
/*
try{
	include_once('topics.php');
	foreach($interests AS $k=$v)
	{
		
	}
	
	
}
catch(Exception $e)
{
}
*/

?>

<style>
ul.frontlist li
{
	font-size:13pt;
	margin-top:6pt;
}
</style>

<p style="font-size:12pt; color:#111;">
ECS has a strong track record and active research programme for work at the interface with the life sciences. This research takes many different complementary forms (below). These pages provide a high-level 'map' to point toward the different types of Life Sciences Interface research in ECS, indicate the people involved and where to find more information.
</p>

<?php
include_once('topics.php');
//print_r($top_level);
foreach($top_level AS $t)
{
	print('<a href="'.$t->url.'">'.htmlentities($t->title).'</a>'."\n".'<p>'.htmlentities($t->string_summary()).'</p>');
}

?>

</div>
	<div class="span-1 last">&nbsp;</div>
	<div class="span-24 small footer last"><? include 'footer.php';?></div>
</div>
</body>
</html>