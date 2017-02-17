<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <link rel="shortcut icon" href="images/favicon.png">

    <title>Titulo | @yield('page-title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="/vendor/animateit/animate.min.css" rel="stylesheet">

    <!-- Vendor css -->
    <link href="/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Template base -->
    <link href="/css/theme-base.css" rel="stylesheet">

    <!-- Template elements -->
    <link href="/css/theme-elements.css" rel="stylesheet">

    <!-- Responsive classes -->
    <link href="/css/responsive.css" rel="stylesheet">

    <!-- Laravel css-->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Laravel js-->
    <script src="/js/app.js"></script>

    <!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->


    <!-- Template color -->
    <link href="/css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">

    <!-- LOAD GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" property="stylesheet" href="/vendor/rs-plugin/css/settings.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/rs-plugin-styles.css" type="text/css" />

    <!-- CSS CUSTOM STYLE -->
    <link rel="stylesheet" type="text/css" href="/css/custom.css" media="screen" />

    <!--VENDOR SCRIPT-->
    <script src="/vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="/vendor/plugins-compressed.js"></script>
    
    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script type="text/javascript" src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

</head>

<body class="wide">
    

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- HEADER -->
        <header id="header" class="">
            <div id="header-wrap">
                <div class="container">

                    <!--LOGO-->
                    <div id="logo">
                        <a href="index.html" class="logo" data-dark-logo="images/logo-dark.png">
                            <img src="images/logo.png" alt="Polo Logo">
                        </a>
                    </div>
                    <!--END: LOGO-->

                    <!--MOBILE MENU -->
                    <div class="nav-main-menu-responsive">
                        <button class="lines-button x">
                            <span class="lines"></span>
                        </button>
                    </div>
                    <!--END: MOBILE MENU -->

                    <!--SHOPPING CART -->
                    <div id="shopping-cart">
                        <span class="shopping-cart-items">8</span>
                        <a href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                    <!--END: SHOPPING CART -->

                    <!--TOP SEARCH -->
                    <div id="top-search"> <a id="top-search-trigger"><i class="fa fa-search"></i><i class="fa fa-close"></i></a>
                        <form action="search-results-page.html" method="get" data-toggle="validator">
                            <input type="text" name="q" id="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;" required>
                        </form>




                    </div>
                    <!--END: TOP SEARCH -->

                    <!--NAVIGATION-->
                    <div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
                        <div class="container">
                            <nav id="mainMenu" class="main-menu mega-menu">
                                <ul class="main-menu nav nav-pills">
                                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a>
                                    </li>
                                    <li><a href="http://www.inspirothemes.com/polo/preview/index.html">Layouts<span class="label label-danger infinit">HOT</span></a></li>
                                    <li class="dropdown"> <a href="#">Features <i class="fa fa-angle-down"></i> </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"> <a href="#">Headers</a>
                                                <ul class="dropdown-menu">
                        <li><a href="header-transparent.html">Transparent</a></li>
                        <li><a href="header-light.html">Light</a></li>
                        <li><a href="header-light-transparent.html">Light Transparent</a></li>
                        <li><a href="header-dark.html">Dark</a></li>
                        <li><a href="header-dark-transparent.html">Dark Transparent</a></li>
                        <li><a href="header-modern.html">Modern</a></li>
                        <li><a href="header-modern-dark.html">Modern Dark</a></li>
                        <li><a href="header-modern-dark-transparent.html">Modern Dark Transparent</a></li>
                        <li><a href="header-modern-light-transparent.html">Modern Light Transparent</a></li>
                        <li><a href="header-logo-center.html">Logo center</a></li>
                        <li><a href="header-logo-right.html">Logo right</a></li>
                        <li><a href="header-fullwidth.html">Fullwidth</a></li>
                        <li><a href="header-mini.html">Mini</a></li>
                        <li><a href="header-static.html">Static</a></li>
                        <li><a href="header-no-sticky.html">No Sticky</a></li>
                        <li><a href="header-topbar.html">Topbar</a></li>
                        <li><a href="header-topbar-transparent.html">Topbar Transparent</a></li>
                        <li><a href="header-topbar-dark.html">Topbar Dark</a></li>
                        <li><a href="header-topbar-colored.html">Topbar Colored</a></li>
                      </ul>
                                            </li>
                                            <li class="dropdown-submenu"> <a href="#">Sliders</a>
                                                <ul class="dropdown-menu">

                                                    <li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
                                                    <li><a href="slider-owl-slider.html">OWL Slider</a></li>

                                                    <li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
                                                    <li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html" class="current">Fullscreen Text Rotator</a></li>
                                                    <li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>

                                                </ul>
                                            </li>

                                            <li class="dropdown-submenu"> <a href="#">Page title</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-title-animated.html">Animated page title</a> </li>
                                                    <li><a href="page-title-parallax.html">Parallax page title</a> </li>
                                                    <li><a href="page-title-video.html">Video page title</a> </li>
                                                    <li><a href="page-title-extended.html">Extended page title</a> </li>
                                                    <li><a href="page-title-pattern.html">Pattern page title</a> </li>
                                                    <li><a href="page-title-colored.html">Colored page title</a> </li>
                                                    <li><a href="page-title-dark.html">Dark page title</a> </li>
                                                    <li><a href="page-title-grey.html">Grey page title</a> </li>
                                                    <li><a href="page-title-center.html">Center page title</a> </li>
                                                    <li><a href="page-title-right.html">Right page title</a> </li>
                                                    <li><a href="page-title-left.html">Left page title</a> </li>
                                                    <!--<li><a href="page-title-small.html">Small version</a> </li>-->
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"> <a href="#">Widgets</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog.html">Newsletter widget</a> </li>
                                                    <li><a href="blog.html">Tweeter widget</a> </li>
                                                    <li><a href="blog.html">Tags</a> </li>
                                                    <li><a href="blog.html">Archive</a> </li>
                                                    <li><a href="blog.html">Flickr widget</a> </li>
                                                    <li><a href="blog.html">Blog articles widget</a> </li>
                                                    <li><a href="blog.html">Links widget</a> </li>
                                                    <li><a href="blog.html">Contact us widget</a> </li>
                                                    <li><a href="blog.html">Blockquote</a> </li>
                                                    <li><a href="shop-single-product-sidebar-left.html">Shop products</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"> <a href="#">Sidebars</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="sidebar-modern.html">Modern</a> </li>
                                                    <li><a href="sidebar-modern-right.html">Modern Right</a> </li>
                                                    <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a> </li>
                                                    <li><a href="sidebar-classic.html">Classic</a> </li>
                                                    <li><a href="sidebar-classic-right.html">Classic Right</a> </li>
                                                    <li><a href="sidebar-classic-both.html">Classic Both Sidebars</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"> <a href="#">Footers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="nav-to" href="layout-footer.html#footer">Default</a> </li>
                                                    <li><a href="layout-footer-1.html#footer">Contact form</a> </li>
                                                    <li><a href="layout-footer-2.html#footer">Company details</a> </li>
                                                    <li><a href="layout-footer-3.html#footer">Minimal details</a> </li>
                                                    <li><a href="layout-footer-4.html#footer">Social & Phone numbers</a> </li>
                                                    <li><a href="layout-footer-5.html#footer">Info box</a> </li>
                                                    <li><a href="layout-footer-6.html#footer">Flicker & Twitter widget</a> </li>
                                                    <li><a href="layout-footer-7.html#footer">Blog widget & Tags</a> </li>
                                                    <li><a href="layout-footer-8.html#footer">Menu links</a> </li>
                                                    <li><a href="layout-footer-9.html#footer">Colored version</a> </li>
                                                    <li><a href="layout-footer-10.html#footer">Grey version</a> </li>
                                                    <li><a href="layout-footer-11.html#footer">Copyright details only</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"> <a href="#">Page Loaders</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="loader-animation-audio.html">Audio</a> </li>
                                                    <li><a href="loader-animation-ball-triangle.html">Ball triangle</a> </li>
                                                    <li><a href="loader-animation-bars.html">Bars</a> </li>
                                                    <li><a href="loader-animation-circles.html">Circles</a> </li>
                                                    <li><a href="loader-animation-grid.html">Grid</a> </li>
                                                    <li><a href="loader-animation-hearts.html">Hearts</a> </li>
                                                    <li><a href="loader-animation-oval.html">Oval</a> </li>
                                                    <li><a href="loader-animation-puff.html">Puff</a> </li>
                                                    <li><a href="loader-animation-rings.html">Rings</a> </li>
                                                    <li><a href="loader-animation-spinning-circles.html">Spinning circles</a> </li>
                                                    <li><a href="loader-animation-three-dots.html">Three dots</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"> <a href="#">Mega menu & Labels <span class="label label-default">HOT</span> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Label (new)<span class="label label-default">NEW</span></a> </li>
                                                    <li><a href="#">Label (hot)<span class="label label-danger">HOT</span></a> </li>
                                                    <li><a href="#">Label (popular)<span class="label label-success">POPULAR</span></a> </li>
                                                    <li><a href="#">Label (sale)<span class="label label-warning">SALE</span></a> </li>
                                                    <li><a href="#">Label (info)<span class="label label-info">INFO</span></a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Elements<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content" style="background-image: url('images/shortcode-megamenu-bg.png');">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-according.html"> <i class="fa fa-list-ul"></i>Accordions</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-alerts.html"> <i class="fa fa-exclamation-circle"></i>Alerts</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-animations.html"> <i class="fa fa-magic"></i>Animations</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-audio-video.html"> <i class="fa fa-play-circle"></i> Audio & Video</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-blockquotes.html"> <i class="fa fa-quote-right"></i>Blockquotes</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-breadcrumbs.html"> <i class="fa fa-angle-double-right"></i>Breadcrumbs</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-buttons.html"> <i class="fa fa-external-link"></i>Buttons</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-client-logo.html"> <i class="fa fa-diamond"></i>Clients logos</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-calltoaction.html"> <i class="fa fa-plus-square"></i>Call to action</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-carousel.html"> <i class="fa fa-exchange"></i>Carousel Sliders</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-code.html"> <i class="fa fa-code"></i>Code</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-countdown-timer.html"> <i class="fa fa-clock-o"></i>Countdown Timers</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-counters.html"> <i class="fa fa-sort-numeric-desc"></i>Counter Numbers</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-dropcat-highlight.html"> <i class="fa fa-bold"></i>Dropcat & Highlight</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-employee.html"> <i class="fa fa-users"></i>Employee (team)</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-forms.html"> <i class="fa fa-align-justify"></i>Forms</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-grid.html"> <i class="fa fa-th"></i>Grid System</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-icon-boxes.html"> <i class="fa fa-bullseye"></i>Icon Boxes</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-icon-lists.html"> <i class="fa fa-flag"></i>Icon Lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-images.html"> <i class="fa fa-photo"></i>Images</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-labels-badgets.html"> <i class="fa fa-check-square"></i>Labels and Badges</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-lightbox.html"> <i class="fa fa-arrows-alt"></i>Lightbox</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-lists.html"> <i class="fa fa-th-list"></i>Lists & Bullet lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-maps.html"> <i class="fa fa-compass"></i>Maps</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-modal.html"> <i class="fa fa-search-plus"></i>Modal</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-navs.html"> <i class="fa fa-bars"></i>Navbar & Navs</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-paginations.html"> <i class="fa fa-arrow-circle-right"></i>Pagination & Pager</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-panels.html"> <i class="fa fa-list-alt"></i>Panels</a>
                                                            </li>
                                                            <li> <a href="shortcode-pie-chart.html"><i class="fa fa-pie-chart"></i>Pie charts</a> </li>
                                                            <li> <a href="shortcode-popover-tooltip.html"><i class="fa fa-lightbulb-o"></i>Popover & tooltips</a> </li>
                                                            <li> <a href="shortcode-pricing-table.html"><i class="fa fa-dollar"></i>Pricing tables</a> </li>
                                                            <li>
                                                                <a href="shortcode-progress-bar.html"> <i class="fa fa-align-left"></i>Progress bars</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-responsive-utilities.html"> <i class="fa fa-laptop"></i>Responsive utilities</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-sections.html"> <i class="fa fa-bookmark"></i>Sections</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-separators.html"> <i class="fa fa-minus"></i>Separators</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-smooth-scrolling.html"> <i class="fa fa-anchor"></i>Smooth Scrolling</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-social-icons.html"> <i class="fa fa-facebook-official"></i>Social Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-tables.html"> <i class="fa fa-table"></i>Tables</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-tabs.html"> <i class="fa fa-indent"></i>Tabs</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-testimonial.html"> <i class="fa fa-question-circle"></i>Testimonials</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-timeline.html"> <i class="fa fa-sliders"></i>Timeline</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-toggles.html"> <i class="fa fa-toggle-on"></i>Toggles</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-typography.html"> <i class="fa fa-font"></i>Typography</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="#" class="read-more"><i class="fa fa-lightbulb-o"></i>Did we forget something? Please tell us!</a> </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="#">Pages <i class="fa fa-angle-down"></i> </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-basic.html">Basic</a> </li>
                                                    <li><a href="page-about-extended.html">Extended</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About me</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-me-basic.html">Basic</a> </li>
                                                    <li><a href="page-about-me-extended.html">Extended</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-contact-classic.html">Classic</a> </li>
                                                    <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a> </li>
                                                    <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a> </li>
                                                    <li><a href="page-contact-map-bottom.html">Map bottom</a> </li>
                                                    <li><a href="page-contact-sidebar-left.html">Sidebar Left</a> </li>
                                                    <li><a href="page-contact-sidebar-right.html">Sidebar Right</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="page-gallery-columns-5.html">Five columns</a> </li>
                                                    <li> <a href="page-gallery-columns-4.html">Four columns</a> </li>
                                                    <li> <a href="page-gallery-columns-3.html">Three columns</a> </li>
                                                    <li> <a href="page-gallery-columns-2.html">Two columns</a> </li>
                                                    <li> <a href="page-gallery-sidebar-left.html">Sidebar left</a> </li>
                                                    <li> <a href="page-gallery-sidebar-right.html">Sidebar Right</a> </li>
                                                    <li> <a href="page-gallery-fullwidth.html">Fullwidth</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User pages</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-user-login-classic.html">Login - Classic</a> </li>
                                                    <li><a href="page-user-login-modern.html">Login - Modern</a> </li>
                                                    <li><a href="page-user-login-creative.html">Login - Creative</a> </li>
                                                    <li><a href="page-user-register-classic.html">Register - Classic</a> </li>
                                                    <li><a href="page-user-register-modern.html">Register - Modern</a> </li>
                                                    <li><a href="page-user-register-creative.html">Register - Creative</a> </li>
                                                    <li><a href="page-user-password-recovery.html">Recovery Password</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="page-services.html">Services</a> </li>
                                            <li> <a href="page-our-team.html">Our team</a> </li>
                                            <li> <a href="page-our-clients.html">Our clients</a> </li>
                                            <li> <a href="page-maintenance.html">Maintenance</a> </li>
                                            <li> <a href="page-404.html">404 Page</a> </li>
                                            <li> <a href="page-404-parallax.html">404 Page - Parallax</a> </li>
                                            <li> <a href="page-500.html">500 Page</a> </li>
                                            <li> <a href="page-fullwidth.html">Fullwidth page</a> </li>
                                            <li> <a href="page-fullwidth-wide.html">Fullwidth page - Wide</a> </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page with Sidebar</span>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="page-sidebar-left.html">Sidebar Left</a> </li>
                                                    <li> <a href="page-sidebar-right.html">Sidebar Right</a> </li>
                                                    <li> <a href="page-sidebar-both.html">Sidebar Both</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="page-site-map.html">Site Map</a> </li>
                                            <li> <a href="page-faq.html">FAQ</a> </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Portfolio<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li class="mega-menu-title">Portfolio versions</li>
                                                        </ul>
                                                        <div class="col-md-6">
                                                            <ul>
                                                                <li> <a href="portfolio-focused-item.html">Focused item</a> </li>
                                                                <li> <a href="portfolio-classic.html">Classic</a> </li>
                                                                <li> <a href="portfolio-classic-no-title.html">Classic - No title</a> </li>
                                                                <li> <a href="portfolio-classic-with-details.html">Classic - With details</a> </li>
                                                                <li> <a href="portfolio-classic-no-spacing.html">Classic - No spacing</a> </li>
                                                                <li> <a href="portfolio-fullwidth.html">Fullwidth</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <ul>
                                                                <li> <a href="portfolio-masonry.html">Masonry</a> </li>
                                                                <li> <a href="portfolio-masonry-fullwidth.html">Masonry - Fullwidth</a> </li>
                                                                <li> <a href="portfolio-masonry-with-details.html">Masonry - With details</a> </li>
                                                                <li> <a href="portfolio-masonry-grey-background.html">Masonry - Grey background</a> </li>
                                                                <li> <a href="portfolio-masonry-no-page-title.html">Masonry - No page title</a> </li>
                                                                <li> <a href="portfolio-classic-sidebar.html">Sidebar</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul>
                                                            <li class="mega-menu-title">Portfolio columns</li>
                                                            <li> <a href="portfolio-columns-1.html">One Column</a> </li>
                                                            <li> <a href="portfolio-columns-2.html">Two Columns</a> </li>
                                                            <li> <a href="portfolio-columns-3.html">Three Columns</a> </li>
                                                            <li> <a href="portfolio-columns-4.html">Four Columns</a> </li>
                                                            <li> <a href="portfolio-columns-5.html">Five Columns</a> </li>
                                                            <li> <a href="portfolio-columns-6.html">Six Columns</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul>
                                                            <li class="mega-menu-title">Portfolio Single Pages</li>
                                                            <li> <a href="portfolio-page-presentation.html">Presentation</a> </li>
                                                            <li> <a href="portfolio-page-presentation-parallax.html">Presentation Parallax</a> </li>
                                                            <li> <a href="portfolio-page-gallery.html">Gallery</a> </li>
                                                            <li> <a href="portfolio-page-video-background.html">Video background</a> </li>
                                                            <li> <a href="portfolio-page-slider.html">Slider</a> </li>
                                                            <li> <a href="portfolio-page-basic.html">Basic</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 m-t-20">
                                                        <ul>
                                                            <li class="mega-menu-title"><span class="label label-danger">12 AMAZING</span> HOVER EFFECTS</li>
                                                        </ul>
                                                        <div class="col-md-2">
                                                            <ul>
                                                                <li> <a href="portfolio-effect-alea.html">Alea effect</a> </li>
                                                                <li> <a href="portfolio-effect-ariol.html">Ariol effect</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <ul>
                                                                <li> <a href="portfolio-effect-dia.html">Dia effect</a> </li>
                                                                <li> <a href="portfolio-effect-dorian.html">Dorian effect</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <ul>
                                                                <li> <a href="portfolio-effect-emma.html">Emma effect</a> </li>
                                                                <li> <a href="portfolio-effect-erdi.html">Erdi effect</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <ul>
                                                                <li> <a href="portfolio-effect-juna.html">Juna effect</a> </li>
                                                                <li> <a href="portfolio-effect-resa.html">Resa effect</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <ul>
                                                                <li> <a href="portfolio-effect-retro.html">Retro effect</a> </li>
                                                                <li> <a href="portfolio-effect-victor.html">Victor effect</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <ul>
                                                                <li> <a href="portfolio-effect-bleron.html">Bleron effect</a> </li>
                                                                <li> <a href="portfolio-effect-social-links-default.html">Default effect</a> </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="#"> Blog <i class="fa fa-angle-down"></i> </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Classic</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-classic-sidebar.html">With Sidebar</a> </li>
                                                    <li><a href="blog-classic-columns-2.html">Two columns</a> </li>
                                                    <li><a href="blog-classic-columns-3.html">Three columns</a> </li>
                                                    <li><a href="blog-classic-columns-4.html">Four columns</a> </li>
                                                    <li><a href="blog-classic-columns-5.html">Five columns</a> </li>
                                                    <li><a href="blog-classic-fullwidth.html">Full Width</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Modern</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-modern-sidebar.html">With Sidebar</a> </li>
                                                    <li><a href="blog-modern-columns-2.html">Two columns</a> </li>
                                                    <li><a href="blog-modern-columns-3.html">Three columns</a> </li>
                                                    <li><a href="blog-modern-columns-4.html">Four columns</a> </li>
                                                    <li><a href="blog-modern-fullwidth.html">Full Width</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Masonry</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-masonry-sidebar.html">With Sidebar</a> </li>
                                                    <li><a href="blog-masonry-columns-2.html">Two columns</a> </li>
                                                    <li><a href="blog-masonry-columns-3.html">Three columns</a> </li>
                                                    <li><a href="blog-masonry-columns-4.html">Four columns</a> </li>
                                                    <li><a href="blog-masonry-fullwidth.html">Full Width</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Timeline</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-timeline-sidebar-left.html">Sidebar left</a> </li>
                                                    <li><a href="blog-timeline-sidebar-right.html">Sidebar right</a> </li>
                                                    <li><a href="blog-timeline-fullwidth.html">Full Width</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Thumbnail</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-thumbnail-sidebar-left.html">Sidebar left</a> </li>
                                                    <li><a href="blog-thumbnail-sidebar-right.html">Sidebar right</a> </li>
                                                    <li><a href="blog-thumbnail-sidebar-both.html">Both sidebars</a> </li>
                                                    <li><a href="blog-thumbnail-fullwidth.html">Full Width</a> </li>
                                                    <li><a href="blog-thumbnail-modern-sidebar-left.html">Modern - Sidebar left</a> </li>
                                                    <li><a href="blog-thumbnail-modern-sidebar-right.html">Modern - Sidebar right</a> </li>
                                                    <li><a href="blog-thumbnail-modern-fullwidth.html">Modern Full Width</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"> <span class="dropdown-menu-title-only">Single post</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-post-modern.html">Modern post</a> </li>
                                                    <li><a href="blog-post-classic.html">Classic post</a> </li>
                                                    <li><a href="blog-post-slider.html">Slider post</a> </li>
                                                    <li><a href="blog-post-gallery.html">Gallery post</a> </li>
                                                    <li><a href="blog-post-audio.html">Audio post</a> </li>
                                                    <li><a href="blog-post-video.html">Video post</a> </li>
                                                    <li><a href="blog-post-map.html">Map post</a> </li>
                                                    <li class="dropdown-submenu"> <span class="dropdown-menu-title-only">With sidebar</span>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="blog-post-sidebar-left.html">Sidebar left</a> </li>
                                                            <li><a href="blog-post-sidebar-right.html">Sidebar right</a> </li>
                                                            <li><a href="blog-post-sidebar-both.html">Both sidebars</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="blog-post-fullwidth.html">Modern Fullwidth post</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Comments</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-comments-fullwidth.html">Fullwidth</a> </li>
                                                    <li><a href="blog-comments-sidebar.html">Width sidebar</a> </li>
                                                    <li><a href="blog-comments-form.html">Comments form</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content" style="background-image: url('images/shop-megamenu-bg.jpg');">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul>
                                                            <li class="mega-menu-title">Shop layout</li>
                                                            <li> <a href="shop-columns-2.html">Two Columns</a> </li>
                                                            <li> <a href="shop-columns-3.html">Three Columns</a> </li>
                                                            <li> <a href="shop-columns-4.html">Four Columns</a> </li>
                                                            <li> <a href="shop-columns-6.html">Six Columns</a> </li>
                                                            <li> <a href="shop-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="shop-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="shop-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="shop-fullwidth.html">Fullwidth (Wide)</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Product</li>
                                                            <li> <a href="shop-single-product.html">Fullwidth</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-both.html">Both Sidebars</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul>
                                                            <li class="mega-menu-title">Order process</li>
                                                            <li> <a class="animsition-link" href="shop-cart.html">Shoping Cart</a> </li>
                                                            <li> <a class="animsition-link" href="shop-cart-empty.html">Shoping Cart - Empty</a> </li>
                                                            <li> <a class="animsition-link" href="shop-checkout.html">Checkout</a> </li>
                                                            <li> <a class="animsition-link" href="shop-checkout-completed.html">Checkout Completed</a> </li>
                                                            <li> <a href="shop-wishlist.html">Wishlist</a> </li>
                                                            <li> <a href="shop-wishlist-empty.html">Wishlist Empty</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                            <a href="#">Perfil <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} 
                                </a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            </ul>
                            </li>
                        @endif

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--END: NAVIGATION-->
                </div>
            </div>
        </header>
        <!-- END: HEADER -->

        <!-- WELCOME -->
        <section class="p-b-0">
                @yield('content')
        </section>
        <!-- END: WELCOME -->

        <!-- REVOLUTION SLIDER -->
        <div id="slider">
            <div id="rev_slider_30_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="POLO Homepage" style="background-color:transparent;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.1 fullscreen mode -->
                <div id="rev_slider_30_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-130" data-transition="notransition" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slider/notgeneric_bg3-180x100.jpg" data-rotate="0" data-saveperformance="off" data-title="WORLD OF POLO" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/dummy.png" alt="" width="1920" height="1080" data-lazyload="images/slider/notgeneric_bg3.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-130-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','-1','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-54','0','-90','-92']" data-fontsize="['70','55','40','45']" data-lineheight="['70','70','70','50']" data-width="['none','none','none','462']" data-height="['none','none','none','124']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;text-align:center;">WELCOME TO THE WORLD OF POLO
                            </div>

                            <!-- LAYER NR. 2 -->
                            <p class="tp-caption thintext_dark   tp-resizeme" id="slide-130-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','1','0']" data-y="['middle','middle','middle','middle']" data-voffset="['10','52','-33','3']" data-fontsize="['16','13','13','13']" data-lineheight="['26','20','20','20']" data-width="['946','879','736','421']" data-height="['none','none','61','69']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 946px; max-width: 946px; white-space: normal; font-weight: 500; color: rgba(255, 255, 255, 1.00);text-align:center;">Say hello to the smartest and most flexible bootstrap template. Polo is an powerful template that can build any type of websites, and quite possibly the only one you will ever need.
                            </p>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption rev-scroll-btn " id="slide-130-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" data-width="35" data-height="55" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:pointer;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                <span>
							</span>

                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption Fashion-BigDisplay   tp-resizeme" id="slide-130-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','-3']" data-y="['top','top','top','top']" data-voffset="['500','476','476','408']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1290;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="2340" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;"><a href="#" class="button transparent rounded"><span>Explore more</span></a>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption   tp-resizeme" id="slide-130-layer-12" data-x="['left','left','left','left']" data-hoffset="['291','291','291','291']" data-y="['top','top','top','top']" data-voffset="['276','276','276','276']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1050;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 9;"><img src="images/slider/dummy.png" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-lazyload="images/slider/blurflake1.png" data-no-retina>
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption   tp-resizeme" id="slide-130-layer-13" data-x="['left','left','left','left']" data-hoffset="['706','706','706','706']" data-y="['top','top','top','top']" data-voffset="['347','347','347','347']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:850;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 10;"><img src="images/slider/dummy.png" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-lazyload="images/slider/blurflake2.png" data-no-retina>
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption   tp-resizeme" id="slide-130-layer-14" data-x="['left','left','left','left']" data-hoffset="['836','836','836','836']" data-y="['top','top','top','top']" data-voffset="['586','586','586','586']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1030;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 11;"><img src="images/slider/dummy.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-lazyload="images/slider/blurflake3.png" data-no-retina>
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption   tp-resizeme" id="slide-130-layer-15" data-x="['left','left','left','left']" data-hoffset="['539','539','539','539']" data-y="['top','top','top','top']" data-voffset="['627','627','627','627']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 12;"><img src="images/slider/dummy.png" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-lazyload="images/slider/blurflake4.png" data-no-retina>
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption   tp-resizeme" id="slide-130-layer-16" data-x="['left','left','left','left']" data-hoffset="['180','180','180','180']" data-y="['top','top','top','top']" data-voffset="['629','629','629','629']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1180;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 13;"><img src="images/slider/dummy.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-lazyload="images/slider/blurflake3.png" data-no-retina>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-125" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="images/slider/pattern-180x100.png" data-rotate="0" data-saveperformance="off" data-title="100+ LAYOUTS" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/dummy.png" alt="" width="1920" height="1080" data-lazyload="images/slider/pattern.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-125-layer-1" data-x="['center','center','center','center']" data-hoffset="['5','5','-5','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-223','-136','-302','-122']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1600" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; color: rgba(17, 17, 17, 1.00);">100+ Layouts
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption thintext_dark   tp-resizeme" id="slide-125-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','5','3','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-131','-72','-201','-40']" data-fontsize="['16','13','13','13']" data-lineheight="['26','20','20','20']" data-color="['rgba(0, 0, 0, 1.00)','rgba(17, 17, 17, 1.00)','rgba(17, 17, 17, 1.00)','rgba(17, 17, 17, 1.00)']" data-width="['943','none','673','445']" data-height="['61','none','61','none']" data-whitespace="['normal','nowrap','normal','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 943px; max-width: 943px; max-width: 61px; max-width: 61px; white-space: normal; font-weight: 500; color: rgba(0, 0, 0, 1.00);text-align:center;">POLO is packed with 100+ pre-made layouts that allow you to quickly jumpstart your project. Completely customizable for creating your own designs.
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-17" data-x="['left','left','left','left']" data-hoffset="['331','331','290','142']" data-y="['top','top','top','top']" data-voffset="['701','701','533','501']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1000" data-responsive_offset="on" style="z-index: 7;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','183']" data-hh="['168px','168px','168px','122']" data-lazyload="images/slider/40.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-13" data-x="['left','left','left','left']" data-hoffset="['53','53','53','-52']" data-y="['top','top','top','top']" data-voffset="['686','686','686','605']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:470;s:470;" data-start="1050" data-responsive_offset="on" style="z-index: 8;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['278px','278px','278px','202.45652173913044']" data-hh="['184px','184px','184px','134']" data-lazyload="images/slider/18.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-19" data-x="['left','left','left','left']" data-hoffset="['786','786','339','339']" data-y="['top','top','top','top']" data-voffset="['700','700','826','826']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1100" data-responsive_offset="on" style="z-index: 9;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','252px']" data-hh="['168px','168px','168px','168px']" data-lazyload="images/slider/39.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-21" data-x="['left','left','left','left']" data-hoffset="['-166','-166','-75','-75']" data-y="['top','top','top','top']" data-voffset="['721','721','814','814']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1450" data-responsive_offset="on" style="z-index: 10;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['268px','268px','268px','268px']" data-hh="['177px','177px','177px','177px']" data-lazyload="images/slider/34.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-20" data-x="['left','left','left','left']" data-hoffset="['1009','1009','708','708']" data-y="['top','top','top','top']" data-voffset="['712','712','802','802']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1200" data-responsive_offset="on" style="z-index: 11;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','252px']" data-hh="['168px','168px','168px','168px']" data-lazyload="images/slider/32.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-22" data-x="['left','left','left','left']" data-hoffset="['165','165','60','60']" data-y="['top','top','top','top']" data-voffset="['587','587','879','879']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1250" data-responsive_offset="on" style="z-index: 12;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['305.8531073446328','305.8531073446328','305.8531073446328','305.8531073446328']" data-hh="['202','202','202','202']" data-lazyload="images/slider/42.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-23" data-x="['left','left','left','left']" data-hoffset="['31','31','30','-3']" data-y="['top','top','top','top']" data-voffset="['452','452','489','516']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:910;s:910;" data-start="1910" data-responsive_offset="on" style="z-index: 13;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['314px','314px','314px','169.07692307692307']" data-hh="['208px','208px','208px','112']" data-lazyload="images/slider/19.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-24" data-x="['left','left','left','left']" data-hoffset="['407','407','521','309']" data-y="['top','top','top','top']" data-voffset="['593','593','527','503']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:490;s:490;" data-start="1540" data-responsive_offset="on" style="z-index: 14;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['268px','268px','268px','205.94285714285712']" data-hh="['177px','177px','177px','136']" data-lazyload="images/slider/29.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-25" data-x="['left','left','left','left']" data-hoffset="['634','634','-204','-204']" data-y="['top','top','top','top']" data-voffset="['444','444','738','738']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1400" data-responsive_offset="on" style="z-index: 15;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['391px','391px','391px','391px']" data-hh="['259px','259px','259px','259px']" data-lazyload="images/slider/20.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-26" data-x="['left','left','left','left']" data-hoffset="['857','857','469','191']" data-y="['top','top','top','top']" data-voffset="['483','483','613','411']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1450" data-responsive_offset="on" style="z-index: 16;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['364px','364px','364px','225.04564315352695']" data-hh="['241px','241px','241px','149']" data-lazyload="images/slider/17.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-27" data-x="['left','left','left','left']" data-hoffset="['1041','1041','450','450']" data-y="['top','top','top','top']" data-voffset="['586','586','852','852']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1500" data-responsive_offset="on" style="z-index: 17;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['268px','268px','268px','268px']" data-hh="['177px','177px','177px','177px']" data-lazyload="images/slider/22.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-18" data-x="['left','left','left','left']" data-hoffset="['578','578','168','169']" data-y="['top','top','top','top']" data-voffset="['740','740','622','607']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1550" data-responsive_offset="on" style="z-index: 18;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','184.5']" data-hh="['168px','168px','168px','123']" data-lazyload="images/slider/41.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 15 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-28" data-x="['left','left','left','left']" data-hoffset="['232','232','307','323']" data-y="['top','top','top','top']" data-voffset="['399','399','693','601']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1910" data-responsive_offset="on" style="z-index: 19;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['364px','364px','364px','231.08713692946057']" data-hh="['241px','241px','241px','153']" data-lazyload="images/slider/25.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 16 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-29" data-x="['left','left','left','left']" data-hoffset="['1186','1186','1186','1186']" data-y="['top','top','top','top']" data-voffset="['741','741','741','741']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:490;s:490;" data-start="1910" data-responsive_offset="on" style="z-index: 20;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['268px','268px','268px','268px']" data-hh="['177px','177px','177px','177px']" data-lazyload="images/slider/15.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 17 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-30" data-x="['left','left','left','left']" data-hoffset="['1245','1245','1245','1245']" data-y="['top','top','top','top']" data-voffset="['633','633','633','633']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1910" data-responsive_offset="on" style="z-index: 21;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','252px']" data-hh="['168px','168px','168px','168px']" data-lazyload="images/slider/38.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 18 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-31" data-x="['left','left','left','left']" data-hoffset="['-99','-99','-48','66']" data-y="['top','top','top','top']" data-voffset="['578','578','652','604']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1910" data-responsive_offset="on" style="z-index: 22;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['252px','252px','252px','178.5']" data-hh="['168px','168px','168px','119']" data-lazyload="images/slider/11.jpg" data-no-retina>
                            </div>

                            <!-- LAYER NR. 19 -->
                            <div class="tp-caption   tp-resizeme" id="slide-125-layer-32" data-x="['left','left','left','left']" data-hoffset="['479','479','290','36']" data-y="['top','top','top','top']" data-voffset="['417','417','445','438']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1910" data-responsive_offset="on" style="z-index: 23;"><img src="images/slider/dummy.png" alt="" width="600" height="400" data-ww="['312px','312px','312px','172.5']" data-hh="['208px','208px','208px','115']" data-lazyload="images/slider/2.jpg" data-no-retina>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-132" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="images/slider/Three-Swans-180x100.jpg" data-rotate="0" data-saveperformance="off" data-title="BACKGROUND VIDEO" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/dummy.png" alt="" width="1920" height="1080" data-lazyload="images/slider/Three-Swans.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- BACKGROUND VIDEO LAYER -->
                            <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videoogv="images/slider/Three-Swans.ogv" data-videowebm="images/slider/Three-Swans.webm" data-videomp4="images/slider/Three-Swans.mp4" data-videopreload="preload" data-videoloop="none" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true"></div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-132-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">STAY COOL MATE
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption thintext_dark   tp-resizeme" id="slide-132-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['51','52','52','51']" data-fontsize="['16','13','13','13']" data-lineheight="['26','20','20','20']" data-width="['755','none','none','none']" data-height="none" data-whitespace="['normal','nowrap','nowrap','nowrap']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 755px; max-width: 755px; white-space: normal; font-weight: 500; color: rgba(255, 255, 255, 1.00);text-align:center;">More layout demos are coming!
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption   tp-resizeme" id="slide-132-layer-12" data-x="['left','left','left','left']" data-hoffset="['291','291','291','291']" data-y="['top','top','top','top']" data-voffset="['276','276','276','276']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 7;"><img src="images/slider/dummy.png" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-lazyload="images/slider/blurflake1.png" data-no-retina>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption   tp-resizeme" id="slide-132-layer-13" data-x="['left','left','left','left']" data-hoffset="['706','706','706','706']" data-y="['top','top','top','top']" data-voffset="['347','347','347','347']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 8;"><img src="images/slider/dummy.png" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-lazyload="images/slider/blurflake2.png" data-no-retina>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption   tp-resizeme" id="slide-132-layer-14" data-x="['left','left','left','left']" data-hoffset="['836','836','836','836']" data-y="['top','top','top','top']" data-voffset="['586','586','586','586']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 9;"><img src="images/slider/dummy.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-lazyload="images/slider/blurflake3.png" data-no-retina>
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption   tp-resizeme" id="slide-132-layer-15" data-x="['left','left','left','left']" data-hoffset="['539','539','539','539']" data-y="['top','top','top','top']" data-voffset="['627','627','627','627']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 10;"><img src="images/slider/dummy.png" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-lazyload="images/slider/blurflake4.png" data-no-retina>
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption   tp-resizeme" id="slide-132-layer-16" data-x="['left','left','left','left']" data-hoffset="['180','180','180','180']" data-y="['top','top','top','top']" data-voffset="['629','629','629','629']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3000" data-responsive_offset="on" style="z-index: 11;"><img src="images/slider/dummy.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-lazyload="images/slider/blurflake3.png" data-no-retina>
                            </div>
                        </li>
                    </ul>
                    <div class="tp-static-layers">
                    </div>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!-- END REVOLUTION SLIDER -->

        <!-- CONTENT -->
        <section>
            <div class="container">
                
            </div>
        </section>
        <!-- END: CONTENT -->

        <!-- FOOTER -->
        <footer class="background-dark text-grey" id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-logo float-left">
                                <img alt="" src="images/logo-sm-dark.png">
                            </div>
                            <p style="margin-top: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
                            </p>

                        </div>
                    </div>
                    <div class="seperator seperator-dark seperator-simple"></div>
                    <div class="row">


                        <div class="col-md-4">
                            <div class="widget clearfix widget-contact-us" style="background-image: url('images/world-map.png'); background-position: 50% 55px; background-repeat: no-repeat">
                                <h4 class="widget-title">Contact us</h4>
                                <ul class="list-large list-icons">
                                    <li><i class="fa fa-map-marker"></i>
                                        <strong>Address:</strong> 795 Folsom Ave, Suite 600
                                        <br>San Francisco, CA 94107</li>
                                    <li><i class="fa fa-phone"></i><strong>Phone:</strong> (123) 456-7890 </li>
                                    <li><i class="fa fa-envelope"></i><strong>Email:</strong> <a href="mailto:first.last@example.com">first.last@example.com</a>
                                    </li>
                                    <li><i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 - 22:00</strong>
                                        <br>Saturday, Sunday: <strong>Closed</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget clearfix widget-tweeter">
     <h4 class="widget-title">Recent Tweets</h4>
