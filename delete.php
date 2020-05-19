<?php 
// <-- connection code-->
	$con=mysqli_connect('localhost','root','','DATABASENAME');
	$name=$_POST['name'];
	$pass=$_POST['pas'];
	$sql="insert into table name(username,password) values("$name","$pass") ";
	$result=mysqli_querry($con,$sql);
	mysqli_close($con);

?>