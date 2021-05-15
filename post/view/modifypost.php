<?php

        include_once '../model/post.php';
        include '../controller/postC.php';

    


    $postC = new postC();
    $error = "";
    if (
        isset($_POST["title"]) && 
        isset($_POST["category"]) &&
        isset($_POST["skills"]) && 
        isset($_POST["price_min"]) && 
        isset($_POST["price_max"]) &&
        isset($_POST["description"])  
        
    ) {
        if (
            !empty($_POST["title"]) && 
            !empty($_POST["category"]) && 
            !empty($_POST["skills"]) && 
            !empty($_POST["price_min"]) && 
            !empty($_POST["price_max"]) &&
            !empty($_POST["description"])
        ) 
            {
            $post = new post(
                $_POST['title'],
                $_POST['category'], 
                $_POST['skills'],
                $_POST['price_min'],
                $_POST['price_max'],
                $_POST['description']
              
            );
            $postC->modifierPost($post,$_GET['id']);
            //header('refresh:5;url=index.php');
            header('Location:index.php');
        }
        else
            $error = "Missing information";
    } 

    $listeposts=$postC->afficherPost();




?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>WorkWise Html Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="../../css/animate.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="../../css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="../../lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="../../lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<link rel="stylesheet" type="text/css" href="../../css/responsive.css">
</head>


<body>
	

	<div class="wrapper">
		


		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.html" title=""><img src="../../images/logo.png" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="index.html" title="">
									<span><img src="../../images/icon1.png" alt=""></span>
									Home
								</a>
							</li>
							<li>
								<a href="companies.html" title="">
									<span><img src="../../images/icon2.png" alt=""></span>
									Companies
								</a>
								<ul>
									<li><a href="companies.html" title="">Companies</a></li>
									<li><a href="company-profile.html" title="">Company Profile</a></li>
								</ul>
							</li>
							<li>
								<a href="projects.html" title="">
									<span><img src="../../images/icon3.png" alt=""></span>
									Projects
								</a>
							</li>
							<li>
								<a href="profiles.html" title="">
									<span><img src="../../images/icon4.png" alt=""></span>
									Profiles
								</a>
								<ul>
									<li><a href="user-profile.html" title="">User Profile</a></li>
									<li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
								</ul>
							</li>
							<li>
								<a href="jobs.html" title="">
									<span><img src="../../images/icon5.png" alt=""></span>
									Jobs
								</a>
							</li>
							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="../../images/icon6.png" alt=""></span>
									Messages
								</a>
								<div class="notification-box msg">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="../../images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a> </h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="../../images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="../../images/resources/ny-img3.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="messages.html" title="">View All Messsages</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>
							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="../../images/icon7.png" alt=""></span>
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
							  					<img src="../../images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="../../images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="../../images/resources/ny-img3.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="../../images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="#" title="">View All Notification</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<img src="http://via.placeholder.com/30x30" alt="">
							<a href="#" title="">John</a>
							<i class="la la-sort-down"></i>
						</div>
						<div class="user-account-settingss">
							<h3>Online Status</h3>
							<ul class="on-off-status">
								<li>
									<div class="fgt-sec">
										<input type="radio" name="cc" id="c5">
										<label for="c5">
											<span></span>
										</label>
										<small>Online</small>
									</div>
								</li>
								<li>
									<div class="fgt-sec">
										<input type="radio" name="cc" id="c6">
										<label for="c6">
											<span></span>
										</label>
										<small>Offline</small>
									</div>
								</li>
							</ul>
							<h3>Custom Status</h3>
							<div class="search_form">
								<form>
									<input type="text" name="search">
									<button type="submit">Ok</button>
								</form>
							</div><!--search_form end-->
							<h3>Setting</h3>
							<ul class="us-links">
								<li><a href="profile-account-setting.html" title="">Account Setting</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Faqs</a></li>
								<li><a href="#" title="">Terms & Conditions</a></li>
							</ul>
							<h3 class="tc"><a href="sign-in.html" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->

	




			<div class="post-project p-t-50">
				<h3>Modify a project</h3>
				<div class="post-project-fields">
                <div id="error">
                        <?php echo $error; ?>
                </div>
                <?php
        
			if (isset($_GET['id'])){
      		$post = $postC->recupererPost($_GET['id']);
				
		?>
					<form action="" method="POST">
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title" value = "<?php echo $post['title']; ?>">
							</div>
                            <div class="col-lg-12">
								<input type="text" name="category" placeholder="category" value = "<?php echo $post['category']; ?>">
							</div>
							
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills" value = "<?php echo $post['skills']; ?>">
							</div>
							<div class="col-lg-12">
								<div class="price-sec">
									<div class="price-br">
										<input type="text" name="price_min" placeholder="price_min" value = "<?php echo $post['price_min']; ?>">
										<i class="la la-dollar"></i>
									</div>
									<span>To</span>
									<div class="price-br">
										<input type="text" name="price_max" placeholder="price_max" value = "<?php echo $post['price_max']; ?>">
										<i class="la la-dollar"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="description" ><?php echo $post['description']; ?></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" name="modifier" value="modify">modify</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
                    <?php
                        }
                    ?>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/popper.js"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="../../lib/slick/slick.min.js"></script>
<script type="text/javascript" src="../../js/scrollbar.js"></script>
<script type="text/javascript" src="../../js/script.js"></script>

</body>
</html>

