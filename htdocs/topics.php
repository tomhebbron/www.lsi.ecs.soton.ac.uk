<?php
require_once('ECS/People/ECS_People.php');
require_once 'ECS/utils.php';
ECS_OpenCoreDb();
/*
todo - put all the tree into objects with the urls.

*/

class lsi_interest
{
	public $url;
	public $short_title;
	public $title;
	public $people = array();
	public $subtopics = array();
	
	function __construct($url,$short_title, $title, $people)
	{
		$this->url = $url;
		$this->short_title = $short_title;
		$this->title= (empty($title)?$short_title:$title);
		$this->people = $people;
	}
	
	//print a summary line of the sub-topics titles
	function string_summary()
	{
		try{
			ob_start();
			if(is_array($this->subtopics) && !empty($this->subtopics))
			{
				$subs = array_values($this->subtopics);
				$subsize = count($subs);
				foreach($subs AS $pos => $t)
				{
					print(htmlentities($t->short_title!=''?$t->short_title:$t->title));
					if ($pos < ($subsize - 2)) print(', ');
					elseif ($pos == ($subsize - 2)) print(' and ');
				}
			}
			return ob_get_clean();
		}
		catch(Exception $e)
		{
			return '<p class="error">Topic listing failed</p>';
		}
	}
	
	//get the data on people in the array for this interest.
	function html_people()
	{
		#print(ECS_people::renderList($this->people));
		$people = array_values($this->people);
		$peoplesize = count($people);
		foreach($people AS $pos=>$ecsid)
		{
			$p = new ECS_Person();                    
			if ($p->initFromEmail($ecsid)) 
			{
				print($p->renderLink());
				if ($pos < ($peoplesize - 2)) print(', ');
				elseif ($pos == ($peoplesize - 2)) print(' and ');
			}
		}
	}
	
	function render_html($hlevel=2)
	{
		ob_start();
		print('<h'.$hlevel.'>'.$this->title.'</h'.$hlevel.'>'."\n");
		if(is_array($this->subtopics) && !empty($this->subtopics))
		{
			print("<ul>\n");
			foreach($this->subtopics AS $subint)
			{
				print('<li>');
				print($subint->render_html($hlevel+1));
				print('</li>'."\n");
			}
			print("</ul>\n");
		}
		elseif(is_array($this->people) && !empty($this->people))
		{
			print($this->html_people());
		}
		
		return ob_get_clean();
		
	}
	
}

/*
ok - need to output these to the menu, to the main page, and on each page.

*/

$top_level = array(
	'biodevices' => 							new lsi_interest('biodevices'							,'Bio-Devices'								,'Bio-Devices - Physical Interfaces to Living Systems',null),
	'bio-inspired_hardware' => 		new lsi_interest('bio-inspired_hardware'	,'Bio-inspired hardware'			,'Bio-inspired hardware & biological computational substrates',null),
	'bio-inspired_algorithms' => 	new lsi_interest('bio-inspired_algorithms','Bio-inspired algorithms'		,null,null),
	'bio-informatics' => 					new lsi_interest('bio-informatics'				,'Bio-informatics'						,null,null),
	'bio-science_in-silico' => 		new lsi_interest('bio-science_in-silico'	,'Bio-science: in silico'			,'Bio-Science 1 - simulation modelling and theory of biological systems',null),
	'bio-science_in-vitro' => 		new lsi_interest('bio-science_in-vitro'		,'Bio-science: in vitro'			,'Bio-Science 2 - Wet-lab/experimental biology',null),
	'medical-health' => 					new lsi_interest('medical-health'					,'Medical & health'						,'Medical/health applications',null)
);


