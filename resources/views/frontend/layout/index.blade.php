<!DOCTYPE html>
<html>
<!-- [if IE 8]>			<html class="ie ie8"> <![endif]-->
<!-- [if IE 9]>			<html class="ie ie9"> <![endif]-->
<!-- [if gt IE 9]><html> <![endif] -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta content="HTML5 Template" name="keywords" />
    <meta content="" name="description">
    <meta content="" name="author">
    <title>@yield('title')</title>
    <!-- Mobile Metas -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="{{url ('public/template') }}/images/brands/politap.png" rel="shortcut icon">
    <!-- font-awesome -->
    <link href="{{url ('public/template') }}/css/font-awesome/css/font-awesome.css" media="screen" rel="stylesheet" type="text/css">
    <!-- bootstrap -->
    <link href="{{url ('public/template') }}/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <!-- flaticon -->
    <link href="{{url ('public/template') }}/css/flaticon/css/flaticon.css" media="screen" rel="stylesheet" type="text/css">
    <!-- owl-carousel -->
    <link href="{{url ('public/template') }}/css/owl.carousel.css" media="screen" rel="stylesheet" type="text/css">
    <link href="{{url ('public/template') }}/css/owl.theme.css" media="screen" rel="stylesheet" type="text/css">
    <!-- sidebar on small screens -->
    <link href="{{url ('public/template') }}/css/easy-sidebar.css" media="screen" rel="stylesheet" type="text/css">
    <!-- prettyPhoto -->
    <link href="{{url ('public/template') }}/js/pp/css/prettyPhoto.css" media="screen" rel="stylesheet" type="text/css">
    <!-- isotope -->
    <link href="{{url ('public/template') }}/js/vendors/isotope/isotope.css" media="screen" rel="stylesheet" type="text/css">
    <!-- preloader CSS -->
    <link href="{{url ('public/template') }}/css/spinkit/spinkit.css" media="screen" rel="stylesheet" type="text/css">
    <!-- Main CSS -->
    <link href="{{url ('public/template') }}/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->
</head>

<body>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               PRELOADER STARTS
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"> </div>
        </div>
    </div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               PRELOADER END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR START
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    @include('frontend.layout.header')
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           SLIDER START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    @yield('content')
    @include('frontend.layout.footer')
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
Search popup start
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- <div id="search">
        <button class="close" type="button"> <i aria-hidden="true" class="fa fa-times"></i></button>
        <form>
            <input placeholder="Type keyword(s) Here" type="search" value="" />
            <button class="btn btn-primary" type="submit"> <i aria-hidden="true" class="fa fa-search"></i></button>
        </form>
    </div> -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
Search popup end
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
Search quote start
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div id="quote">
        <button class="close" type="button"> <i aria-hidden="true" class="fa fa-times"></i></button>
        <form>
            <textarea placeholder="Type message here"></textarea>
            <button class="btn btn-primary" type="submit"> <i aria-hidden="true" class="fa fa-envelope"></i></button>
        </form>
    </div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
