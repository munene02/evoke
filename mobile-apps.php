<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58884093-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-58884093-1');
</script>
    <meta charset="utf-8">
    <title>Evoke Media | Mobile Apps</title>
    <meta name="keywords" content="Mobile Apps kenya, web development, web design kenya, social media kenya, online marketing kenya, advertising" />
    <meta name="description" content=">Evoke Media Limited is a creative agency that specializes in web design & development, Mobile App development, advertising, social media and online marketing." />
    <meta name="author" content="Evoke Media">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="images/favicon.ico">

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:300'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/structure.css'>
    <link rel='stylesheet' href='css/creative.css'>
    <link rel='stylesheet' href='css/custom.css'>

</head>

<body class="home layout-full-width header-classic minimalist-header header-menu-right sticky-header sticky-white subheader-title-left">
    <div id="Wrapper">
        <div id="Header_wrapper">
            <?php $page='photo'; include'header.php'; ?> 
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Mobile App Portfolio</h1>
                    </div>
                </div>
            </div>          
        </div>
        
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">          
                        
                        <div class="section sections_style_3">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">

                                    <!-- <div class="column one column_column">
                                        <div class="column_attr ">
                                            <h5></h5>
                                            
                                        </div>
                                    </div> -->

                                    <div class="column one column_portfolio">
                                        <div class="portfolio_wrapper isotope_wrapper ">
                                            <ul class="portfolio_group lm_wrapper isotope flat">

                                                <li class="portfolio-item isotope-item category-banner wide tall">
                                                    <div class="portfolio-item-fw-bg">
                                                        <div class="portfolio-item-fw-wrapper">
                                                            
                                                            <div class="image_frame scale-with-grid">
                                                                <div class="image_wrapper">
                                                                    <a href="#">
                                                                        <div class="mask"></div><img width="640" height="427" src="images/app_1-640x427.jpg" class="scale-with-grid wp-post-image" alt="Futbolpunter Android App - Coming Soon" />
                                                                    </a>
                                                                    <div class="image_links">
                                                                        <a href="images/app_1-1200x800.jpg" class="zoom" title="Futbolpunter Android App - Coming Soon" rel="prettyphoto"><i class="icon-search"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="portfolio-item isotope-item category-banner wide tall">
                                                    <div class="portfolio-item-fw-bg">
                                                        <div class="portfolio-item-fw-wrapper">
                                                            
                                                            <div class="image_frame scale-with-grid">
                                                                <div class="image_wrapper">
                                                                    <a href="#">
                                                                        <div class="mask"></div><img width="640" height="427" src="images/app_2-640x427.jpg" class="scale-with-grid wp-post-image" alt="Onakodi Android App - Coming Soon" />
                                                                    </a>
                                                                    <div class="image_links">
                                                                        <a href="images/app_2-1200x800.jpg" class="zoom" title="Onakodi Android App - Coming Soon" rel="prettyphoto"><i class="icon-search"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>  
                                                
                                            </ul>
                                        </div>
                                    </div>

                                    
                                    <div class="column one column_divider">
                                        <hr class="no_line" />
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>
    </div>

    <!-- JS -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/scripts.js"></script>

    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/retina-logo.png").width(retinaLogoW).height(retinaLogoH)
            }
        });
    </script>

</body>

</html>