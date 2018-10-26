
<?php

$pune=array("Jaipur", "Mumbai","Goa","Nagpur");
$Mumbai=array("Jaipur", "Pune","Goa","Nagpur");

$ct=$_REQUEST["from2"];

switch($ct)
{
	case "Pune":
	foreach($pune as $elem)
	{
		echo "<option value ='".$elem."'>".$elem."</option>" ;
	}
	break;
	
	case "Mumbai":
	foreach ($Mumbai as $elem)
	{
		echo "<option value ='".$elem."'>".$elem."</option>" ;	

	}
	break;
}

?>