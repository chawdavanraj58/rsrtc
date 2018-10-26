<?php
	include_once("connect.php");
	$uname = $_GET["name"];
	$email = $_GET["email"];
	$phoneno = $_GET["phone"];
	$tic = $_GET["num"];
	for($i = 0; $i < $tic; $i++)
	{
	$pname = $_GET["arr$i"];
	$page = $_GET["arrage$i"];
	$pgen = $_GET["arrgen$i"];
	$pmob = $_GET["arrmob$i"];
	$ins2 = "insert into pstable(email,psname,psage,psgender,psphone) values('".$email."','".$pname."','$page','".$pgen."','$pmob')";
	
		if(mysqli_query($conn,$ins2))
	{
		echo "$i passenger stored ";
	}
	else
	{
		echo "ERROr AA gayi : ".$ins2."<br>".mysqli_ERROR($conn);
	}
	}
	
	$ins = "insert into userdata values('".$uname."','".$email."','$phoneno' )";
	if(mysqli_query($conn,$ins))
	{
		echo "username stored  ";
	}
	else
	{
		echo "ERROr AA gayi : ".$ins2."<br>".mysqli_ERROR($conn);
	}
?>