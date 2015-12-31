<?php
//读取cookie
//读取我服务器已经在客户端浏览器上面设置好的 cookie 当然你需要指定 $key了
//要不然 客户电脑里面有那么多的cookie 我怎么知道是要 读取哪个
//那么我有没有办法 读取到不是本网站的cookie呢 ???? 进一步的就是 浏览过什么页面
//那不就可以非常准确的知道 这个用户最近是想干什么
// if(isset($_COOKIE['test'])){
// 	echo 'success<br />';
// 	echo $_COOKIE['test'] . "<br />";
// 	var_dump($_COOKIE['test']); //本身就不是复合类型的 也就是打印出来这个数据的 数据类型
// 	echo "<br />";
// 	var_dump($_COOKIE);
// }
if(isset($_COOKIE['boolean'])){
	echo 'successful to get cookie <br />';
	echo $_COOKIE['boolean'] . "<br />";
	var_dump($_COOKIE['boolean']); //本身就不是复合类型的 也就是打印出来这个数据的 数据类型
	echo "<br />";
	var_dump($_COOKIE);
}