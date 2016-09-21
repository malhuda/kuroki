<?php
session_start();
error_reporting(-1);

require_once 'includes/lib/Mobile_Detect.php';
$detect = new Mobile_Detect;
if ( $detect->isMobile() ) {
 header('location: /mobile');
}


     if(isset($_GET['bookit'])) {
        include 'template/frontend/bookmarkit.php';
    }
if (isset($_GET['dashboard'])) {
    switch ($_GET['dashboard']) {
        case 'index':
            include_once 'template/frontend/dashboard.php';
            break;
        case 'bookmark':
            include_once 'template/frontend/bookmark.php';
            break;
        case 'add_b':
            include_once 'template/frontend/bookmarklet.php';
            break;
            die();
    }
    die();



} else {
    if (isset($_GET['sys'])) {
        switch ($_GET['sys']) {
            case 'connect':
                include_once 'scope.php';
                die();
                break;
            case 'logout':
                include_once 'template/frontend/logout.php';
                die();
                break;
        }
    }
    if (isset($_GET['find'])) {
        $key = $_GET['find'];
        header("Location: /dashboard/search/" . $key);
        die();
    }
    if (isset($_SESSION['FBID'])) {
        header("location: /dashboard");
    }


   
?>




<!DOCTYPE html>

<head>

   <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>KurokiX</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/home.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">


    <header class="home">
        <div class="header-content">
            <div class="header-content-inner">
<div class=" col-md-6 col-md-offset-1 col-sm-8 col-sm-offset-2 animated fadeIn">
                    <div class="panel-heading">


                 
                <h1 id="homeHeading" class="animated fadeIn">Kuroki<i class="animated  rollIn fa fa-star"></i></h1>
                <hr>
                <?php
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case '100':
                echo '<p style="margin:0">
                Sorry, but you must be a verified member. Please contact admin
                </p>';
                break;
            case '101':
                echo '<p style="margin:0">
                Please contact admin to verify your account
                </p>';
                break;
            case '102':
                echo '<p style="margin:0">
                Please login, or you are not permitted to do this action
                </p>';
                break;
        }
    }
?> 
                       
                    </div>     



                         <div class=" col-md-7" style="margin-bottom:20px">
                 <a href="/connect" class="btn btn-lg btn-primary btn-block">Login with Facebook</a> 
                </div>
               
                     




                        



                    </div>

                    </div>
    </header>

  
      <!-- Javascript Libraries -->
         <script src="/assets/js/bootstrap.min.js"></script>  
       
</body>

</html>
<?php
}
?>




