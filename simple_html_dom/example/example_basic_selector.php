<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
 
// get DOM from URL or file 这不是可以从文件里面获得么 我要的就是这个  
$html = file_get_html('http://weixin.sogou.com/weixin?type=2&query=%E5%A4%B4%E5%8F%91&ie=utf8');

// find all link
foreach($html->find(' h4 a') as $k => $e) 
    echo "第" . $k . "个<br/>". $e->href . '<br>';//这里就可以去做拼接 

// // find all image
// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';

// // find all image with full tag
// foreach($html->find('img') as $e)
//     echo $e->outertext . '<br>';

// // find all div tags with id=gbar
// foreach($html->find('div#gbar') as $e)
//     echo $e->innertext . '<br>';

// // find all span tags with class=gb1
// foreach($html->find('span.gb1') as $e)
//     echo $e->outertext . '<br>';

// // find all td tags with attribite align=center
// foreach($html->find('td[align=center]') as $e)
//     echo $e->innertext . '<br>';
    
// extract text from table
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

// extract text from HTML
// echo $html->plaintext;
?>