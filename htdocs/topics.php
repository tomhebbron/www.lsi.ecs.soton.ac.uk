<?php

/*
todo - put all the tree into objects with the urls.

*/

class lsi_interest
{
	public $url;
	public $title;
	public $subtopics = array();
	public $people = array();
}

$interests = array(
'Bio-Devices - Physical Interfaces to Living Systems' => array(
	'Lab on a chip/system on chip: microfluidics, high throughput analysis' => array('hm','ng2','kpz','tm'),
	'Micro-fluidics, nanotechnology, bio-electronics, molecular printing' => array('tm','hm','ng2'),
	'Point of care devices' => array('hm','tm'),
	'Sensor Networks/Environment Sensing' => array('dder','mz','nmw','bmah','km','pa','jsw'),
	'Bio-Robotics - with physical interfaces to living systems' => array('kpz'),
	'Rehabilitation Prosthetics' => array('phc')
),

'Bio-inspired hardware and biological computational substrates' => array(
	'Bio-inspired Robotics' => array('rmc','rid','kpz','nrs'),
	'Bio-inspired Materials, Biomemetics' => array('dmb','kpz','mdp','hm','gjp'),
	'Bio-inspired computational devices' => array('mz','prw','km3'),
	'Biological computational substrates (computation carried out with biological materials/cells/molecules)' => array(	
		'Molecular Computation' => array('kpz','sd'),
		'Neurons/Multi-Electrode Arrays' => array('prw','adb','nrs','te','km3')
	)
),

'Bio-Inspired algorithms' => array(
	'Evolutionary Algorithms' => array('sgb','apb','raw','sgc','acr','prw'),
	'Distributed computing, amorphous computing, pervasive computing and multi-agent systems' => array('ee','acr','sgb','jn2','dder','acr','nrj')
),

'Bio-informatics' => array(
	'Bioinformatics - machine learning applied to biological data' => array('apb','cjs','mn','jpms'),
	'Biometrics - (see also security)' => array('msn','spb','jnc')
),

'Bio-Science 1 - simulation modelling and theory of biological systems' => array(
	'Theoretical biology' => array('te','sd','raw','sgb','jn2','apb','mn'),
	'Architectures for neuron simulation' => array('adb','mz','prw','jsr','nrs'),
	'Biological Complexity Science, general modelling and simulation ' => array('sgb','jn2','raw','kpz','sd','adb'),
	'Biological network science' => array('sgb','jn2','sd'),
	'Artificial Life' => array('raw','sgb','jn2'),
	'Molecular and cellular biology - information processing principles of' => array('mdp','kpz','sd')
),

'Bio-Science 2 - Wet-lab/experimental biology' => array(
	'Community microbiology, experimental evolutionary microbiology' => array('raw'),
	'Molecular and cellular microbiology' => array('kpz','mdp'),
	'Neuroscience' => array('prw','te')
),
'Medical/health applications' => array(
	'Infection control' => array('gbw')
//	'See Eric Rogers (ECS Health champion)' => array(
)
);


function render_interest_people($array)
{
	
}


/**
Assumes that $array contains key=>value.
*/
function render_interest_sublist($array)
{
	if(count($array) > 0)
	{
		print("<ul>\n");
		foreach($array AS $key => $value)
		{
			print('<li><h4>'.$key.'</h4>');
			if(is_array($value))
			{
				$subkeys = array_keys($value);
				if (is_numeric($subkeys[0])) //people
				{
					print('<div>');
					foreach($value AS $ecsid)
					{
						print($ecsid." ");				
					}
					print('</div>');
				}
				else
				{
					render_interest_sublist($value);
				}
			}
			else 
			{
				//somethingwierd
			}
			print("</li>\n");
		}
		print("</ul>\n");
	}
}

function render_interest_list($top_level)
{
	global $interests;
	if(array_key_exists($top_level,$interests))
	{
		print('<h2>'.$top_level."</h2>\n");
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