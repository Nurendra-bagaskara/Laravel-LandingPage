<!DOCTYPE html>
<!--
Website By Miradontsoa / MiVFX
http://twitter.com/miradontsoa
http://miradontsoa.com
-->

<html class="no-js" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- Page Title Here -->
    <title>Hal | Home</title>

    <!-- Meta -->
    <!-- Page Description Here -->
    <meta name="description" content="A beautiful and creative portfolio template. It is mobile friend (responsive) and comes with smooth animations" />

    <!-- Disable screen scaling-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0" />

    <!-- Twitter Meta -->
    <meta name="twitter:site" content="@miradontsoa" />
    <meta name="twitter:creator" content="@miradontsoa" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Page Title" />
    <meta name="twitter:description" content="Description of the page" />
    <meta name="twitter:image" content="/img/bg-default.jpg" />

    <!-- Facebook Meta -->
    <meta property="og:url" content="your website url here" />
    <meta property="og:title" content="Page Title" />
    <meta property="og:description" content="Description of the page" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/img/bg-default.jpg" />
    <meta property="og:image:secure_url" content="/img/bg-default.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <!-- Web fonts and Web Icons -->
    <link rel="stylesheet" href="./fonts/opensans/stylesheet.css" />
    <link rel="stylesheet" href="./fonts/montserrat/stylesheet.css" />
    <link rel="stylesheet" href="./fonts/playfair/stylesheet.css" />
    <link rel="stylesheet" href="./fonts/bebas/stylesheet.css" />
    <link rel="stylesheet" href="./fonts/ostrich/stylesheet.css" />
    <link rel="stylesheet" href="./fonts/ionicons.min.css" />
    <link rel="stylesheet" href="./fonts/font-awesome.min.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Vendor CSS style -->
    <link rel="stylesheet" href="./css/pageloader.css" />

    <!-- Uncomment below to load individualy vendor CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./js/vendor/swiper.min.css" />
    <link rel="stylesheet" href="./js/vendor/jquery.fullpage.min.css" />
    <link rel="stylesheet" href="./js/vegas/vegas.min.css" />

    <!-- Main CSS files -->
    <link rel="stylesheet" href="./css/main.css" />

    <!-- add alt layout here -->
    <link rel="stylesheet" href="./css/style-default1.css" />

    <script src="./js/vendor/modernizr-2.7.1.min.js"></script>
  </head>

  <body id="menu" class="body-page">
    <!--[if lt IE 8]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Page Loader : just comment these lines to remove it -->
    <div class="page-loader" id="page-loader">
      <div>
        <div class="icon ion-spin"></div>
        <p>please wait</p>
      </div>
    </div>

    <!-- BEGIN OF site header Menu -->
    <header class="page-header navbar page-header-alpha scrolled-white">
      <!-- Begin of menu icon toggler -->
      <button class="navbar-toggler site-menu-icon" id="navMenuIcon">
        <!-- Available class : menu-icon-dot / menu-icon-thick /menu-icon-random -->
        <span class="menu-icon menu-icon-normal">
          <span class="bars">
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>
          </span>
        </span>
      </button>
      <!-- End of menu icon toggler -->

      <!-- Begin of logo/brand -->
      <a class="navbar-brand" href="./#">
        <span class="logo">
          <img class="light-logo" src="img/Icon_Blue_3.png" alt="Icon_Blue_3" />
        </span>
        <!-- logo title (optional) -->
        <!-- <span class="text">
			<span class="line">Brainux</span>
			<span class="line sub">Portfolio Template</span>
		</span> -->
      </a>
      <!-- End of logo/brand -->

      <!-- begin of menu wrapper -->
      <div class="all-menu-wrapper" id="navbarMenu">
        <!-- Begin of top menu -->
        <nav class="navbar-topmenu">
          <ul class="navbar-social d-none d-lg-block">
            <li class="nav-item">
              <a href="//linkedin.com/miradontsoa" class="btn-social">
                <i class="icon fa fa-linkedin"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="//facebook.com/miradontsoa" class="btn-social">
                <i class="icon fa fa-facebook"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="//youtube.com/miradontsoa" class="btn-social">
              <i class="bi bi-youtube"></i>
              </a>
            </li>
          </ul>
          <!-- Begin of CTA Actions, & Icons menu (optional) -->
          <!-- <ul class="navbar-nav navbar-nav-actions">
            <li class="nav-item">
              <a class="btn btn-outline btn-round" target="_blank" href="https://themeforest.net/user/mivfx/portfolio">
                <span class="text">Buy Now</span>
                <span class="icon big">
                  <span class="fa fa-cart-arrow-down"></span>
                </span>
              </a>
            </li>
          </ul> -->
          <!-- End of CTA & Icons menu -->
        </nav>
        <!-- End of top menu -->

        <!-- Begin of hamburger mainmenu menu -->
        <nav class="navbar-mainmenu">
          <div class="click-exit"></div>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./index.html#home"
                >About
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./gallery.html">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./item.html">Item</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.html#home">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./demo.html">Demo</a>
            </li>
          </ul>
          <div class="menu-social">
            <p class="note">
              Website made by
              <a href="//highhay.com">
                <span class="marked">Miradontsoa</span>
              </a>
            </p>
            <ul class="social">
              <li>
                <a href="//facebook.com/miradontsoa">
                  <i class="icon fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="//twitter/miradontsoa">
                  <i class="icon fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="//instagram.com/miradontsoa">
                  <i class="icon fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- End of hamburger mainmenu menu -->

        <!-- Begin of sidebar nav menu params class: text-only / icon-only-->
        <nav class="navbar-sidebar font-primary">
          <ul class="navbar-nav" id="qmenu">
            <li class="nav-item" data-menuanchor="home">
              <a href="#home">
                <span class="icon">H</span>
                <span class="txt">Home</span>
              </a>
            </li>
            <li class="nav-item" data-menuanchor="about">
              <a href="#about">
                <span class="icon">A</span>
                <span class="txt">About</span>
              </a>
            </li>
            <li class="nav-item" data-menuanchor="projects">
              <a href="#projects">
                <span class="icon">W</span>
                <span class="txt">Works</span>
              </a>
            </li>
            <li class="nav-item" data-menuanchor="contact">
              <a href="#contact">
                <span class="icon">C</span>
                <span class="txt">Contact</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End of sidebar nav menu -->
      </div>
      <!-- end of menu wrapper -->
    </header>
    <!-- END OF site header Menu-->

    <!-- BEGIN OF page cover -->
    <div class="page-cover" id="parallax-cover-off">
      <!-- Cover Background -->
      <div data-depth="0.2" class="cover-bg bg-img" data-image-src="img/bg-Home.jpg"></div>
    </div>
    <!--END OF page cover -->

    <!-- cover frame -->
    <div class="cover-frame">
      <div class="sides"></div>
    </div>

    <!-- BEGIN OF page main content -->
    <main class="page-main page-fullpage main-anim scroll-fullpage" id="mainpage">
      <!-- Begin of home section -->
      <div class="section section-home fullscreen-md fp-auto-height-responsive main-home border-sm section-centered" data-section="home">
        <!-- Begin of section wrapper -->
        <div class="section-wrapper fullwidth with-margin v-center">
          <!-- content -->
          <div class="section-content anim">
            <div class="row">
              <div class="col-12 col-lg-8 text-left">
                <!-- title -->
                <div class="row">
                  <!-- <div class="col-md-5"> -->
                  <!-- <span class="logo"> -->
                    <!-- <img class="light-logo" src="img/Icon_Blue_3.png" alt="Icon_Blue_3"> -->
                    <h1 class="display-4 display-title home-title text-slide-in vertical-align-middle anim-1-off ">ATC</h1>
                  <!-- </span> -->
                  <!-- </div>
                  <div class="col-md-8"> -->
                    
                  <!-- </div> -->
                </div>
              </div>

              <div class="col-12 col-lg-6 text-left">
                <!-- description -->
                <div class="title-desc">
                  <p class="anim-4">Quality and Experience</p>
                </div>

                <!-- Action button -->
                <div class="btns-action anim-5">
                  <a class="btn btn-arrow btn-primary" href="#about">
                    <span class="icon">
                      <span class="arrow-right"></span>
                    </span>
                    <span class="text">About</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="section-aside small-relative aside-middle">
            <ul class="nav nav-btns-list">
              <li class="nav-item">
                <a class="btn-framed" href="./Timber">
                  <span class="icon">W</span>
                  <span class="text">
                    <span class="b-title">Wood / Building Materials</span>
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="btn-framed" href="./Natural_Stone">
                  <span class="icon">NS</span>
                  <span class="text">
                    <span class="b-title">Natural Stone</span>
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="btn-framed" href="/Commodity">
                  <span class="icon">C</span>
                  <span class="text">
                    <span class="b-title">Commodity</span>
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="btn-framed" href="#contact">
                  <span class="icon">
                    <i class="fa fa-phone"></i>
                  </span>
                  <span class="text">
                    <span class="b-title">Have a project?</span>
                    <span class="b-desc">Email : marketing@atctme.com</span>
                  </span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Arrows scroll down/up -->
          <footer class="section-footer scrolldown">
            <!--<a class="up">
				<span class="btn btn-arrow">
					<span class="icon">
						<span class="arrow-up"></span>
					</span>
				</span>
			</a>-->
            <a class="down">
              <span class="btn btn-arrow">
                <span class="icon">
                  <span class="arrow-down"></span>
                </span>
              </span>
            </a>
          </footer>
        </div>
        <!-- End of section wrapper -->
      </div>
      <!-- End of home section -->

      <!-- Begin of description section -->
      <div class="section section-twoside  services-slider fp-auto-height-responsive anim-slide" data-section="about">
        <div class="slide">
          <div class="slide-wrapper">
            <div class="item-wrapper anim">
              <div class="legend section-content ">
                <div class="legend-bg" style="background-size: contain; background: url('./img/bg-About.jpg'); background-color: rgba(0.0.0.0.6); background-blend-mode: darken;"> </div>
                <div class="legend-text padding-wrapper-topbottom">
                  <div class="row">
                    <div class="col-18 col-lg-13">
                      <div class="title-desc">
                        <h3 class="display-title display-decor anim-1">About Us</h3>
                        <p class="desc-decor anim-1-off">ATC offers quality and expertise. From processing the raw material to loading the container and providing the correct documentation, the entire process is monitored by us and guided. ATC ensures that specific customer requirements are known at every relevant link in the chain.<br><br>
                          Thanks to our many years of experience with importing and producing products from Indonesia, Malaysia, Guyana and our knowledge of different types of wood, natural stone, and commodity, we can supply and develop together with tailor-made products for the customer.</p>
                        <p>Let's collaborate!</p>
                      </div>
                      <a class="btn btn-outline btn-primary" href="#services">
                        <span class="text">Services</span>
                        <span class="icon">
                          <span class="arrow-right"></span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="up">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-up"></span>
              </span>
            </span>
          </a>
          <a class="down">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-down"></span>
              </span>
            </span>
          </a>
        </footer>
      </div>
        <!-- End of section wrapper -->
      <!-- End of description section -->

      <!-- Begin of projects / gallery slider section -->
      <div class="section section-twoside services-slider fp-auto-height-responsive anim-slide" data-section="projects">
        <div class="slide">
          <div class="slide-wrapper">
            <div class="item-wrapper anim">
              <div class="legend section-content ">
                <div class="legend-bg  " style="background: conic-gradient(from 180deg at 49.96% 50%, rgba(84, 84, 84, 0) 0deg, #D8C5B0 135deg, rgba(84, 84, 84, 0) 360deg);"></div>
                <div class="legend-text padding-wrapper-topbottom">
                  <div class="row">
                    <div class="col-12 col-lg-7">
                      <div class="title-desc">
                        <h3 class="display-title display-decor anim-1">Wood  &amp; Building Construction</h3>
                        <p class="desc-decor anim-2">ATC supplies wood and building materials of various hardwood species with added value. It can be an added value in quality, finish, packaging, quantity and variation per shipment. We work with philosophies for quality and flexibility.</p>
                      </div>
                      <a class="btn btn-outline btn-primary anim-3" href="./Timber">
                        <span class="text">Details</span>
                        <span class="icon">
                          <span class="arrow-right"></span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="illustr">
                <div class="img bg-img" data-image-src="img/items/img-work.jpg">
                  <!-- <img class="service-img" alt="img" src="img/items/settings_white.png" /> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="slide-wrapper">
            <div class="item-wrapper anim">
              <div class="legend section-content">
              <div class="legend-bg" style="background: conic-gradient(from 180deg at 50% 50%, rgba(20, 20, 20, 0) 0deg, rgba(70, 166, 114, 0.74) 133.12deg, rgba(20, 20, 20, 0) 360deg);"></div>
                <div class="legend-text padding-wrapper-topbottom">
                  <div class="row">
                    <div class="col-12 col-lg-6">
                      <div class="title-desc">
                        <h3 class="display-title display-decor anim-1">Natural Stone </h3>
                        <p class="desc-decor anim-2">ATC work closely with local natural stone mining companies to supply and export the products globally. The natural stone that we deliver can only be found in Indonesia.</p>
                      </div>
                      <a class="btn btn-outline btn-primary anim-3" href="./Natural_Stone">
                        <span class="text">Details</span>
                        <span class="icon">
                          <span class="arrow-right"></span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="illustr">
                <div class="img bg-img" data-image-src="img/items/img-NS.jpg">
                  <!-- <img class="service-img" alt="img" src="img/items/bulb.png" /> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="slide-wrapper">
            <div class="item-wrapper anim">
              <div class="legend section-content">
              <div class="legend-bg " style="background: conic-gradient(from 180deg at 49.96% 50%, rgba(84, 84, 84, 0) 0deg, #719FC1 228.75deg, rgba(84, 84, 84, 0) 360deg)"></div>
              <div class="legend-text padding-wrapper-topbottom">
                  <div class="row">
                    <div class="col-12 col-lg-6">
                      <div class="title-desc">
                        <h3 class="display-title display-decor anim-1">Commodity</h3>
                        <p class="desc-decor anim-2">ATC work closely with local farmers in Indonesia to provide the products for international markets with qualities according to your requirements.
                        </p>
                      </div>
                      <a class="btn btn-outline btn-primary anim-3" href="./Commodity">
                        <span class="text">Details</span>
                        <span class="icon">
                          <span class="arrow-right"></span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="illustr">
                <div class="img bg-img" data-image-src="img/items/img-commodity.jpg">
                  <!-- <img class="service-img" alt="img" src="img/items/mesure.png" /> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slider Navigation -->
        <div class="section-slider-footer slider-navigation">
          <a class="left">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-left"></span>
              </span>
            </span>
          </a>
          <a class="right">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-right"></span>
              </span>
            </span>
          </a>
          <div class="text">
            <p>Browse Solutions</p>
          </div>
        </div>

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="up">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-up"></span>
              </span>
            </span>
          </a>
          <a class="down">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-down"></span>
              </span>
            </span>
          </a>
        </footer>
      </div>
      <!-- End of projects / gallery slider section -->

      <!-- Begin of services slider section -->
      <div class="section section-contact fp-auto-height-responsive no-slide-arrows" data-section="projects-more">
        <!-- <div class="section-cover-tier right fit bg-img" data-image-src="./img/items/img-contact1.jpg"></div> -->
        

        <!-- begin of information slide -->
        <div class="slide" id="Our" data-anchor="Our">
          <!-- Begin of slide section wrapper -->
          <div class="section-wrapper fullwidth fullheight center-lg-v with-margin padding-wrapper-topbottom">
            <div class="illustr">
              <div class="section-cover-tier right fit bg-img" data-image-src="img/items/img-projects.jpg">
              </div>
            </div>
            <!-- content -->
            <div class="section-content fullwidth anim text-left">
              <!-- main content -->
              <div class="row justify-content-between">
                <div class="col-12 col-md-8 col-lg-6 text-left center-v">
                  <div class="f-wrapper">
                    <!-- title and description -->
                    <div class="title-desc">
                      <div class="anim-2">
                        <h2 class="display-4 display-title display-decor">Our Projects</h2>
                        <p class="desc-decor">Get to know us more closely about the projects we have worked on.</p>
                      </div>
                    </div>

                    <!-- Action button -->
                    <div class="btns-action anim-4">

                      <a class="btn btn-arrow btn-primary" href="#projects-more/project">
                        <span class="icon">
                          <span class="arrow-right"></span>
                        </span>
                        <span class="text">View Project</span>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="d-none d-md-block col-12 col-md-4 col-lg-4"></div>
              </div>
            </div>
          </div>
          <!-- End of slide section wrapper -->

          <!-- begin of slide footer -->
          <div class="slide-footer section-footer footer-register">
            <form class="send_email_form form-container form-container-transparent form-container-white" method="post" action="ajaxserver/serverfile.php">
              <div class="form-desc">
                <!-- Optioanl text here -->
                <!-- <p class="invite">Register email to newsletter :</p> -->
              </div>
              <div class="form-input">
                <div class="form-group form-success-gone">
                </div>
                <div class="form-group mb-0">
                  <div>
                    <p class="email-ok invisible form-text-feedback form-success-visible">Your email has been registred, thank you.</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- end of slide footer -->
        </div>

        <!-- begin of message slide -->
        <div class="slide" id="project" data-anchor="project">
          <!-- Begin of slide section wrapper -->
          <div class="section-wrapper fullwidth fullheight center-lg-v with-margin padding-wrapper-topbottom">
            <!-- main content -->
            <div class="row justify-content-between">
              <!-- <div class="col-12 col-md-12 col-lg-6 text-left"> -->
                <!-- content -->
                <div class="section-content fullwidth anim text-left">
                  <!-- title and description -->
                  <div class="title-desc">
                    <!-- <div class="anim-2"> -->
                      <h2 class="display-4 display-title display-decor">Post Projects</h2>
                      <div class="w3-row " > 
                        <!-- <div class="w3-col m4" style="background-image: ;"></div> -->
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-projects1.jpg"  alt="img-projects1">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-projects2.jpg"  alt="img-projects2">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-projects3.jpg"  alt="img-projects3">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-projects4.jpg"  alt="img-projects4">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-projects5.jpg"  alt="img-projects5">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-projects6.jpg"  alt="img-projects6">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-projects7.jpg"  alt="img-projects7">
                        
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-project1.jpg"  alt="img-project1">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-project2.jpg"  alt="img-project2">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-project3.jpg"  alt="img-project3">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-project4.jpg"  alt="img-project4">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-project5.jpg"  alt="img-project5">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-project6.jpg"  alt="img-project6">
                        <img class="w3-col m4 mr-2" width="155" height="155" src="img/items/img-project7.jpg"  alt="img-project7">
                      </div> 
                  </div>
                  <!-- begin of message container -->
                  <div class="message-form">
                    <div class="form-container form-container-card">
                      <!-- Message form container -->
                      <div class="btns text-left d-flex justify-content-between">
                        <a class="btn btn-arrow" href="#projects-more/Our">
                          <span class="icon">
                            <span class="arrow-left"></span>
                          </span>
                          <span class="text">Back</span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- end of message container -->
                </div>
              <!-- </div> -->

              <div class="col-12 col-md-6 col-lg-4"></div>
            </div>

            <!-- aside content -->
            <div class="section-aside aside-bottom anim small-relative"></div>
          </div>
          <!-- End of slide section wrapper -->
        </div>

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="up">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-up"></span>
              </span>
            </span>
          </a>
          <a class="down">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-down"></span>
              </span>
            </span>
          </a>
        </footer>
      </div>
      <!-- End of services slider section -->

      <!-- Begin of description with performance section -->
      <div class="section section-description fp-auto-height-responsive section-text-dark" data-section="about-performance">
        <div class="section-cover-full fit bg-color" data-bgcolor="rgba(255,255,255,1)"></div>

        <!-- Begin of section wrapper -->
        <div class="section-wrapper fullwidth fullheight center-lg-v with-margin padding-wrapper-topbottom">
          <!-- content -->
          <div class="section-content fullwidth anim">
            <div class="row">
              <div class="col-12 col-lg-6 text-left center-v">
                <div class="wrapper">
                  <!-- title and description -->
                  <div class="title-desc">
                    <h2 class="display-4 display-title anim-1">
                      We are
                      <span class="stroke-off">strong</span>
                    </h2>
                    <p class="anim-2 desc-decor">ATC has served more than 30 years worldwide. Drive us in having an experience and knowledge that fulfils your standards</p>
                  </div>

                  <!-- Action button -->
                  <div class="btns-action anim-3">
                    <a class="btn btn-arrow btn-primary" href="#contact">
                      <span class="icon">
                        <span class="arrow-right"></span>
                      </span>
                      <span class="text">Start a Project</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- icons or analytics -->
            <div class="num-grid">
              <div class="row anim-list">
                <div class="col-6 col-lg-3 item">
                  <div class="num-wrapper">
                    <div class="num">1000+</div>
                    <div class="desc">Customers</div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 item">
                  <div class="num-wrapper">
                    <div class="num">20+</div>
                    <div class="desc">Partners</div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 item">
                  <div class="num-wrapper">
                    <div class="num">20+</div>
                    <div class="desc">Products</div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 item">
                  <div class="num-wrapper">
                    <div class="num">30y+</div>
                    <div class="desc">Years Experience</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Arrows scroll down/up -->
          <footer class="section-footer scrolldown">
            <a class="up">
              <span class="btn btn-arrow">
                <span class="icon">
                  <span class="arrow-up"></span>
                </span>
              </span>
            </a>
            <a class="down">
              <span class="btn btn-arrow">
                <span class="icon">
                  <span class="arrow-down"></span>
                </span>
              </span>
            </a>
          </footer>
        </div>
        <!-- End of section wrapper -->
      </div>
      <!-- End of description with performance section -->

      <!-- Begin of contact section -->
      <div class="section section-contact fp-auto-height-responsive no-slide-arrows" data-section="contact">
        <!-- <div class="section-cover-tier right fit bg-img" data-image-src="./img/items/img-contact1.jpg"></div> -->
        

        <!-- begin of information slide -->
        <div class="slide" id="information" data-anchor="information">
          <!-- Begin of slide section wrapper -->
          <div class="section-wrapper fullwidth fullheight center-lg-v with-margin padding-wrapper-topbottom">
            <div class="illustr">
              <div class="section-cover-tier right fit bg-img" data-image-src="img/items/img-contact.jpg">
              </div>
            </div>
            <!-- content -->
            <div class="section-content fullwidth anim text-left">
              <!-- main content -->
              <div class="row justify-content-between">
                <div class="col-12 col-md-8 col-lg-6 text-left center-v">
                  <div class="f-wrapper">
                    <!-- title and description -->
                    <div class="title-desc">
                      <div class="anim-2">
                        <h2 class="display-4 display-title display-decor">Contact</h2>
                        <p class="desc-decor">Simply reach us for inquiries about our company and products.</p>
                      </div>
                      <div class="address-container anim-3">
                        <div class="row">
                          <div class="col-12 col-md-12 col-xl-6">
                            <h4>The Netherlands</h4>
                            <p class="mb-0">
                              Kwadijkerkoogweg 16,
                              <br />1442 LA Purmerend
                              <br />+31 6 52825144
                            </p>
                          </div>
                          <div class="col-12 col-md-12 col-xl-6">
                            <h4>Indonesia</h4>
                            <p class="mb-0">Delta Sari Indah Blok AY 41 <br />Waru, Sidoarjo <br />  +62 822 3017 6767</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Action button -->
                    <div class="btns-action anim-4">

                      <a class="btn btn-arrow btn-primary" href="#contact/message">
                        <span class="icon">
                          <span class="arrow-right"></span>
                        </span>
                        <span class="text">Send Message</span>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="d-none d-md-block col-12 col-md-4 col-lg-4"></div>
              </div>
            </div>
          </div>
          <!-- End of slide section wrapper -->

          <!-- begin of slide footer -->
          <div class="slide-footer section-footer footer-register">
            <form class="send_email_form form-container form-container-transparent form-container-white" method="post" action="ajaxserver/serverfile.php">
              <div class="form-desc">
                <!-- Optioanl text here -->
                <!-- <p class="invite">Register email to newsletter :</p> -->
              </div>
              <div class="form-input">
                <div class="form-group form-success-gone">
                  <!-- <label for="reg-email">Email</label> -->
                  <div class="f-input">
                    <input id="reg-email" name="email" class="form-control form-control-outline form-control-white" type="email" required placeholder="your@email.address" data-validation-type="email" />
                    <div class="btns-action">
                      <button id="submit-email" name="submit_email" class="btn btn-arrow btn-primary form-success-gone">
                        <span class="icon">
                          <i class="ion ion-checkmark"></i>
                        </span>
                        <span class="text">Register to newsletter</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div>
                    <p class="email-ok invisible form-text-feedback form-success-visible">Your email has been registred, thank you.</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- end of slide footer -->
        </div>

        <!-- begin of message slide -->
        <div class="slide" id="message" data-anchor="message">
          <!-- Begin of slide section wrapper -->
          <div class="section-wrapper fullwidth fullheight center-lg-v with-margin padding-wrapper-topbottom">
            <div class="illustr">
              <div class="section-cover-tier right fit bg-img" data-image-src="img/items/img-contact1.jpg">
              </div>
            </div>
            <!-- main content -->
            <div class="row justify-content-between">
              <div class="col-12 col-md-12 col-lg-7 col-xl-6">
                <!-- content -->
                <div class="section-content fullwidth anim text-left">
                  <!-- title and description -->
                  <div class="title-desc">
                    <div class="anim-2">
                      <h2 class="display-4 display-title display-decor">Contact Us</h2>
                      <p class="desc-decor">For questions about our company and products found on our website, please message us your enquiry and we’ll be pleased to help.</p>
                    </div>
                  </div>
                  <!-- begin of message container -->
                  <div class="message-form">
                    <div class="form-container form-container-card">
                      <!-- Message form container -->
                      <form class="send_message_form message form" method="post" action="ajaxserver/serverfile.php" id="message_form">
                        <div class="form-group name">
                          <input id="mes-name" name="name" type="text" placeholder="Name" class="form-control form-control-outline thick form-success-clean" required />
                        </div>
                        <div class="form-group email">
                          <input id="mes-email" type="email" placeholder="Email" name="email" class="form-control form-control-outline thick form-success-clean" required />
                        </div>
                        <div class="form-group no-border">
                          <textarea id="mes-text" placeholder="Message ..." name="message" class="form-control form-control-outline thick form-success-clean" required></textarea>

                          <div>
                            <p class="message-ok invisible form-text-feedback form-success-visible">Your message has been sent, thank you.</p>
                          </div>
                        </div>

                        <div class="btns text-left d-flex justify-content-between">
                          <a class="btn btn-arrow" href="#contact/information">
                            <span class="icon">
                              <span class="arrow-left"></span>
                            </span>
                            <span class="text">Information</span>
                          </a>
                          <button id="submit-message" class="btn btn-outline email_b" name="submit_message">
                            <span class="txt">Send Now</span>
                            <span class="arrow-icon"></span>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- end of message container -->
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4"></div>
            </div>

            <!-- aside content -->
            <div class="section-aside aside-bottom anim small-relative"></div>
          </div>
          <!-- End of slide section wrapper -->
        </div>

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="up">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-up"></span>
              </span>
            </span>
          </a>
          <a class="down">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-down"></span>
              </span>
            </span>
          </a>
        </footer>
      </div>
      <!-- End of contact section -->

      <!-- Begin of last -->
      <div class="section section-twoside services-slider fp-auto-height-responsive anim-slide" data-section="contact-more">
        <div class="slide">
          <div class="slide-wrapper">
            <div class="item-wrapper anim">
              <div class="legend section-content ">
                <div class="legend-bg" style="background-size: contain; background: url('./img/bg-last.jpg'); background-color: rgba(0.0.0.0.6); background-blend-mode: darken;"> </div>
                <div class="legend-text padding-wrapper-topbottom">
                  <div class="row">
                    <div class="col-12 col-lg-8">
                      <div class="title-desc">
                        <h3 class="display-title display-decor anim-1">Thank You</h3>
                        <p class="desc-decor anim-2">We will reach you very soon. Hopefully, we can collaborate and make your projects come true. See you.</p>
                      </div>
                      <a class="btn btn-outline btn-primary anim-3" href="item.html#project_url">
                        <span class="text">Website</span>
                        <span class="icon">
                          <span class="arrow-right"></span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="up">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-up"></span>
              </span>
            </span>
          </a>
          <!-- <a class="down">
            <span class="btn btn-arrow">
              <span class="icon">
                <span class="arrow-down"></span>
              </span>
            </span>
          </a> -->
        </footer>
      </div>
      <!-- End of last -->



    </main>
    <!-- END OF page main content -->

    <!-- scripts -->
    <!-- All Javascript plugins goes here -->
    <script src="./js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./js/slick/slick.min.js"></script>

    <!-- All vendor scripts -->
    <script src="./js/vendor/parallax.min.js"></script>
    <script src="./js/vendor/scrolloverflow.min.js"></script>
    <script src="./js/vendor/all.js"></script>
    <script src="./js/particlejs/particles.min.js"></script>

    <!-- Form script -->
    <script src="./js/form_script.js"></script>

    <!-- Javascript main files -->
    <script src="./js/main.js"></script>
  </body>
</html>