</div>
                        </div>

                        <div class="col-md-4">
                            <div class="widget clearfix widget-newsletter">
                                <form id="widget-subscribe-form" action="include/subscribe-form.php" role="form" method="post" class="form-inline">
                                    <h4 class="widget-title">Newsletter</h4>
                                    <small>Stay informed on our latest news!</small>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                                        <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                        <span class="input-group-btn">
											<button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary">Subscribe</button>
										</span>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    jQuery("#widget-subscribe-form").validate({
                                        submitHandler: function(form) {
                                            jQuery(form).ajaxSubmit({
                                                dataType: 'json',
                                                success: function(text) {
                                                    if (text.response == 'success') {
                                                        $.notify({
                                                            message: "You have successfully subscribed to our mailing list."
                                                        }, {
                                                            type: 'success'
                                                        });
                                                        $(form)[0].reset();

                                                    } else {
                                                        $.notify({
                                                            message: text.message
                                                        }, {
                                                            type: 'warning'
                                                        });
                                                    }
                                                }
                                            });
                                        }
                                    });
                                  </script>
                            </div>

                        </div>



                    </div>


                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text col-md-6"> &copy; 2016 POLO - Best HTML5 Template Ever. All Rights Reserved. <a target="_blank" href="http://www.inspiro-media.com">INSPIRO</a>
                        </div>
                        <div class="col-md-6">
                            <div class="social-icons">
                                <ul>
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: FOOTER -->

    </div>
    <!-- END: WRAPPER -->

    <!-- GO TOP BUTTON -->
    <a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

    <!-- Theme Base, Components and Settings -->
    <script src="/js/theme-functions.js"></script>

    <!-- Custom js file -->
    <script src="/js/custom.js"></script>



</body>

</html>
