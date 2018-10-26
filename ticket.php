<?php
	$fro = $_REQUEST["from2"];
	$ticket = $_REQUEST["num"];
	$dest = $_REQUEST["to1"];
	
	if($fro == "Pune" )
	{
		switch($dest)
		{
			case "Goa":
			$total= $ticket * 800;
			echo $total;
			break;
			
			case "Jaipur":
			$total= $ticket * 1500;
			echo $total;
			break;
		}	
	}
?>	