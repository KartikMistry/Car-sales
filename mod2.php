<?php
	$mi=$_POST ['mi'];
	$name=$_POST['name'];
	$pr=$_POST['pr'];
 
	include_once "bmwdatabase.php";

	//step 2
	$sql="UPDATE mercedes SET PRICE ='$pr' WHERE CARID ='$mi'";

	//step 3
	$res =mysqli_query($conn,$sql);

	//step 4
	if($res)
	{
		print("car price updated </br></br>");
		include_once "index2.php";
	}
	else
	{
		print("error in updating " .mysqli_error($conn));
	}
?>