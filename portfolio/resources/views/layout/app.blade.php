<!DOCTYPE html>
 <html lang="zxx">

    
<!-- Mirrored from ui-themez.smartinnovates.net/items/zain/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2023 05:36:01 GMT -->
<head>

    	<!-- Metas -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="keywords" content="HTML5 Template Zain onepage themeforest" />
		<meta name="description" content="Zain - Onepage Multi-Purpose HTML5 Template" />
		<meta name="author" content="" />

		<!-- Title  -->
		<title>H A S A N</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('img/favicon.png')}}" />

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

		<!-- Plugins -->
		<link rel="stylesheet" href="{{asset('css/plugins.css')}}" />

        <!-- Core Style Css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    </head>

    <body>

        <!-- =====================================
    	==== Start Loading -->

    	<div class="loading">
            <div class="gooey">
              <span class="dot"></span>
              <div class="dots">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
        </div>
        
    	<!-- End Loading ====
    	======================================= -->

            @include('layout.header');

            @yield('content');

            @include('layout.footer');






         <!-- jQuery -->
         <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
         <script src="js/jquery-migrate-3.0.0.min.js"></script>
 
         <!-- popper.min -->
         <script src="{{asset('js/popper.min.js')}}"></script>
 
         <!-- bootstrap -->
         <script src="{{asset('js/bootstrap.min.js')}}"></script>
 
         <!-- scrollIt -->
         <script src="{{asset('js/scrollIt.min.js')}}"></script>
 
         <!-- animated.headline -->
         <script src="{{asset('js/animated.headline.js')}}"></script>
 
         <!-- jquery.magnific-popup js -->
         <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
 
         <!-- stellar js -->
         <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
 
         <!-- isotope.pkgd.min js -->
         <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
 
         <!-- validator js -->
         <script src="{{asset('js/validator.js')}}"></script>
 
         <!-- custom scripts -->
         <script src="{{asset('js/scripts.js')}}"></script>
 
     </body>
 
 <!-- Mirrored from ui-themez.smartinnovates.net/items/zain/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2023 05:36:09 GMT -->
 </html>