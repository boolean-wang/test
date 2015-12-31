<?php
	// $arr = [];
	// $arr['part'] = array('sale');
	// $arr['part']['group'] = array('no.1');
	// $arr['part']['group']['people'] = array('name'=>'jack','age'=>21,'addr'=>'beijing');//最终的这个赋值 只能是到最后一个

	// $arr['part'] = array('sale');
	// $arr['part']['group'] = array('no.2');
	// $arr['part']['group']['people'] = array('name'=>'lucy','age'=>22,'addr'=>'beijing');//最终的这个赋值 
	// //要不就是可以写成这样 向一个 3维数组 追加一个元素
	$arr = array(
		'part' => array('sale'),
		'group' => array('no.1'),
		'people' => array(
			'name' => 'jack',
			'age' => 21,
			'addr' => 'beijing'
		)
	);

	$arr2 =  array(
		'part' => array('sale'),
		'group' => array('no.2'),
		'people' => array(
			'name' => 'jim',
			'age' => 22,
			'addr' => 'shanghai'
		)
	);


	$arr3 =  array(
		'part' => array(
			'name' => 'sale',
			'group' => array(
				'name' => 'no1',
				'people' => array(
					'name' => 'jack',
					'age' => 21,
					'addr' => '北京',
				)
			)
		)
	);

	$arr4 = array(
		'id' => '0',
		'name' => 'some',
		'data' => '{}',
		'children' => array(
			'id' => '01',
			'name' => 'some',
			'data' => '{}',
			'children' => array(
				'id' => '011',
				'name' => 'some',
				'data' => '{}',
				'children' => array(
					'id' => '011',
					'name' => 'some',
					'data' => '{}',
				)
			),
			'children' => array(
				'id' => '012',
				'name' => 'some2',
				'data' => '{}',
				'children' => 'people2'
			)

		)
	);
	// $arr = array_push($arr1, $arr2);s
	var_dump($arr);
	echo '<hr />';
	var_dump($arr3);