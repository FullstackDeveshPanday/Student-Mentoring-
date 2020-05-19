
<?php 
 session_start();
 session_destroy();


?>

<!DOCTYPE html>
<html>
<head>
	<title>
		logout
	</title>
</head>
<body>
	<div>
		<script type="text/javascript">
			alert("suceesfully logout...")
			
			<?php  header('location:index2.php')?>
		</script>
	</div>

</body>
</html>