<?php
error_reporting(0);
function maling($content,$start,$end){
if($content && $start && $end) {
$r = explode($start, $content);
if (isset($r[1])){
$r = explode($end, $r[1]);
return $r[0];
}
return '';
}
}
$uar=array('Nokia2610/2.0 (07.04a) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0','Nokia5300/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1','Nokia6030/2.0 (y3.44) Profile/MIDP-2.0 Configuration/CLDC-1.1','NokiaN70-1/5.0616.2.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1');
$uarr=array_rand($uar);
$uarand=$uar[$uarr];

ini_set('default_charset',"UTF-8");
ini_set('user_agent',$uarand."\r\naccept: text/html, application/xml;q=0.9, application/xhtml+xml, image/png, image/jpeg, image/gif, image/x-xbitmap, */*;q=0.1\r\naccept_charset: $_SERVER[HTTP_ACCEPT_CHARSET]\r\naccept_language: bahasa");
$f=file('http://'.$_SERVER['SERVER_NAME'].'/ddll.php?id='.$_GET['id'].'');
$gg=@implode($f);
$gg=str_replace('&title=', '&title=Waphan.co+-+', $gg);


if($_GET['type'] == '720p') {
$urll=maling($gg,'720p <a href="','"');
header('Location: '.$urll.'');
}

if($_GET['type'] == '480p') {
$url=maling($gg,'480p <a href="','"');
header('Location: '.$url.'');
}

if($_GET['type'] == '240p') {
$urlll=maling($gg,'240p <a href="','"');
header('Location: '.$urlll.'');
}

if($_GET['type'] == '144p') {
$urllll=maling($gg,'144p <a href="','"');
header('Location: '.$urllll.'');
}

if($_GET['type'] == '360p') {
$urlllll=maling($gg,'360p <a href="','"');
header('Location: '.$urlllll.'');
}

?>
