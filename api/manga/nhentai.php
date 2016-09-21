<?php
// KurokiX

include('../includes/curl.php');
error_reporting(-1);
$i        = 1;
$result   = array();
$result_1 = array();



if(isset($_GET['id'])) {

if(isset($_GET['page'])) {
        $html = file_get_html('https://nhentai.net/g/' .$_GET['id'].'/'.$_GET['page']);       
        foreach ($html->find('div[id=bigcontainer]') as $element)
        {    

            $ambil_link   = @$element->find("div[id=cover] a", 0);
            $ambil_gambar = @$element->find("img", 0);
            $judul1 = @$element->find("div[id=info] h1",0);
            $judul2 = @$element->find("div[id=info] h2",0);
                $data = array(
                    'judul1' => $judul1->plaintext,
                    'judul2' => $judul2->plaintext,
                    'link' => $ambil_link->href,
                    'image' => 'http://crossorigin.me/http:'.$ambil_gambar->src,
                    'parodies' => $element->find("section[id=tags]",0)->plaintext,          
                );
               array_push($result, $data);
            if(isset($_GET['limit'])) {
                    if($i++ == $_GET['limit']) break;
            }
            } 

        }
else {        



$html = file_get_html('https://nhentai.net/g/' .$_GET['id'].'/');  
foreach ($html->find('div[id=bigcontainer]') as $element)
{    

        


    $ambil_link   = @$element->find("div[id=cover] a", 0);
    $ambil_gambar = @$element->find("img", 0);
    $judul1 = @$element->find("div[id=info] h1",0);
    $judul2 = @$element->find("div[id=info] h2",0);
        $data = array(
            'judul1' => $judul1->plaintext,
            'judul2' => $judul2->plaintext,
            'link' => $ambil_link->href,
            'image' => 'http://crossorigin.me/http:'.$ambil_gambar->src,
            'parodies' => $element->find("section[id=tags]",0)->plaintext,          
        );
       array_push($result, $data);
    if(isset($_GET['limit'])) {
            if($i++ == $_GET['limit']) break;
    }


    } 



foreach ($html->find('div[id=thumbnail-container]') as $datas)
{    

   $data = array(
          'element' => "sa",
        );
       array_push($result, $data);

    
}

}
}

else {

if (isset($_GET['q'])) {
    $html = file_get_html('https://nhentai.net/search/?q=' . $_GET["q"]);
} else {
    if (isset($_GET["page"])) {
        $html = file_get_html('https://nhentai.net/?page=' . ($_GET["page"])  . '');
    }
    else {
        $html = file_get_html('https://nhentai.net/');
    }
}
foreach ($html->find('div[class=container]') as $element)
{    
    foreach ($element->find('div[class=gallery]') as $text) {
    $ambil_link   = @$text->find("a", 0);
    $ambil_gambar = @$text->find("img", 0);
        $data = array(
            'name' => $text->plaintext,
            'image' => 'http://crossorigin.me/http:'.$ambil_gambar->src,
            'link' => $ambil_link->href,
        );
       array_push($result, $data);
    if(isset($_GET['limit'])) {
            if($i++ == $_GET['limit']) break;
    }
    } 

}


}


 

header('Content-Type: application/json');
$jap = json_encode($result, JSON_UNESCAPED_UNICODE);
echo mb_convert_encoding($jap, "UTF-8", "auto");




?>