<?php
header('Content-type: text/javascript');
require 'func.php';
$YouTube = new YouTube;

$id=$_GET['id'];
$related = $YouTube->relatedVideo($id);
$json = json_decode($related);

foreach ($json as $youtube) {
  $judul=$youtube->title;
  $title=preg_replace('/[^A-Za-z0-9\  ]/', '', $youtube->title);
  $id=$youtube->id;
  $duration=$youtube->duration;
  $channel=$youtube->channel;
  $view=$youtube->view;
  $bukak="document.write('";
  $tutup="');";
  echo ''.$bukak.'<div class="fl odd '.$youtube->type.'"><a href="/site_download.xhtml?get-id='.$id.'&get-name='.$title.'"><div><div><img src="http://ytimg.googleusercontent.com/vi/'.$id.'/default.jpg" width="90" height="60" alt="'.$title.'"/></div><div>'.$title.'<br/><span><small><i>'.$view.'x Views </i></small></span></div></div></a></div>'.$tutup.'
  
  ';
}

?>
