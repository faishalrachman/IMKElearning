<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>e-Learning Pemodelan Basis Data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="assets/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/jquery.dataTables.min.css" />
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='http://fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="assets/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
                <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<!--<img src="assets/img/logo.png" class="img-responsive">-->
							</div>
					<div class="w3layouts-left">

							<div class="clearfix"> </div>
						 </div>
						 <div class="w3layouts-right">

							<div class="clearfix"> </div>				
						</div>
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span> 
												<div class="user-name">
													<p>Faishal Rachman</p>
													<span>1301154160</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<div class="left-content">

	   <div class="mother-grid-inner">

		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Beranda</a> <i class="fa fa-angle-right"></i> <a href="#">Latihan</a> <i class="fa fa-angle-right"></i>Latihan Soal</li>
            </ol>
<!--four-grids here-->
		   <p class="summary">Latihan Soal</p>
		<div class="row four-grids">
			<div class="col-lg-12">
				<table id="example" class="display" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>No</th>
						<th>Materi</th>
						<th>Aksi</th>
					</tr>
					</thead>
					<tfoot>
					<tr>
						<th>No</th>
						<th>Materi</th>
						<th>Aksi</th>
					</tr>
					</tfoot>
					<tbody>
					<tr>
						<td>1</td>
						<td>Entity Relationship Diagram (Part 1)</td>
						<td>
							<a href="ex1.php" role="button" class="btn btn-info" title="Do this Latihan"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>

						</td>

					</tr>
					<tr>
						<td>2</td>
						<td>Entity Relationship Diagram (Part 2)</td>
						<td>
							<a href="ex2.php" role="button" class="btn btn-info" title="Do this Latihan"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>

						</td>
					</tr>
				</div>
		</div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->

<div class="copyrights navbar-fixed-bottom">
	 <p>© 2017 e-Learning PBD. All Rights Reserved | Design by  <a href="#">IM'K</a> </p>
</div>
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<img src="assets/img/logo.png" class="img-responsive">
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                     <?php include 'menu/sidebar.php';?>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
                "lengthMenu": "Show _MENU_ ",
				"search": "Cari ",
				"info": "Tampilkan  _PAGE_ dari _PAGES_ laman",
				"infoEmpty": "Materi tidak ada",
				"infoFiltered": "(tersaring dari _MAX_ materi)",
				"paginate": {
				  "previous": "Sebelumnya",
				  "next":"Selanjutnya"
				}
            },
            "columns": [
                { "width": "2%",className: "dt-center"},
                null,
                null
			]
		});
    } );
</script>
</body>
</html>