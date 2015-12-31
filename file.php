<?php
// header("contents-type:text/html;charset=utf-8");
$filename = './file_content.txt';
$content = file_get_contents($filename);
var_dump($content);