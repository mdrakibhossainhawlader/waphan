<?php

require 'func.php';
$YouTube = new YouTube;
$trending = $YouTube->trending();
$json = json_decode($trending);

foreach($json as $tjson){
$id = $tjson[id];
$title = $tjson[title];
$dur = $tjson[duration];
$channel = $tjson[channel];
$view = $tjson[view];

//echo '<a href="/index.php?id='.$id.'">'.$title.'</a><br>Dur: '.$dur.'<br>Channel: '.$channel.'<br>View: '.$view.'<br>';
}

?>
