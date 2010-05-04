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
<p>
Please address any queries about the activities of the <?=$projectTitle?> to:
</p>
<h4>
<span class='n'><span class='honorific-prefix'>Dr </span><span class='given-name'>Peter R</span> <span class='family-name'>Wilson</span></span></span></h4>
<p class="intro">
<span class='org'>
<span class='organization-unit'>School of Electronics and Computer Science</span><br/>
<span class='organization-name'>University of Southampton</span><br/></span>
<span class='adr'>
<span class='locality'>Southampton</span><br/>
<span class='postal-code'>SO17 1BJ</span><br/>
<span class='country-name'>United Kingdom</span></br></span></p>
<strong>Position: </strong>
<span class='role'>Academic staff</span> in <a href="http://www.esd.ecs.soton.ac.uk/">Electronic Systems and Devices Group</a><br/><strong>Extension:</strong> 24162<br/><strong>Telephone:</strong> 
<span class="tel">
<span class="hide">
<span class="type">Work</span> (
<span class="type">Voice</span>): </span>
<span class="value"><a href='tel:+44 23 8059 4162'>+44 (0)23 8059 4162</a></span></span>
<br/><strong>Email:</strong> prw@ecs.soton.ac.uk
</p>
  

<?php include '../footer.php';?>
