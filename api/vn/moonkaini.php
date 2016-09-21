<?php
// KurokiX
include('../includes/curl.php');
include_once '../includes/lib/shorty.php';
$s = new Shortener;

$result = array();
$i = 1;
$url    = pakai_curl('https://moonkaini.blogspot.com/feeds/posts/default?orderby=published&max-results=1000&alt=json');
if(isset($_GET['q']))
{ $url ="";
  $url = pakai_curl('https://moonkaini.blogspot.com/feeds/posts/default?orderby=published&max-results=1000&alt=json&q='.$_GET['q']);
}
$data   = json_decode($url, null);
$rows   = $data->feed->entry;
foreach ($rows as $row) {
    $regexp = "/\b(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)[-A-Z0-9+&@#\/%=~_|$?!:,.]*[A-Z0-9+&@#\/%=~_|$]/i";
    if (preg_match_all("/\b(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)[-A-Z0-9+&@#\/%=~_|$?!:,.]*[A-Z0-9+&@#\/%=~_|$]/i", $row->content->{'$t'}, $matches, PREG_PATTERN_ORDER)) {
        $getdatalink = ($matches[0][2]);
        $getid_fromimg = str_replace("s72-c", "", $row->{'media$thumbnail'}->url);
        $data        = array(
            'name' => $row->title->{'$t'},
            'image' => preg_replace("/^http:/i", "https:", str_replace("s72-c", "", $row->{'media$thumbnail'}->url)),
            'link' => $getdatalink,
            'id' => basename($getid_fromimg,".jpg"),
            'slink' =>  $s->makeCode($getdatalink),
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
?>
