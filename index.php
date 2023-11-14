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
$is_en = isset($_GET['lan']) && $_GET['lan'] == "en";
if ($is_en) {
    $xml = simplexml_load_file("containt_en.xml") or die("Error: Cannot create object");
} else {
    $xml = simplexml_load_file("containt_fr.xml") or die("Error: Cannot create object");
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
                    <a class="navbar-brand" href="/"><img src="images/BulkHours.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home"><?php echo $xml->mhome;?></a></li>  
                        <li class="scroll"><a href="#services"><?php echo $xml->mservices;?></a></li>
						<li class="scroll"><a href="#portfolio"><?php echo $xml->mdemo;?></a></li>
                        <li class="scroll"><a href="#pricing"><?php echo $xml->mpricing;?></a></li>
                        <li class="scroll">
                            
<?php

if ($is_en) {
    print '<a href="/?lan=fr" style="text-align: center; text-decoration: none; display: inline-block;">';
    print('<img alt="" src="images/FR.png" width="20px" class="img-unselected" /> <img alt="" src="images/UK.png" width="20px" /></a>');
} else {
    print '<a href="/?lan=en" style="text-align: center; text-decoration: none; display: inline-block;">';
    print('<img alt="" src="images/FR.png" width="20px" /> <img alt="" src="images/UK.png" width="20px" class="img-unselected" /></a>');
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
                            <div class="col-sm-12"><?php echo $xml->htitle; ?></div>
                        </div>
                    </div>
                </div>
    </section><!--/#main-slider-->

 <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">
                <?php echo $xml->stitle; ?></div>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-refresh"></i></div>
                            <div class="media-body"><h4 class="media-heading"><?php echo $xml->sfollow;?></h4></div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-check-square-o"></i></div>
                            <div class="media-body"><h4 class="media-heading"><?php echo $xml->seval;?></h4></div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-database"></i></div>
                            <div class="media-body"><h4 class="media-heading"><?php echo $xml->saccess;?></h4></div>
                        </div>
                    </div>
                
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-laptop"></i></div>
                            <div class="media-body"><h4 class="media-heading"><?php echo $xml->senv;?></h4></div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-stack-overflow"></i></div>
                            <div class="media-body"><h4 class="media-heading"><?php echo $xml->srattr;?></h4></div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-user"></i></div>
                            <div class="media-body"><h4 class="media-heading"><?php echo $xml->scons;?></h4></div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->


  

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

    <!--section id="COMMENTS">
Inpspiration for pricing:
- https://retool.com/eu/pricing
</section -->
  <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Demo</h2>
            </div>
            <video autoplay="" muted controls=""><source src="images/Bulkhours_eu.mp4" type="video/mp4" /> Your browser does not support the video tag.</video>


        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown"><?php echo $xml->mpricing;?></h2>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                        <ul class="pricing" style="height: 700px;">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price" style="text-align:center"><?php echo $xml->s1price;?></span>
                                    <span class="duration" style="text-align:center"><?php echo $xml->s1duration;?></span>
                                </div>
                                <div class="plan-name" style="text-align:center"><?php echo $xml->s1title;?></div>
                            </li>
                            <?php echo $xml->s1offer;?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                        <ul class="pricing" style="height: 700px;">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price" style="text-align:center"><?php echo $xml->s2price;?></span>
                                    <span class="duration" style="text-align:center"><?php echo $xml->s2duration;?></span>
                                </div>

                                <div class="plan-name" style="text-align:center"><?php echo $xml->s2title;?></div>
                            </li>
                            <?php echo $xml->s2offer;?>
                            <li class="plan-purchase"><a class="btn btn-primary" href="https://meetings-eu1.hubspot.com/guillaume-therin"><?php echo $xml->sbutton;?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing" style="height: 700px;">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price" style="text-align:center"><?php echo $xml->s3price;?></span>
                                    <span class="duration" style="text-align:center"><?php echo $xml->s3duration;?></span>
                                </div>

                                <div class="plan-name" style="text-align:center"><?php echo $xml->s3title;?></div>
                            </li>
                            <?php echo $xml->s3offer;?>
                            <li class="plan-purchase"><a class="btn btn-primary" href="https://meetings-eu1.hubspot.com/guillaume-therin"><?php echo $xml->sbutton;?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
                        <ul class="pricing" style="height: 730px;">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price" style="text-align:center"><?php echo $xml->s4price;?></span>
                                    <span class="duration" style="text-align:center"><?php echo $xml->s4duration;?></span>
                                </div>

                                <div class="plan-name" style="text-align:center"><?php echo $xml->s4title;?></div>
                            </li>
                            <?php echo $xml->s4offer;?>
                            <li class="plan-purchase"><a class="btn btn-primary" href="https://meetings-eu1.hubspot.com/guillaume-therin"><?php echo $xml->sbutton;?></a></li>
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
    </section -->

  
    <!--section class="testimonial-area" id="testimonial">
			<div class="container">
				<div class="section-header">
                <h2 class="section-title wow fadeInDown"><?php echo $xml->mtest;?></h2>
            </div>
				<div class="row">
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
                        <div class="row">
								<div class="col-xs-12">
									<blockquote>Concept intéressant (notebook avec cours théorique + exo)</blockquote>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>le système de contrôle continue a favorisé l'écoute en diminuant le stress d'avoir un examen final. A garder</blockquote>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>La méthode de travail est très intéressante. En effet, pouvoir faire le cours en même temps qu'exploiter certaines notions sur python permet une meilleure compréhension</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section-->
    <!--section id="contact-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Contact Us</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
        </div>
    </section>

     <!-- section id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown"><?php echo $xml->atitle;?></h2><?php echo $xml->tcontaint;?>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title"><a href="mailto:contact@bulkhours.eu" style="font-size: 18px; margin: 4px 0;background-color: white; color: #4F77AA; padding: 5px 9px; text-align: center; text-decoration: none; display: inline-block;">contact@bulkhours.eu</a></h3>
                </div>
            </div>
        </div>
    </section -->

    <!--section id="contact">
        
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
   </section --><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2023 BulkHours
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="https://meetings-eu1.hubspot.com/guillaume-therin"><i class="fa fa-users"></i></a></li> 
                        <li><a href="mailto:contact@bulkhours.eu"><i class="fa fa-envelope"></i></a></li> 
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
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom-scripts.js"></script>
</body>
</html>