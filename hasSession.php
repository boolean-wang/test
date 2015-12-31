<?php
//这个页面主要是看 在请求服务器内的其它任何一个网页(其实就是一段程序)的时候又没有将cookie当中的 PHPSESSIONID 这个name拿过来
session_start();
var_dump($_SESSION);die();
echo $_SESSION['test'] . "<br />";

var_dump($_COOKIE);die();
echo $_COOKIE['PHPSESSID'];//3th104ssmecjhqeqn0nv2ujg96 可以通过name来选择到底是输出哪个cookie当中 name 的值
// 那么就剩下一个比对了 比对从cookie当中拿到的 PHPSESSID 的值 和服务器当中的 session_id() 的值  如果是一样的话就认为是登陆状态 可以进行当前用户的一系列符合权限的操作
// 可能你需要要 将这个东西存储成一个全局的 或者是专门放到一个类里面 这个类就是专门负责生成 session_id的 还有一些列的判断 或者是封装一下 放到一个User::id当中
// nice 果然是都拿过来了 而且是将