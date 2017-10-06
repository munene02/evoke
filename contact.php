<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>

    <meta charset="utf-8">
    <title>Evoke Media | Get in Touch</title>
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
            <?php $page='touch'; include'header.php'; ?> 
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Get In Touch</h1>
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

                                    
                                    <div class="column one-second column_column">
                                        <div class="column_attr ">
                                            <div class="list_item lists_2 clearfix">
                                                <a href="mailto:info@evokemedia.co.ke" target="_blank">
                                                    <div class="list_left list_icon">
                                                        <i class="icon-mail-line"></i>
                                                    </div>
                                                    <div class="list_right">
                                                        <h4>info@evokemedia.co.ke</h4>
                                                        <div class="desc">
                                                            Have any questions?
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list_item lists_2 clearfix">
                                                <a href="#">
                                                    <div class="list_left list_icon">
                                                        <i class="icon-comment-line"></i>
                                                    </div>
                                                    <div class="list_right">
                                                        <h4>+254 0713 467 781</h4>
                                                        <div class="desc">
                                                            Call us
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list_item lists_2 clearfix">
                                                <a href="https://www.facebook.com/Evokemedialtd/"  target="_blank">
                                                    <div class="list_left list_icon">
                                                        <i class="icon-facebook"></i>
                                                    </div>
                                                    <div class="list_right">
                                                        <br/><h4>Evokemedialtd</h4>
                                                        <div class="desc">
                                                            
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list_item lists_2 clearfix">
                                                <a href="https://twitter.com/evokemediakenya"  target="_blank">
                                                    <div class="list_left list_icon">
                                                        <i class="icon-twitter"></i>
                                                    </div>
                                                    <div class="list_right">
                                                        <br/><h4>@evokemediakenya</h4>
                                                        <div class="desc">
                                                            
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column one-second column_column">
                                        <div class="column_attr ">
                                            <div id="contactWrapper" >
                                            <form id="contactform">
                                                <div class="column one-second">
                                                    <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one-second">
                                                    <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                </div>
                                                <div class="column one">
                                                    <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                                </div>
                                            </form>
                                        </div>
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
    <script src="js/email.js"></script>
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