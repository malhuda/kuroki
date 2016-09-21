<?php

$result = array();
if(isset($_GET['q'])) {
$json_gc = file_get_contents('http://kiriri.my/kuroki.ml/api/girlcelly.php?q='.$_GET["q"]);
$json_hg = file_get_contents('http://kiriri.my/kuroki.ml/api/h-game.php?q='.$_GET["q"]);
$json_mk = file_get_contents('http://kiriri.my/kuroki.ml/api/moonkaini.php?q='.$_GET["q"]);


        $data  = array(
            'gircelly' => json_decode($json_gc, true),
            'hgame' => json_decode($json_hg, true),
            'moonkaini' => json_decode($json_mk, true),
        );
        array_push($result, $data);
header('Content-Type: application/json');
echo json_encode($result, JSON_UNESCAPED_UNICODE);
}
?>