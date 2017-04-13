<?php
header('Content-type: text/javascript');
require 'func.php';
$YouTube = new YouTube;

if(empty($_GET['get-token'])){
  $token=$grab;
}else{
  $token=$_GET['get-token'];
}
if(empty($_GET['get-q'])){
  $q='Ini Talkshow';
}else{
  $q=$_GET['get-q'];
} 

$search = $YouTube->search($q,$token);
$json = json_decode($search);
$nextToken = $YouTube->nextToken;
$prevToken = $YouTube->prevToken;


foreach ($json as $youtube) {
  $judul=$youtube->title;
  $title=preg_replace('/[^A-Za-z0-9\  ]/', '', $youtube->title);
  $id=$youtube->id;
  $duration=$youtube->duration;
  $channel=$youtube->channel;
  $view=$youtube->view;
  $bukak="document.write('";
  $tutup="');";

  echo ''.$bukak.'<div class="fl odd"><a href="/site_download.xhtml?get-id='.$id.'&get-name='.$title.'"><div><div><img src="http://ytimg.googleusercontent.com/vi/'.$id.'/default.jpg" width="90" height="60" alt="'.$title.'"/></div><div>'.$title.'<br/><span><small><i>'.$view.'x Views </i></small></span></div></div></a></div>'.$tutup.'
  
  ';
}
if(!empty($nextToken)){
  $nexx='<a href="/site_search.xhtml?get-q='.$q.'&get-token='.$nextToken.'">Next Page</a>';
}
if(!empty($prevToken)){
  $prevv='<a href="/site_search.xhtml?get-q='.$q.'&get-token='.$prevToken.'"> Previous</a>';
}
echo ''.$bukak.'<div class="pgn">'.$prevv.' '.$nexx.'</div>'.$tutup.'';
?>
