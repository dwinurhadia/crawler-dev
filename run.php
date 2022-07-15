<?php
include 'simple_html_dom.php';
// echo file_get_html('https://www.plazavea.com.pe/')->plaintext;

$html = file_get_html('https://www.plazavea.com.pe/');

foreach($html->find('img') as $element)
    echo $element->src . '<br>';

foreach($html->find('a') as $element)
    echo $element->href . '<br>';

?>