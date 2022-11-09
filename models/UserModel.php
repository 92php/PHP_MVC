<?php 
//用户模型

class UserModel{
    //获取所有用户列表
    public function getAllUsers(){
	  //从数据库查询出来
	 $list=array(
	     array('id'=>1,'name'=>'jack','email'=>'jack@gmail.com'),
	     array('id'=>2,'name'=>'mery','email'=>'mery@gmail.com'),
		 array('id'=>3,'name'=>'lucc','email'=>'lucc@gmail.com'),
	   );
	  return $list;
	}


}




?>