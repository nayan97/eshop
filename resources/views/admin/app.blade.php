
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Dashboard</title>

		<base href="/public">
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="admin/assets/css/feathericon.min.css">
		
		<link rel="stylesheet" href="admin/assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="admin/assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="admin/assets/js/html5shiv.min.js"></script>
			<script src="admin/assets/js/respond.min.js"></script>
		<![endif]-->

		
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
				@include('admin.header')
			<!-- /Header -->
			
			<!-- Sidebar -->
				@include('admin.sideber')
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
                @section('main-content')
                @show
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="admin/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="admin/assets/js/popper.min.js"></script>
        <script src="admin/assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="admin/assets/plugins/raphael/raphael.min.js"></script>    
		<script src="admin/assets/plugins/morris/morris.min.js"></script>  
		<script src="admin/assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="admin/assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
</html>