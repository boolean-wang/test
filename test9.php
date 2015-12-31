<?php
echo "__DIR__ 表示 " . __DIR__ . "<br />";
echo "__FILE__ 表示 " . __FILE__ . "<br />";
// echo "__ROOT__ 表示 " . __ROOT__ . "<br />"; //没有 __ROOT__

function getMethod(){
	echo  "显示方法名" . __FUNCTION__ . "<br />";
}

getMethod();

echo "这是第" .  __LINE__ . "行<br />";