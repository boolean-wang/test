<?php

//在网站根目录创建文件夹 
$dirname = __DIR__ .  "/aaa"; //这样子补全才对
if(!file_exists($dirname)){
	mkdir($dirname,0777);
	echo $dirname;
}