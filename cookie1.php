<?php
// $key = 'test';
// $val = 'this is a test like shopping!!!!!!!!!!!!!!!!';
// /*
// 客户端请求我的某个页面的时候 我给他设置一个cookie到他的电脑上面 如果不存在cookie就设置
//  */
// if (setcookie($key,$val)) //设置 cookie 这个行为一般都是隐藏的 是服务器端为了达到一些特定的要求 给客户端的浏览器设置一个可以再次读取的标识
// 	echo 'set success';
// else
// 	echo 'set faild';

//使用 header()//这个实现原理来进行 cookie的设置 
header("Set-Cookie:boolean=use header function to set cookie");
 