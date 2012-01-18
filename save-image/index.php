<?php

$str = $_REQUEST['img'];

$arr = explode(',', $str); 
$data = $arr[1];
header("Content-type: image/png");
file_put_contents('imagem.png', base64_decode($data));
?>