Search quote end
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
back-to-top start
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <a class="back-to-top" href=".top-bar"> <i aria-hidden="true" class="fa fa-chevron-up"></i></a>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
back-to-top end
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
overlay div start
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div class="overlay hided"></div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
overlay div end
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- jquery -->
    <script src="{{url ('public/template') }}/js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="{{url ('public/template') }}/js/bootstrap.min.js"></script>
    <!-- owl-carousel -->
    <script src="{{url ('public/template') }}/js/owl.carousel.min.js"></script>
    <!-- twitter -->
    <script src="{{url ('public/template') }}/js/twitter.js"></script>
    <!-- counterup -->
    <script src="{{url ('public/template') }}/js/waypoints.min.js"></script>
    <script src="{{url ('public/template') }}/js/vendors/jquery.counterup.min.js"></script>
    <!-- isotope -->
    <script src="{{url ('public/template') }}/js/vendors/isotope/isotope.pkgd.js"></script>

    <!-- cookie js -->
    <script src="{{url ('public/template') }}/js/jquery.cookie.js"></script>
    <!-- pretty Photo -->
    <script src="{{url ('public/template') }}/js/pp/js/jquery.prettyPhoto.js"></script>
    <!-- jquery-ui.min -->
    <script src="{{url ('public/template') }}/js/jquery-ui.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{url ('public/template') }}/revolution/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="{{url ('public/template') }}/revolution/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems !  
			The following part can be removed on Server for On Demand Loading) -->
    <script src="{{url ('public/template') }}/revolution/js/extensions/revolution.extension.actions.min.js" type="text/javascript"></script>
    <script src="{{url ('public/template') }}/revolution/js/extensions/revolution.extension.carousel.min.js" type="text/javascript"></script>
    <script src="{{url ('public/template') }}/revolution/js/extensions/revolution.extension.kenburn.min.js" type="text/javascript"></script>
    <script src="{{url ('public/template') }}/revolution/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
    <script src="{{url ('public/template') }}/revolution/js/extensions/revolution.extension.migration.min.js" type="text/javascript"></script>
    <script src="{{url ('public/template') }}/revolution/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
    <script src="{{url ('public/template') }}/revolution/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
    <script src="{{url ('public/template') }}/revolution/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
    <script src="{{url ('public/template') }}/revolution/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
    <link href="{{url ('public/template') }}/revolution/css/navigation.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{url ('public/template') }}/revolution/css/settings.css" media="screen" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        var tpj = jQuery;
        var revapi204;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_204_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_204_1");
            } else {
                revapi204 = tpj("#rev_slider_204_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "persephone",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 0,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: false,
                            hide_onmobile: true,
                            hide_under: 600,
                            style: "metis",
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                            tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%"
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [700, 650, 600, 500],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55],
                        type: "mouse",
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "on",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>
    <!-- Main Javascript -->
    <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
    <script src="{{url ('public/template') }}/js/jquery.style.switcher.js"></script>
    <script src="{{url ('public/template') }}/js/main.js"></script>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
        !!WARINING THIS IS FOR DEMO ONLY YOU CAN DELETE IT 
         COLOR SWITCHER AND BOXED/WIDE VIEW STARTS
         -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <link href="{{url ('public/template') }}/css/color.css" rel="stylesheet" id="theme-switch">
    <!-- <div id="colour-variations" class="sleep"> <a class="option-toggle"><i class="fa fa fa-cog  fa-spin" aria-hidden="true"></i></a>
        <h3>Preset Colors</h3>
        <ul>
            <li>
                <a data-theme="basic " href="javascript: void(0);"></a>
            </li>
            <li>
                <a data-theme="red" href="javascript: void(0);"></a>
            </li>
            <li>
                <a data-theme="turquoise" href="javascript: void(0);"></a>
            </li>
            <li>
                <a data-theme="blue" href="javascript: void(0);"></a>
            </li>
            <li>
                <a data-theme="orange" href="javascript: void(0);"></a>
            </li>
            <li>
                <a data-theme="yellow" href="javascript: void(0);"></a>
            </li>
            <li>
                <a data-theme="pink" href="javascript: void(0);"></a>
            </li>
            <li>
                <a data-theme="purple" href="javascript: void(0);"></a>
            </li>
        </ul>
        <h3>Direction</h3>
        <ul>
            <li> <a data-theme="style-rtl" href="javascript: void(0);">RTL</a></li>
            <li> <a data-theme="ltr" href="javascript: void(0);">LTR</a></li>
        </ul>
    </div> -->
    <style>
        #colour-variations li a[data-theme=style-rtl],
        #colour-variations li a[data-theme=ltr] {
            border: 1px solid #ccc;
            padding: 10px;
            width: auto;
            height: auto;
        }

        #colour-variations {
            padding: 10px;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            width: 140px;
            position: fixed;
            left: 0;
            top: 160px;
            z-index: 999999;
            background: #fff;
            border-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -ms-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
        }

        #colour-variations.sleep {
            margin-left: -140px;
        }

        #colour-variations h3 {
            text-align: center;
            ;
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #777;
            margin: 0 0 10px 0;
            padding: 0;
            ;
        }

        #colour-variations ul,
        #colour-variations ul li {
            padding: 0;
            margin: 0;
        }

        #colour-variations ul {
            margin-bottom: 20px;
            float: left;
        }

        #colour-variations li {
            list-style: none;
            display: inline;
        }

        #colour-variations li a {
            width: 20px;
            height: 20px;
            position: relative;
            float: left;
            margin: 5px;
        }

        #colour-variations li a[data-theme=style] {
            background: #fff;
            border: 1px solid #ccc
        }

        #colour-variations li a[data-theme=red] {
            background: #FA5555;
        }

        #colour-variations li a[data-theme=turquoise] {
            background: #27E1CE;
        }

        #colour-variations li a[data-theme=blue] {
            background: #2772DB;
        }

        #colour-variations li a[data-theme=orange] {
            background: #FF7844;
        }

        #colour-variations li a[data-theme=yellow] {
            background: #FCDA05;
        }

        #colour-variations li a[data-theme=pink] {
            background: rgb(251, 137, 155);
        }

        #colour-variations li a[data-theme=purple] {
            background: #7045FF;
        }

        #colour-variations a[data-layout=boxed],
        #colour-variations a[data-layout=wide] {
            padding: 2px 0;
            width: 48%;
            border: 1px solid #ededed;
            text-align: center;
            color: #777;
            display: block;
        }

        #colour-variations a[data-layout=boxed]:hover,
        #colour-variations a[data-layout=wide]:hover {
            border: 1px solid #777;
        }

        #colour-variations a[data-layout=boxed] {
            float: left;
        }

        #colour-variations a[data-layout=wide] {
            float: right;
        }

        .option-toggle {
            position: absolute;
            right: 0;
            top: 0;
            margin-top: 5px;
            margin-right: -30px;
            width: 30px;
            height: 30px;
            background: #8dc63f;
            text-align: center;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            color: #fff;
            cursor: pointer;
            -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -ms-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
        }

        .option-toggle i {
            top: 5px;
            position: relative;
            font-size: 20px;
        }

        .option-toggle:hover,
        .option-toggle:focus,
        .option-toggle:active {
            color: #fff;
            text-decoration: none;
            outline: none;
        }
    </style>
    <script>
        jQuery(function() {
            jQuery('#colour-variations ul').styleSwitcher({
                defaultThemeId: 'theme-switch',
                hasPreview: false,
                cookie: {
                    expires: 30,
                    isManagingLoad: true
                }
            });
            jQuery('.option-toggle').click(function() {
                jQuery('#colour-variations').toggleClass('sleep');
            });
            if (jQuery.cookie('layoutCookie') != '') {
                jQuery('body').addClass(jQuery.cookie('layoutCookie'));
            }
        });
    </script>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
        !!WARINING THIS IS FOR DEMO ONLY YOU CAN DELETE IT 
         COLOR SWITCHER AND BOXED/WIDE VIEW END
    -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
</body>

</html>