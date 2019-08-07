<?php
	
include"../connection.php";
session_start();

$idedit=$_GET["id"];
$_SESSION['ID']=$idedit;
//echo $idedit;

$name = $_SESSION["user"];
	if(empty($name)){
		$name="nameEmpty";
	}
	

	$sqll=mysqli_query($conn,"Select * from addhouse where id='$idedit'");
	$row=mysqli_fetch_assoc($sqll);
	
?>

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
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
  

  <!-- CSS Implementing Plugins -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="../assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="../assets/vendor/custombox/dist/custombox.min.css">
  <link rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../assets/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="../assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="../assets/vendor/cubeportfolio/css/cubeportfolio.min.css">

  <!-- CSS Space Template -->
  <link rel="stylesheet" href="../assets/css/theme.css">
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
            <a class="navbar-brand u-header__navbar-brand" href="index.php" aria-label="Space">
              <img class="u-header__navbar-brand-default" src="../assets/img/logo.png" alt="Logo">
              <img class="u-header__navbar-brand-mobile" src="../assets/img/logo.png" alt="ShortLogo">
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
                <a class="nav-link u-header__nav-link" href="houseOwner.php">
                   <span style="font-size:15px;" class="fas fa-home u-header__nav-link-icon"></span>
				   Home
                </a>
              </li>
              <!-- End Home -->

              <!-- House -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="shopMegaMenu" class="nav-link u-header__nav-link" href="#"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="shopSubMenu">
                   HouseDetails
                  <span class="fa fa-angle-down u-header__nav-link-icon"></span>
                </a>

                <!-- Shop - Submenu -->
                <ul id="shopSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0" style="min-width: 220px;"
                    aria-labelledby="shopMegaMenu">
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="houseOwner.php">House List</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="#">Add House</a>
                  </li>
                </ul>
              </li>
              <!-- End House -->
			  
			  <!-- Flat -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="shopMegaMenu" class="nav-link u-header__nav-link" href="#"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="shopSubMenu">
                   FlatDetals
                  <span class="fa fa-angle-down u-header__nav-link-icon"></span>
                </a>

                <!-- Shop - Submenu -->
                <ul id="shopSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0" style="min-width: 220px;"
                    aria-labelledby="shopMegaMenu">
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="flatList.php">Flat List</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="addFlat.php">Add Flat</a>
                  </li>
                </ul>
              </li>
              <!-- End Flat -->
			  
			  <!-- Rent -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="shopMegaMenu" class="nav-link u-header__nav-link" href="#"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="shopSubMenu">
                   RentDetails
                  <span class="fa fa-angle-down u-header__nav-link-icon"></span>
                </a>

                <!-- Shop - Submenu -->
                <ul id="shopSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0" style="min-width: 220px;"
                    aria-labelledby="shopMegaMenu">
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="RentList.php">Rent List</a>
                  </li>
                </ul>
              </li>
              <!-- End Rent -->

              <!-- Button -->
              <li class="nav-item u-header__nav-item-btn">
                <a class="btn btn-sm btn-primary" href="../logout.php" role="button"
                  <span></span>
                  Logout
                </a>
              </li>
              <!-- End Button -->
            </ul>
          </div>
          <!-- End Navigation -->

          <ul class="navbar-nav flex-row u-header__secondary-nav">
            <!-- Profile icon -->
            <li class="nav-item u-header__navbar-icon-wrapper u-header__navbar-icon">
              <a id="shoppingCartDropdownInvoker" class="btn btn-xs btn-icon btn-text-dark" href="javascript:;" role="button"
                      aria-controls="shoppingCartDropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                      data-unfold-event="click"
                      data-unfold-target="#shoppingCartDropdown"
                      data-unfold-type="css-animation"
                      data-unfold-duration="300"
                      data-unfold-delay="300"
                      data-unfold-hide-on-scroll="true"
                      data-unfold-animation-in="slideInUp"
                      data-unfold-animation-out="fadeOut">
                <span style="font-size:20px;color:#21c87a;" class="fas fa-user-circle btn-icon__inner"></span>
              </a>

              <div id="shoppingCartDropdown" class="u-unfold u-unfold--cart text-center border rounded-0 right-0 p-7" aria-labelledby="shoppingCartDropdownInvoker" style="min-width: 250px;">
                <span class="u-icon u-icon--primary u-icon--md rounded-circle mb-3">
                  <span class="fas fa-user-circle u-icon__inner"></span>
                </span>
                <span class="d-block"><?php echo"$name"; ?></span>
              </div>
            </li>
            <!-- End Profile icon -->

            <!-- Account Signin -->
            <!-- End Account Signin -->
          </ul>
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
    <form  class="well form-horizontal" action="addhouseupdate.php" method="POST"  id="contact_form">
		<fieldset style="margin: 100px 45px;
		border: 2px solid #fbf9ac;
		background-color: #fbf9f9;">
		<!-- Form Name -->
		<legend>
			<h2>
			<span style="color: #f4fcf4;background-color: #21c87a;padding: 10px;">
			House Edit
			</span>
			</h2>
		</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label">House Name <span style="color:red">*</span></label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		  <input name="housename" value="<?php echo $row['houseName']; ?>" class="form-control"  type="text" required>
			</div>
		</div>
		</div>
		
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label">Description <span style="color:red">*</span></label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		  <input name="description" value="<?php echo $row['description']; ?>" class="form-control"  type="text" required>
			</div>
		</div>
		</div>
		
		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4">
			<input type="submit" value="Update" name="submit" class="btn btn-success" ><span class="glyphicon glyphicon-send"></span></input>
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
          <a class="d-inline-block mb-5" href="#" aria-label="Space">
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
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../assets/vendor/custombox/dist/custombox.min.js"></script>
  <script src="../assets/vendor/custombox/dist/custombox.legacy.min.js"></script>
  <script src="../assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="../assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="../assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="../assets/vendor/player.js/dist/player.min.js"></script>

  <!-- JS Space -->
  <script src="../assets/js/hs.core.js"></script>
  <script src="../assets/js/components/hs.header.js"></script>
  <script src="../assets/js/components/hs.unfold.js"></script>
  <script src="../assets/js/components/hs.validation.js"></script>
  <script src="../assets/js/helpers/hs.focus-state.js"></script>
  <script src="../assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="../assets/js/components/hs.modal-window.js"></script>
  <script src="../assets/js/components/hs.show-animation.js"></script>
  <script src="../assets/js/components/hs.slick-carousel.js"></script>
  <script src="../assets/js/components/hs.cubeportfolio.js"></script>
  <script src="../assets/js/components/hs.video-player.js"></script>
  <script src="../assets/js/components/hs.go-to.js"></script>

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