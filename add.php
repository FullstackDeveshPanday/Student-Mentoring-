<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Webshop</title>
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

  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
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
              <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
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
          		<!-- left column -->
          			<div class="col-md-12">
            		<!-- general form elements -->
            			<div class="card card-primary">
              				<div class="card-header">
                				<h3 class="card-title">Add Student</h3>
              				</div>
              				<!-- /.card-header -->
              				<!-- form start -->
              				<form role="form">
               	 				<div class="card-body">
                  					<div class="form-group">
                    					<label for="exampleInputEmail1">Student Name</label>
                   	 					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please Insert Deatils....">
                  					</div>
                  					<div class="form-group">
                    					<label for="exampleInputPassword1">Contact</label>
                    					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Please Insert Deatils....">
                  					</div>
									<div class="card-body">
									<div class="row">
              							<div class="col-md-6">
										  	<div class="form-group">
                  								<label>Course</label>
                  								<select class="form-control select2" style="width: 100%;">
                    									<option selected="selected">MCA</option>
                    									<option>MBA</option>
                    									<option>B.TECH</option>
                  								</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">			
												<label>YEAR</label>
												<select class="select2" multiple="multiple" data-placeholder="Please Insert Deatils...."
														style="width: 100%;">
													<option>First</option>
													<option>Second</option>
													<option>Third</option>
												</select>
											</div>
										</div>
              						</div>
									  <div class="form-group">
                    					<label for="exampleInputEmail1">E-mail</label>
                   	 					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Please Insert Deatils....">
                  					</div>
								
                  					<div class="form-group">
                    					<label for="exampleInputFile">File input</label>
                    					<div class="input-group">
                      						<div class="custom-file">
                        						<input type="file" class="custom-file-input" id="exampleInputFile">
                        						<label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      						</div>	
                    					</div>
                  					</div>
                				</div>
							</div>
                				<!-- /.card-body -->
                				<div class="card-footer">
                  					<button type="submit" class="btn btn-primary">Submit</button>
                				</div>
              				</form>
            			</div>	
						<!-- /.card -->
					</div>
				</div>
			</div>	
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://mentorship.com">Mentoship.com</a>.</strong>
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

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4'
    	})
	})
</script>
<!-- select 2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
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