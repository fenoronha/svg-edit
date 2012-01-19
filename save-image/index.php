<?php

$str = $_REQUEST['img'];
echo $str;

$arr = explode(',', $str); 
$data = $arr[1];
header("Content-type: image/png");
file_put_contents('imagem-'.date(YmdHis).'.png', base64_decode($data));
?>
