<?php
header('Content-type: text/javascript');
require 'func.php';
$YouTube = new YouTube;
$token=$grab;
$q= 'Ini Talkshow';
$search = $YouTube->search($q,$token);
$json = json_decode($search);
$nextToken = $YouTube->nextToken;
$prevToken = $YouTube->prevToken;
print_r($json);
print_r($nextToken);
print_r($prevToken);

foreach ($json as $youtube) {
  $judul=$youtube->title;
  $title=preg_replace('/[^A-Za-z0-9\  ]/', '', $youtube->title);
  $id=$youtube->id;
  $duration=$youtube->duration;
  $channel=$youtube->channel;
  $view=$youtube->view;
  $bukak="document.write('";
  $tutup="');";

  echo ''.$bukak.'<div class="menu2"><table class="otable" width="100%"><tbody><tr><td valign="middle" width="75px" align="center"><div class="imahe"><img src="https://ytimg.googleusercontent.com/vi/'.$id.'/mqdefault.jpg" style="border: 1px solid #222; border-radius: 2px; float: left;" width="95" height="60"><h8><span>'.$duration.'</span></h8></div></td><td style="padding: 4px 6px 4px 6px;><span style="font-size: 13px;"><a href="/site_download.xhtml?get-id='.$id.'&get-name='.$title.'">'.htmlspecialchars($title).'</a></span><br/><span style="font-size: 11px;"><i class="fa fa-eye" aria-hidden="true" style="color: #ccc;"></i> '.$view.'<br/><i class="fa fa-calendar" aria-hidden="true" style="color: #ddd;"></i> '.$channel.'</span></td></tr></tbody></table></div>'.$tutup.'
  
  ';
}
echo '<div class="nav" style="text-align:center;"><a href="/site_search.xhtml?get-q='.$q.'&get-token='.$prevToken.'" class="btn"> Prev</a><a href="/site_search.xhtml?get-q='.$q.'&get-token='.$nextToken.'" class="btn">Next </a></div>';
?>
