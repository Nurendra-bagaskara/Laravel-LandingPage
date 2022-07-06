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
    <title>Hal | Natural Stone</title>

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

        <!-- token jquery -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <!-- Web fonts and Web Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./fonts/opensans/stylesheet.css" />
    <link rel="stylesheet" href="./fonts/montserrat/stylesheet.css" />
    <link rel="stylesheet" href="./fonts/playfair/stylesheet.css" />
    <link rel="stylesheet" href="./fonts/bebas/stylesheet.css" />
    <link rel="stylesheet" href="./fonts/ostrich/stylesheet.css" />
    <link rel="stylesheet" href="./fonts/ionicons.min.css" />
    <link rel="stylesheet" href="./fonts/font-awesome.min.css" />

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
    <link rel="stylesheet" href="./css/style-default.css" />

    <!-- add alt layout here -->
    <link rel="stylesheet" href="./css/style-color2.css" />

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
        <p>loading</p>
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
          <img class="light-logo" src="img/logo2.jpg" alt="Logo" />
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
              <a href="//facebook.com/miradontsoa" class="btn-social">
                <i class="icon fa fa-facebook"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="//twitter/miradontsoa" class="btn-social">
                <i class="icon fa fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="//instagram.com/miradontsoa" class="btn-social">
                <i class="icon fa fa-instagram"></i>
              </a>
            </li>
          </ul>
          <!-- Begin of CTA Actions, & Icons menu (optional) -->
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
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                    <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  </svg>
                </span>
                <span class="txt">Home</span>
              </a>
            </li>
            <li class="nav-item" data-menuanchor="about">
              <a href="#about">
                <span class="icon">C</span>
                <span class="txt">About</span>
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
    <div class="page-cover">
      <!-- Cover Background -->
      <div class="cover-bg bg-color" data-bgcolor="rgba(29, 29, 29, 123.2)"></div>

      <!-- Transluscent mask as filter -->
      <div class="cover-bg-mask bg-color" data-bgcolor="rgba(29, 29, 29, 0.2)"></div>
    </div>
    <!--END OF page cover -->

    <!-- cover frame -->
    <!-- <div class="cover-frame">
      <div class="sides"></div>
    </div> -->

    <!-- BEGIN OF page main content -->
    <main class="page-main page-fullpage main-anim" id="mainpage">
      <!-- Begin of home section -->
      <div class="section section-twoside gallery-slider" data-section="home">
        <div class="slide">
          <div class="slide-wrapper">
            <div class="item-wrapper">
              <div class="illustr">
                <div class="img bg-img" data-image-src="img/bg-landingpage1.png"></div>
              </div>
              <div class="legend section-content">
                <div class="row">
                  <h3 class="display-decor display-title">LANDING PAGE NATURAL STONE</h3>
                  <div class="col-12 col-lg-6">
                    <div class="title-desc">
                      <p class="desc-decor">We will contact you very soon. Hopefully, we can work togehter and make your projects come true. See you.</p>
                    </div>
                    <!-- Action button -->
                    <div class="btns-action anim-5">
                      <a href="//twitter.com/miradontsoa" class="btn btn-social">
                        <i class="icon fa fa-phone"></i>
                      </a>
                      <a class="btn btn-arrow btn-primary" href="item.html#project_url">
                        <span class="icon">
                          <span class="arrow-right"></span>
                        </span>
                        <span class="text">Website</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End of home section -->

      <!-- Begin of About -->
      <div style="background-image: url(./img/bg-natural1.png); background-repeat: repeat-y; background-size: contain" class="section section-twoside services-slider fp-auto-height-responsive anim-slide" data-section="About">
        <div class="slide">
          <div class="slide-wrapper">
            <div class="item-wrapper anim">
              <div style="background-color: #303931" class="container">
                <img src="./img/Icon_Blue_3.png" alt="logo.png" />
                <!-- bagian combin -->
                <!-- <div class="illustr"> -->
                <div class="section-cover-tier left fit">
                  <!-- <img class="mb-5" src="./img/Icon_Blue_3.png" alt="icon_blue" /> -->
                  <h3 class="mt-4 mb-5 display-4 display-decor anim-1">Natural Stone</h3>
                  <div class="row justify-content-center">
                    <img class="mr-1 mt-5" width="141" height="141" src="img/img-natural4.png" alt="img-projects1" />
                    <img class="mr-1 mt-5" width="141" height="141" src="img/img-natural5.png" alt="img-projects2" />
                    <img class="mr-1 mt-5" width="141" height="141" src="img/img-natural6.png" alt="img-projects3" />
                  </div>
                </div>
                <!-- </div> -->
                <!-- Begin of section wrapper -->
                <div class="section-wrapper fullwidth fullheight padding-wrapper-topbottom">
                  <!-- content -->
                  <div class="section-content anim">
                    <div class="row justify-content-between">
                      <div class="col-12 col-lg-4"></div>

                      <div class="vertikal_center col-12 col-lg-6 text-left">
                        <div class="wrapper">
                          <!-- title and description -->
                          <div class="title-desc mt-5">
                            <p>ATC has been selling natural stones since 2018. We sell more than ten kinds of natural stones from Indonesia. We work with local stone miners to deliver quality that meets our clients' criteria.</p>
                            <button type="button" class="col-md-11 btn btn-secondary">CONTACT US</button>
                            <!-- <img width="650" height="300" src="./img/img-commodity4.png" alt="" /> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End of section wrapper -->
                <!-- combin end -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End of About -->

      <div class="row">
        <div class="col mb-5 mt-5">
          <h2 class="text-center display-4 display-title display-decor">Our Products</h2>
        </div>
      </div>

      <!-- Begin of about more 1 -->
      <div
        style="background-image: url(./img/bg-natural2.png); background-repeat: repeat-y; background-size: contain; background-position: right"
        class="section section-home fp-auto-height-responsive border-sm section-centered"
        data-section="about-more"
      >
        <!-- Begin of section wrapper -->
        <div class="section-wrapper fullwidth">
          <!-- content -->

          <div class="section-content anim">
            <div style="background-color: #303931" class="container">
              <!-- bagian combin -->
              <div class="illustr">
                <div class="section-cover-tier left fit bg-img" data-image-src="./img/img-natural1.png"></div>
              </div>
              <!-- Begin of section wrapper -->
              <div class="section-wrapper fullwidth fullheight padding-wrapper-topbottom">
                <!-- content -->
                <div class="section-content anim">
                  <div class="row justify-content-between">
                    <div class="col-12 col-lg-4"></div>

                    <div class="col-12 col-lg-6 text-left">
                      <div class="wrapper">
                        <!-- title and description -->
                        <div class="title-desc">
                          <h2 class="display-4 display-title display-decor anim-1">House Wall</h2>
                          <p class="anim-2">
                            Natural stone is made of 100% stone material without any addition or subtraction process and does not need any additional colouring to show its natural uniqueness. The advantages of using natural stone: durable,
                            resistant to fading and have a notable appearance
                          </p>
                          <hr class="border light" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of section wrapper -->
              <!-- combin end -->
            </div>
          </div>
        </div>
        <!-- End of section wrapper -->
      </div>
      <!-- End of about more 1 -->

      <!-- Begin of about more 2 -->
      <div class="section section-home fp-auto-height-responsive border-sm section-centered" data-section="about-more-one">
        <!-- Begin of section wrapper -->
        <div class="section-wrapper fullwidth">
          <!-- content -->
          <div class="section-content anim">
            <!-- <div class="shadow p-3 mb-5 bg-body rounded"> -->
            <!-- <div class="container"> -->

            <div style="background-color: #303931" class="container">
              <!-- bagian combin -->
              <div class="slide" id="information" data-anchor="information">
                <!-- Begin of slide section wrapper -->
                <div class="section-wrapper padding-wrapper-topbottom">
                  <div class="illustr">
                    <div class="section-cover-tier right fit bg-img" data-image-src="img/img-natural2.png"></div>
                  </div>
                  <!-- content -->
                  <div class="section-content anim">
                    <!-- main content -->
                    <div class="row justify-content-between">
                      <div class="col-12 col-md-12 col-lg-8 text-right center-v">
                        <div class="">
                          <!-- title and description -->
                          <div class="title-desc" align="right">
                            <div class="anim-2">
                              <h2 class="display-4 display-title display-decor">Swimming Pool</h2>
                              <p>
                                The use of natural stone in the manufacture of swimming pools is very appropriate because it has many advantages, namely: sturdy, not easy to leak, heat resistant, easy maintenance, not slippery, stabilizes
                                the temperature and is easily adaptable to the weather, is resistant to high pressure, there are zeolite compounds that can purify the pool.
                              </p>
                              <hr class="border-light">
                            </div>
                          </div>

                          <!-- Action button -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End of slide section wrapper -->
              </div>
              <!-- combin end -->
            </div>
          </div>
          <div class="section-aside small-relative aside-middle"></div>
        </div>
        <!-- End of section wrapper -->
      </div>
      <!-- End of about more 2 -->

      <!-- Begin of about more 3 -->
      <div class="section section-home fp-auto-height-responsive border-sm section-centered" data-section="about-more-two">
        <!-- Begin of section wrapper -->
        <div class="section-wrapper fullwidth">
          <!-- content -->
          <div class="section-content anim">
            <div style="background-color: #303931" class="container">
              <!-- bagian combin -->
              <div class="section-cover-tier left fit bg-img" data-image-src="./img/img-natural3.png"></div>
              <!-- Begin of section wrapper -->
              <div class="section-wrapper fullwidth fullheight padding-wrapper-topbottom">
                <!-- content -->
                <div class="section-content anim">
                  <div class="row justify-content-between">
                    <div class="col-12 col-lg-4"></div>

                    <div class="col-12 col-lg-6 text-left">
                      <div class="wrapper">
                        <!-- title and description -->
                        <div class="title-desc">
                          <h2 class="display-4 display-title display-decor anim-1">Flooring</h2>
                          <p class="anim-2">
                            Natural stone is also very suitable for the use of floors. In its use, it has the following benefits: resistant to weather and mildew, resistant to high temperatures, and not easily damaged, which makes
                            maintenance more accessible, create an elegant impression and higher property prices.
                          </p>
                          <hr class="border light" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of section wrapper -->
              <!-- combin end -->
            </div>
          </div>
        </div>
        <!-- End of section wrapper -->
      </div>
      <!-- End of about more 3 -->

      <!-- Begin of All Size-->
      <div class="section section-description fp-auto-height-responsive" data-section="size">
        <!-- <div class="section-cover-full fit bg-color" data-bgcolor="rgba(255,255,255,0.1)"></div> -->

        <!-- Begin of section wrapper -->
        <div class="section-wrapper fullwidth fullheight center-lg-v with-margin padding-wrapper-topbottom">
          <!-- content -->
          <div class="section-content fullwidth anim">
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col">
                    <div class="card mt-4" style="background-color: #303931">
                    <i class="bi bi-bookmark-fill" style="font-size: 3rem; position: absolute"></i>
                      <div class="card-body">
                        <h5 class="display-4 display-title display-decor text-center">10x10x1</h5>
                      </div>
                    </div>
                    <div class="card mt-4" style="background-color: #303931">
                    <i class="bi bi-bookmark-fill" style="font-size: 3rem; position: absolute"></i>
                      <div class="card-body">
                        <h5 class="display-4 display-title display-decor text-center">20x20x1</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card mt-4" style="background-color: #303931">
                    <i class="bi bi-bookmark-fill" style="font-size: 3rem; position: absolute"></i>
                      <div class="card-body">
                        <h5 class="display-4 display-title display-decor text-center">10x20x1</h5>
                      </div>
                    </div>
                    <div class="card mt-4 mb-3" style="background-color: #303931">
                    <i class="bi bi-bookmark-fill" style="font-size: 3rem; position: absolute"></i>
                      <div class="card-body">
                        <h5 class="display-4 display-title display-decor text-center">20x30x1</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <h4 class="display-title">*All Size in Cm</h4>
              </div>
            </div>
          </div>
          <!-- End of section wrapper -->
        </div>
      </div>
      <!-- End of All Size-->

      <!-- Begin of Materials -->
      <div style="background-image: url(./img/bg-natural4.png); background-repeat: repeat-y; background-size: contain" class="section section-home fp-auto-height-responsive section-centered" data-section="materials">
        <!-- Begin of section wrapper -->
        <div class="section-wrapper fullwidth with-margin">
          <!-- content -->
          <div class="section-content anim">
            <h1 class="display-6 display-title display-decor">Materials</h1>
            <!-- <div class="row justify-content-center"></div> -->
            <!-- <div class="num-grid"> -->
            <div class="row">
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials.png" alt="" />
                  <h5 class="text-muted center">Cream sand stone</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials1.png" alt="" />
                  <h5 class="text-muted center">Andesit Flame</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials2.png" alt="" />
                  <h5 class="text-muted center">Black Andesit Flame</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials3.png" alt="" />
                  <h5 class="text-muted center">Black Andesit</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials4.png" alt="" />
                  <h5 class="text-muted center">Ocean Blue</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials5.png" alt="" />
                  <h5 class="text-muted center">Green Stone</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials6.png" alt="" />
                  <h5 class="text-muted center">Green Sukabumi</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials7.png" alt="" />
                  <h5 class="text-muted center">Lava Stone</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials8.png" alt="" />
                  <h5 class="text-muted center">Bali Green Stone</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials9.png" alt="" />
                  <h5 class="text-muted center">Yellow Stone</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials10.png" alt="" />
                  <h5 class="text-muted center">White Stone</h5>
                </div>
              </div>
              <div class="col-6 col-lg-3 item">
                <div class="num-wrapper">
                  <img class="mt-5" width="135" height="135" src="./img/items/img-materials11.png" alt="" />
                  <h5 class="text-muted center">Tiger Stone</h5>
                </div>
              </div>
            </div>
            <!-- </div> -->
          </div>
        </div>
        <!-- End of section wrapper -->
      </div>
      <!-- End of Materials -->

      <!-- Begin contact -->
      <div style="background-image: url(./img/bg-natural3.png); background-repeat: repeat-y; background-size: contain; background-position: right" class="section section-centered" data-section="contact">
        <!-- Begin of section wrapper -->
        <div class="section-content col-md-6">
          <!-- content -->
          <div class="section-content anim"></div>
          <div class="container">
            <!--Card-->
            <div style="background-color: #303931" class="card">
              <!--Card content-->
              <div class="card-body">
                <!--Section heading-->
                <h2 class="text-end display-title display-decor text-center">Contact us</h2>
                <!--Section description-->
                <!-- <form action="/contact" methods="post"> -->
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                <input name="nama" style="background-color: #000000" type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="nama" placeholder="Name" />
                                @error ('name')
                                <div class="invalid-feedback">
                                    Please choose a Name
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                                <input name="email" style="background-color: #000000" type="text" class="form-control" id="email" placeholder="name@example.com" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <textarea name="Message" style="background-color: #000000" type="text" class="form-control" id="Message" rows="3" placeholder="Message"></textarea>
                    </div>
          
                  </form>
                  <button class="col-md-12 btn btn-secondary" id="save" type="submit"> Contact Us </button>
                    <!-- <div class="mb-4 text-center">
                        <button type="submit" class="col-md-12 btn btn-secondary" >CONTACT US</button>
                    </div> -->
                <!-- </form> -->
                
              </div>
            </div>
            <!--/.Card-->
            <center>
              <a href="//linkedin.com/miradontsoa" class="btn-social mr-2 mt-5">
                <i class="bi bi-linkedin"></i>
              </a>
              <a href="//facebook.com/miradontsoa" class="btn-social mr-2 mt-5">
                <i class="icon fa fa-facebook"></i>
              </a>
              <a href="//youtube.com/miradontsoa" class="btn-social mr-2 mt-5">
                <i class="bi bi-youtube"></i>
              </a>
            </center>
          </div>
          <!-- </div> -->
          <div class="section-aside small-relative aside-middle"></div>

          <!-- Arrows scroll down/up -->
        
        </div>
        <!-- End of section wrapper -->
      </div>
      <!-- End contact -->
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

        <!-- Sweet Alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>

    <script>
      $('#save').click(function(){
        var nama =$("#nama").val();
        var email =$("#email").val();
        var Message =$("#Message").val();
        var token=$("#input[name=_token]").val();
        $.ajax({
          type:"post",
          url:"{{url('store')}}",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
            nama: nama,
            email:email,
            Message:Message,
            _token:token
          },

          success:function(data, headers){
            // alert('Data Berhasil Disimpan')
            Swal.fire(
              'Good job!',
              'You clicked the button!',
              'success',
              )
              // location.reload();
              $("#nama").val('');
              $("#email").val('');
              $("#Message").val('');
            // 
          }
        })
      });
    </script>
  </body>
</html>
