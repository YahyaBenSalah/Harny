<?php
  include "../../core/Crud_Produit.php";
  //include "../../entities/Commission.php";

  include "../../core/components/components.php";

  $list = Crud_Produit::select();
  
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Artisons</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.range.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<script src="js/delconfirm.js"></script>
	
</head>


<body>


	<div class="wrapper">



		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="#" title=""><img src="images/logo.png" alt=""></a>
					</div>
					<!--logo end-->
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div>
					<!--search-bar end-->
					<nav>
						<ul>
						<li>
								<a href="product.php" title="">
									<span><img src="images/icon3.png" alt=""></span>
									Produits
								</a>
							</li>
							<li>
								<a href="reviews.php" title="">
									<span><img src="images/icon4.png" alt=""></span>
									Reviews
								</a>
							</li>
							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="images/icon6.png" alt=""></span>
									Messages
								</a>
								<div class="notification-box msg">
									<div class="nt-title">
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
											<div class="noty-user-img">
												<img src="images/resources/ny-img1.png" alt="">
											</div>
											<div class="notification-info">
												<h3><a href="messages.php" title="">Jassica William</a> </h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
												<span>2 min ago</span>
											</div>
											<!--notification-info -->
										</div>
										<div class="notfication-details">
											<div class="noty-user-img">
												<img src="images/resources/ny-img2.png" alt="">
											</div>
											<div class="notification-info">
												<h3><a href="messages.php" title="">Jassica William</a></h3>
												<p>Lorem ipsum dolor sit amet.</p>
												<span>2 min ago</span>
											</div>
											<!--notification-info -->
										</div>
										<div class="notfication-details">
											<div class="noty-user-img">
												<img src="images/resources/ny-img3.png" alt="">
											</div>
											<div class="notification-info">
												<h3><a href="messages.php" title="">Jassica William</a></h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
													eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
												<span>2 min ago</span>
												
											</div>
											<!--notification-info -->
										</div>
										<div class="view-all-nots">
											<a href="messages.php" title="">View All Messsages</a>
										</div>
									</div>
									<!--nott-list end-->
								</div>
								<!--notification-box end-->
							</li>
							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="images/icon7.png" alt=""></span>
									Notification
								</a>
								<div class="notification-box">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
											<div class="noty-user-img">
												<img src="images/resources/ny-img1.png" alt="">
											</div>
											<div class="notification-info">
												<h3><a href="#" title="">Jassica William</a> Comment on your project.
												</h3>
												<span>2 min ago</span>
											</div>
											<!--notification-info -->
										</div>
										<div class="notfication-details">
											<div class="noty-user-img">
												<img src="images/resources/ny-img2.png" alt="">
											</div>
											<div class="notification-info">
												<h3><a href="#" title="">Jassica William</a> Comment on your project.
												</h3>
												<span>2 min ago</span>
											</div>
											<!--notification-info -->
										</div>
										<div class="notfication-details">
											<div class="noty-user-img">
												<img src="images/resources/ny-img3.png" alt="">
											</div>
											<div class="notification-info">
												<h3><a href="#" title="">Jassica William</a> Comment on your project.
												</h3>
												<span>2 min ago</span>
											</div>

											<!--notification-info -->
										</div>
										<div class="notfication-details">
											<div class="noty-user-img">
												<img src="images/resources/ny-img2.png" alt="">
											</div>
											<div class="notification-info">
												<h3><a href="#" title="">Jassica William</a> Comment on your project.
												</h3>
												<span>2 min ago</span>
											</div>
											<!--notification-info -->
										</div>
										<div class="view-all-nots">
											<a href="#" title="">View All Notification</a>
										</div>
									</div>
									<!--nott-list end-->
								</div>
								<!--notification-box end-->
							</li>
						</ul>
					</nav>
					<!--nav end-->
				</div>
				<!--header-data end-->
			</div>
		</header>
		<!--header end-->

		<div class="search-sec">
			<div class="container">
				<div class="search-box">
					<form>
						<input type="text" name="search" placeholder="Search keywords">
						<button type="submit">Search</button>
					</form>
				</div>
				<!--search-box end-->
			</div>
		</div>
		<!--search-sec end-->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="posts-section">
										<?php foreach($list as $row){?>
										<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<div class="usy-name">
														<h1><?php echo $row['titre']; ?></h1>
														<h3 style="text:center;"><span>Artist: <?php echo $row['artist']; ?></span></h3>
													</div>
												</div>
												<img src="<?php $row['image']; ?>" alt="">
												<div><?php echo $row['image']; ?></li></div>
											</div>
											<div class="epi-sec">
												<ul class="descp">
													<li><img src="images/icon9.png" alt=""><span>Categorie: <?php echo $row['categorie']; ?></span></li>
												</ul>
												<ul class="bk-links">
													<li><a href="#" title=""><i class="la la-cart-plus"></i></a></li>													
													<li><a href="#" title=""><i class="la la-envelope" style="background-color:rgb(95, 95, 223);" ></i></a></li>
												</ul>
											</div>
											<div>
												<img width="500px" height="500px" src="<?php echo $row['image'];?>"/>
											</div>
											<div class="job_descp">
												<p><a  title=""> Description  :   </a><?php echo $row['description']; ?> </p>
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<div class="filter-dd">
														
														<div >
															<input class="ui-slider-range" type="hidden" value="0,100" />
														</div>
														<div class="rg-limit">
															
														</div><!--rg-limit end-->
													</div>
												</ul>
												<ul class="job-dt">
													<li><span>Prix: <?php echo $row['prix']; ?> Dt</span></li>
												</ul>
											</div>
										</div><?php } ?>
										
										<!--post-bar end-->
									</div>
									
									<!--posts-section end-->
								</div>
								<!--main-ws-sec end-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="#" title="">Help Center</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="#" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p><img src="images/copy-icon2.png" alt="">Copyright 2021</p>
				</div>
			</div>
		</footer>

		<div class="overview-box" id="question-box">
			<div class="overview-edit">
				
				<!--<form action="commission_add_script.php" method="POST" enctype="multipart/form-data">
					<select name="artist_id" id="artist_id">
						<option selected value="0" disabled>Artist</option>
						<option value="0">Amine</option>
						<option value="1">Yahya</option>
					</select>
					<select name="categorie" id="categorie">
						<option selected value="0" disabled>Categorie</option>
						<option value="0">Painting</option>
						<option value="1">Song</option>
						<option value="2">Sculptures</option>
						<option value="3">Graphic Design</option>
						<option value="4">Essays</option>
					</select>
					<input type="number" name="prix" placeholder="         Prix">
					<input type="date" name="deadline" placeholder="Deadline">
					<textarea placeholder="         Description"></textarea>
					<button type="submit" class="save">Submit</button>
					<button type="submit" class="cancel">Cancel</button>
				</form> -->
				
			</div><!--overview-edit end-->
		</div><!--overview-box end-->


	</div>
	<!--theme-layout end-->



	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/popper.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.range-min.js"></script>
	<script type="text/javascript" src="lib/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/slider.js"></script>
	
</body>

</html>