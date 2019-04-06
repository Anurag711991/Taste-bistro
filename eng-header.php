<?php 
	session_start();
	include 'db.php';
	$counter_name = "counter.txt";
	// Check if a text file exists. If not create one and initialize it to zero.
	if (!file_exists($counter_name)) {
	  $f = fopen($counter_name, "w");
	  fwrite($f,"0");
	  fclose($f);
	}
	// Read the current value of our counter file
	$f = fopen($counter_name,"r");
	$counterVal = fread($f, filesize($counter_name));
	fclose($f);
	// Has visitor been counted in this session?
	// If not, increase counter value by one
	if(!isset($_SESSION['hasVisited'])){
	  $_SESSION['hasVisited']="yes";
	  $counterVal++;
	  $f = fopen($counter_name, "w");
	  fwrite($f, $counterVal);
	  fclose($f); 
	}
?>
<!doctype html>
<html lang="en">
<head>
		<title>Cake - Bistro</title>
		<meta charset="utf-8">
		<!--add responsive layout support-->
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="Cloud Web Technologies">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<!--include favicon-->
		<link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
		<!--fonts include-->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,400italic,500italic,300italic,100italic,100,700italic,900,900italic,700' rel='stylesheet' type='text/css'>
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="plugins/flexslider/flexslider.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/fancybox/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/royalslider/skins/default/rs-default.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/animate.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--[if lte IE 10]><link rel="stylesheet" type="text/css" media="screen" href="css/ie.css"><![endif]-->
		<!--head libs-->
		<!--[if lte IE 8]>
			<style>
				#preloader{display:none !important;}
			</style>
		<![endif]-->
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/modernizr.js"></script>
	</head>
	<body class="sticky_menu">
		<div id="preloader"></div>
		<!--layout-->
		<div class="wide_layout db_centered bg_white">
			<!--[if (lt IE 9) | IE 9]>
				<div class="bg_red" style="padding:5px 0 12px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<header role="banner" class="w_inherit">
				<div class="header_middle_part type_2 t_xs_align_c">
					<div class="container">
						<div class="d_table w_full d_xs_block">
							<div class="col-lg-12 col-md-12 col-sm-12 d_table_cell d_xs_block f_none v_align_m">
								<div class="clearfix">
									<div class="clearfix f_right f_xs_none d_xs_inline_b m_xs_bottom_15 t_xs_align_l">
										<!--language-->
										<div class="f_right m_right_3 relative transform3d">
											<button class="button_type_1 tr_all second_font color_dark grey state_2" data-open-dropdown="#language">
												<img src="images/flag_dn.jpg" alt="" class="d_inline_m m_right_10"><i class="fa fa-angle-down d_inline_m fs_small"></i>
											</button>
											<ul id="language" data-show="wicket" data-hide="wicketout" class="sub_menu dropdown fs_medium bg_grey_light second_font animated">
												<li>
													<a href="#" class="sc_hover">
														<img src="images/flag_dn.jpg" alt="" class="d_inline_m m_right_7">
														Danish
													</a>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d_table w_full d_xs_block">
							<div class="col-lg-12 col-md-12 col-sm-12 d_table_cell t_align_c d_xs_block f_none v_align_m m_xs_bottom_15">
								<a href="index" class="d_inline_b">
									<img src="images/logo.png" width="150" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="header_bottom_part bg_white w_inherit">
					<div class="container t_align_c" style="width:100%; !important">
						<button id="mobile_menu_button" class="vc_child d_xs_block db_xs_centered d_none m_bottom_10 m_top_15 bg_lbrown color_white tr_all"><i class="fa fa-navicon d_inline_m"></i></button>
						<!--main menu-->
						<nav role="navigation" class="d_xs_none t_align_c t_xs_align_l">
							<ul class="main_menu hr_list d_inline_b d_xs_block t_sm_align_l relative second_font fs_medium t_align_l">
								<li><a href="eng-index" class="tt_uppercase tr_delay">Home</a></li>
								<li><a href="eng-om-taste" class="tt_uppercase tr_delay">About Taste</a></li>
								<li><a href="eng-cake" class="tt_uppercase tr_delay">Cakes</a></li>
								<li><a href="image?cat=Bryllupskager" class="tt_uppercase tr_delay">Wedding Cakes</a></li>
								<li><a href="image?cat=Macarons" class="tt_uppercase tr_delay">Macarons</a></li>
								<li><a href="eng-bistro" class="tt_uppercase tr_delay">Bistro </a></li>
								<li><a href="eng-master-class" class="tt_uppercase tr_delay">Master-Class</a></li>
								<li><a href="eng-catering" class="tt_uppercase tr_delay">Catering</a></li>
							    <li><a href="eng-job" class="tt_uppercase tr_delay">Job</a></li>
							</ul>
						</nav>
					</div>
					<hr />
					<?php
						$offers=mysql_query("select * from offer_master where om_status!=1 order by om_id desc");
						if(mysql_num_rows($offers)!=0)
						{
					?>
					<marquee behavior="scroll" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();">
					<p><strong>NYHEDSBREV - </strong>
					<?php
							while($offer=mysql_fetch_array($offers))
							{echo $offer['om_title']." || ";}
					?>
					</p></marquee>
					<?php
						}
					?>
					<hr />
				</div>
			</header>