<?php
require dirname(__FILE__).'/wechat/simple_html_dom.php';
$html = file_get_html('http://php.net/');
$articles = array();
foreach($html->find('article.newsentry') as $article) {
    $item['time']    = trim($article->find('time',            0)->plaintext);
    $item['title']   = trim($article->find('h2.newstitle',    0)->plaintext);
    $item['content'] = trim($article->find('div.newscontent', 0)->plaintext);
    $articles[] = $item;
}
print_r($articles);