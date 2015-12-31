<?php
setcookie("boolfdfdean","ewfsd31112",time()+100000,"/","ci.test.com");  // 100000 秒之后过期  /aa 下面 和子集目录才能访问这个cookie 
// setcookie("testcookie", "value1hostonly", time(), "/", "test.com", 0, true);
// setcookie("testcookie", "value2subdom", time(), "/", "subdom.example.com", 0, true);//重复的会不会被覆盖呢？？