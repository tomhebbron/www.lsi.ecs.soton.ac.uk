<?
$var_array = explode("/",ereg_replace (".html", "", $_SERVER['REQUEST_URI']));
$location = $var_array[1];	
?>
<ul>
	<li><a href="/" <? if ($location=="")echo "class=\"selected\"";?>><?=$projectAbbrev?> Home</a></li>
	<li><a href="/biodevices" 							<? if ($location=="biodevices"							)echo "class=\"selected\"";?> title="Physical Interfaces to Living Systems">Bio-Devices</a></li>
	<li><a href="/bio-inspired_hardware" 		<? if ($location=="bio-inspired_hardware"		)echo "class=\"selected\"";?> title="Bio-inspired hardware &amp; biological computational substrates">Bio-inspired hardware</a></li>
	<li><a href="/bio-inspired_algorithms" 	<? if ($location=="bio-inspired_algorithms"	)echo "class=\"selected\"";?> title="Bio-inspired algorithms">Bio-inspired algorithms</a></li>
	<li><a href="/bio-informatics" 					<? if ($location=="bio-informatics"					)echo "class=\"selected\"";?> title="Bio-informatics">Bio-informatics</a></li>
	<li><a href="/bio-science_in-silico" 		<? if ($location=="bio-science_in-silico"		)echo "class=\"selected\"";?> title="Bio-Science 1 – simulation modelling and theory of biological systems">Bio-science: in silico</a></li>
	<li><a href="/bio-science_in-vitro"  		<? if ($location=="bio-science_in-vitro"		)echo "class=\"selected\"";?> title="Bio-Science 2 – Wet-lab/experimental biology">Bio-science: in vitro</a></li>
	<li><a href="/medical-health" 					<? if ($location=="medical-health"					)echo "class=\"selected\"";?> title="Medical/health applications">Medical &amp; health</a></li>
	<li><a href="/people.php" <? if ($location=="people.php")echo "class=\"selected\"";?> title="A listing of people involved in the life sciences interface">People</a></li>
	<li><a href="/contact" <? if ($location=="contact")echo "class=\"selected\"";?>>Contact</a></li>
	<li><a href="/links" <? if ($location=="links")echo "class=\"selected\"";?>>Links</a></li>
</ul>