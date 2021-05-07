<?php
  include "../../core/Crud_Review.php";
  //include "../../entities/Commission.php";

  include "../../core/components/components.php";

  $list = Crud_Review::select();
  
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
        
        
        <section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>All Reviews</h3>
				</div><!--company-title end-->
				<div class="companies-list">
                	<div class="row">
                    <?PHP
                    foreach($list as $row):
                    ?>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
									<img src="images/avatar.jpg" alt="">
									<h3><?php echo ($row['name']);?> <?php echo ($row['lastName']);?></h3>
									<h4><?php echo ($row['date']);?></h4>
									<ul>
										<p><?php echo ($row['text']);?></p>
									</ul>
								</div>
							</div><!--company_profile_info end-->
						</div>
                    <?PHP
                    endforeach ;
                    ?>
        			</div>
				</div><!--companies-list end--> 
			</div>
		</section><!--companies-info end-->


        <div class="card shadow-lg m-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Laisser un review</h6>
          </div>
          <div class="card-body">
            <form action="review_add_script.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                    <div class="form-group col-md-6 mt-2 mb-2">
                        <input type="text" class="form-control mt-2 mb-2" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mt-2 mb-2">
                        <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control mt-2 mb-2">
                    </div>
                </div>
                    <div class="form-group col-md-12 mt-2 mb-2">
                        <textarea class="form-control mt-2 mb-2" name="text" id="text" rows="3" placeholder="Review"></textarea>
                        <button class="btn btn-danger"type="submit">Ajouter</button>
                    </div>
            </form>
          </div>
        </div>
</body>