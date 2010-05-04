<ul>
<?php
include_once('config.php');
include_once('topics.php');

function printlink($url,$title,$description)
{
	$current_url_folder = trim(dirname($_SERVER['SCRIPT_NAME']),'/'); //in this site, all interest sections are subdirs
	print('<li><a href="/'.$url.'"'.($current_url_folder == $url?' class="selected"':'').' '.(!empty($description)?'title="'.$description.'"':'').'>'.$title.'</a><li>'."\n");
}


printlink('','Home',$projectAbbrev.' home page');
foreach($top_level AS $url=>$topic)
{
	printlink($url,$topic->short_title,$topic->title);
}
printlink('people','People','People involved in the '.$projectTitle);
printlink('contact','Contact','How to contact us');
printlink('links','Links','Links to sites relevant to the '.$projectTitle);

?>
</ul>
