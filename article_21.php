<!--
Author: Thisira
Author URL: 
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Green Way Sri Lanka.LK | Yala National Park | Article_21</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header" id="ban">
        <div class="container">
            <div class="head-left">
                <div class="header-search"> &nbsp; &nbsp;
                    <!--<div class="search">
                        <input class="search_box" type="checkbox" id="search_box">
                        <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                        <div class="search_form">
                            <form action="#" method="post">
                                <input type="text" name="Search" placeholder="Search...">
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="header_right">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="link-effect-7" id="link-effect-7">
                            <ul class="nav navbar-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!--<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <ul>
                    <li>
                        <a href="#"> </a>
                    </li>
                    <li>
                        <a href="#" class="pin"> </a>
                    </li>
                    <li>
                        <a href="#" class="in"> </a>
                    </li>
                    <li>
                        <a href="#" class="be"> </a>
                    </li>

                    <li>
                        <a href="#" class="vimeo"> </a>
                    </li>
                </ul>
            </div>-->
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--start-main-->
    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <h1><a href="index.php">Wellcome to Sri Lanka</a></h1>
                <p>
                    <label class="of"></label>LET'S MAKE A PERFECT JOURNEY
                    <label class="on"></label>
                </p>
            </div>
        </div>
    </div>

    <!-- banner -->

    <!--<div class="banner-1">

    </div>-->

    <!-- technology-left -->
    <?php
        // database connection 
        include "library/db_connection.php";
        $id=$_REQUEST['id'];
        $sql="SELECT * FROM post WHERE id=$id";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {
    ?>
    <div class="technology">
        <div class="container">
            <div class="col-md-9 technology-left">
                <div class="agileinfo">

                    <h2 class="w3"><?php echo $row["title"];?></h2>
                    <div class="single">
                        <img src="uploads/<?php echo $row["image"];?>" class="img-responsive" alt="">
                        <div class="b-bottom">
						</br>
                            <p><?php echo $row["details"];?></p></br>
                    
                            <br>
                            <div class="bht1">
                                <a href="booking.php?id=<?php echo $row["id"];?>" class="btn btn-primary">Book Now</a>
                            </div>
                            <br><br><br><br><br>
	<?php } ?>			
				
				
				<!--<script>
//user-defined function to open and share web content on WhatsApp
function openWhatsApp() {
	window.open('whatsapp://send?text= http://myvog.lk/article_21.html');
    }
</script>-->
    <!-- create an image icon to open the WhatsApp onclick -->   
    <img src = "https://image.freepik.com/free-vector/whatsapp-icon-design_23-2147900927.jpg" height="50" size="50" onclick="openWhatsApp()">
    
	
	
				
				
				
				
                        </div>

                        <div class="gallery-grids">
                            <div class="gallery-grid">
                                <!--<a href="images/g1.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <img src="images/g1.jpg" alt=" " class="img-responsive zoom-img">
                                </a>-->
                                <!--<a href="images/article_8/1.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <img src="images/article_8/1.jpg" alt=" " class="img-responsive zoom-img">
                                </a>-->
                            </div>
                            <div class="gallery-grid">
                                <!--<a href="images/article_8/2.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <img src="images/article_8/2.jpg" alt=" " class="img-responsive zoom-img">
                                </a>-->
                                <!--<a href="images/g2.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <img src="images/g2.jpg" alt=" " class="img-responsive zoom-img">
                                </a>-->
                            </div>
                            <!--<div class="gallery-grid">
                                <a href="images/g3.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <img src="images/g3.jpg" alt=" " class="img-responsive zoom-img">
                                </a>
                                <a href="images/g7.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <img src="images/g7.jpg" alt=" " class="img-responsive zoom-img">
                                </a>
                            </div>
                            <div class="gallery-grid" data-wow-delay=".5s">
                                <a href="images/g8.jpg">
                                    <img src="images/g8.jpg" alt=" " class="img-responsive zoom-img">
                                </a>
                                <a href="images/g4.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <img src="images/g4.jpg" alt=" " class="img-responsive zoom-img">
                                </a>
                            </div>-->
                            </br>
                            <!--<p>On Aug 01 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>-->
                            <div class="clearfix"> </div>
                        </div>

                    </div>

                    <!--	<div class="response">
					<h4>Responses</h4>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img src="images/sin1.jpg" class="img-responsive" alt="">
							</a>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Jun 21, 2016</li>
								<li><a href="#">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img src="images/sin2.jpg" class="img-responsive" alt="">
									</a>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>July 17, 2016</li>
										<li><a href="#">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img src="images/sin1.jpg" class="img-responsive" alt="">
							</a>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Jul 22, 2016</li>
								<li><a href="#">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img src="images/sin2.jpg" class="img-responsive" alt="">
									</a>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>Aug 01, 2016</li>
										<li><a href="#">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>	-->
                    <!--<div class="coment-form">
					<h4>Leave your comment</h4>
					<form action="#" method="post">
						<input type="text" value="Name " name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Website" name="websie" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
						<input type="submit" value="Submit Comment">
					</form>
				</div>-->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- technology-right -->
           
            <div class="clearfix"></div>
            <!-- technology-right -->
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="col-md-4 footer-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                <h4>About</h4>
                <!--<p>The aim "VOGSL.LK" is to educate you regarding women’s health and child birth.</p>-->
                <img src="images/sl_1/green-way-sri-lanka-low-resolution-logo-color-on-transparent-background.png" class="img-responsive" alt="">
                <!--<div class="bht1">
                    <a href="about.html">Read More</a>
                </div>-->
            </div>
            
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>©
                <script>
                    document.write(new Date().getFullYear());
                </script> Green Way Sri Lanka.lk. All rights reserved | Design by <a href="">Thisira</a></p>
        </div>
    </div>
</body>

