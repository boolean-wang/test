<?php

	$arr = [];
	$arr['name'] = 'jack';

	$arr1['name']['age'] = "21";

	$arr2['name']['age']['addr'] = "beijing";

	$arr3['name']['age']['addr'] = array('name' => "lucy",'age' => 21 , 'addr' => 'beijign') ;

	$arr4['name']['age']['addr'] =
	array(
		'name' => array(
				'age' => array(
					'addr' => array(

					)
				)
		)
	);

	dump($arr);
	dump($arr1);
	dump($arr2);
	dump($arr3);
	dump($arr4);

	function dump($arr){
		echo  "<pre >"; 
		print_r($arr);
		echo "<pre />";
		echo "<hr />";
	}