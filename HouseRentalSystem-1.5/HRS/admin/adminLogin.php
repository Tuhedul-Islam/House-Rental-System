<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Home Page | Space - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Fontawesome icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="https://htmlstream.com/preview/space-v1.1/favicon.ico">

  <!-- Google Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
  

  <!-- CSS Implementing Plugins -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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
  <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
    <div class="container">
      <span class="u-skiplink-text">Skip to main content</span>
    </div>
  </a>
  <!-- End Skippy -->

  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--modern u-header--bordered u-header--sticky-top-lg">
    <div class="u-header__section">
      <div id="logoAndNav" class="container-fluid">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar">
          <!-- Logo -->
          <div class="u-header__navbar-brand-wrapper">
            <a class="navbar-brand u-header__navbar-brand" href="index.html" aria-label="Space">
              <img class="u-header__navbar-brand-default" src="https://htmlstream.com/preview/space-v1.1/assets/svg/logos/logo.svg" alt="Logo">
              <img class="u-header__navbar-brand-mobile" src="https://htmlstream.com/preview/space-v1.1/assets/svg/logos/logo-short.svg" alt="Logo">
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
                <a class="nav-link u-header__nav-link" href="index.html">
                   <span style="font-size:15px;" class="fas fa-home u-header__nav-link-icon"></span>
				   Home
                </a>
              </li>
              <!-- End Home -->

              <!-- Works -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="worksMegaMenu" class="nav-link u-header__nav-link" href="#ex1" rel="modal:open"
				   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="worksSubMenu">
				   HouseOwner
                </a>
              </li>
              <!-- End Works -->
			  
				<!-- Modal -->
				<div id="ex1" class="modal">
				  <p>Please Signin & Then Try.</p>
				  <a href="#" rel="modal:close">Close</a>
				</div>
				<!-- End modal -->
				

              <!-- Blog -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="blogMegaMenu" class="nav-link u-header__nav-link" href="Blog_grid.html"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="blogSubMenu">
				   Blog
                </a>
              </li>
              <!-- End Blog -->

              <!-- Shop -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="shopMegaMenu" class="nav-link u-header__nav-link" href="#ex1" rel="modal:open"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="shopSubMenu">
				   HouseRepresentative
                </a>
              </li>
              <!-- End Shop -->

              <!-- Signin Button -->
              <li class="nav-item u-header__nav-item-btn">
                <a class="btn btn-sm btn-primary" href="#" role="button"
                   data-modal-target=""
                   data-overlay-color="#151b26">
                  <span class="fa fa-user-circle mr-1"></span>
                  SignUp
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
	<!-- Form Start -->
   <center>
	<div class="container">
    <form  class="well form-horizontal" action="" method="post"  id="contact_form">
		<fieldset style="margin: 100px 45px;
		border: 2px solid #fbf9ac;
		background-color: #fbf9f9;">
		<!-- Form Name -->
		<legend>
			<h2>
			<span style="color: #f4fcf4;background-color: #21c87a;padding: 10px;">
			SignUp
			</span>
			</h2>
		</legend>

		<!-- radio checks -->
		<div class="form-group">
			<label class="col-md-4 control-label"><b>Signup As</b> <span style="color:red">*</span></label>
			<div class="col-md-4">
				<div class="radio">
					<label>
						<input type="radio" name="hosting" value="yes" required /> House Owner
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="hosting" value="no" required /> House Representative
					</label>
				</div>
			</div>
		</div>
		
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label">First Name <span style="color:red">*</span></label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="first_name" placeholder="First Name" class="form-control"  type="text" required>
			</div>
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label">Password <span style="color:red">*</span></label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="first_name" placeholder="Password" class="form-control"  type="text" required>
			</div>
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" >NID <span style="color:red">*</span></label> 
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input name="last_name" placeholder="NID" class="form-control"  type="text" required>
			</div>
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label">E-Mail <span style="color:red">*</span></label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
			</div>
		  </div>
		</div>


		<!-- Text input-->
			   
		<div class="form-group">
		  <label class="col-md-4 control-label">Phone <span style="color:red">*</span></label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		  <input name="phone" placeholder="(+008801847601740)" class="form-control" type="text" required>
			</div>
		  </div>
		</div>

		<!-- Text input-->
			  
		<div class="form-group">
		  <label class="col-md-4 control-label">Address <span style="color:red">*</span></label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
				<input name="address" placeholder="Address" class="form-control" type="text" required>
			</div>
		  </div>
		</div>

		<!-- Text input-->
		 
		<div class="form-group">
		  <label class="col-md-4 control-label">City <span style="color:red">*</span></label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
			<input name="city" placeholder="city" class="form-control"  type="text" required>
			</div>
		  </div>
		</div>

		<!-- Select Basic -->
		   
		<div class="form-group"> 
		  <label class="col-md-4 control-label">Occupation <span style="color:red">*</span></label>
			<div class="col-md-4 selectContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
			<select name="state" class="form-control selectpicker" required >
			  <option> BussinessMan</option>
			  <option> Student</option>
			  <option> Employee/Other</option>
			</select>
		  </div>
		</div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Postal Code <span style="color:red">*</span></label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		  <input name="zip" placeholder="Postal Code" class="form-control"  type="text" required>
			</div>
		</div>
		</div>
		
		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4">
			<button type="submit" class="btn btn-success" >Send <span class="glyphicon glyphicon-send"></span></button>
		  </div>
		</div>

		</fieldset>
		</form>
	</div>
	</center>
	
	
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
          <a class="d-inline-block mb-5" href="index.html" aria-label="Space">
            <img src="https://htmlstream.com/preview/space-v1.1/assets/svg/logos/logo-short-white.svg" alt="Logo" style="width: 40px; max-width: 100%;">
          </a>
          <!-- End Logo -->
          <p class="small text-muted">All rights reserved. &copy; Space. 2018 Htmlstream.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->
  
  
  <!-- ==========Start Plugin Link Section ========== -->
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