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
$f=file('http://keepvid.com/?url=http://www.youtube.com/watch?v='.$_GET['id'].'');
$gg=@implode($f);
$gg = preg_replace('/\s+/', ' ',$gg);
$gg=str_replace('&title=', '&title=www.satriamusic.com+-+', $gg);
$gg=str_replace('<img src="style/images/good_icon.png" alt=""/>', '', $gg);
$gg=str_replace('</dd><dd>', '</dt> <dd>', $gg);
$gg=str_replace('(Max 720p)', 'Max 720p', $gg);
$gg=str_replace('<img src="style/images/d_icon1.png" alt=""/>', '', $gg);
$gg=maling($gg, 'Full Video</dt>', '</dl>');
$gggg=explode('<dd>', $gg);

for($i=1;$i<=5;$i++){
$ggi=maling($gggg[$i], '<span class="spanWid">', '</span>');
$ggii=maling($gggg[$i], '<a href="', '"');
$ggiii=print(''.$ggi.' <a href="'.$ggii.'"></a>');
}

?>
