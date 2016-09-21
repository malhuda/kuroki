<?php
include('curl.php');
// hgame


 if ($_GET['smartsearch']) { 
    $key=$_GET['find'];
    header("Location: /dashboard/search/$find"); } 


if(isset($_GET["find"])) {

  $html = file_get_html('http://h-game123.com/?search='.$_GET["find"]);
  // moonkaini
$url = 'https://moonkaini.blogspot.com/feeds/posts/default?orderby=published&max-results=1000&alt=json&q='.$_GET["find"];
$json= file_get_contents($url);

$data = json_decode($json,null);
$rows = $data->feed->entry;
}




?>
 <div class="row">
    <div class="col-xs-12 col-sm-12">


<div class="alert alert-danger alert-dismissable catatan">
<p style="color: #fff; font-size:20px">H-Game123</p>

  </div>
  
<div class="row masonry-container" style="margin-bottom:15px">
          


 <?php

        foreach(@$html->find('div[class=col-xs-6 col-sm-4 col-md-4 center_lnwphp]') as $element) {
          $ambil_link = @$element->find("a",1);
          $ambil_gambar = @$element->find("img",0);
        ?>
 <div class="col-md-3 col-sm-3 item">
            <div class="thumbnails">
            <div class="aspect aspect--16x9">
              <img style="background('assets/images/loading.svg') no-repeat;" class="imgja lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-original="<?php echo $ambil_gambar->src; ?>" alt="">
              <div class="overlay-show">
              <div class="show-link-center">
              <a href="/api/get/?source=hgame&{{link_gdrive}}">Google Drive</a>
              <a href="?dashboard=index&source=visual_novel/h-game123&mega=<?php echo substr($ambil_link->href, 25); ?>">Mega</a>
              </div>

              </div>
              <p style="position: absolute;
    right: 0;
    top: 0;
    padding: 8px 12px 8px 12px;
    background: rgba(0, 0, 0, 0.65);
    border-bottom-left-radius: 4px;">

                   <a style="float:right; color:#fff" href="javascript:(function(){var jsScript=document.createElement('script');
jsScript.setAttribute('type','text/javascript');
jsScript.setAttribute('src', '?dashboard=add_b&url=<?php echo $ambil_link->plaintext; ?>&amp;title=<?php echo $ambil_link->plaintext; ?>&amp;image=<?php echo $ambil_gambar->src; ?>');
document.getElementsByTagName('head')[0].appendChild(jsScript);
})();"><i class="fa fa-bookmark"></i></a>


</p>
              <div class="caption">
                
                <p style="font-size:12px"><?php echo $ambil_link->plaintext; ?></p>

              </div>
              </div>
              
            </div>
          </div><!--/.item  -->

          <?php }
         ?>
         </div>
        </div>
</div>
      </div>
    
    <div class="col-xs-12 col-sm-12">
<div class="alert alert-danger alert-dismissable catatan">
<p style="color: #fff; font-size:20px">Moonkaini Rhapsody</p>

  </div>    
  
<div class="row masonry-container" style="margin-bottom:15px">
          



<?php foreach($rows as $row) {
	 $regexp = "/\b(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)[-A-Z0-9+&@#\/%=~_|$?!:,.]*[A-Z0-9+&@#\/%=~_|$]/i";
if(preg_match_all("/\b(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)[-A-Z0-9+&@#\/%=~_|$?!:,.]*[A-Z0-9+&@#\/%=~_|$]/i", $row->content->{'$t'}, $matches, PREG_PATTERN_ORDER)) {
   $getdatalink = ($matches[0][2]);
}
?>
<div class="col-md-3 col-sm-3 item">

            <div class="thumbnails">
            <div class="aspect aspect--16x9">
              <img style="background('assets/images/loading.svg') no-repeat;" class="imgja lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-original="<?php echo str_replace("s72-c", "", $row->{'media$thumbnail'}->url); ?>">
              <div class="overlay-show">
              <div class="show-link-center">
              <a href="<?php echo $getdatalink; ?>">Download</a>
              </div>

              </div>
              <p style="position: absolute;
    right: 0;
    top: 0;
    padding: 8px 12px 8px 12px;
    background: rgba(0, 0, 0, 0.65);
    border-bottom-left-radius: 4px;">

                   <a style="float:right; color:#fff" href="javascript:(function(){var jsScript=document.createElement('script');
jsScript.setAttribute('type','text/javascript');
jsScript.setAttribute('src', '?dashboard=add_b&url=<?php echo ($row->title->{'$t'}); ?>&amp;title=<?php echo ($row->title->{'$t'}); ?>&amp;image=<?php echo str_replace("s72-c", "", $row->{'media$thumbnail'}->url); ?>');
document.getElementsByTagName('head')[0].appendChild(jsScript);
})();"><i class="fa fa-bookmark"></i></a>


</p>
              <div class="caption">
                
                <p style="font-size:12px"><?php echo ($row->title->{'$t'}); ?>
                  
                </p>

              </div>
              </div>
              
            </div>
          </div><!--/.item  -->




<?php } ?>
         </div>
        </div>
</div>
      </div>
    

    </div>
