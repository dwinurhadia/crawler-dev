<?php
include 'simple_html_dom.php';
// echo file_get_html('https://www.plazavea.com.pe/')->plaintext;

$html = file_get_html('https://www.plazavea.com.pe/supermercado');

// foreach($html->find('div[class="Showcase__brand"]') as $element)
//     echo $element->src . '<br>';

// // foreach($html->find('a') as $element)
// //     echo $element->href . '<br>';

// // $html = file_get_html('https://slashdot.org/');

$articles = $html->find('div[class="owl-item active"]');

foreach($articles as $article) {
    $item['title'] = $article->find('Showcase__brand', 0)->plaintext;
    $item['intro'] = $article->find('.p', 0)->plaintext;
    $item['details'] = $article->find('.details', 0)->plaintext;
    $items[] = $item;
}
print_r($items);

$html->clear(); 
unset($html);
?>