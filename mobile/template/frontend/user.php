<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:index.php?dashboard=index");
}
?>

<?php if(@$_GET['auth']) { ?>
<!DOCTYPE html>

<head>

   <!-- Meta, title, CSS, favicons, etc. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>KurokiX</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/home.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>

</style>
</head>

<body id="page-top">


    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <div class=" col-md-6 col-md-offset-1 col-sm-8 col-sm-offset-2" >
                    <div class="panel-heading">


                <?php switch($_GET['auth']) {

                case 'login': ?>    
                <h1 id="homeHeading">Login</h1>
                <hr>
                       
                    </div>     

                    <div class="panel-body" >

                        <div id="message" style=" border-radius: 0;"></div>


                        <form class="form-horizontal" name="form1" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="myusername" id="myusername" value="" placeholder="username">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input  type="password" class="form-control" name="mypassword" id="mypassword" placeholder="password">
                                    </div>
                                    

                        


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button id="submit" href="#" class="btn btn-lg btn-primary btn-block">Login</button> 
                                    

                                    </div>
                                </div>


                              
                            </form>     



                        </div>




                        <?php break; 
                        case 'invite':

                        ?>
                <h1 id="homeHeading">Invite</h1>
                <hr>
                       
                    </div>     

                    <div class="panel-body" >

                        <div id="message-signup" style=" border-radius: 0;"></div>


                        <form class="form-horizontal" name="form1" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="newuser" id="newuser" value="" placeholder="username">                                        
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-facebook-square"></i></span>
                                        <input type="text" class="form-control" name="email" id="email" value="" placeholder="facebook username">                                        
                                    </div>        


                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input  type="password" class="form-control" name="password1" id="password1" placeholder="password">
                                    </div>
                           
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input  type="password" class="form-control" name="password2" id="password2" placeholder="retype password">
                                    </div>
                                    

                        


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button name="Submit" id="daftar" class="btn btn-lg btn-primary btn-block" type="submit">Get Invitation</button>
 
                                    

                                    </div>
                                </div>


                              
                            </form>     



                        </div>



                        <?php break; } ?>




                    </div>  

              
            </div>
        </div>
    </header>

  
      <!-- Javascript Libraries -->
        <script src="assets/js/jquery-2.2.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>  
        <script src="assets/js/loginsys.js"></script>
        <script src="assets/js/signup.js"></script>

 

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="js/functions.js"></script>
</body>

</html>

<?php } else {header('location: index.php');} ?>
