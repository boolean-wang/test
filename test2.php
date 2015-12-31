<?php
// $data = "username=test&password=test&remember=1";
// $cookie_file = tempnam("./temp", 'cookie');

// $type = "2";
$url = "http://weixin.sogou.com/websearch/art.jsp?sg=GVLf6HR5Nwkqi1sBHQGhUvuw6QsJNktDOC0pN708aPMNFavaIsuoBY3UM7e6qrzqhl43LMXzFZ2WdSZXPGWIUUpq9Ak4h2-FLtnHHBCkEYEIisrViuq9rH56cg2pcZ1-2QWbu8zFkdfEqLYGkIRNPg..&url=p0OVDH8R4SHyUySb8E88hkJm8GF_McJfBfynRTbN8wi5wy1354-C6FgDlrl7NZcZUW-zPEc5g3xGazS44LICSPwjqI9vhGJjKAMkAj3CMiPo5IbKxwCqIoI0v408YTe8EKBCMM4fHGZYy-5x5In7jJFmExjqCxhpkyjFvwP6PuGcQ64lGQ2ZDMuqxplQrsbk ";

$curlRes = curl_init();
curl_setopt($curlRes, CURLOPT_URL, $url);
$outPut = curl_exec($curlRes);
echo $outPut;

curl_redir_exec()

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