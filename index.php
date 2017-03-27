<?php

require 'func.php';
$YouTube = new YouTube;
$trending = $YouTube->trending();
$json = json_decode($trending);

?>
