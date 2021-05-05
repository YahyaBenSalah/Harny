<?php
  include "../../core/CommissionFns.php";
  //include "../../entities/Commission.php";

  include "../../core/components/components.php";

  $list = CommissionFns::select();
  $result = CommissionFns::selectOne($_GET["id"]);

  foreach($result as $item){
	  $commission = new Commission($item['id'], $item['client_id'], $item['artist_id'], $item['categorie'], $item['description'], $item['avancement'], $item['prix'], $item['deadline']);
  }
  
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>WorkWise Html Template</title>
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
								<a href="commissions.html" title="">
									<span><img src="images/icon3.png" alt=""></span>
									Commissions
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
												<h3><a href="messages.html" title="">Jassica William</a> </h3>
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
												<h3><a href="messages.html" title="">Jassica William</a></h3>
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
												<h3><a href="messages.html" title="">Jassica William</a></h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
													eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
												<span>2 min ago</span>
												
											</div>
											<!--notification-info -->
										</div>
										<div class="view-all-nots">
											<a href="messages.html" title="">View All Messsages</a>
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

		
		


		<main>
			<div class="main-section"align="center">
				
							<div class="col-lg-6"align="center">
								<div class="main-ws-sec"align="center">
									<div class="posts-section"align="center">
								
										<div class="post-bar"align="center">
										
                      				 
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="pic.png" >
													
												</div>
												<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i
															class="la la-ellipsis-v"></i></a>
													<ul class="ed-options">
														<li><a href="#" title="">Edit Post</a></li>
														<li><a href="#" title="">Unsaved</a></li>
														<li><a href="#" title="">Unbid</a></li>
														<li><a href="#" title="">Close</a></li>
														<li><a href="#" title="">Hide</a></li>
													</ul>
												</div>
											</div>
											<div class="epi-sec">
												<ul class="descp">
											 <form  align="center" action="commission_update_script.php" method="POST" enctype="multipart/form-data">
                        <input style="display: none" type="text" value="<?php echo $commission->getCommissionId(); ?>" name="id" id="id">
                        <div class="form-row">
						<div class="form-group col-md-6 mt-2 mb-2">
                                <select name="artist_id" id="artist_id" class="form-control mt-2 mb-2">
                                    <option value="0" disabled>Artist</option>
                                    <option <?php if($commission->getArtistId() == 0) echo 'selected'; ?> value="0">Zirve</option>
                                    <option <?php if($commission->getArtistId() == 1) echo 'selected'; ?> value="1">Bakou</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 mt-2 mb-2">
                                <select style="visibility: hidden" name="client_id" id="client_id" class="form-control mt-2 mb-2">
                                    <option value="-1" disabled>Client</option>
                                    <option <?php if($commission->getClientId() == 0) echo 'selected'; ?> value="0">Nora</option>
                                    <option <?php if($commission->getClientId() == 1) echo 'selected'; ?> value="1">Hamza</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2 mb-2">
                                <select name="categorie" id="categorie" class="form-control mt-2 mb-2">
                                    <option value="0" disabled>Categorie</option>
                                    <option <?php if($commission->getClientId() == 0) echo 'selected'; ?> value="0">Painting</option>
                                    <option <?php if($commission->getClientId() == 1) echo 'selected'; ?> value="1">Song</option>
                                    <option <?php if($commission->getClientId() == 2) echo 'selected'; ?> value="2">Sculptures</option>
                                    <option <?php if($commission->getClientId() == 3) echo 'selected'; ?> value="3">Graphic Design</option>
                                    <option <?php if($commission->getClientId() == 4) echo 'selected'; ?> value="4">Essays</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 mt-2 mb-2">
                                <input style="visibility: hidden" <?php echo 'value="'.$commission->getAvancement().'"'; ?> type="number" class="form-control mt-2 mb-2" name="avancement" id="avancement" placeholder="état d'avancement" step="10" min="0" max="100">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2 mb-2">
                                <input <?php echo 'value="'.$commission->getPrix().'"'; ?> type="number" class="form-control mt-2 mb-2" name="prix" id="prix" placeholder="Prix" min="0" max="1000">
                            </div>
                            <div class="form-group col-md-6 mt-2 mb-2">
                                <input value="<?php echo $commission->getDeadline(); ?>" type="date" class="form-control mt-2 mb-2" name="deadline" id="deadline" placeholder="Le deadline">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 mt-2 mb-2">
                                <textarea class="form-control mt-2 mb-2" name="description" id="description" rows="3" placeholder="Description">
                                    <?php echo $commission->getDescription(); ?>
                                </textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary " style="background-color:#e44d3a" >Modifier </button>
                    </form>
													</div>
												</ul>
											</div>
										</div>
										
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