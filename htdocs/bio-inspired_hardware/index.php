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

	<?php
	
	include_once('../topics.php');
	render_interest_list('Bio-inspired hardware and biological computational substrates');
	
	
	?>
	

	<!-- end of content -->
</div>
	<div class="span-1 last">&nbsp;</div>
	<div class="span-24 small footer last"><? include '../footer.php';?></div>
</div>
</body>
</html>
