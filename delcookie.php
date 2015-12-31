<?php
//使用header()函数来删除 已经设置好的 boolean cookie
header("Set-Cookie:boolean=''; expires=".gmdate('D, d M Y H:i:s \G\M\T', time()-1));