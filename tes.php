<?php
$sourceURL="https://www.plazavea.com.pe/";
$content=file_get_contents($sourceURL);
$content = strip_tags($content,"<a>");

$subString = preg_split("/<\/a>/",$content);
foreach ( $subString as $val ){
 if( strpos($val, "<a href=") !== FALSE ){
 $val = preg_replace("/.*<a\s+href=\"/sm","",$val);
 $val = preg_replace("/\".*/","",$val);
 print $val."\n";
 echo '<br>';
 }
}
?>