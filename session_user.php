<?php
session_start();
//当用户登录成功之后 可以拿到当前用户的info
$userinfo = array(
	'uid' => 1000,
	'name' => 'jack',
	'email' => 'jack@boolean.wang',
	'age' => 12,
	'sex' => 'man'
);

$_SESSION['uid'] = $userinfo['uid'];
$_SESSION['name'] = $userinfo['name'];
$_SESSION['userinfo'] = $userinfo;

// ini_set('date.timezone', 'Europe/Berlin');
echo date("Y-m-d H:i:s",time());//1443788688 2015-10-02 08:24:48
echo "<hr />";
echo 'welcome ' . $_SESSION['name'] . '<br />';//可以在该服务器上面进行 跨网页进行访问的