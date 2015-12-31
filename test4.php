<?php
$url = "mp.weixin.qq.com/s?__biz=MzAwODEwNDU4MA==&mid=400686477&idx=2&sn=bef32af880c1ee5a467a18aaa43800f7&3rd=MzA3MDU4NTYzMw==&scene=6#rd";//不能带http://
$curlObj = curl_init();
curl_setopt($curlObj, CURLOPT_URL, $url);
curl_setopt($curlObj,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curlObj,CURLOPT_HEADER,0 ) ;
$outPut = curl_exec($curlObj);
curl_close($curlObj);
file_put_contents("./really.txt", $outPut); //这个算是成功抓下来了 