<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	//JAWABAN PG
$jawaban = ["A","B","C","D","A"];
$status = [0,0,0,0,0];
$no1 = $_POST['no1'];
$no2 = $_POST['no2'];
$no3 = $_POST['no3'];
$no4 = $_POST['no4'];
$no5 = $_POST['no5'];
if ($no1 == $jawaban[0]){
	$status[0] = 1;
}
if ($no2 == $jawaban[1]){
	$status[1] = 1;
}
if ($no3 == $jawaban[2]){
	$status[2] = 1;
}
if ($no4 == $jawaban[3]){
	$status[3] = 1;
}
if ($no5 == $jawaban[4]){
	$status[4] = 1;
}

}
 ?>
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
                <li class="breadcrumb-item"><a href="dashboard.php">Beranda</a> <i class="fa fa-angle-right"></i> <a href="#">Latihan</a> <i class="fa fa-angle-right"></i> <a href="exercise.php">Studi Kasus</a>  <i class="fa fa-angle-right"></i>Entity Relationship Diagram (Part 2)</li>
            </ol>
<!--four-grids here-->
		   <p class="summary">Entity Relationship Diagram (Part 2)</p>
		<div class="row four-grids">
		<form method="POST">
			<div class="grid-form1">
				<div class="form-group">
					<label for="radio">1. What is Entity Relationship Diagram?</label>
						<div class="jawaban">
							<div class="radio block">A. <label><input type="radio" name="no1" value="A"> Is something that exists as itself, as a subject or as an object, actually or potentially, concretely or abstractly, physically or not</div>
							<div class="radio block">B. <label><input type="radio" name="no1" value="B"> Is a strong, deep, or close association or acquaintance between two or more people that may range in duration from brief to enduring</div>
							<div class="radio block">C. <label><input type="radio" name="no1" value="C"> Is a symbolic representation of information according to some visualization technique.</div>
							<div class="radio block">D. <label><input type="radio" name="no1" value="D"> Entity-relationship diagram (ERD) is a graphical representation of an information system that shows the relationship between people, objects, places, concepts or events within that system</div>
							<div class="radio block">E. <label><input type="radio" name="no1" value="E"> All answer is wrong</div>
						</div>

						<div>
						<?php 
							if (!empty($jawaban)){
								$index = 0;
								if ($status[$index] == 1){
									?>
									<p>Jawaban Benar</p>	
									<?php
								}
								else
								{
									?>
									<p>Jawaban Salah</p>	
									<p>Jawaban yang benar adalah : <?php echo $jawaban[$index]; ?></p>
									<?php 
								}
								?>
								
							<?php } ?>
						</div>

					</div>
					<div class="form-group">
					<label for="radio">2. This image represents...</label>
					<img src="images/entity.png">
						<div class="jawaban">
							<div class="radio block">A. <label><input type="radio" name="no2" value="A"> Weak Entity</div>
							<div class="radio block">B. <label><input type="radio" name="no2" value="B"> Entity Class</div>
							<div class="radio block">C. <label><input type="radio" name="no2" value="C"> Relationship</div>
							<div class="radio block">D. <label><input type="radio" name="no2" value="D"> Attribute</div>
							<div class="radio block">E. <label><input type="radio" name="no2" value="E"> Derived Attribute</div>
						</div>
						<?php 
							if (!empty($jawaban)){
								$index = 1;
								if ($status[$index] == 1){
									?>
									<p>Jawaban Benar</p>	
									<?php
								}
								else
								{
									?>
									<p>Jawaban Salah</p>	
								<p>Jawaban yang benar adalah : <?php echo $jawaban[$index]; ?></p>
									<?php 
								}
								?>
							<?php } ?>
					</div>
					<div class="form-group">
					<label for="radio">3. This image represents...</label>
					<img src="images/entity_weak.png">
						<div class="jawaban">
							<div class="radio block">A. <label><input type="radio" name="no3" value="A"> Weak Entity</div>
							<div class="radio block">B. <label><input type="radio" name="no3" value="B"> Entity Class</div>
							<div class="radio block">C. <label><input type="radio" name="no3" value="C"> Relationship</div>
							<div class="radio block">D. <label><input type="radio" name="no3" value="D"> Attribute</div>
							<div class="radio block">E. <label><input type="radio" name="no3" value="E"> Derived Attribute</div>
						</div>
						<?php 
							if (!empty($jawaban)){
								$index = 2;
								if ($status[$index] == 1){
									?>
									<p>Jawaban Benar</p>	
									<?php
								}
								else
								{
									?>
									<p>Jawaban Salah</p>
								<p>Jawaban yang benar adalah : <?php echo $jawaban[$index]; ?></p>	
									<?php 
								}
								?>
							<?php } ?>
					</div>
					<div class="form-group">
					<label for="radio">4. This image represents...</label>
					<img src="images/derived_attr.png">
						<div class="jawaban">
							<div class="radio block">A. <label><input type="radio" name="no4" value="A"> Weak Entity</div>
							<div class="radio block">B. <label><input type="radio" name="no4" value="B"> Entity Class</div>
							<div class="radio block">C. <label><input type="radio" name="no4" value="C"> Relationship</div>
							<div class="radio block">D. <label><input type="radio" name="no4" value="D"> Attribute</div>
							<div class="radio block">E. <label><input type="radio" name="no4" value="E"> Derived Attribute</div>
						</div>
						<?php 
							if (!empty($jawaban)){
								$index = 3;
								if ($status[$index] == 1){
									?>
									<p>Jawaban Benar</p>	
									<?php
								}
								else
								{
									?>
									<p>Jawaban Salah</p>	
								<p>Jawaban yang benar adalah : <?php echo $jawaban[$index]; ?></p>
									<?php 
								}
								?>
							<?php } ?>
					</div>
					<div class="form-group">
					<label for="radio">5. This image represents...</label>
					<img src="images/relation.png">
						<div class="jawaban">
							<div class="radio block">A. <label><input type="radio" name="no5" value="A"> Weak Entity</div>
							<div class="radio block">B. <label><input type="radio" name="no5" value="B"> Entity Class</div>
							<div class="radio block">C. <label><input type="radio" name="no5" value="C"> Relationship</div>
							<div class="radio block">D. <label><input type="radio" name="no5" value="D"> Attribute</div>
							<div class="radio block">E. <label><input type="radio" name="no5" value="E"> Derived Attribute</div>
						</div>
						<?php 
							if (!empty($jawaban)){
								$index = 4;
								if ($status[$index] == 1){
									?>
									<p>Jawaban Benar</p>	
									<?php
								}
								else
								{
									?>
									<p>Jawaban Salah</p>	
								<p>Jawaban yang benar adalah : <?php echo $jawaban[$index]; ?></p>
									<?php 
								}
								?>
							<?php } ?>
					</div>
					<div class="atasan">
						<input type="submit" role="button" class="btn btn-info"></input>
					</div>
				</div>
			</div>
		</form>
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