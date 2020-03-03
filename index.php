<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel talk</title>

    <link rel="stylesheet" type="text/css" href="<?php echo my_theme_get_root_directory(); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo my_theme_get_root_directory(); ?>/css/dynamicpage.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="<?php echo my_theme_get_root_directory(); ?>/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo my_theme_get_root_directory(); ?>/slick/slick-theme.css">
    <!--end slick css -->

    <!-- google font link-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- google font -->

    <!-- magnific css -->
    <link rel="stylesheet" type="text/css" href="<?php echo my_theme_get_root_directory(); ?>/css/magnific-popup.min.css">
    <!-- magnific css -->

    <!-- Font awesome link -->
    <link rel="stylesheet" type="text/css" href="<?php echo my_theme_get_root_directory(); ?>/css/all.min.css">
    <!-- End of Front awesome link -->

</head>

<body>
    <div class="theme-development">
        <div class="font-page-wrapper">
            <div class="front-page-top">
                <div class="container"> 
                    <header class="header">
                        <div class="logo">
                            <div class="site-identity">
                                <a href="#" class="custom-logo-link" rel="home" itemprop="url">
                                    <a href="#" class="custom-logo-link" rel="home">
                                    <img width="429" height="124" src="<?php echo my_theme_get_root_directory(); ?>/image/tp-logo_white.png" class="custom-logo" alt="Pujan WordPress Site"  /></a>	
                                </a>
                                <div class="site-branding-text" style="display:none;">
                                    <h1 class="site-title"><a href="http://skynet.wensolutions.com/coworkers/pujan/wordpress/" rel="home">Pujan WordPress Site</a></h1>
                                    <p class="site-description">Just another WordPress site</p>
                                </div>
                            </div>
                        </div>
                        <div class="theme-navigation-bar">
                            <nav class="theme-nav-bar">
                                <!-- Menu Toggle btn-->
                                <div class="menu-toggle">
                                    <h3>Menu</h3>
                                    <button type="button" id="menu-btn">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Responsive Menu Structure-->
                                <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                                <div class="navigation-bar">
                                    <ul id="respMenu" class=" menu" data-menu-style="horizontal">
                                        <li class="menu-item">
                                        <a href="javascript:;">
                                            <span class="title">Home</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="javascript:;">
                                            <span class="title">About Us</span>
                                    
                        
                                        </a>
                                        <!-- Level Two-->
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="#">Sub Item One</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Sub Item Two</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Sub Item Three</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Sub Item Four</a>
                                            </li>
                                        </ul>
                                    </li>
                        
                                    <li class="menu-item menu-item-has-children">
                                        <a href="javascript:;">
                                            <span class="title">4 Level Menu</span>
                                    
                                        </a>
                                        <!-- Level Two-->
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="javascript:;">
                                                    Sub Item One
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">
                                                    Sub Item Two
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="javascript:;">
                                                    Sub Item Three
                                                </a>
                                                <!-- Level Three-->
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Sub Item Link 1</a></li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="javascript:;">
                                                            <i class="fa fa-diamond" aria-hidden="true"></i>Sub Item Link 2</a>
                                                        <!-- Level Four-->
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i>Sub Item Link 1</a></li>
                                                            <li class="menu-item"><a href="#"><i class="fa fa-dashcube" aria-hidden="true"></i>Sub Item Link 2</a></li>
                                                            <li class="menu-item"><a href="#"><i class="fa fa-dropbox" aria-hidden="true"></i>Sub Item Link 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Sub Item Link 3</a></li>
                                                </ul>
                                            </li>
                        
                                            <li class="menu-item">
                                                <a href="#">
                                                    Sub Item Four
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a class="" href="javascript:;">
                                            
                                            <span class="title">Services</span>
                                
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="#">Sub Item One
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript:;">Sub Item Two
                                                </a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Sub Item Link 1</a></li>
                                                    <li class="menu-item"><a href="#">Sub Item Link 2</a></li>
                                                    <li class="menu-item"><a href="#">Sub Item Link 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="javascript:;">Sub Item Three
                                                </a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Sub Item Link 1</a></li>
                                                    <li class="menu-item"><a href="#">Sub Item Link 1</a></li>
                                                    <li class="menu-item"><a href="#">Sub Item Link 1</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Sub Item Four
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript:;">
                                           
                                            <span class="title">Products</span>
                                        </a>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="javascript:;">
                                           
                                            <span class="title">Contact Us</span>
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </nav>
                            <div class="nav-account-section">
                                <div class="search-widget">
                                    <form role="search" method="get" class="search-form" action="#">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                                        </label>
                                        <input type="submit" class="search-submit" value="Search" />
                                    </form>
                                </div>
                                <div class="user-account">
                                    <p>Account</p>
                                </div>
                            </div>
                        </div>
                     </header>
                    <main class="main">
                        <div class="main-container">
                            <div class="item">
                                <div class="brand-title">
                                    <h1>We Create Creative Business Theme</h1>
                                </div>
                                <div class="brand-description">
                                    <p>In gnissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p> 
                                </div>
                                <div class="button-item">
                                    <a href=""class="own-prop btn-primary">View Theme</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="<?php echo my_theme_get_root_directory(); ?>/image/top-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </main>
                    <div class="logos">
                        <div class="logo-collection">
                            <div class="logo-item">
                                <img src="https://lh3.googleusercontent.com/proxy/uvRRnlWyv-bUb4qM8zdwui6eW-ttrAL2JD9IAh0pRfQ1ZvHlPvkctXQuiIyyjZamaZgSw2M4WC8mCL_Jc6vHpjOu0r1ftsnQIE0-lm_mStkpGm4yynGFwG77oaEQrjE4" alt="">
                            </div>
                            <div class="logo-item">
                                <img src="https://www.freepnglogos.com/uploads/apple-logo-png/apple-logo-png-dallas-shootings-don-add-are-speech-zones-used-4.png" alt="">
                            </div>
                            <div class="logo-item">
                                <img src="https://wptavern.com/wp-content/uploads/2016/05/woocommerce-logo.png" alt="">
                            </div>
                            <div class="logo-item">
                                <img src="https://pngimg.com/uploads/google/google_PNG19625.png" alt="">
                            </div>
                            <div class="logo-item">
                                <img src="https://pngimg.com/uploads/wordpress/wordpress_PNG36.png" alt="">
                            </div>
                            <div class="logo-item">
                                <img src="https://images.vexels.com/media/users/3/139707/isolated/preview/08a4117134ac18250192fc896a5f05d0-blackberry-logo-by-vexels.png" alt="">
                            </div>
                            
                        </div>
                    </div>

                </div>
                

            </div>
            <div class="section-collection">
                <section class="why-choose-us">
                    <div class="section-header">
                        <h2 class="title">Why Choose Us</h2>
                        <p class="section-detail">It’s not just about looks. This is why 250,000+ users choose a Themes.</p>
                    </div>
                    <div class="section-wrapper">
                        <div class="container">
                            <div class="box">
                                <div class="grid-box">
                                    <div class="grid-item">
                                        <div class="icon">
                                            <span><i class="fab fa-accusoft"></i></span>
                                        </div>
                                        <div class="description">
                                            <p>Responsive Framework </p>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="icon">
                                            <span><i class="fab fa-adobe"></i></span>
                                        </div>
                                        <div class="description">
                                            <p>Clean & Modern Design </p>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="icon">
                                            <span><i class="fas fa-anchor"></i></span>
                                        </div>
                                        <div class="description">
                                            <p>Easy & Powerful Customization </p>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="icon">
                                            <span>
                                                <i class="fas fa-archway"></i>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p>Translation Ready </p>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="icon">
                                            <span><i class="fab fa-android"></i></span>
                                        </div>
                                        <div class="description">
                                            <p>Regular Updates </p>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="icon">
                                            <span><i class="fab fa-accessible-icon"></i></span>
                                        </div>
                                        <div class="description">
                                            <p>30-Day Return Policy </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            

                        </div>
                    </div>
                        
                </section>
            </div>
            
        </div>
    </div>
    <!-- jquery script-->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script> -->
    <!--End of  jquery script-->

    <!-- magnific popup -->
    <script src="<?php echo my_theme_get_root_directory(); ?>/js/jquery.magnific-popup.min.js"></script>
    <!--End of magnific popup -->


    <!-- counter script -->
   
    <script src="<?php echo my_theme_get_root_directory(); ?>/js/purecounter.js"></script>
    <!-- End of counter script -->

    <!-- slick slider script   -->
    <script src="<?php echo my_theme_get_root_directory(); ?>/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo my_theme_get_root_directory(); ?>/js/custom.js"></script>
    <!--End of slick slider script   -->
    <!--Scripts-->
   <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="<?php echo my_theme_get_root_directory(); ?>/js/ace-responsive-menu.js" type="text/javascript"></script>

	<!--Plugin Initialization-->
     <script type="text/javascript">
         $(document).ready(function () {
             $("#respMenu").aceResponsiveMenu({
                 resizeWidth: '768', // Set the same in Media query
                 animationSpeed: 'fast', //slow, medium, fast
                 accoridonExpAll: false //Expands all the accordion menu on click
             });
         });
	   </script>
</body>

</html>