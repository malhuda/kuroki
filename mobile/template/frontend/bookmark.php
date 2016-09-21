<?php 
require "loginheader.php";
require "./includes/functions_bookmark.php";
$shares = mysqli_query($connection, "SELECT * FROM bookmark  WHERE username='".$_SESSION['FBID']."' ORDER by id");
include 'header.php';
?>



  <div class="row">

       
        <div class="list-group">


      <?php 
      while($row=mysqli_fetch_assoc($shares))
{
	// Shortening the title if it is too long:
	if(mb_strlen($row['title'],'utf-8')>80)
		$row['title'] = mb_substr($row['title'],0,80,'utf-8').'..';
 ?>


          <a href="?dashboard=index&source=smartsearch%2Fall&find=<?php echo $row['title']; ?>" class="list-group-item">
                <div class="media col-md-2">
                    <figure class="pull-left">
                    <div class="img-responsive-atur">
                        <img class="lazy img-responsive" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-original="<?php echo $row['image']; ?>" style="padding-bottom:20px; width:100%">
                        </div>
                    </figure>
                </div>
                <div class="col-md-6">

                    <h4 class="list-group-item-heading"> <?php echo $row['title']; ?> </h4>
                
                </div>
          </a> 



          <?php } ?>     
        </div>


       </div>
    </div> <!-- /.content-wrap -->
    
<?php include 'footer.php'; ?>     