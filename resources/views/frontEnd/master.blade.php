<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>  @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Staple Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Custom Theme files -->
        <link href="{{asset('public/frontEnd/')}}//css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="{{asset('public/frontEnd/')}}//css/style.css" type="text/css" rel="stylesheet" media="all">  
        <link href="{{asset('public/frontEnd/')}}//css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
        <link rel="stylesheet" href="{{asset('public/frontEnd/')}}//css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
        <!-- //Custom Theme files --> 
        <!-- js -->
        <script src="{{asset('public/frontEnd/')}}//js/jquery-2.2.3.min.js"></script>  
        <!-- //js -->
        <!-- web-fonts -->   
        <link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
        <link href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
        <!-- //web-fonts -->
    </head>
    <body> 
        <!-- banner -->
        <div class="banner">
            <!-- header -->
            <div class="header">
                @include('frontEnd.include.headerMenu')
                <!-- //header-one -->    
                <!-- navigation -->
         @include('frontEnd.include.mainMenu')

                <!-- //navigation --> 
            </div>
            <!-- //header-end --> 
            <!-- banner-text -->
            <div class="banner-text">	
                <div class="container">
                    <h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2>
                    @yield('search')
                </div>
            </div>
        </div>
        
       

        <!-- //banner -->   
  @yield('mainContent')
  <!-- dishes -->

                 @include('frontEnd.include.footerSlider')

        <!-- subscribe -->
       @include('frontEnd.include.subscribe')
        <!-- //subscribe --> 
        <!-- footer -->

               @include('frontEnd.include.footer')

        
        
        
        <!-- //footer --> 
        <!-- cart-js -->
        <script src="{{asset('public/frontEnd/')}}//js/minicart.js"></script>
        <script>
w3ls.render();

w3ls.cart.on('w3sb_checkout', function (evt) {
    var items, len, i;

    if (this.subtotal() > 0) {
        items = this.items();

        for (i = 0, len = items.length; i < len; i++) {
        }
    }
});
        </script>  
        <!-- //cart-js -->	
        <!-- Owl-Carousel-JavaScript -->
        <script src="{{asset('public/frontEnd/')}}//js/owl.carousel.js"></script>
        <script>
$(document).ready(function () {
    $("#owl-demo").owlCarousel({
        items: 3,
        lazyLoad: true,
        autoPlay: true,
        pagination: true,
    });
});
        </script>
        <!-- //Owl-Carousel-JavaScript -->  
        <!-- start-smooth-scrolling -->
        <script src="{{asset('public/frontEnd/')}}//js/SmoothScroll.min.js"></script>  
        <script type="text/javascript" src="{{asset('public/frontEnd/')}}//js/move-top.js"></script>
        <script type="text/javascript" src="{{asset('public/frontEnd/')}}//js/easing.js"></script>	
        <script type="text/javascript">
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();

        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
});
        </script>
        <!-- //end-smooth-scrolling -->	  
        <!-- smooth-scrolling-of-move-up -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //smooth-scrolling-of-move-up --> 
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{asset('public/frontEnd/')}}//js/bootstrap.js"></script>
    </body>
</html>