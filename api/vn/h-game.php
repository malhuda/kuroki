<?php
// KurokiX
include('../includes/curl.php');
include_once '../includes/lib/shorty.php';
$s = new Shortener;
$result = array();
$i = 1;
if (isset($_GET['download'])) {
        header("Location: /api/get/?source=hgame&gdrive=" . $_GET['download']);
    } else if (isset($_GET['gdrive'])) {
        $html = str_get_html(pakai_curl('http://h-game123.com/' . $_GET['gdrive']));   
        $data = $html->find('div[class=col-md-12]', 0);
        $data = $html->find('a[href*=drive.google]', 0);
        if ($data->href != NULL) {
            echo "<title>Mengarahkan...</title>";
            echo "<META http-equiv='refresh' content='2;URL=" . $data->href . "''>";
            echo $data;
        } else {
            echo  "<META http-equiv='refresh' content='2;URL=/api/get/?source=hgame&mega=" . $_GET['gdrive'] . "'>";
            echo "no google drive link available, checking for alternative link";
        }
        die();
    }
    if (isset($_GET['mega'])) {
        $html = str_get_html(pakai_curl('http://h-game123.com/' . $_GET['mega'])); 
        $data = $html->find('div[class=col-md-12]', 0);
        $data = $html->find('a[href*=mega.nz]', 0);
        echo $data;
        if ($data->href != NULL) {
            echo "<title>Mengarahkan...</title>";
            echo "<META http-equiv='refresh' content='2;URL=" . $data->href . "''>";
        } else {
            echo  "<META http-equiv='refresh' content='2;URL=/api/get/?source=hgame&ouo=" . $_GET['mega'] . "'>";
            echo "no mega link available, checking for alternative link";
        }
        die();
    }
    if (isset($_GET['ouo'])) {
        $html = str_get_html(pakai_curl('http://h-game123.com/' . $_GET['ouo']));
        $data = $html->find('div[class=col-md-12]', 0);
        $data = $html->find('a[href*=ouo.nz]', 0);
        if ($data->href != NULL) {
            echo "<title>Mengarahkan...</title>";
            echo "<META http-equiv='refresh' content='2;URL=" . $data->href . "''>";
        } else {
            echo "File not found";
        }
        die();
    }
    
if (isset($_GET["q"])) {
    $html = str_get_html(pakai_curl('http://h-game123.com/?search=' . $_GET["q"]));
} else {
    if (isset($_GET["page"])) {

        $html = str_get_html(pakai_curl('http://h-game123.com/catalog/2/eroge.html&number=' . $_GET["page"]));
    } else {
        $html = str_get_html(pakai_curl('http://h-game123.com/catalog/2/eroge.html'));
    }
    // URL query untuk unduh
    
}

if(isset($_GET['spotlight_image'])) {
    
foreach (@$html->find('div[class=col-xs-6 col-sm-4 col-md-4 center_lnwphp]') as $element) {
    $getimg = $element->find("img", 0);
    header('location: '.$getimg->src);
    break;
    
        

    }
    die();
}    

foreach (@$html->find('div[class=col-xs-6 col-sm-3 col-md-3 center_lnwphp]') as $element) {
    $ambil_link   = @$element->find("a", 1);
    $ambil_gambar = @$element->find("img", 0);
    $data         = array(
        'name' => $ambil_link->plaintext,
        'image' => preg_replace("/^http:/i", "http:", $ambil_gambar->src),
        'link' => "download=" . substr($ambil_link->href, 25),
        'id' => basename($ambil_gambar->src,".jpg?v=471"),
        'slink' =>  $s->makeCode("/api/get/?source=hgame&download=" . substr($ambil_link->href, 25)),
    );
    array_push($result, $data);
    if(isset($_GET['limit'])) {
            if($i++ == $_GET['limit']) break;
        }
}
header('Content-Type: application/json');
$jap = json_encode($result, JSON_UNESCAPED_UNICODE);
echo mb_convert_encoding($jap, "UTF-8", "auto");
?>