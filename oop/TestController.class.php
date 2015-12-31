<?php
namespace oop;
use oop\core\BBaseController;
require "./core/BBaseController.class.php";
class TestController extends BBaseController{
	public function test(){
		
	}
}

$obj = new TestController();
$obj->test();

