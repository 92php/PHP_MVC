<?php
    //复习mvc
	/*
	  1.入口文件index.php 
	     唯一一个让浏览器直接请求的脚本文件
	  2.控制器Controller
	     协调模型和视图
	  3.模型Model
	     提供数据，保存数据
	  4.视图View
	      只负责显示
	  5.动作action
	      是控制器中的方法，用于被浏览器直接请求
	*/
	
  //这是入口文件	
  header("Content-Type:text/html;charset=utf-8");
  //echo phpinfo();
  
  //怎么访问控制器？？？
  //url地址传参数 http://localhost/20141229/index.php?c=User&a=index
  $c=$_GET['c'];
  //包含控制器 
  include './controllers/'.$c.'Controller.php';
  //实例化控制器对象
  $className=$c.'Controller';
  $controller=new $className();
  
  //访问方法名
  $a=$_GET['a'];
  //调用方法
  $controller->$a();
  


?>