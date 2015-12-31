<?php

$url = "http://img01.sogoucdn.com/net/a/04/link?appid=100520031&url=http://mmbiz.qpic.cn/mmbiz/w2RVOlGIxvCKwXjiaoLlFb9z6UdOmmOLhwDZd4Z3CcxicejTrQPLcN0yXLIwIiaxjpctamBPmRdOvkyfMGe17XIpg/0?wx_fmt=jpeg";//保存图片

$curlObj = curl_init();
curl_setopt($curlObj, CURLOPT_URL, $url);
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER,1);
// curl_setopt($curlObj, CURLOPT_COOKIE, "PHPSESSID=dopg5ai4gg4r97e0uht1mb74n4; ");//直接拿到这个 session_id 就可以成功登陆
$outPut = curl_exec($curlObj);
// echo $outPut;
file_put_contents("./new.jpeg", $outPut);
// file_put_contents("./really.txt", $outPut);
curl_close($curlObj);