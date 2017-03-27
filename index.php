<?php

require 'func.php';
$YouTube = new YouTube;
$trending = $YouTube->trending();
$json = json_decode($trending);

if($json[0][title]){
foreach($json as $tjson){
$tid = $tjson[id];
$ttitle = $tjson[title];
$tdur = $tjson[duration];
$tchannel = $tjson[channel];
$tview = $tjson[view];

echo '
<a href="/index.php?id='.$tid.'">'.$ttitle.'</a>
<br>Dur: '.$tdur.'<br>
Channel: '.$tchannel.'<br>
View: '.$tview.'<br>
';
}
}
?>
