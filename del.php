<?php
	$mid=$_POST['mid'];

	print("deleting car $mid");

	include_once "bmwdatabase.php";

	$sql="DELETE FROM bmw WHERE CARID = '$mid' ";
	$res=mysqli_query($conn,$sql);

	if ($res)
	{
		print("deleted successfully");
		include_once "index.php";
	}
	else
	{
		print("deletion error" .mysqli_error($conn));
	}
?>