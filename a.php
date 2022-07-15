<?php
require 'simple_html_dom.php';

$html = file_get_html('https://www.plazavea.com.pe/supermercado/');
// Find all element which class=foo
$ret = $html->find('.Showcase__brand');
print_r($ret);
?>