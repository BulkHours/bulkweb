<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="bulkhours">
    <title>BulkHours</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"> 
	<style type="text/css">
    video {
        width: 100%    !important;
        height: auto   !important;        
        object-fit: cover; // use "cover" to avoid distortion
        position: absolute;
    }

    .img-unselected {
     filter: grayscale(100%);
     opacity: 0.3;
  }
	</style>

    <link rel="shortcut icon" href="images/favicon.png"> 
</head> 

<?php
$is_fr = isset($_GET['lan']) && $_GET['lan'] == "fr";
if ($is_fr) {
    $xml = simplexml_load_file("containt_en.xml") or die("Error: Cannot create object");
} else {
    $xml = simplexml_load_file("containt_en.xml") or die("Error: Cannot create object");
}
?>

<body id="home">
    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/BulkHours.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home"><?php echo $xml->lmenu[0];?></a></li>  
                        <li class="scroll"><a href="#services"><?php echo $xml->lmenu[1];?></a></li>
						<li class="scroll"><a href="#portfolio"><?php echo $xml->lmenu[4];?></a></li>
                        <li class="scroll"><a href="#pricing"><?php echo $xml->lmenu[5];?></a></li>
                        <li class="scroll"><a href="#about"><?php echo $xml->lmenu[2];?></a></li> 
                        <!--li class="scroll"><a href="#our-team"><?php echo $xml->lmenu[3];?></a></li-->
                        <!--li class="scroll"><a href="#contact-us"><?php echo $xml->lmenu[6];?></a></li -->              
                        <li class="scroll">
                            
<?php

if ($is_fr) {
    print '<a href="/?lan=fr" style="text-align: center; text-decoration: none; display: inline-block;">';
    print('<img alt="" src="FR.png" width="20px" /> <img alt="" src="UK.png" width="20px" class="img-unselected" /></a>');
} else {
    print '<a href="/?lan=en" style="text-align: center; text-decoration: none; display: inline-block;">';
    print('<img alt="" src="FR.png" width="20px" class="img-unselected" /> <img alt="" src="UK.png" width="20px" /></a>');
}
?>
                    </li>              
                    </ul>
                </div>


            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="hero-banner">
             <div class="banner-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
<?php 
if ($is_fr) {
    print "<h2>Plateforme d'enseignement<br/><b>interactive en temps réelle</b></h2>
    <p>Interactive support for courses with automatic evaluation <br/> of students's continuous examination.</p>
    <a class='btn btn-primary btn-lg' href='#'>Essayer maintenant</a>";
} else {
    print "<h2>Plateforme d'enseignement<br/><b>interactive en temps réelle</b></h2>
    <p>Interactive support for courses with automatic evaluation <br/> of students's continuous examination.</p>
    <a class='btn btn-primary btn-lg' href='#'>Start Now</a>";
}
    ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
    </section><!--/#main-slider-->

 <section id="services" >
        <div class="container">

            <!--video id="background-video" autoplay loop muted>
                <source src="images/Bulkhours_eu.mp4" type="video/mp4">
            </video-->

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">
                <?php 
if ($is_fr) {
    print "Offre de services";
} else {
    print "Services offer";
}
    ?>
                    
                </h2>
                <!--p class="wow fadeInDown">Lorem ipsum dolent eget risus vitae massa <br> semper aliquam quis mattis quam.</p -->
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Suivi en direct du travail des étudiants</h4>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-stack-overflow"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Evaluation automatique</h4>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-database"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Accès à une base de données de cours</h4>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Environnement de travail unifié CPU/GPU</h4>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-paper-plane-o"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Génération de programmes de rattrapage personnalisé</h4>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Conseil et suivi personnalisés</h4>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->


  
 <!--section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Who we are</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                  <img class="img-responsive" src="images/about.png" alt="">
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Our Fitness Studio</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam adipiscing elit. Praesent eget risus vitae massa.</p>
<ul class="listarrow">
<li><i class="fa fa-angle-double-right"></i>Aerobic</li>
<li><i class="fa fa-angle-double-right"></i>Cardio</li>
<li><i class="fa fa-angle-double-right"></i>Abdomen</li>
<li><i class="fa fa-angle-double-right"></i>Special Trainer</li> 
<li><i class="fa fa-angle-double-right"></i>Round the clock</li>
</ul>
 

                </div>
            </div>
        </div>
    </section -->

     <!--section id="our-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">
