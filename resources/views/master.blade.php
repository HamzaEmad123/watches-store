<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>WATCH - Store</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Product Landing Page" name="keywords">
        <meta content="Product Landing Page" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400|Quicksand:500,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Start -->
        <div id="nav">
            <div class="container-fluid">
                <div id="logo" class="pull-left">
                    <a href="{{ route('index') }}"><img src="img/logo.png" alt="Logo" /></a>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('cart') }}">Cart</a></li>
                    
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Nav End -->
        
@yield('content')


        <!-- Footer Start -->
        <div id="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>&copy; Copyright <a href="http://calmandcode.com">CalmAndCode</a>. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6">
                        <p>Template by <a href="">CalmAndCode</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/menuspy/menuspy.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
