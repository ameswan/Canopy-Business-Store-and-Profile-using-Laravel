<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.title') 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
                <a class="navbar-brand" href="/"style="color:black">Axis Tech</a>
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

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('{{ URL::to('pic1.jpg') }}');"></div>
                <div class="carousel-caption">
                  
                    <h2>Did you want to see our awesomeness product and services? Go now and decide which one suits you!</h2>
                <button type="button" class="btn btn-primary-outline"> <a href="/shop">Shop Now!</a></button>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('{{ URL::to('pic2.jpg') }}');"></div>
                <div class="carousel-caption">
                    <h2>Our writter share stories about our canopy services everyday for you!</h2>
                <button type="button" class="btn btn-primary-outline"><a href="/news">Read our News!</a></button>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('{{ URL::to('pic3.jpg') }}');"></div>
                <div class="carousel-caption">
                    <h2>Register with us! Who knows we are good enough to give our customer a loyalty discount!</h2>
                <button type="button" class="btn btn-primary-outline"><a href="/user/signup">Register to AxisTech! </a></button>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Axis Tech
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Trusted Company</h4>
                    </div>
                    <div class="panel-body">
                        <p>As a small company, Axis Tech team strives to be the premier party rental and event solution company in Perak, Malaysia. We have the style, selection and service you deserve - call us today to speak to one of our event rental/planning specialists!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Tenting</h4>
                    </div>
                    <div class="panel-body">
                        <p>Let Axis Tech team members help you create an unforgettable event with our great selection of tent & canopy rentals. Not sure what size tent you need? Please call us today to discuss your tent rental. Our team will create the perfect preparation for any wedding or special event!</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Linen</h4>
                    </div>
                    <div class="panel-body">
                        <p>Axis Tech carries a variety of table linens, napkins, and table skirts including specialty linens such as Damask, Lamour, Satins, Organza, and Pintuck fabrics. Our party table linen rentals will add style and sophistication to any wedding or special event! Our inventory is expanding and to be appreciated!</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->



        <!-- Footer -->
        
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CanopyMe 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{ URL::to('src/modernbiz/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::to('src/modernbiz/js/bootstrap.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
