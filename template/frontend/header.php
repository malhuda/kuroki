<?php 
require "loginheader.php";
$title= "";

require_once "./includes/gettitle.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>KurokiX | <?php echo $title; ?></title>

    <!-- Bootstrap core and other CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/dash.css" rel="stylesheet">
    <link href="/assets/css/scroller.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elemdnts and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->


  </head>

  <body>
    <!-- Dash Navbar Top 
    Available versions: dnl-visible, dnl-hidden -->
    <nav class="navbar navbar-static-top dash-navbar-top dnl-visible">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dnt-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-ellipsis-v"></span>
          </button>
          <button class="dnl-btn-toggle">
            <span class="fa fa-bars"></span>
          </button>
            <a class="navbar-brand" href="/">Kuroki<i class="animated rollIn fa fa-star"></i> <span>beta</span></a>
        </div>
      
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="dnt-collapse">
          <!-- This dropdown is for avatar -->
        <ul class="nav navbar-nav navbar-right">
      <li><a href="#" style="padding: 12px 20px 0px 10px;"><img class="hidden-xs" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture?type=large" style="border-radius:2px;height: 30px; width: 30px;  margin-right: 10px;" /><?php echo $_SESSION['FULLNAME']; ?></a>
          </li>
    </ul> 
          <form method="get" action="/" class="navbar-form navbar-right dnt-navbar-form" role="search">
            <div class="form-group">
              
              <input name="find" type="text" class="form-control" placeholder="Type your visual novel, ost, doujin, or anything...">
            </div>
            <button type="submit" class="btn"><span class="fa fa-search"></span></button>
          </form>  
          <!-- This dropdown is for normal links -->
           <ul class="nav navbar-nav navbar-right">
           
          </ul>     
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav> <!-- /.navbar -->
    <?php include "./includes/getsidebarmenu.php" ?>
