<?php
//开始使用session
session_start();
//设置一个session
$_SESSION['test'] = time();
//显示当前的 session_id
echo "session_id:" . session_id() . '<br />';//这个数据是需要传递给 客户端进行保存的 将来需要与服务器端存放的session_id进行对比的 但是这个明显是有问题的 如果我一个人要是非法盗取了 你这个人的session_id然后去访问和你一样的网站 那不就是把你这个人的资金  即便是你有所谓的银行卡确认 那个东西 我可以伪造一条短信来获取你的验证码
var_dump($_SESSION);die();//这个里面也只是有一个 name 为 test的  session  那个session_id 根本就不会出现在 $_SESSION当中
var_dump($_COOKIE);//存到了cookie当中 并且再次请求页面的话 会携带cookie当中的信息过来 是通过header()这个函数过来的

echo "<hr  />";
$time = $_SESSION['test'];
echo $time . "<br />";
echo date("Y-m-d h:i:s",$time);
// unset($_SESSION['']);
// session_destroy();
var_dump($_SESSION);