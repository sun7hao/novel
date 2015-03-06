<?php
namespace Core;

class Controller
{
	private $_route;
	private $_controller;
	private $_action;
		
	public function run(){
		$this->getRoute();
	}
	//获取路由
	public function getRoute(){
		echo 'my is Controller';exit;
		
		$route = $_GET['r'];
		
		$route_array = explode('/', $route);
		
// 		if(count($route_array)==2){
// 			self::$_controller = $route_array[0];
// 			self::$_action = $route_array[1];
// 		}elseif(count($route_array)>2){
// 			self::$_action = array_pop($route_array);
// 			self::$_controller  = implode('/',$route_array);
// 		}else{
// 			//异常
// 		}
		
		
		return $route;
	}	
	function my_library_loader($classname) {
		echo $classname;exit;
		$filename = "./Core/". $classname .".php";
		include_once($filename);
	}
}
