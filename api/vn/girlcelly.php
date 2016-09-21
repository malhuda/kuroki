<?php
// KurokiX
include('../includes/curl.php');
include_once '../includes/lib/shorty.php';
$s = new Shortener;

$i        = 1;
$result   = array();
$result_1 = array();
 

if (isset($_GET['q'])) {
        
        $html = str_get_html(pakai_curl('http://girlcelly.blog.fc2.com/?q=' . $_GET["q"])); 
 
} else {
    if ($_GET["page"] > 1) {

        $html = str_get_html(pakai_curl('http://girlcelly.blog.fc2.com/page-' . ($_GET["page"] - 1)  . '.html'));   
       
    }
    else if($_GET["page"] == 1) {

        $html = str_get_html(pakai_curl('http://girlcelly.blog.fc2.com/page-0.html'));   
  

    }

     else {

        $html = str_get_html(pakai_curl('http://girlcelly.blog.fc2.com/'));   

    }
}
foreach ($html->find('td[width=100%]') as $element)
    foreach ($html->find('h3') as $text) {
        $data = array(
            'name' => $text->plaintext
        );
        array_push($result, $data);
    } {
    $count = -1;

    if(isset($_GET['spotlight_image'])) {
    foreach ($html->find('div[class=article]') as $imglink) {
        header('location:' .$imglink->find('img', 0)->src);
               die();
        break;
        

    }
}

    foreach ($html->find('div[class=article]') as $imglink) {
        $count           = $count + 1;
        $result_instring = ($result[$count]);
        $name            = implode(" ", $result_instring);
        preg_match('/magnet:\?xt=urn:btih:(\w+)/i', $imglink->plaintext, $getmagnet);
        $data_1 = array(
            'name' => $name,
            'image' => preg_replace("/^http:/i", "https:", $imglink->find('img', 0)->src),
            'link' => $getmagnet[0],
            'id' => $getmagnet[1],
            'slink' =>  $s->makeCode($getmagnet[0]),

        );
        array_push($result_1, $data_1);


        if(isset($_GET['limit'])) {
            if($i++ == $_GET['limit']) break;
        }
    }

}
header('Content-Type: application/json');
$jap = json_encode($result_1, JSON_UNESCAPED_UNICODE);
echo mb_convert_encoding($jap, "UTF-8", "auto");
?>