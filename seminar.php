<?php
/*
Template Name: SEMINAR
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SEL ADVISORS PVT. LTD.">
    <meta name="author" content="">
    <!--title-->
    <title>SEL | SEL ADVISORS PVT. LTD.</title>

    <!--CSS-->
    <link href="../wp-content/themes/sel/css/bootstrap.min.css" rel="stylesheet">
    <link href="../wp-content/themes/sel/css/font-awesome.min.css" rel="stylesheet">
    <link href="../wp-content/themes/sel/css/animate.css" rel="stylesheet">
    <link href="../wp-content/themes/sel/css/prettyPhoto.css" rel="stylesheet">
    <link href="../wp-content/themes/sel/css/main.css" rel="stylesheet">
    <link id="css-preset" href="../wp-content/themes/sel/css/presets/preset1.css" rel="stylesheet">
    <link href="../wp-content/themes/sel/css/responsive.css" rel="stylesheet">

    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="http://sel.org.in/images/ico/favicon.png">
    <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://demo.themeregion.com/humanity-updated/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://demo.themeregion.com/humanity-updated/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://demo.themeregion.com/humanity-updated/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://demo.themeregion.com/humanity-updated/images/ico/apple-touch-icon-57-precomposed.png">-->
</head><!--/head-->
<body>
	<!-- Page Loader -->
	<div class="preloader">
        <div id="loaderImage"></div>
    </div>
	<header id="navigation">
		<div class="navbar navbar-section main-nav" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">
						<img class="img-responsive" src="../wp-content/themes/sel/images/logo-sel.png" alt="logo">
					</a>
				</div>
				<nav class="collapse navbar-collapse navbar-left" style="margin-left: 35px;">
					<ul class="nav navbar-nav">
						<li><a href="home"><span>Home</span></a></li>
						<li><a href="sel"><span>SEL Foundation</span></a></li>
						<li><a href="trainings"><span>Trainings</span></a></li>
						<li class="active"><a href="seminar"><span>Seminar</span></a></li>
						<li><a href="research"><span>Research & Surveys</span></a></li>
						<li><a href="contact"><span>Contact Us</span></a></li>
					</ul>
				</nav>
				<div>
					<img class="img-responsive" style="padding-left:25px" src="../wp-content/themes/sel/images/logo-self-final-1.png" alt="logo">
				</div>
			</div>
		</div>
    </header><!--/#navigation-->

	<!--start/#seminar-->
	<div id="seminar" class="even-row wow fadeInRight">
		<div class="container">
			<div class="section-title">
				<h1>Seminars and Workshops</h1>
			</div>
			<div class="col-sm-12">
				<!--<p>
					As part of our corporate thought leadership programme, we conduct seminars and workshops on relevant and contemporary issues.
					We have a panel of expert speakers who can conduct workshops at company level.
				</p>
				<p>
					<b>Previous Events: </b>
				</p>
				<p>
					A corporate thought leadership programme was organised on April 7, 2017 at the Constitution Club Annexe, Rafi Marg,
					on "Leadership in a VUCA World - The Arjuna Way". Renowned leadership expert Prof. Debashis Chatterjee spoke on how the
					world’s greatest archer from the Mahabharata would deal with and succeed in the present Volatile,
					Uncertain, Complicated and Ambiguous (VUCA) world. Is the way in, the only way out?
				</p>
				<br/>
				<p>
					<b>Upcoming Events: </b>
				</p>-->
				<p>
                    <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/page/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                    ?>
				</p>
			</div>
		</div>
	</div>
	<!--end/#seminar-->
	
	<footer id="footer">
		<div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="index.html"><img class="img-responsive" src="../wp-content/themes/sel/images/logo-self-final-1.png" alt="" /></a>
                </div>
                <div class="col-sm-4">
                    <div class="copyright-text">
                        <p>&copy; copyright 2017 by <a href="index.html#"> SEL Advisors PVT. LTD.</a> All rights reserved.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-socials">
                        <ul>
                            <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                            <!--<li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>-->
                            <li><a href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                            <!--<li><a href="index.html#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-vimeo-square"></i></a></li>-->
                            <li><a href="index.html#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</footer><!--/#footer--> 

	<!--/#scripts-->
    <script type="text/javascript" src="../wp-content/themes/sel/js/jquery.js"></script>
    <script type="text/javascript" src="../wp-content/themes/sel/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../wp-content/themes/sel/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../wp-content/themes/sel/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../wp-content/themes/sel/js/smoothscroll.js"></script>
    <script type="text/javascript" src="../wp-content/themes/sel/js/jquery.nav.js"></script>
    <script type="text/javascript" src="../wp-content/themes/sel/js/canvas.js"></script>
    <script type="text/javascript" src="../wp-content/themes/sel/js/preloader_canvas.js"></script>
    <script type="text/javascript" src="../wp-content/themes/sel/js/wow.js"></script>
    <script type="text/javascript" src="../wp-content/themes/sel/js/main.js"></script>
</body>
</html>