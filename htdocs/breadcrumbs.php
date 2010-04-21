<?
$var_array = explode("/",ereg_replace ("\.(html|php)", "", $_SERVER['REQUEST_URI']));
$one = $var_array[1];		
?>
<a href="http://www.soton.ac.uk">University of Southampton</a> > <a href="http://www.ecs.soton.ac.uk">ECS</a> > <a href="http://www.<?=$projectAbbrev?>.ecs.soton.ac.uk"><?=$projectAbbrev?></a> 
<?
if($one !=""){
	echo("> ");
}
?>
<a href="../<?=ltrim($_SERVER['REQUEST_URI'],'/')?>"><?=ucwords($one)?></a>
