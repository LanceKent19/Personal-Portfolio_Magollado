<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Lance Magollado Portfolio</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <?php
    require_once("includes/header.php");
    ?>


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">I love to create beautiful and efficient websites</h1>
                        <a class="btn-solid-lg page-scroll" href="#about">Discover</a>
                        <a class="btn-outline-lg page-scroll" href="#contact"><i class="fas fa-user"></i>Contact Me</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->

         <!-- About-->
        <?php
          require_once("pages/about.php");
        ?>
        <!-- end of about -->

    <!-- Services -->
    <?php
    require_once("pages/services.php");
    ?>
    <!-- end of services -->


    <!-- Details -->
	<div class="split">
		<div class="area-1">
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2 bg-gray">
            <div class="container">    
                <div class="row">
                    <div class="col-lg-12">     
                        
                        <!-- Text Container -->
                        <div class="text-container">
                            <h2>Why Work With Me</h2>
                            <p>I am a great communicator and love to invest the necessary time to understand the customer's problem very well</p>
                            <h5>DESIGN TOOLS</h5>
                            <p>My favorite design tools are Photoshop and Illustrator but I can create designs in Figma, Sketch and Adobe XD too</p>
                            <h5>DEVELOPMENT SKILLS</h5>
                            <p>I am familiar and work on a daily basis with HTML, CSS, JavaScript, Bootstrap and other modern frameworks</p>
                            
                            <div class="icons-container">
                                <img src="images/details-icon-photoshop.png" alt="alternative">
                                <img src="images/details-icon-illustrator.png" alt="alternative">
                                <img src="images/details-icon-html.png" alt="alternative">
                                <img src="images/details-icon-css.png" alt="alternative">
                                <img src="images/details-icon-bootstrap.png" alt="alternative">
                                <img src="images/details-icon-javascript.png" alt="alternative">
                            </div> <!-- end of icons-container -->
                        </div> <!-- end of text-container -->
                        <!-- end of text container -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
		</div> <!-- end of area-2 -->
    </div> <!-- end of split -->
    <!-- end of details -->


    <!-- Projects -->
    <div id="projects" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Delivered projects</h2>
                    <p class="p-heading">Listed below are some of the most representative projects I've worked on. They range from basic web design for presentation sites to advanced web development for online shops</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Jumbotron, <strong>Project:</strong> web design for their corporate websites and landing pages for marketing campaigns <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/project-2.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Carsrepo, <strong>Project:</strong> designed and developed modern platform for purchasing second hand cars online <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/project-3.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Truevideo, <strong>Project:</strong> created a custom video editing and upload web app for this awesome team <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/project-4.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Evolosim, <strong>Project:</strong> complete redesign of their corporate website and platform update for their online shop <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of projects -->


    <!-- Works -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/work-1.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Zigoland, <strong>Project:</strong> started a new website from ground up for a new product <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/work-2.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Visodream, <strong>Project:</strong> developed a new forum for the Visodream community <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/work-3.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Primoday, <strong>Project:</strong> complete redesign of their corporate website and platform <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/work-4.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Nextlite, <strong>Project:</strong> created a custom video editing and upload web app <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/work-5.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Syncnow, <strong>Project:</strong> web design for their corporate websites and landing pages <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="images/work-6.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>For:</strong> Shifter, <strong>Project:</strong> started a new website from ground up for a new product <a class="blue" href="project.html">details</a></p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of works -->


    <!-- Testimonials -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">A few words from people that chose to work with me</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <p class="testimonial-text">“Mark is a skilled developer which will do everything possible to deliver the project on time and I really appreciate that”</p>
                            <div class="details">
                                <img src="images/testimonial-1.jpg" alt="alternative">
                                <div class="text">
                                    <div class="testimonial-author">Samantha Bloom</div>
                                    <div class="occupation">Team Leader - Syncnow</div>
                                </div> <!-- end of text -->
                            </div> <!-- end of testimonial-details -->
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <p class="testimonial-text">“Loved to work with Mark he's such an awesome developer with great attention to details. He also has a great eye for design”</p>
                            <div class="details">
                                <img src="images/testimonial-2.jpg" alt="alternative">
                                <div class="text">
                                    <div class="testimonial-author">John Rowling</div>
                                    <div class="occupation">Marketing Manager - Nexlite</div>
                                </div> <!-- end of text -->
                            </div> <!-- end of testimonial-details -->
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <p class="testimonial-text">“So glad we started working with Mark. We've used many times his design and development skills for our inhouse online projects”</p>
                            <div class="details">
                                <img src="images/testimonial-3.jpg" alt="alternative">
                                <div class="text">
                                    <div class="testimonial-author">Lana Smith</div>
                                    <div class="occupation">General Manager - Shifter</div>
                                </div> <!-- end of text -->
                            </div> <!-- end of testimonial-details -->
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of testimonials -->


    <!-- Section Divider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <hr class="section-divider">
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    <!-- end of section divider -->


    <!-- Questions -->
    <?php
    require_once("pages/question-section.php");
    ?>
    <!-- end of questions -->


    <!-- Contact -->
    <?php
    require_once("pages/contact.php");
    ?>
    <!-- end of contact -->

    <!-- Footer -->
    <?php
    require_once("includes/footer.php");
    ?>
    <!-- end of footer -->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>