<?php

	$arr = array(
		"id" => 0,
		"name" => "总部",
		"data" => "{}",
		"children" => array(
			array(
				"id" => "01",
				"name" => "事业部",
				"data" => "{}",
				"childeren" => array(
					array(
						"id" => "",
						"name" => "一组",
						"data" => "{}",
						"childeren" => array(
							array(
								"id" => "",
								"name" => "jack",
								"data" => "{}",
								"childeren" => array()
							),
							array(
								"id" => "",
								"name" => "lucy",
								"data" => "{}",
								"childeren" => array()
							),
							
						)
					),
					array(
						"id" => "",
						"name" => "二组",
						"data" => "{}",
						"childeren" => array(
							array(
								"id" => "",
								"name" => "jim",
								"data" => "{}",
								"childeren" => array()
							),
							array(
								"id" => "",
								"name" => "green",
								"data" => "{}",
								"childeren" => array()
							),
							
						)
					),
				)
			),
			array(
				"id" => "02",
				"name" => "销售部",
				"data" => "{}",
				"childeren" => array()
			),
			array(
				"id" => "03",
				"name" => "售后部",
				"data" => "{}",
				"childeren" => array()
			),
			array(
				"id" => "04",
				"name" => "策划部",
				"data" => "{}",
				"childeren" => array()
			),
		)
	);

	var_dump(json_encode($arr));