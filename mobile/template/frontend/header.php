<?php 
require "loginheader.php";
$title= "";

require_once "../includes/gettitle.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>KurokiX | <?php echo $title; ?></title>

    <!-- Bootstrap core and other CSS -->
    <link href="/assets/css/kurokimobi.min.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elemdnts and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

  </head>

<body id="kurokidashboard">



   <nav class="main-nav" id="main-nav">
  
  <div class="close">
   <div class="title">
        Kuroki<i class="fa fa-star"></i>
  <a href="#" id="nav-c" class="close-menu">
      <i class="fa fa-close" aria-hidden="true"></i>
    </a>   
    </div>
  <div class="myinfo">
  <div class="image">
  <img src="//graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture?type=large"></div>
  <div class="name"><?php echo $_SESSION['FULLNAME']; ?></div>
  </div>
  </div>  
  <div class="menu">
  <a href="/logout">Logout</a>
  </div>

</nav>
<div class="entirecontent">

    <header>
        <div class="title">
        Kuroki<i class="fa fa-star"></i>
    
    <div class="panelmenu">
    <a href="#main-nav" id="nav-o" class="open-menu">
      ☰
    </a>
     
    </div>
  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">sauce</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="/mobile/index.php?dashboard=index&source=girlcelly">Girlcelly</a>
    <a href="/mobile/index.php?dashboard=index&source=moonkaini">Moonkaini</a>
    <a href="/mobile/index.php?dashboard=index&source=hgame">H-Game123</a>
    <a href="/mobile/index.php?dashboard=index&source=hikarinoakari">HikarinoAkari</a>
  </div>
</div>
  
  

       
        </div>
    </header>  



    
    