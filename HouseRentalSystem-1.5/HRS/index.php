<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Home Page</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Fontawesome icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="">

  <!-- Google Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
  

  <!-- CSS Implementing Plugins -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/modalload.js"></script>
  <link rel="stylesheet" href="assets/js/modalload1.js" />
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="assets/vendor/custombox/dist/custombox.min.css">
  <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="assets/vendor/cubeportfolio/css/cubeportfolio.min.css">

  <!-- CSS Space Template -->
  <link rel="stylesheet" href="assets/css/theme.css">
</head>

<body>
  <!-- Skippy -->
  <!-- End Skippy -->

  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--modern u-header--bordered u-header--sticky-top-lg">
    <div class="u-header__section">
      <div id="logoAndNav" class="container-fluid">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar">
          <!-- Logo -->
          <div class="u-header__navbar-brand-wrapper">
            <a class="navbar-brand u-header__navbar-brand" href="index.php" aria-label="Space">
              <img class="u-header__navbar-brand-default" src="assets/img/logo.png" alt="Logo">
              <img class="u-header__navbar-brand-mobile" src="assets/img/logo.png" alt="ShortLogo">
            </a>
          </div>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="d-none d-sm-inline-block">Menu</span>
            <span id="hamburgerTrigger" class="u-hamburger__box ml-3">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse py-0">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- Home -->
              <li class="nav-item u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a class="nav-link u-header__nav-link" href="#">
                   <span style="font-size:15px;" class="fas fa-home u-header__nav-link-icon"></span>
				   Home
                </a>
              </li>
              <!-- End Home -->
			  
              <!-- Blog -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="blogMegaMenu" class="nav-link u-header__nav-link" href="Blog_grid.php"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="blogSubMenu">
				   Blog
                </a>
              </li>
              <!-- End Blog -->

              <!-- Search house -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="shopMegaMenu" class="nav-link u-header__nav-link" href="searchHouse.php"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="shopSubMenu">
				   SearchHouse
                </a>
              </li>
              <!-- End Search house -->

              <!-- Signin Button -->
              <li class="nav-item u-header__nav-item-btn">
                <a class="btn btn-sm btn-primary" href="#signupModal" role="button"
                   data-modal-target="#signupModal"
                   data-overlay-color="#151b26">
                  <span class="fa fa-user-circle mr-1"></span>
                  Signin
                </a>
              </li>
              <!-- End Button -->

              <!-- Search -->
              <li class="nav-item u-header__navbar-icon u-header__navbar-v-divider">
                <a class="btn btn-xs btn-icon btn-text-dark u-header__search-toggle" href="javascript:;" role="button"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-controls="search"
                   data-unfold-target="#search"
                   data-unfold-hide-on-scroll="false"
                   data-unfold-type="css-animation"
                   data-unfold-duration="300"
                   data-unfold-delay="300"
                   data-unfold-animation-in="slideInUp">
                  <span class="fa fa-search btn-icon__inner"></span>
                </a>

                <!-- Input -->
                <form id="search" class="js-focus-state input-group form u-header__search u-unfold--css-animation u-unfold--hidden">
                  <input class="form-control form__input" type="search" placeholder="Search Space">
                  <div class="input-group-addon u-header__search-addon p-0">
                    <button class="btn btn-primary u-header__search-addon-btn" type="button">
                      <span class="fa fa-search"></span>
                    </button>
                  </div>
                </form>
                <!-- End Input -->
              </li>
              <!-- End Search -->
            </ul>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="position-relative">
      <!-- Hero Carousel - Main -->
      <div id="heroMain" class="js-slick-carousel u-slick"
           data-infinite="true"
           data-autoplay="true"
           data-adaptive-height="true"
           data-speed="5000"
           data-fade="true"
           data-nav-for="#heroNav">
        <!-- Slide #1 -->
        <div class="js-slide">
          <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
            <!-- Apply your Parallax background image here -->
            <div class="divimage dzsparallaxer--target gradient-overlay-half-white-v1 bg-img-hero" style="height: 120%; background-image: url(assets/img/sliderimg1.jpg);"></div>

            <!-- Content -->
            <div class="d-lg-flex align-items-lg-center">
              <div class="container position-relative z-index-2 space-2-top space-3-bottom space-5--md">
                <div class="w-50 w-md-40">
                  <div class="mb-5">
                    <h1 class="display-4">Grow faster</h1>
                    <p class="lead">Grow faster and succeed with Space.</p>
                  </div>
                </div>
                <div class="w-50">
				</div>
              </div>
            </div>
            <!-- End Content -->
          </div>
        </div>
        <!-- End Slide #1 -->

        <!-- Slide #2 -->
        <div class="js-slide">
          <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
            <!-- Apply your Parallax background image here -->
            <div class="divimage dzsparallaxer--target gradient-overlay-half-white-v1 bg-img-hero" style="height: 120%; background-image: url(assets/img/slider.jpg);"></div>

            <!-- Content -->
            <div class="d-lg-flex align-items-lg-center">
              <div class="container position-relative z-index-2 space-2-top space-3-bottom space-5--md">
                <div class="w-50 w-md-40">
                  <div class="mb-5">
                    <h2 class="display-4">Make it beautiful</h2>
                    <p class="lead">Make it beautiful. Make your own business.</p>
                  </div>
                </div>
                <div class="w-50"></div>
              </div>
            </div>
            <!-- End Content -->
          </div>
        </div>
        <!-- End Slide #2 -->

        <!-- Slide #3 -->
        <div class="js-slide">
          <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
            <!-- Apply your Parallax background image here -->
            <div class="divimage dzsparallaxer--target gradient-overlay-half-white-v1 bg-img-hero" style="height: 120%; background-image: url(assets/img/sliderimg3.jpg);"></div>

            <!-- Content -->
            <div class="d-lg-flex align-items-lg-center">
              <div class="container position-relative z-index-2 space-2-top space-3-bottom space-5--md">
                <div class="w-50 w-md-40">
                  <div class="mb-5">
                    <h2 class="display-4">Sell business</h2>
                    <p class="lead">Sell your business with Space.</p>
                  </div>
                </div>
                <div class="w-50"></div>
              </div>
            </div>
            <!-- End Content -->
          </div>
        </div>
        <!-- End Slide #3 -->
      </div>
      <!-- Hero Carousel - Main -->

      <!-- Hero Carousel - Nav -->
      <div class="container position-absolute-bottom-0">
        <div id="heroNav" class="js-slick-carousel u-slick u-slick--cursor-pointer u-slick--pagination-modern u-slick--transform-off-lg mb-3"
             data-infinite="true"
             data-autoplay="true"
             data-speed="5000"
             data-center-mode="true"
             data-slides-show="3"
             data-is-thumbs="true"
             data-focus-on-select="true"
             data-nav-for="#heroMain"
             data-responsive='[{
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 554,
               "settings": {
                 "slidesToShow": 1
               }
             }]'>
          <!-- Slide #1 -->
          <div class="js-slide u-slick--pagination-modern__item">
            <div class="media align-items-center bg-white border rounded">
              <div class="media-body px-3">
                <span class="u-slick--pagination-modern__item-text">Grow faster</span>
              </div>
              <img class="u-slick--pagination-modern__item-img rounded-right" src="assets/img/img1.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Slide #1 -->

          <!-- Slide #2 -->
          <div class="js-slide u-slick--pagination-modern__item">
            <div class="media align-items-center bg-white border rounded">
              <div class="media-body px-3">
                <span class="u-slick--pagination-modern__item-text">Make it beautiful</span>
              </div>
              <img class="u-slick--pagination-modern__item-img rounded-right" src="assets/img/slidernav.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Slide #2 -->

          <!-- Slide #3 -->
          <div class="js-slide u-slick--pagination-modern__item">
            <div class="media align-items-center bg-white border rounded">
              <div class="media-body px-3">
                <span class="u-slick--pagination-modern__item-text">Sell business</span>
              </div>
              <img class="u-slick--pagination-modern__item-img rounded-right" src="assets/img/img3.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Slide #3 -->
        </div>
      </div>
      <!-- Hero Carousel - Nav -->
    </div>
    <!-- End Hero Section -->
	

    <!-- Icon Blocks Section -->
    <div class="container space-2 space-3--lg">
      <div class="row">
        <div class="col-md-4 mb-7 mb-md-0">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <img class="max-width-14 mb-2" src="https://htmlstream.com/preview/space-v1.1/assets/svg/components/trophy-purple-icon.svg" alt="Image Description">
            <h3 class="h4">Professional Design</h3>
            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-md-4 mb-7 mb-md-0">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <img class="max-width-14 mb-2" src="https://htmlstream.com/preview/space-v1.1/assets/svg/components/idea-primary-icon.svg" alt="Image Description">
            <h3 class="h4">Super-Light</h3>
            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-md-4">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <img class="max-width-14 mb-2" src="https://htmlstream.com/preview/space-v1.1/assets/svg/components/rocket-red-icon.svg" alt="Image Description">
            <h3 class="h4">Unlimited Power</h3>
            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
          </div>
          <!-- End Icon Blocks -->
        </div>
      </div>
    </div>
    <!-- End Icon Blocks Section -->

    <!-- Divider -->
    <div class="w-50 w-lg-35 mx-auto">
      <hr class="my-0">
    </div>
    <!-- End Divider -->

    <!-- Video Section -->
    <div class="container space-2 space-3--lg">
      <!-- Title -->
      <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
        <span class="u-label u-label--sm u-label--purple mb-3">What is The Rental System?</span>
        <h2 class="h3">Build for everyone and provides enjoyable usage</h2>
        <p>Experience a level of our team in both service &amp; hospitality.</p>
      </div>
      <!-- End Title -->

      <div class="row justify-content-sm-center text-center">
        <div class="col-lg-9 col-xl-8">
          <!-- Video Block -->
          <div id="youTubeVideoPlayer" class="u-video-player mb-5">
            <!-- Cover Image -->
            <img class="img-fluid u-video-player__preview" src="assets/img/img5.jpg" alt="Image">
            <!-- End Cover Image -->

            <!-- Play Button -->
            <a class="js-inline-video-player u-video-player__btn u-video-player__centered" href="javascript:;"
               data-parent="youTubeVideoPlayer"
               data-target="youTubeVideoIframe"
               data-classes="u-video-player__played">
              <span class="u-video-player__icon">
                <span class="fa fa-play u-video-player__icon-inner"></span>
              </span>
            </a>
            <!-- End Play Button -->

            <!-- Video Iframe -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe id="youTubeVideoIframe" class="embed-responsive-item" src="https://www.youtube.com/watch?v=w46bWxS9IjY"></iframe>
            </div>
            <!-- End Video Iframe -->
          </div>
          <!-- End Video Block -->

          <p>Have a question? <a class="font-weight-medium" href="mailto:support@htmlstream.com">Contact Us.</a></p>
        </div>
      </div>
    </div>
    <!-- End Video Section -->

    <!-- About Section -->
    <div class="bg-gray-100">
      <div class="container space-2 space-3--lg">
        <div class="row justify-content-lg-between align-items-lg-center">
          <div class="col-lg-5 mb-9 mb-lg-0">
            <!-- Title -->
            <div class="mb-5">
              <span class="u-label u-label--sm u-label--purple mb-3">About Us</span>
              <h2 class="h3">We always welcome keen to learn folks to our team</h2>
              <p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
            </div>
            <!-- End Title -->

            <a class="btn btn-sm btn-primary" href="#">Learn More <span class="fa fa-angle-right ml-2"></span></a>
          </div>

          <div class="col-lg-6">
            <!-- Cubeportfolio -->
            <div class="cbp"
                 data-layout="mosaic"
                 data-animation="quicksand"
                 data-x-gap="15"
                 data-y-gap="15"
                 data-load-more-selector="#cubeLoadMore"
                 data-load-more-action="auto"
                 data-load-items-amount="4"
                 data-media-queries='[
                {"width": 1500, "cols": 4},
                {"width": 1100, "cols": 4},
                {"width": 800, "cols": 3},
                {"width": 480, "cols": 2},
                {"width": 400, "cols": 2}
            ]'>
              <!-- Item -->
              <div class="cbp-item">
                <div class="cbp-caption">
                  <img src="assets/img/img1.jpg" alt="Image Description">
                </div>
              </div>
              <!-- End Item -->

              <!-- Item -->
              <div class="cbp-item">
                <div class="cbp-caption">
                  <img src="assets/img/img2.jpg" alt="Image Description">
                </div>
              </div>
              <!-- End Item -->

              <!-- Item -->
              <div class="cbp-item">
                <div class="cbp-caption">
                  <img src="assets/img/img3.jpg" alt="Image Description">
                </div>
              </div>
              <!-- End Item -->

              <!-- Item -->
              <div class="cbp-item">
                <div class="cbp-caption">
                  <img src="assets/img/img4.jpg" alt="Image Description">
                </div>
              </div>
              <!-- End Item -->
            </div>
            <!-- End Cubeportfolio -->
          </div>
        </div>
      </div>
    </div>
    <!-- End About Section -->

    <!-- Pricing Section -->
    <div class="container space-2 space-3-top--lg">
      <!-- Title -->
      <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
        <span class="u-label u-label--sm u-label--purple mb-3">Pricing plans</span>
        <h2 class="h3">No additional costs. Pay for what you use.</h2>
        <p>All our plans include a 14-day free trial. No problem confirmation, keep safe yourself.</p>
      </div>
      <!-- End Title -->
      <div class="text-center">
        <p class="small"><span class="text-primary">*</span> We also offer a Free Plan for 1 user with basic features. <a class="font-weight-medium" href="#">Get Started Free.</a></p>
      </div>
    </div>
    <!-- End Pricing Section -->

    <!-- Divider -->
    <div class="w-50 w-lg-35 mx-auto">
      <hr class="my-0">
    </div>
    <!-- End Divider -->

    <!-- FAQ Section -->
    <div class="container space-2">
      <!-- Title -->
      <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
        <h3 class="h4">Frequently Asked Questions</h3>
      </div>
      <!-- End Title -->

      <!-- FAQ -->
      <div class="row">
        <div class="col-md-6 mb-5">
          <div class="pr-md-4">
            <h4 class="h6">Can I cancel at anytime?</h4>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
          </div>
        </div>

        <div class="col-md-6 mb-5">
          <div class="pl-md-4">
            <h4 class="h6">My team has credits. How do we use them?</h4>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
          </div>
        </div>

        <div class="w-100"></div>

        <div class="col-md-6 mb-5">
          <div class="pr-md-4">
            <h4 class="h6">How does it's pricing work?</h4>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
          </div>
        </div>

        <div class="col-md-6 mb-5">
          <div class="pl-md-4">
            <h4 class="h6">How secure is it?</h4>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
          </div>
        </div>

        <div class="w-100"></div>

        <div class="col-md-6 mb-5 mb-md-0">
          <div class="pr-md-4">
            <h4 class="h6">Do you offer discounts?</h4>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="pl-md-4">
            <h4 class="h6">What is your refund policy?</h4>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
          </div>
        </div>
      </div>
      <!-- End FAQ -->
    </div>
    <!-- End FAQ Section -->

    <!-- Divider -->
    <div class="w-50 w-lg-35 mx-auto">
      <hr class="my-0">
    </div>
    <!-- End Divider -->



    <!-- Blog Grid Section -->
    <div class="bg-gray-100">
      <div class="container space-2 space-3--lg">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
          <span class="u-label u-label--sm u-label--purple mb-3">News</span>
          <h2 class="h3">Read our news &amp; blogs</h2>
          <p>Our duty towards you is to share our experience we're reaching in our work path with you.</p>
        </div>
        <!-- End Title -->

        <!-- News Blog -->
        <div class="card-deck d-block d-lg-flex">
          <!-- Blog Grid -->
          <article class="card mb-4 mb-lg-0">
            <div class="card-body p-5">
              <small class="d-block text-muted mb-2">May 15, 2018</small>
              <h3 class="h5">
                <a href="#">InVision design forward fund</a>
              </h3>
              <p class="mb-0">Clark Valberg is the founder and CEO of InVision.</p>
            </div>
            <div class="card-footer py-4 px-5">
              <div class="media">
                <img class="u-sm-avatar rounded-circle mr-3" src="assets/img/img1.jpg" alt="Image Description">
                <div class="media-body">
                  <h4 class="d-inline-block mb-0">
                    <a class="d-block font-size-13" href="#">Andrea Gard</a>
                  </h4>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Grid -->

          <!-- Blog Grid -->
          <article class="card mb-4 mb-lg-0">
            <div class="card-body p-5">
              <small class="d-block text-muted mb-2">May 22, 2018</small>
              <h3 class="h5">
                <a href="#">Announcing a plan for small teams</a>
              </h3>
              <p class="mb-0">We've always believed that by providing a space</p>
            </div>
            <div class="card-footer py-4 px-5">
              <div class="media">
                <img class="u-sm-avatar rounded-circle mr-3" src="assets/img/img3.jpg" alt="Image Description">
                <div class="media-body">
                  <h4 class="d-inline-block mb-0">
                    <a class="d-block font-size-13" href="#">James Austin</a>
                  </h4>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Grid -->

          <!-- Blog Grid -->
          <article class="card mb-4 mb-lg-0">
            <div class="card-body p-5">
              <small class="d-block text-muted mb-2">May 30, 2018</small>
              <h3 class="h5">
                <a href="#">Design principles</a>
              </h3>
              <p class="mb-0">The biggest collections of design principles on the internet</p>
            </div>
            <div class="card-footer py-4 px-5">
              <div class="media">
                <img class="u-sm-avatar rounded-circle mr-3" src="assets/img/img2.jpg" alt="Image Description">
                <div class="media-body">
                  <h4 class="d-inline-block mb-0">
                    <a class="d-block font-size-13" href="#">Charlotte Moore</a>
                  </h4>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Grid -->
        </div>
        <!-- End News Blog -->
      </div>
    </div>
    <!-- End Blog Grid Section -->

  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container space-2">
      <div class="row justify-content-md-between">
        <div class="col-6 col-md-3 col-lg-2 order-lg-3 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">About</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/pages/about-agency.html">About Agency</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/pages/about-start-up.html">About Start-Up</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/pages/services-agency.html">Services Agency</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/pages/services-start-up.html">Services Start-Up</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-4 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Company</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/pages/contacts-agency.html">Contact Us</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/pages/help.html">Help</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/pages/careers.html">Careers</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/pages/terms.html">Terms &amp; Conditions</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/pages/privacy.html">Privacy &amp; Policy</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-5 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Shop</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/shop/classic.html">Classic</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/shop/single-product.html">Single Product</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.1/html/shop/checkout.html">Checkout</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-6 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Social</h3>

          <!-- List -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-facebook-f min-width-3 text-center mr-2"></span>
              Facebook
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-twitter min-width-3 text-center mr-2"></span>
              Twitter
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-dribbble min-width-3 text-center mr-2"></span>
              Dribbble
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-github min-width-3 text-center mr-2"></span>
              GitHub
            </a>
          </div>
          <!-- End List -->
        </div>

        <div class="col-lg-4 order-lg-1 d-flex align-items-start flex-column">
          <!-- Logo -->
          <a class="d-inline-block mb-5" href="index.php" aria-label="Space">
            <img src="https://htmlstream.com/preview/space-v1.1/assets/svg/logos/logo-short-white.svg" alt="Logo" style="width: 40px; max-width: 100%;">
          </a>
          <!-- End Logo -->
          <p class="small text-muted">All rights reserved. &copy; Space. 2018 Htmlstream.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Panel Sidebar Navigation -->
  <!-- End Panel Sidebar Navigation -->

  <!-- Signup Modal Window -->
  <div id="signupModal" class="js-signup-modal u-modal-window" style="width: 500px;">
    <!-- Modal Close Button -->
    <button class="btn btn-sm btn-icon btn-text-secondary u-modal-window__close" type="button" onclick="Custombox.modal.close();">
      <span class="fas fa-times"></span>
    </button>
    <!-- End Modal Close Button -->

    <!-- Content -->
    <div class="p-5">
      <form class="js-validate" action="login.php" method="POST">
        <!-- Signin -->
        <div id="signin" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Please sign in</h2>
            <p>Signin to manage your account.</p>
          </header>
          <!-- End Title -->

         <!-- radio checks -->
		<div class="form-group">
			<label class="col-md-4 control-label"><b>Signin As</b> <span style="color:red">*</span></label>
			<div class="col-md-4">
				<div class="radio">
					<label>
						<input type="radio" name="deg" value="owner" required /> Owner
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="deg" value="representative" required /> Representativ
					</label>
				</div>
			</div>
		</div>
		
		  
		  <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-user form__text-inner"></span>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required
                     placeholder="Email"
                     aria-label="Email"
                     data-msg="Please enter a valid email address."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-lock form__text-inner"></span>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="pass" required
                     placeholder="Password"
                     aria-label="Password"
                     data-msg="Your password is invalid. Please try again."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="mb-3">
            <input type="submit" value="Signin" name="submit" class="btn btn-block btn-primary"></input>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Do not have an account?
              <a href="regForm.php">Signup</a>
            </p>
          </div>

          <!-- Divider -->
          <div class="text-center u-divider-wrapper my-3">
            <span class="u-divider u-divider--xs "></span>
          </div>
          <!-- End Divider -->
        </div>
        <!-- End Signin -->
      </form>
    </div>
    <!-- End Content -->
  </div>
  <!-- End Signup Modal Window -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="javascript:;"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/vendor/custombox/dist/custombox.min.js"></script>
  <script src="assets/vendor/custombox/dist/custombox.legacy.min.js"></script>
  <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="assets/vendor/player.js/dist/player.min.js"></script>

  <!-- JS Space -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/components/hs.header.js"></script>
  <script src="assets/js/components/hs.unfold.js"></script>
  <script src="assets/js/components/hs.validation.js"></script>
  <script src="assets/js/helpers/hs.focus-state.js"></script>
  <script src="assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="assets/js/components/hs.modal-window.js"></script>
  <script src="assets/js/components/hs.show-animation.js"></script>
  <script src="assets/js/components/hs.slick-carousel.js"></script>
  <script src="assets/js/components/hs.cubeportfolio.js"></script>
  <script src="assets/js/components/hs.video-player.js"></script>
  <script src="assets/js/components/hs.go-to.js"></script>

  <!-- JS Plugins Init. -->
  
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          if (!$('body').hasClass('IE11')) {
            $(this).find('input[type="search"]').focus();
          }
        }
      });

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');

      // initialization of video player
      $.HSCore.components.HSVideoPlayer.init('.js-inline-video-player');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>

</html>