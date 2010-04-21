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

<ul class="frontlist">
	<li><a href="/biodevices" 						>	Bio-Devices: Physical Interfaces to Living Systems</a></li>
	<li><a href="/bio-inspired_hardware" 	>	Bio-inspired hardware &amp; biological computational substrates</a></li>
	<li><a href="/bio-inspired_algorithms"> Bio-inspired algorithms</a></li>
	<li><a href="/bio-informatics" 				>	Bio-informatics</a></li>
	<li><a href="/bio-science_in-silico" 	>	Bio-Science 1 - simulation modelling and theory of biological systems</a></li>
	<li><a href="/bio-science_in-vitro"  	>	Bio-Science 2 - Wet-lab/experimental biology</a></li>
	<li><a href="/medical-health" 				>	Medical/health applications</a></li>
</ul>


</div>
	<div class="span-1 last">&nbsp;</div>
	<div class="span-24 small footer last"><? include 'footer.php';?></div>
</div>
</body>
</html>