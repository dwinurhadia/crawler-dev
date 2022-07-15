<?php
include 'simple_html_dom.php';

$html = file_get_html('https://www.plazavea.com.pe/avena-quaker-tradicional-bolsa-900g/p');
// Find all element which class=foo
// $ret = $html->find('.Showcase__brand');
// print_r($ret);

// foreach($html->find('img') as $element)
//     echo $element->src . '<br>';


foreach($html->find('a') as $element)
    echo $element->href . '<br>';

    
$html->clear(); 
unset($html);
?>