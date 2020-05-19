<?php
   $con=mysqli_connect("localhost", "root","","mydb")
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include ('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- <aside> -->
  <?php include ('aside.php'); ?>
  <!-- </aside> -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      

      
        <div class="container-fluid">
			<div class="row">
          		<div class="col-12">
            		<div class="card">
              			<div class="card-header">
                			<b><h3 class="card-title">All Students</h3></b>
                			<div class="card-tools">
                  				<div class="input-group input-group-sm" style="width: 150px;">
                    				<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    				<div class="input-group-append">
                      					<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    				</div>
                  				</div>
                			</div>
              			</div>
              			<!-- /.card-header -->
              			<div class="card-body table-responsive p-0" style="height: 300px;">
                			<table class="table table-head-fixed">
                  				<thead>
                    				<tr>
										<th>ID</th>
										<th>Name</th> 
										<th>Phone</th>
										<th class="text-center">Operations</th>
                    				</tr>
                  				</thead>
                  				<tbody>
                                  <?php
                                    $q="select * from users";
                                    $result=mysqli_query($con,$q);
                                    if(mysqli_num_rows($result)>0)
                                    {
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $qu="select count(*) from users where name=".$row['userid'];
                                            $quresult=mysqli_query($con,$qu);
                                            $nop=mysqli_fetch_array($quresult);
                                            echo "  <tr>
                                                    <td>".$row['userid']."</td>
										            <td>".$row['name']."</td>
                                                    <td>".$nop[0]."</td>
                                                    <td class='project-actions text-center'>
                                                        <a class='btn btn-primary btn-sm' href='#'>
                                                        <i class='fas fa-edit'></i></i>Update</a>
                                                        <a class='btn btn-danger btn-sm' href='#'>
                                                        <i class='fas fa-trash'></i>Delete</a>
                                                    </td></tr>";
                                        }
                                    }
                                  ?>
                  				</tbody>
                			</table>
              			</div>
              			<!-- /.card-body -->
            		</div>
            		<!-- /.card -->
          		</div>
        	</div>
		</div>
		
		<!-- <div class="container-fluid">
			<div class="row">
          		<div class="col-12">
            		<div class="card">
              			<div class="card-header">
                			<b><h3 class="card-title">In Transit</h3></b>
                			<div class="card-tools">
                  				<div class="input-group input-group-sm" style="width: 150px;">
                    				<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    				<div class="input-group-append">
                      					<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    				</div>
                  				</div>
                			</div>
              			</div> -->
              			<!-- /.card-header -->
              		<!-- 	<div class="card-body table-responsive p-0" style="height: 300px;">
                			<table class="table table-head-fixed">
                  				<thead>
                    				<tr>
										<th>Product ID</th>
										<th>Product Name</th> 
										<th>Customer Id</th>
										<th>Order Id</th>
										<th>Customer Contact Details</th>
										<th>Address</th>
										<th>Amount</th>
										<th>In Transit</th>
										<th>Date</th>
                    				</tr>
                  				</thead>
                  				<tbody>
                    				<tr>
										<td>P-101</td>
										<td>Product Name</td>
										<td>C-101</td>
										<td>O-101</td>
										<td>8888888888</td>
										<td>Pune</td>
										<td>5000</td>
										<td>In Transit</td>
										<td>15-09-2019</td>
									</tr>
                  				</tbody>
                			</table>
              			</div>
              		/.card-body -->
            		<!-- </div> 
            	
          		</div -->
        	</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://www.mentorship.com">mentorsip.com</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="https://kit.fontawesome.com/f911c7e6be.js"></script>
</body>
</html>