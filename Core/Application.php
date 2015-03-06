<?php
namespace Core;
use Core\Controller;

class Application
{
	private $_route;
	private $_controller;
	private $_action;
		
	public function run(){
		require WEB_PATH.'\Core\Controller.php';
		
		spl_autoload_register(array('Controller','my_library_loader'));
		
// 		$controller = new Controller();
		
// 		print_r($controller);exit;
// 		$controller->getRoute();
	}
	//获取路由
	public function getRoute(){
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
	
	
}
