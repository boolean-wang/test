<?php
// $a = rand(0,1);
// var_dump($a);

// for($i=0; $i<20; $i++){
// 	$a = rand(0,1);
// 	echo $a . "<br />";
// }

//方法一 这个是暴力的解决 不好 虽然计算机也是能算出来 如果位数是 100 200呢?
function randNum(){
	$a = rand(0,1);
	$b = rand(0,1);
	$c = rand(0,1);
	$d = rand(0,1);
	$e = rand(0,1);
	$f = rand(0,1);
	$count = $a . $b . $c .$d . $e .$f;//得到结果
	if($a+$b+$c+$d+$e+$f == 4)	
		return $count;
}

$arr = [];
$arrCount = 0;
for($i = 0; $i < 400; $i++){
	if( !empty($waitNum = randNum())  && !in_array($waitNum, $arr)){
		$arr[$arrCount] = $waitNum;
		$arrCount++;
	}		
}

var_dump($arr);//在400次的时候已经不会出错了 在300次的时候偶尔出现一次错误

//方法二 使用数学公式  阶乘

function getNum($a){
	if($a > 1){
		$sum = $a*getNum($a-1);
	}else{
		$sum = $a;//还必须得有这个 else
	}
	return $sum;
}

function result($a,$b){
	if($a < $b){
		$tem = $a;
		$a = $b;
		$b = $tem;		
	}
	$i = getNum($a+$b);
	$j =  getNum($a);
	$k = getNum($b);
	return  $a . "个黄球 " . $b . "个红球共有 " . $i/($j*$k) ." 种组合方式";
}
$a = 2;
$b = 4;
// echo result($a, $b);
function demo($a){  
    if($a > 1){  
        $r=$a*demo($a-1);  
    }else{  
        $r=$a;  
    }   
    return $r;  
}  
         
$a=6;  
// echo $a."的阶乘的值".demo($a); 
// echo getNum($a);