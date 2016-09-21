  <?php 


include('curl.php');
// Ambil data sebelah 
if(isset($_GET['all'])) {
      $html = file_get_html('http://seiya-saiga.com/game/kouryaku.html');
        foreach($html->find('B') as $element) {
            foreach($element->find("A[href]") as $linked)
            {

            
            $nc = "http://kuroki.ml/".($linked->href);
            $urlParts = parse_url($nc);
            $path = $urlParts['path'];
            $name = explode('/', $path);
            $values[] = array(
            'developer' => $name[1],
            'name' => pathinfo($name[2], PATHINFO_FILENAME),
             );
         
          }
          }    

}


?>
<style>
a.list-group-item {
    height: auto;
    min-height: auto;
}
</style>
 <div class="row">


 <div style="margin-top:-20px">
            <div class="list-group">
             <?php
if(isset($_GET['all'])) {
 foreach($values as $row) {
?>


<a href="#" class="list-group-item">
      <div class="goleft">
      <h4 class="list-group-item-heading" style="text-transform: capitalize;"><?php echo $row['name']; ?></h4>
      <p class="list-group-item-text" style="text-transform: capitalize;"><?php echo $row['developer']; ?></p>
      </div>
        <span class="pull-right" style="position: relative;
    top: -37px;">
    <button type="button" onclick="window.open('https://www.google.com/#q=vndb+<?php echo $row['developer']; ?> <?php echo $row['name']; ?>');" class="btn btn-info">Cari VN ini</button>
    <button type="button" onclick="location.href = '?dashboard=index&source=visual_novel/routefinder&get=<?php echo $row['developer']; ?>/<?php echo $row['name']; ?>'" class="btn btn-warning">Lihat route</button>
    </span>
    </a>


<?php } 
}
else if(isset($_GET['get'])) {
         $html = file_get_html('http://seiya-saiga.com/game/'.$_GET['get'].'.html');
          foreach($html->find('TABLE[border=1] tbody tr th') as $element) {
            $patterns[0] = '/<img[^>]+\>/i';
            $patterns[1] = '#<a.*?>(.*?)</a>#i';
            $patterns[2] = '/<iframe.*?\/iframe>/i';
            $patterns[3] = '/\r|\n/';
            $c_element = preg_replace($patterns,'', $element);

            echo $c_element; 

          }
           


}
else
          {} 
?>

         </div>
     

         </div>

        </div>





      </div>

