<?php

// $url = [];
// foreach ($url as $key => $value) {
// 	$waiteUrl = $value;

// 	sleep(3);//每执行完一次 休息一秒
// }

$url = "http://weixin.sougou.com/websearch/art.jsp?sg=Tenkeiq5lOTHq2_AVk4JlBo7_9J2Jn7G8e7biTAIaUENFavaIsuoBY3UM7e6qrzqhl43LMXzFZ2WdSZXPGWIUUpq9Ak4h2-FLtnHHBCkEYEIisrViuq9rH56cg2pcZ1-2QWbu8zFkdfEqLYGkIRNPg..&url=p0OVDH8R4SHyUySb8E88hkJm8GF_McJfBfynRTbN8wgff868s1LvXgCQ-K0y_CjxUW-zPEc5g3ylzLVbjbGNpWQ3JxMQ3374q23z_ByGg_yS8cHjQHQgv7jDLOKJa44moACUtr6rwkxYy-5x5In7jJFmExjqCxhpkyjFvwP6PuGcQ64lGQ2ZDMuqxplQrsbk";
$cookie_file = tempnam('./temp', 'cookie');//D:\workspace\test\temp\coo5B38.tmp  这是一个路径 


$curlobj = curl_init();			// 初始化
curl_setopt($curlobj, CURLOPT_URL, $url);		// 设置访问网页的URL
curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);			// 执行之后不直接打印出来
// Cookie相关设置，这部分设置需要在所有会话开始之前设置
date_default_timezone_set('PRC'); //使用cookie之前必须要设置时区
curl_setopt($curlobj, CURLOPT_COOKIESESSION, TRUE); 
curl_setopt($curlobj, CURLOPT_COOKIEFILE, $cookie_file);//使用cookie 
// curl_setopt($curlobj, CURLOPT_COOKIEJAR, $cookie_file);//生成cookie
curl_setopt($curlobj, CURLOPT_HEADER, 0); 
curl_setopt($curlobj, CURLOPT_FOLLOWLOCATION, 1); // 这样能够让cURL支持页面链接跳转
curl_setopt($curlobj, CURLOPT_POST, 0);  

$output=curl_exec($curlobj);	// 执行

curl_close($curlobj);			// 关闭cURL
echo $output;


function curl_redir_exec($ch,$debug="") 
{ 
    static $curl_loops = 0; 
    static $curl_max_loops = 20; 

    if ($curl_loops++ >= $curl_max_loops) 
    { 
        $curl_loops = 0; 
        return FALSE; 
    } 
    curl_setopt($ch, CURLOPT_HEADER, true); // 开启header才能够抓取到重定向到的新URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    $data = curl_exec($ch); 
    // 分割返回的内容
    $h_len = curl_getinfo($ch, CURLINFO_HEADER_SIZE); 
    $header = substr($data,0,$h_len);
    $data = substr($data,$h_len - 1);

    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
    if ($http_code == 301 || $http_code == 302) { 
        $matches = array(); 
        preg_match('/Location:(.*?)\n/', $header, $matches); 
        $url = @parse_url(trim(array_pop($matches))); 
        // print_r($url); 
        if (!$url) 
        { 
            //couldn't process the url to redirect to 
            $curl_loops = 0; 
            return $data; 
        } 
        $last_url = parse_url(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL)); 
        if (!isset($url['scheme'])) 
            $url['scheme'] = $last_url['scheme']; 
        if (!isset($url['host'])) 
            $url['host'] = $last_url['host']; 
        if (!isset($url['path'])) 
            $url['path'] = $last_url['path'];

        $new_url = $url['scheme'] . '://' . $url['host'] . $url['path'] . (isset($url['query'])?'?'.$url['query']:''); 
        curl_setopt($ch, CURLOPT_URL, $new_url); 

        return curl_redir_exec($ch); 
    } else { 
        $curl_loops=0; 
        return $data; 
    } 
} 