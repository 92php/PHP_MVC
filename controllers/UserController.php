<?php 
  //用户控制器类
  
  class UserController{
  
    public function index(){
	   //包含模型文件并实例化模型
	   include './models/UserModel.php';
	   $model=new UserModel();
	   
	   //通过模型获取数据
	   $list=$model->getAllUsers();
	   
	   /*
	   $list=array(
	     array('id'=>1,'name'=>'jack','email'=>'jack@gmail.com'),
	     array('id'=>2,'name'=>'mery','email'=>'mery@gmail.com'),
		 array('id'=>3,'name'=>'lucc','email'=>'lucc@gmail.com'),
	   );
	   */
	   //echo "这是User控制器的index方法";
	   
	   //让模板将数据显示出来
	   include './views/User/index.php';
	}
     
  
  }



?>