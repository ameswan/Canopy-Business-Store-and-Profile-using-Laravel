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
                <h1 class="page-header">Contact
                    <small>Contact us whenever you want</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0738621692826!2d101.48226831401948!3d3.074947654463634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc52ff145878d5%3A0xec7c439e0b483976!2sJalan+Kristal+7%2F70%2C+Seksyen+7%2C+40000+Shah+Alam%2C+Selangor!5e0!3m2!1sen!2smy!4v1497714643410" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    CanopyMe Sdn. Bhd.,<br>Jalan Kristal, Seksyen 7,<br>Shah Alam, Selangor, Malaysia
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (010) 456-7890</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">amir07@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form action="mailto:rafieq1994@gmail.com" method="post" enctype="text/plain" name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

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


    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="{{ URL::to('src/modernbiz/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ URL::to('src/modernbiz/js/contact_me.js') }}"></script>

</body>

</html>
