<?php
session_start();
include_once('db/connect.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Web bán điện máy</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Main css -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up-box -->
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu style -->
    <!-- //Custom-Files -->

    <!-- web fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //web fonts -->

    <!-- CSS -->
    <link rel="stylesheet" href="./css/Banner.css">
    <link rel="stylesheet" href="./css/CartSlice.css">
    <link rel="stylesheet" href="./css/Header.css">
    <link rel="stylesheet" href="./css/TrendTop.css">
    <link rel="stylesheet" href="./css/TrendBotom.css">
    <link rel="stylesheet" href="./css/News.css">
    <link rel="stylesheet" href="./css/introduce.css">
    <link rel="stylesheet" href="./css/men.css">
    <link rel="stylesheet" href="./css/ladies.css">
    <link rel="stylesheet" href="./css/blogs.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/like.css">
    <link rel="stylesheet" href="./css/CartShopping.css">
    <link rel="stylesheet" href="./css/login.css">



    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CDN -->
    <script src="https://kit.fontawesome.com/ce3a7ad08a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</head>

<body>
    <?php
    include('./Header/topbar_home.php');
    if (isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
    } else {
        $tam = '';
    }
    if ($tam == 'trentop') {
        include('./Components/Trend/TrendTop.php');
    } elseif ($tam == 'trenbottom') {
        include('./Components/Trend/TrendBotom.php');
    } elseif ($tam == 'danhmuc') {
        include('include/danhmuc.php');
    } elseif ($tam == 'introduce') {
        include('./Components/Pages/Introduce/introduce.php');
    } elseif ($tam == 'men') {
        include('./Components/Pages/Men/men.php');
    } elseif ($tam == 'ladies') {
        include('./Components/Pages/Ladies/ladies.php');
    } elseif ($tam == 'blogs') {
        include('./Components/Pages/Blogs/blogs.php');
    } elseif ($tam == 'contact') {
        include('../Components/Pages/Contact/contact.php');
    } elseif ($tam == 'chitietsp') {
        include('./Controllers/detaill/chitietsp.php    ');
    } elseif ($tam == 'contact') {
        include('./contact.php');
    } elseif ($tam == 'giohang') {
        include('./Controllers/carts/giohang.php');
    } elseif ($tam == 'timkiem') {
        include('./Controllers/search/timkiem.php');
    } elseif ($tam == 'tintuc') {
        include('./Components/kienthuc/tintuc.php');
    } elseif ($tam == 'about') {
        include('./Components/Answers/About/about.php');
    } elseif ($tam == 'contact') {
        include('./Components/Pages/Contact/contact.php');
    } elseif ($tam == 'terms') {
        include('./Components/Answers/Terms/terms.php');
    } elseif ($tam == 'privacy') {
        include('./Components/Answers/Privacy/privacy.php');
    } elseif ($tam == 'chitiettin') {
        include('include/chitiettin.php');
    } elseif ($tam == 'xemdonhang') {
        include('include/xemdonhang.php');
    } elseif ($tam == 'checkout') {
        include('./Controllers/payment/checkout.php');
    } else {
        include('./Components/Slide/slider.php');
        include('./Components/Trend/TrendTop.php');
        include('./Components/cart/cart_top.php');
        include('./Components/Trend/TrendBotom.php');
        include('./Components/cart/cart_bottom.php');
        include('./Components/News/News.php');
    }

    include('./Header/footer.php');

    ?>
    <!-- js-files -->
    <!-- jquery -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //jquery -->

    <!-- nav smooth scroll -->
    <script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
    </script>
    <!-- //nav smooth scroll -->

    <!-- popup modal (for location)-->
    <script src="js/jquery.magnific-popup.js"></script>
    <script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
    </script>
    <!-- //popup modal (for location)-->

    <!-- cart-js -->
    <!--  <script src="js/minicart.js"></script> -->
    <script>
    paypals.minicarts
        .render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

    paypals.minicarts.cart.on('checkout', function(evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
    </script>
    <!-- //cart-js -->

    <!-- password-script -->
    <script>
    window.onload = function() {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
    </script>
    <!-- imagezoom -->
    <script src="js/imagezoom.js"></script>
    <!-- //imagezoom -->

    <!-- flexslider -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

    <script src="js/jquery.flexslider.js"></script>
    <script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
    </script>
    <!-- //FlexSlider-->
    <!-- //password-script -->

    <!-- scroll seller -->
    <script src="js/scroll.js"></script>
    <!-- //scroll seller -->

    <!-- smoothscroll -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
    $(document).ready(function() {
        /*
        var defaults = {
        	containerID: 'toTop', // fading element id
        	containerHoverID: 'toTopHover', // fading element hover id
        	scrollSpeed: 1200,
        	easingType: 'linear' 
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
    </script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- //js-files -->
</body>

</html>