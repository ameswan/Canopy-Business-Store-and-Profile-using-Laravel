<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CanopyMe - Startup for Canopy</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::to('src/modernbiz/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::to('src/modernbiz/css/modern-business.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::to('src/modernbiz/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" style="background-color: #FC7863;" role="navigation">
        <div class="container" style="color: white;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"style="color:white">Axis Tech</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div style="color:white"class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" >
                    <li>
                        <a href="/about"style="color:black">About</a>
                    </li>
                    <li>
                        <a href="/shop"style="color:black">Shop</a>
                    </li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black">Our Specialities <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                         
                            <li>
                                <a href="/products"style="color:white;background-color: black;">Product</a>
                            </li>
                            <li>
                                <a href="/services"style="color:white;background-color: black;">Service</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"style="color:black">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/news"style="color:white;background-color: black;">News</a>
                            </li>
                            <li>
                                <a href="/portfolio"style="color:white;background-color: black;">Portfolio & Achievement</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="/contact"style="color:black">Contact Us!</a>
                    </li>
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                    <small>It's all about us!</small>
                </h1>
             
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="{{ URL::to('src/modernbiz/images/pic16.jpg') }}" alt="">
            </div>
            <div class="col-md-6">
                <h2>About Axis Tech</h2>
                <p>We are a small family owned business in Perak. We specialize in providing tents, supplies, and party accessories for your next event. We’ve been providing services to satisfied customers in the region for over 30 years. No wedding, party, birthday, ceremony or community event is too large or too small. In the unlikely event that All Event Party Rental does not have what you are looking for, we will get it or help you find it. Our commitment to customer service has distinguished us in this area. We look forward to the opportunity to make your next event special.</p>
                <p></p>
                <p></p>
            </div>
        </div>
        <!-- /.row -->

        

        <!-- Our Customers -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Customers</h2>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ URL::to('src/modernbiz/images/pic01.jpg') }}" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ URL::to('src/modernbiz/images/pic02.jpg') }}" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ URL::to('src/modernbiz/images/pic03.jpg') }}" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ URL::to('src/modernbiz/images/pic04.jpg') }}" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ URL::to('src/modernbiz/images/pic05.jpg') }}" alt="">
            </div>
            
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy;CanopyMe 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
 <!-- jQuery -->
    <script src="{{ URL::to('src/modernbiz/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::to('src/modernbiz/js/bootstrap.min.js') }}"></script>


</body>

</html>
