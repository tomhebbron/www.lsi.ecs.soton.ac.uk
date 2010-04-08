<?
$var_array = explode("/",ereg_replace (".html", "", $_SERVER['REQUEST_URI']));
$location = $var_array[1];	
?>
<ul>
	<li><a href="/" <? if ($location=="")echo "class=\"selected\"";?>>Home</a></li>
	<li><a href="/overview" <? if ($location=="overview")echo "class=\"selected\"";?>>Overview</a></li>
	<li><a href="/publications" <? if ($location=="publications")echo "class=\"selected\"";?>>Publications</a></li>
	<li><a href="/presentations" <? if ($location=="presentations")echo "class=\"selected\"";?>>Presentations</a></li>
	<li><a href="/team" <? if ($location=="team")echo "class=\"selected\"";?>>Team</a></li>
	<li><a href="/contact" <? if ($location=="contact")echo "class=\"selected\"";?>>Contact</a></li>
	<li><a href="/links" <? if ($location=="links")echo "class=\"selected\"";?>>Links</a></li>
	<li><a href="" <? if ($location=="blog")echo "class=\"selected\"";?>>Blog</a></li>
	<li><a href="" <? if ($location=="wiki")echo "class=\"selected\"";?>>Wiki</a></li>
</ul>