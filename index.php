<?php

require 'func.php';
$YouTube = new YouTube;
$trending = $YouTube->trending();
$json = json_decode($trending);
print_r($json);

foreach ($json as $youtube) {
  echo $youtube->title;
}

?>
