<?php
$data =[
    "name" =>"Abdulla",
    "age" => 25,
    "city" => "urganch"
];
$json = json_encode( $data);
echo $json;

$json = '{"name :"sarvar","age":28}';
$array =json_decode ( $json, associative: true);
print_r( $array);
?>