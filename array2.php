<?php
	$arr=array(
			array(
				'local_path' =>'aaaaa',
				'picture_id' =>1
			),
			array(
				'local_path'=>'bbbbbbb',
				'picture_id'=>2
			),
			array(
				'local_path'=>'ccccccc',
				'picture_id'=>3
			),
		);

	var_dump($arr);

	function change($arrr,$a=0){
		foreach($arrr as $key=>$value){
			$arr[$a][$value['picture_id']]=$value['local_path'];
			$arr[$a]['picture_id']=$value['picture_id'];
			$a++;		
		
		}
	return $arr;
	}
		
		
		$arry=change($arr);
		
		var_dump($arry);		



$arr = array(
			array(
				'depart_name' => 'sale',
				array(
					'group_name' => 'no.1',
					array(
						'name' => 'jack',
						'age' => '12',
						'addr' => 'beijing'
					),
					array(
						'name' => 'lucy1',
						'age' => '12',
						'addr' => 'beijing'
					)
				),
				array(
					'group_name' => 'no.2',
					array(
						'name' => 'jack',
						'age' => '12',
						'addr' => 'beijing'
					)
				)
			),
			array(
				'depart_name' => 'xx',
				array(
					'group_name' => 'no.1',
					array(
						'name' => 'jack',
						'age' => '12',
						'addr' => 'beijing'
					),
					array(
						'name' => 'lucy1',
						'age' => '12',
						'addr' => 'beijing'
					),
					array(
						'name' => 'lucy2',
						'age' => '12',
						'addr' => 'beijing'
					),
				),
				array(
					'group_name' => 'no.2',
					array(
						'name' => 'jack',
						'age' => '12',
						'addr' => 'beijing'
					),
					array(
						'name' => 'jack1',
						'age' => '12',
						'addr' => 'beijing'
					),
					array(
						'name' => 'jack2',
						'age' => '12',
						'addr' => 'beijing'
					),
				),
			),


		);

var_dump($arr);