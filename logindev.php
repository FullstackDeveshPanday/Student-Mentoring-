<?php
	$con=mysqli_connect('localhost','root','','mydb');
	$name=$_POST['n1'];
	$pas=$_POST['pas'];
	$sql = "SELECT * FROM users WHERE name='$name' and password='$pas'";
	$result =mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
	while($row=mysqli_fetch_array($result))
	{
		if($num==1)
			{
				session_start();
				$_SESSION['userid']=$row['userid'];
				$_SESSION['name'] = $name;
				header('location:admindev.php');
			}
		else
			{
				session_start();
				$_SESSION['msg'] = '<h2>Invalid username or password!</h2>';
				header('location:logindev.php');
			}
	}
?>