<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="templatemo">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Amena  HTML CSS Template</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/templatemo-style.css">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->

<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</div>
<br/>

<!-- Navigation Section -->

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
     <div class="container">

          <!-- navbar header -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="{{route('about')}}" class="navbar-brand">Amena Samra </a>
          </div>

          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('Home')}}" class="smoothScroll">Home</a></li>
                    <li><a href="{{route('about')}}" class="smoothScroll">About Me</a></li>
                    <li><a href="{{route('experiences')}}" class="smoothScroll">Experiences</a></li>
          
                    <li><a href="{{route('contact')}}" class="smoothScroll">Contact</a></li>
               </ul>
          </div>

     </div>
</div>
<br/>
<br/>
@yield('content')










<!-- Quotes Section -->

<section id="quotes" class="parallax-section">
     <p style="color:white; font-size :50px" ; > Welcome to My Website </p>
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <i class="wow fadeInUp fa fa-star" data-wow-delay="0.6s"></i>
                    <h2 class="wow fadeInUp" data-wow-delay="0.8s"></h2>
                    <p class="wow fadeInUp" data-wow-delay="1s"></p>
               </div>


          </div>
     </div>

     <!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                         <p>
                    
                    | Design: <a href="http://www.google.com/+templatemo" target="_parent">templatemo</a></p>
                    </div>
                    <ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                         <li><a href="#" class="fa fa-dribbble"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
               
          </div>
     </div>
</footer>


</section>





<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>