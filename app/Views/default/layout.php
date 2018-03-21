<?php use Framework\App;?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Web Store Theme - Free CSS Templates</title>
    <meta name="keywords" content="web store, free templates, website templates, CSS, HTML" />
    <meta name="description" content="Web Store Theme - free CSS template provided by templatemo.com" />
    <link href="/web/css/templatemo_style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="/web/css/ddsmoothmenu.css" />

<!--    <script type="text/javascript" src="/web/js/ddsmoothmenu.js"></script>-->

<!--    <script type="text/javascript">-->
<!---->
<!--        ddsmoothmenu.init({-->
<!--            mainmenuid: "templatemo_menu", //menu DIV id-->
<!--            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"-->
<!--            classname: 'ddsmoothmenu', //class added to menu's outer DIV-->
<!--            //customtheme: ["#1c5a80", "#18374a"],-->
<!--            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]-->
<!--        })-->
<!---->
<!--    </script>-->

    <link rel="stylesheet" type="text/css" href="/web/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="/web/css/kladr.css" />
<!--    <script language="javascript" type="text/javascript" src="/web/js/mootools-1.2.1-core.js"></script>-->
<!--    <script language="javascript" type="text/javascript" src="/web/js/mootools-1.2-more.js"></script>-->
<!--    <script language="javascript" type="text/javascript" src="/web/js/slideitmoo-1.1.js"></script>-->
<!--    <script language="javascript" type="text/javascript">-->
<!--        window.addEvents({-->
<!--            'domready': function(){-->
<!--                /* thumbnails example , div containers */-->
<!--                new SlideItMoo({-->
<!--                    overallContainer: 'SlideItMoo_outer',-->
<!--                    elementScrolled: 'SlideItMoo_inner',-->
<!--                    thumbsContainer: 'SlideItMoo_items',-->
<!--                    itemsVisible: 5,-->
<!--                    elemsSlide: 2,-->
<!--                    duration: 200,-->
<!--                    itemsSelector: '.SlideItMoo_element',-->
<!--                    itemWidth: 171,-->
<!--                    showControls:1});-->
<!--            },-->
<!---->
<!--        });-->
<!---->
<!--        function clearText(field)-->
<!--        {-->
<!--            if (field.defaultValue == field.value) field.value = '';-->
<!--            else if (field.value == '') field.value = field.defaultValue;-->
<!--        }-->
<!--    </script>-->

</head>

<body id="home">

<div id="templatemo_wrapper">
    <div id="templatemo_header">
        <div id="site_title"><h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1></div>

        <div id="header_right">
            <ul id="language">
                <li><a><img src="/web/images/usa.png" alt="English" /></a></li>
                <li><a><img src="/web/images/china.png" alt="Chinese" /></a></li>
                <li><a><img src="/web/images/germany.png" alt="Germany" /></a></li>
                <li><a><img src="/web/images/india.png" alt="Indian" /></a></li>
            </ul>
            <div class="cleaner"></div>
            <div id="templatemo_search">
                <form action="#" method="get">
                    <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
        </div> <!-- END -->
    </div> <!-- END of header -->

    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.html" class="selected">Home</a></li>
            <li><a href="products.html">Products</a>
                <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
                </ul>
            </li>
            <li><a href="about.html">About</a>
                <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
                    <li><a href="#">Sub menu 4</a></li>
                    <li><a href="#">Sub menu 5</a></li>
                </ul>
            </li>
            <li><a href="faqs.html">FAQs</a></li>
            <li><a href="checkout.html">Checkout</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <br style="clear: left" />
    </div>

    <?include App::$template?>

    <div id="templatemo_footer">
        <div class="col col_16">
            <h4>Categories</h4>
            <ul class="footer_menu">
                <li><a href="#">Aenean et dolor diam</a></li>
                <li><a href="#">Aenean pulvinar</a></li>
                <li><a href="#">Cras bibendum auctor</a></li>
                <li><a href="#">Donec sodales bibendum</a></li>
            </ul>
        </div>
        <div class="col col_16">
            <h4>Pages</h4>
            <ul class="footer_menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
        <div class="col col_16">
            <h4>Partners</h4>
            <ul class="footer_menu">
                <li><a href="http://www.flashmo.com/">Free Flash Templates</a></li>
                <li><a href="http://www.templatemo.com/">Free CSS Templates</a></li>
                <li><a href="http://www.koflash.com/">Website Gallery</a></li>
                <li><a href="http://www.webdesignmo.com/blog/">Web Design Resources</a></li>
            </ul>
        </div>
        <div class="col col_16">
            <h4>Social</h4>
            <ul class="footer_menu">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">LinkedIn</a></li>
            </ul>
        </div>
        <div class="col col_13 no_margin_right">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        </div>

        <div class="cleaner h40"></div>
        <center>
            Copyright © 2048 Your Company Name | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </center>
    </div> <!-- END of footer -->

</div>
<script type="text/javascript" src="/web/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="/web/js/kladr.js"></script>

<script type="text/javascript" src="/web/js/script.js"></script>
</body>
</html>