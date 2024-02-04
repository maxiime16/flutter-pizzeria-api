<?php
header("Content-Type:application/json; charset=UTF-8");

$json = array();
$json[] = array(
    'id'=> 1,
    'title' => 'Barbecue',
    'garniture' => 'La garniture',
    'image' => 'pizza-bbq.jpg',
    'price' => 6.5
);
$json[] = array(
    'id' => 2,
    'title' => 'Hawaï',
    'garniture' => 'La garniture',
    'image' => 'pizza-hawai.jpg',
    'price' => 9.5
);
$json[] = array(
    'id'=> 3,
    'title' => 'Epinards',
    'garniture' => 'La garniture',
    'image' => 'pizza-spinach.jpg',
    'price' => 8.5
);
$json[] = array(
    'id' => 4,
    'title' => 'Végétarienne',
    'garniture'=> 'La garniture',
    'image' => 'pizza-vegetable.jpg',
    'price' => 10.5
);
echo json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>