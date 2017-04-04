<?php

require 'func.php';
$YouTube = new YouTube;
$trending = $YouTube->trending();
$json = json_decode($trending);
print_r($json);

foreach($data as $json) {
echo $json[title] ;
}

?>
