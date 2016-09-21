<?php include "header.php" ?>    
    <!-- Enter your page content below here
    Available navbar effects: dnl-push, dnl-overlay
    Available navbar versions: dnl-visible, dnl-hidden 
    Available content effects: content-opacity -->
    <div class="content-wrap dnl-visible content-opacity" data-effect="dnl-overlay">
      <div class="container-fluid">
      
      <?php if(isset($_GET['smartsearch'])) {
        include "./source/smartsearch.php";
      } else if(isset($_GET['routefinder'])) {
        include "./source/routefinder.php";
      }
       else {
        include "../includes/getlist.php";
      }
      ?>
       </div>
    </div> <!-- /.content-wrap -->
<?php include "footer.php" ?>    
    
     
    