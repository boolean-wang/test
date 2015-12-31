<?php
// $conn = mysql_connect('127.0.0.1','root','');
// $db = mysql_select_db('revo');
// mysql_set_charset('utf8');

// $sql = "select User_User from table_user where User_Depa like '%一组%' and User_State='在职'";
// $res = mysql_query($sql);
// $p = 0;
// while($row = mysql_fetch_assoc($res)){
// 	foreach ($row as $key => $value) {
// 		// $p = 0;//每次又都变成 0了
// 		// $person1 = []; //这个也不能写在这里 每次都会变为空的
// 		$person1[$p] = $value;
// 		$p+=1;
// 		echo  $p . $value . "<br />";
// 	}
// }

// $arr = array('a' => '中文');
// $json = urldecode(json_encode($arr));

// $arr = array ('a'=>urlencode('芒果小站'));
// echo urldecode(json_encode($arr));

//取得1-20之间的单数
// for($i = 0; $i <= 20; $i++){
// 	if($i % 2 != 0)
// 		echo 'number' . $i . "\n";
// }
// 
//------------------------隐式转换 字符串强制转换成int 类型 为0
// $a = "hhyy7t5";
// if($a == 0){
// 	echo "\$a和0比较结果为相等";
// }elseif($a === 0){
// 	echo  "\$a和0比较结果为全等";
// }
// var_dump((int) $a);
//------------------------echo 是一种特殊的语法结构
// $a = "abc321432432";
// $b = 'def';
// $arr = array(1,1,3,array(23,3));
// echo false;
// var_dump($arr);
// echo "<br />";
// echo $a == 0 ? "is equal to 0" : "is not equal to 0";
// ----------------------字符串翻转
// $str = 'Look at the sea';
// echo $str[4] . "<br />";//空 空格也占一个位
// echo $str[5] . "<br />";

// function recover($str){
// 	$length = strlen($str);
// 	$temp = '';
// 	for($i = 0; $i < $length; $i++){
// 		$temp = $str[$i] . $temp;//aes eht ta kooL 直接通过字符串拼接的顺序 就成功的翻转了
// 		// $temp =  $temp . $str[$i] ;//Look at the sea
// 	}

// 	return $temp;
// }

// echo recover($str);
// ---------------------- 主机名 ip
// $ip = gethostbyname("");
// echo $ip . "<br />";
// echo gethostbyaddr($ip);
//----------------------------
// $a = "a d s s d s b c";
// $a = explode(' ',$a);
// var_dump($a);
// $b = array("a","d","ds","s");
// echo count($a);


//这个是一个简单的拿到链接 这个过程并不涉及到对 cookie 的验证

header("content-type:text/html;charset=utf-8");
$str = "%E5%A4%B4%E5%8F%91";//nice 果然只是进行了一个 普通的 urlencode() 的 处理 
$type = "2";
// $query = $str;
$page = 4;

// for($i = 1; $i < 10; $i++){
// 	$url = "http://weixin.sogou.com/weixin?query=%E5%A4%B4%E5%8F%91&type=".$type."&page=".$page."&ie=utf8";
// 	$arr = [];
// 	$arr[$i] = file_get_contents($url);
// 	$page++;
// }
// 
$url = "http://weixin.sogou.com/weixin?query=头发&type=".$type."&page=".$page."&ie=utf8";
// $url = "http://www.toutiao.com"; // 我觉得吧  应该是没有写完整 
// $arr = file_get_contents($url);
// echo $url;
echo $url;
$curlRes = curl_init(); //初始化一个curl资源
curl_setopt($curlRes,CURLOPT_URL, $url); //设置一个要打开的网页
curl_setopt($curlRes,CURLOPT_RETURNTRANSFER,true); //设置 curl_exec() 执行之后不要直接打印结果
$outPut = curl_exec($curlRes);
curl_close($curlRes);

echo $outPut;