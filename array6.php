<?php
header("content-type:text/html;charset=utf-8");
/*array (size=7)  这个是数据
  0 => string '事业部,一组,二组,三组,四组' (length=37)
  1 => string '销售组' (length=9)
  2 => string '创意视频部,项目组,制作组,摄制组' (length=45)
  3 => string '创意设计部' (length=15)
  4 => string '媒介部' (length=9)
  5 => string '技术部,网站技术' (length=22)
  6 => string '运营部,北京,上海,深圳' (length=30)
*/
$conn = mysql_connect('127.0.0.1','root','');
$db = mysql_select_db('revo');
mysql_set_charset('utf8');
// $sql = "select User_User from table_user limit 10";
// $res = mysql_query($sql);
//   while ($row = mysql_fetch_assoc($res)){
//   	foreach ($row as $key => $value) {
//   		echo $value . "<br / >";
//   	}
//   }
$part = array(
	  0 => '事业部,一组,二组,三组,四组,五组', 
	  1 => '销售组',
	  2 => '创意视频部,项目组,制作组,摄制组', 
	  3 => '创意设计部',
	  4 => '媒介部',
	  5 => '技术部,网站技术',
	  6 => '运营部,北京,上海,深圳',
);
$group = array('一组','二组','三组');//$sql = select * from user where User_Depa like %事业部-一组%
$person = array('lucy','jack','jim'); //那我写几条sql 把要去到的数据放起来 然后运行这段代码就行了呗


	for($i = 0; $i < count($part); $i++){
		$arr[$i]['id'] = $i;
		$arr[$i]['name'] = urlencode(split(",",$part[$i])[0]);
		$arr[$i]['data'] = "{}";
		$arr[$i]['children'] = array(); //需要成为数组的地方 再去使用循环 
		// 需要加一个判断 有没有组 有没有负责人
			$group = split(",",$part[$i]);
			for($j = 1; $j < count($group); $j++){				
				$arr[$i]['children'][$j]['id'] = $i.$j;
				$arr[$i]['children'][$j]['name'] = urlencode($group[$j]);
				$arr[$i]['children'][$j]['data'] = "{}";
				$arr[$i]['children'][$j]['children'] = array();
				
				//使用 array_filter($arr) 去掉空数组
				// 这里要涉及到人的操作 再去写sql
				$sql = "select User_User from table_user where User_Depa like '%$group[$j]%' and User_State='在职'";
				$res = mysql_query($sql);
				$p = 0;
				$person = [];//每次循环完成是需要 清空的
				while($row = mysql_fetch_assoc($res)){
					foreach ($row as $key => $value) {						
						// $person = array(); //这个又是一个错误
						$person[$p] = $value;
						$p+=1;
					}
				}	
				// if($j == 2){
				// 	echo '!!!!';
				// 	var_dump($sql);
				// 	var_dump($person);die();
				// } //这个样子的测试也是 nice 的
		
				for($k = 0; $k < count($person); $k++){
					$arr[$i]['children'][$j]['children'][$k]['id'] = $i.$j.$k;
					$arr[$i]['children'][$j]['children'][$k]['name'] = urlencode($person[$k]);
					$arr[$i]['children'][$j]['children'][$k]['data'] = "{}";
					(!empty($arr[$i]['children'][$j]['children'][$k]['children'])) ? $arr[$i]['children'][$j]['children'][$k]['children'] : "";
				}	
			}		
	}

var_dump($arr);
$json = urldecode(json_encode($arr));
echo "<script>var json = $json<script>";



//我觉得应该是可以使用一个递归  去判断 children这个数组里面是不是有东西 if(!empty($children)) 调用函数继续做