$top_level['biodevices']->subtopics = array(
	0 => new lsi_interest(null,null,'Lab on a chip/system on chip: microfluidics, high throughput analysis',	array('hm','ng2','kpz','tm')),
	1 => new lsi_interest(null,null,'Micro-fluidics, nanotechnology, bio-electronics, molecular printing',		array('tm','hm','ng2')),
	2 => new lsi_interest(null,null,'Point of care devices',																									array('hm','tm')),
	3 => new lsi_interest(null,null,'Sensor Networks/Environment Sensing',																		array('dder','mz','nmw','bmah','km','pa','jsw')),
	4 => new lsi_interest(null,'Bio-Robotics','Bio-Robotics - with physical interfaces to living systems',		array('kpz')),
	5 => new lsi_interest(null,null,'Rehabilitation Prosthetics',																							array('phc'))
);


$top_level['bio-inspired_hardware']->subtopics = array(
	0 => new lsi_interest(null,null,'Bio-inspired Robotics',								array('rmc','rid','kpz','nrs')),
	1 => new lsi_interest(null,null,'Bio-inspired Materials, Biomemetics',	array('dmb','kpz','mdp','hm','gjp')),
	2 => new lsi_interest(null,null,'Bio-inspired computational devices',		array('mz','prw','km3')),
	3 => new lsi_interest(null,'Biological computational substrates','Biological computational substrates (computation carried out with biological materials/cells/molecules)',null)
);
$top_level['bio-inspired_hardware']->subtopics[3]->subtopics = array(
	0 => new lsi_interest(null,null,'Molecular Computation',					array('kpz','sd')),
	1 => new lsi_interest(null,null,'Neurons/Multi-Electrode Arrays',	array('prw','adb','nrs','te','km3'))
);


$top_level['bio-inspired_algorithms']->subtopics = array(
	0 => new lsi_interest(null,null,'Evolutionary Algorithms',																																	array('sgb','apb','raw','sgc','acr','prw')),
	1 => new lsi_interest(null,null,'Distributed computing, amorphous computing, pervasive computing and multi-agent systems',	array('ee','acr','sgb','jn2','dder','acr','nrj'))
);

$top_level['bio-informatics']->subtopics = array(
	0 => new lsi_interest(null,'Bioinformatics','Bioinformatics - machine learning applied to biological data',	array('apb','cjs','mn','jpms')),
	1 => new lsi_interest(null,null,'Biometrics',																																array('msn','spb','jnc'))
);

$top_level['bio-science_in-silico']->subtopics = array(
	new lsi_interest(null,null,'Theoretical biology',																										array('te','sd','raw','sgb','jn2','apb','mn')),
	new lsi_interest(null,null,'Architectures for neuron simulation',																		array('adb','mz','prw','jsr','nrs')),
	new lsi_interest(null,null,'Biological Complexity Science, general modelling and simulation',				array('sgb','jn2','raw','kpz','sd','adb')),
	new lsi_interest(null,null,'Biological network science',																						array('sgb','jn2','sd')),
	new lsi_interest(null,null,'Artificial Life',																												array('raw','sgb','jn2')),
	new lsi_interest(null,'Molecular and cellular biology','Molecular and cellular biology - information processing principles of',	array('mdp','kpz','sd'))
);

$top_level['bio-science_in-vitro']->subtopics = array(
	new lsi_interest(null,null,'Community microbiology, experimental evolutionary microbiology',		array('raw')),
	new lsi_interest(null,null,'Molecular and cellular microbiology',																array('kpz','mdp')),
	new lsi_interest(null,null,'Neuroscience',																											array('prw','te'))

);

$top_level['medical-health']->subtopics = array(
	new lsi_interest(null,null,'Infection control',array('gbw'))
);



function render_interest_indexphp()
{
	global $top_level;
	$url = trim(dirname($_SERVER['SCRIPT_NAME']),'/'); //in this site, all interest sections are subdirs
	if(array_key_exists($url,$top_level))
	{
		print($top_level[$url]->render_html(2));
		if(count($interests[$top_level]) == 0)
		{
			//nothing here yet	
		}
		else
		{
			render_interest_sublist($interests[$top_level]);
		}
	}
}



?>
