<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" media="screen" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" media="screen" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
      <script src="https://cdn.statuspage.io/vendor/moment-timezone-with-data.js"></script>
      <script src="https://cdn.statuspage.io/vendor/jstz.js"></script>
      <script src="https://cdn.statuspage.io/vendor/localtimes.js"></script>

    <style>
      
    </style>
    <style>
  .plain.error-page-wrapper {
    font-family: 'Source Sans Pro', sans-serif;
    background-color:#6355bc;
    padding:0 5%;
    position:relative;
  }

  .plain.error-page-wrapper .content-container {
    -webkit-transition: left .5s ease-out, opacity .5s ease-out;
    -moz-transition: left .5s ease-out, opacity .5s ease-out;
    -ms-transition: left .5s ease-out, opacity .5s ease-out;
    -o-transition: left .5s ease-out, opacity .5s ease-out;
    transition: left .5s ease-out, opacity .5s ease-out;
    max-width:400px;
    position:relative;
    left:-30px;
    opacity:5;
  }

  .plain.error-page-wrapper .content-container.in {
    left: 0px;
    opacity:5;
  }

  .plain.error-page-wrapper .head-line {
    transition: color .2s linear;
    font-size:48px;
    line-height:60px;
    color:rgba(255,255,255,.2);
    letter-spacing: -1px;
    margin-bottom: 5px;
  }
  .plain.error-page-wrapper .subheader {
    transition: color .2s linear;
    font-size:36px;
    line-height:46px;
    color:#fff;
  }
  .plain.error-page-wrapper hr {
    height:1px;
    background-color: rgba(255,255,255,.2);
    border:none;
    width:250px;
    margin:35px 0;
  }
  .plain.error-page-wrapper .context {
    transition: color .2s linear;
    font-size:18px;
    line-height:27px;
    color:#fff;
  }
  .plain.error-page-wrapper .context p {
    margin:0;
  }
  .plain.error-page-wrapper .context p:nth-child(n+2) {
    margin-top:12px;
  }
  .plain.error-page-wrapper .buttons-container {
    margin-top: 45px;
    overflow: hidden;
  }
  .plain.error-page-wrapper .buttons-container a {
    transition: color .2s linear, border-color .2s linear;
    font-size:14px;
    text-transform: uppercase;
    text-decoration: none;
    color:#fff;
    border:2px solid white;
    border-radius: 99px;
    padding:8px 30px 9px;
    display: inline-block;
    float:left;
  }
  .plain.error-page-wrapper .buttons-container a:hover {
    background-color:rgba(255,255,255,.05);
  }
  .plain.error-page-wrapper .buttons-container a:first-child {
    margin-right:25px;
  }

  @media screen and (max-width: 485px) {
    .plain.error-page-wrapper .header {
      font-size:36px;
     }
    .plain.error-page-wrapper .subheader {
      font-size:27px;
      line-height:38px;
     }
    .plain.error-page-wrapper hr {
      width:185px;
      margin:25px 0;
     }

    .plain.error-page-wrapper .context {
      font-size:16px;
      line-height: 24px;
     }
    .plain.error-page-wrapper .buttons-container {
      margin-top:35px;
    }

    .plain.error-page-wrapper .buttons-container a {
      font-size:13px;
      padding:8px 0 7px;
      width:45%;
      text-align: center;
    }
    .plain.error-page-wrapper .buttons-container a:first-child {
      margin-right:10%;
    }
  }
</style>
    <style>

    .background-color {
      background-color: rgba(196, 18, 18, 1) !important;
    }


    .primary-text-color {
      color: #FFFFFF !important;
    }

    .secondary-text-color {
      color: rgba(255, 255, 255, 1) !important;
    }

    .sign-text-color {
      color: #FFBA00 !important;
    }

    .sign-frame-color {
      color: #343C3F;
    }

    .pane {
      background-color: #FFFFFF !important;
    }

    .border-button {
      color: #FFFFFF !important;
      border-color: #FFFFFF !important;
    }
    .button {
      background-color: #FFFFFF !important;
      color: #FFFFFF !important;
    }

    .shadow {
      box-shadow: 0 0 60px #000000;
    }

</style>
  </head>
  <body class="plain error-page-wrapper background-color background-image">
    <div class="container pull-right">
<img src="{{url('/src/admin.png')}}" alt="Smiley face" >
</div>
    <div class="content-container pull-left">
  <div class="head-line secondary-text-color">
    YOU ARE NOT OUR BOSSES!
  </div>
  <div class="subheader primary-text-color">
    <p>Your id was found as a foreign or a customer account
    by our AI Engine. If you are admins please contact us at afwan70@gmail.com</p>
  </div>
  <hr>
  <div class="clearfix"></div>
  <div class="context primary-text-color">
    
    <p>Sorry for the inconvenience. This premises only allowed by admins.</p>

  </div>
  <div class="buttons-container">
		<a class="border-button" href="{{url('/')}}" target="_self">Go To Homepage</a>
	</div>


</div>


    <script>
      
      var ep = new ErrorPage('body', "maintenance", "plain");
      ep.initialize();

      // hack to make sure content stays centered >_<
      $(window).on('resize', function() {
        $('body').trigger('resize')
      });

    </script>

    
  </body>
</html>
