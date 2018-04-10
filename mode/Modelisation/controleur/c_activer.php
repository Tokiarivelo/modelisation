<?php 
	function activer($p,$val,$mot)
	{
		if($p==$val)
			echo $mot;
	}
	function activer_s($p,$v1,$v2,$v3)
	{
		if($p==$v1 or $p==$v2 or $p==$v3 )
			echo "class='active'";
	}