OUR TRAINERS
</h2>
<p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p> 
            </div>
			
			 	
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/01.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Micky Deo</h3>
                            <span>Founder</span> 
                        </div> 
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/02.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Mike Timobbs</h3>
                            <span>Sr. Trainer</span> 
                        </div> 
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/04.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Niscal Deon</h3>
                            <span>Jr. Trainer</span> 
                        </div> 
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section -->

  <section id="portfolio">
        <div class="container">
        <div class="video-container">
            <video autoplay muted loop>
                <source src="images/Bulkhours_eu.mp4" type="video/mp4" />
            </video>
        </div>

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Demo</h2>

            </div>

        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Pricing</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        FREE
                                    </span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">STUDENT</div>
                                <i class="fa fa-user"></i>
                            </li>
                            <li><strong>Access to the knowledge database</strong>✅</li>
                            <li><strong></strong></li>
                            <li><strong></strong></li>
                            <li><strong></strong></li>
                            <li><strong></strong></li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">Try It Now!</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">15€</span>
                                    <span class="duration">per month</span>
                                </div>

                                <div class="plan-name">TEACHER</div>
                                <i class="fa fa-users"></i>
                            </li>
                            <li><strong>Everything in Student ➕</strong></li>
                            <li><strong>Access to real-time student monitoring</strong>(up to 40 students, 20 hours)</li>
                            <li><strong>Have automatic evaluation tools</strong></li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">Get It Now!</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing featured">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">40€</span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">Professor</div>
                                <i class="fa fa-mortar-board"></i>
                            </li>
                            <li><strong>Everything in Teacher ➕</strong></li>                            
                            <li><strong>Access to real-time student_monitoring (up to 40 students, 50 hours)</strong></li>
                            <li><strong>Access to the personal rattrapage system</strong></li>
                            <li><strong>Access to CPU/GPU calculation platform</strong></li>
                            <li><strong>Access to 20h GPU a month (users quotas)</strong></li>
                            <li><strong>Integration in your system</strong></li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">Get It Now!</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">NEGOCIABLE</span>
                                    <span class="duration">per month</span>
                                </div>

                                <div class="plan-name">Institution</div>
                                <i class="fa fa-university"></i>
                            </li>
                            <li><strong>Everything in Professor ➕</strong></li>
                            <li><strong>Access to real-time student_monitoring (up to 40 students, 50 hours)</strong></li>
                            <li><strong>Access to the personal rattrapage system</strong></li>
                            <li><strong>Access to CPU/GPU calculation platform</strong></li>
                            <li><strong>Access to 20h GPU a month (users quotas)</strong></li>
                            <li><strong>Integration in your system</strong></li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">Get It Now!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#pricing-->
   
   

    <!--section id="business-stats">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Healty Report</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="business-stats" data-digit="6850" data-duration="1000"></div>
                        <strong>Clients</strong>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="business-stats" data-digit="1465" data-duration="1000"></div>
                        <strong>Trainer</strong>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="business-stats" data-digit="4325" data-duration="1000"></div>
                        <strong>Programs</strong>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="business-stats" data-digit="2568" data-duration="1000"></div>
                        <strong>Successes</strong>
                    </div>
                </div>
            </div>
        </div>
    </section -- >

  
    <section class="testimonial-area" id="testimonial">
			<div class="container">
				<div class="section-header">
                <h2 class="section-title wow fadeInDown">Testimonial</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
				<div class="row">
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>Sontrary to popular belief, Lorem Ipsuis no simply random text. It has roots in a piece of classical Layears old. belief, Lorem Ipsuis not simply</blockquote>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<img src="images/pic1.jpg" alt="client">
								</div>
								<div class="col-xs-9 half-gutter">
									<h5>John Bond</h5>
									<h6>Lorem Ipsuis simply</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>Tontrary to popular belief, Lorem Ipsuis no simply random text. It has roots in a piece of classical Layears old. belief, Lorem Ipsuis not simply</blockquote>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<img src="images/pic2.jpg" alt="client">
								</div>
								<div class="col-xs-9 half-gutter">
									<h5>John Bond</h5>
									<h6>Lorem Ipsuis simply</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>Aontrary to popular belief, Lorem Ipsuis no simply random text. It has roots in a piece of classical Layears old. belief, Lorem Ipsuis not simply</blockquote>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<img src="images/pic1.jpg" alt="client">
								</div>
								<div class="col-xs-9 half-gutter">
									<h5>John Bond</h5>
									<h6>Lorem Ipsuis simply</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    <section id="contact-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Contact Us</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
        </div>
    </section><!--/#contact-us-->


    <section id="contact">
        
        <div class="container">
            <div class="container contact-info">
                <div class="row">
				  <div class="col-sm-4 col-md-4">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                              <strong>BulkHours</strong><br>
                              12345 NewYork, Street 125<br>
                              United States 94107<br>
                              <abbr title="Phone">P:</abbr> +33 6456-7890
                            </address>
					</div></div>
                    <div class="col-sm-8 col-md-8">
                        <div class="contact-form">
                       
                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
   </section><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2023 BulkHours
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="https://www.linkedin.com/in/guillaume-therin/"><i class="fa fa-linkedin"></i></a></li> 
                        <li><a href="https://github.com/gtherin/bulkhours"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom-scripts.js"></script>
</body>
</html>