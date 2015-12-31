<?php
header("content-type:text/html;charset=utf-8");
var_dump(md5('admin'));

$part = array('事业部','销售部','文化部','策划部');//将来这些都是动态输出的
$group = array('一组','二组','三组');//$sql = select * from user where User_Depa like %事业部-一组%
$person = array('lucy','jack','jim'); //那我写几条sql 把要去到的数据放起来 然后运行这段代码就行了呗
/*array (size=7)  这个是数据
  0 => string '事业部,一组,二组,三组,四组' (length=37)
  1 => string '销售组' (length=9)
  2 => string '创意视频部,项目组,制作组,摄制组' (length=45)
  3 => string '创意设计部' (length=15)
  4 => string '媒介部' (length=9)
  5 => string '技术部,网站技术' (length=22)
  6 => string '运营部,北京,上海,深圳' (length=30)
*/

	for($i = 0; $i < count($part); $i++){
		$arr[$i]['id'] = $i;
		$arr[$i]['name'] = $part[$i];
		$arr[$i]['data'] = "{}";
		// $arr[$i]['children'] = array(); //需要成为数组的地方 再去使用循环 
			for($j = 0; $j < count($group); $j++){				
				$arr[$i]['children'][$j]['id'] = $j;
				$arr[$i]['children'][$j]['name'] = $group[$j];
				$arr[$i]['children'][$j]['data'] = "{}";
				// $arr[$i]['children'][$j]['children'] = array();	
				for($k = 0; $k < count($person); $k++){
					$arr[$i]['children'][$j]['children'][$k]['id'] = $k;
					$arr[$i]['children'][$j]['children'][$k]['name'] = $person[$k];
					$arr[$i]['children'][$j]['children'][$k]['data'] = "{}";
					$arr[$i]['children'][$j]['children'][$k]['children'] = array();
				}			
			}		
	}

var_dump($arr);

//我觉得应该是可以使用一个递归  去判断 children这个数组里面是不是有东西 if(!empty($children)) 调用函数继续做