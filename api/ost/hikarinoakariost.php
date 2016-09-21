<?php
// KurokiX
include('../includes/curl.php');

function type($type) {
    $result = array();
$i = 1;
$one = 0;
if (isset($_GET["q"])) {
    $html = file_get_html('http://h-game123.com/?search=' . $_GET["q"]);
} else {
    if ($_GET["page"] > 1) {
        $html = file_get_html('http://hikarinoakariost.info/tag/'.$type.'/page/' . ($_GET["page"]));
    }
    else if($_GET["page"] == 1) {

        $html = file_get_html('http://hikarinoakariost.info/tag/'.$type);

    } else {
        $html = file_get_html('http://hikarinoakariost.info/tag/'.$type);
    }
    // URL query untuk unduh
    if (isset($_GET['download'])) {
   
   
        $html = file_get_html('http://hikarinoakariost.info/' . $_GET['download']);
        
        foreach (@$html->find('div[class=td-post-content]') as $element)
        {
           foreach (@$element->find('a') as $link)
            {
             $content = preg_replace("/<img[^>]+\>/i", "", $link); 
             echo $content.'<br>';   
             
    
            }  
       
     if(++$one == 1) {
            break;
        }
        
        }

       
       
        die();
    }
  
 
}

if(isset($_GET['spotlight_image'])) {
    
foreach (@$html->find('div[class=col-xs-6 col-sm-4 col-md-4 center_lnwphp]') as $element) {
    $getimg = $element->find("img", 0);
    header('location: '.$getimg->src);
    break;
    
        

    }
    die();
}    

foreach (@$html->find('div[class=td-block-span6]') as $element) {
    foreach($element->find('div[class=td-module-thumb]') as $hikaridata) {
    $ambil_link   = @$hikaridata->find("a", 0);
    $ambil_gambar = @$hikaridata->find("img", 0);
    $strlnk = preg_replace('#^http?://#', '', $ambil_link->href);
    $urlParts = parse_url($nc);
            $path = $urlParts['path'];
            $name = explode('/', $strlnk);

            


    $data         = array(
        'name' => $ambil_link->title,
        'image' => $ambil_gambar->src,
        'link' => $name[1],
       
 
    );
    array_push($result, $data);
    if(isset($_GET['limit'])) {
            if($i++ == $_GET['limit']) break;
        }
   }     
}
header('Content-Type: application/json');
$jap = json_encode($result, JSON_UNESCAPED_UNICODE);
echo mb_convert_encoding($jap, "UTF-8", "auto");

}


if(isset($_GET['type'])) {
    switch($_GET['type']) {
        case 'album':
        type("album");
        break;
        case 'single':
        type("single");
        break;
    }
}
?>