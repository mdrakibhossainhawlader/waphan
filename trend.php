<?php
header('Content-type: text/javascript');
require 'func.php';
$YouTube = new YouTube;
$trending = $YouTube->trending();
$json = json_decode($trending);

foreach ($json as $youtube) {
  $judul=$youtube->title;
  $title=preg_replace('/[^A-Za-z0-9\  ]/', '', $youtube->title);
  $id=$youtube->id;
  $duration=$youtube->duration;
  $channel=$youtube->channel;
  $view=$youtube->view;
  $bukak="document.write('";
  $tutup="');";

  echo ''.$bukak.'<div class="fl odd"><a href="/site_download.xhtml?get-id='.$id.'&get-name='.$title.'"><div><div><img src="http://ytimg.googleusercontent.com/vi/'.$id.'/default.jpg" width="90" height="60" alt=""></div><div>'.$title.'<br><span><i><small>'.$duration.' </small></i></span></div></div></a></div>'.$tutup.'
  
  ';
}

?>
