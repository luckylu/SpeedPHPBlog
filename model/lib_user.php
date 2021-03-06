<?php
class lib_user extends spModel
{
	var $pk="uid";
	var $table="user";
	/*function checkname($val,$right)
	{
		$val=$this->spArgs('name');
		$user=spClass("lib_user");
		$conditions=array(
			'name'=>$val);
		$re=$user->find($conditions);
			$right=$re[name];
			if($val==$right)
			return FALSE;
		else
			return TRUE;
	}*/

	/*var $linker = array(

		array(
			'type' => 'hasmany',   // 一对多关联
			'map' => 'comment',    // 关联的标识
			'mapkey' => 'uid', 
			'fclass' => 'comment',
			'fkey' => 'uid',
			'enabled' => true
		),
	);*/

	var $addrules=array(
				'is_name'=>array('member','checkname')


		);
    var $verifier_register = array(
		"rules" => array( // 规则
			'name' => array(  // 这里是对username的验证规则
				'notnull' => TRUE, // username不能为空
				'minlength' => 5,  // username长度不能小于5
				'maxlength' => 16, // username长度不能大于16
				'is_name'=>TRUE,
			),
			'email' => array(   // 这里是对email的验证规则
				'notnull' => TRUE, // email不能为空
				'email' => TRUE,   // 必须要是电子邮件格式
			),
			'password' => array(  // 这里是对密码的验证规则
				'notnull' => TRUE, // 密码不能为空
				'minlength' => 6,  // 密码长度不能小于6
				'maxlength' => 15, // 密码长度不能大于15
			),
			'password1' => array(  // 这里是对第二次输入的密码的验证规则
				'equalto' => 'password', // 要等于'password'，也就是要与上面的密码相等
			),	
		),
		"messages" => array( // 提示信息
			'name' => array(
				'notnull' => "姓名不能为空",
				'minlength' => "姓名不能少于5个字符",
				'maxlength' => "姓名不能大于20个字符",
				'is_name'=>"用户名已经存在",
			),
			'email' => array(
				'notnull' => "邮箱不能为空",
				'email' => "请填写正确的邮箱地址",
			),
			'password'=>array(
				'notnull'=>"密码不能为空",
				'minlength'=>"密码不能小于6个字符",
				'maxlength'=>"密码不能大于15个字符",
			    'equalto'=>"密码不一致",
			),
			'password1'=>array(
				'notnull'=>"密码不能为空",
			    'equalto'=>"密码不一致",
			),
		),
);

	var $verifier_login = array(
		"rules" => array( 
			'name' => array( 
				'notnull' => TRUE,
				'minlength' => 5, 
				'maxlength' => 15,
			),
			'password' => array( 
				'notnull' => TRUE, 
				'minlength' => 6,  
				'maxlength' => 30, 
			),
		),
		"messages" => array( // 提示消息，从上面的rules复制下来，很快捷。
			'name' => array(  
				'notnull' => "用户名不能为空", 
				'minlength' => "用户名长度不能少于5个字符",  
				'maxlength' => "用户名长度不能大于15个字符",
			),
			'password' => array(  
				'notnull' => "密码不能为空", 
				'minlength' => "密码长度不能少于6个字符",  
				'maxlength' => "密码长度不能大于30个字符", 
			),
		),
	);

    var $verifier_upuserpw = array(
		"rules" => array( // 规则

			'password' => array(  // 这里是对密码的验证规则
				'notnull' => TRUE, // 密码不能为空
				'minlength' => 6,  // 密码长度不能小于6
				'maxlength' => 15, // 密码长度不能大于15
			),
			'password1' => array(  // 这里是对第二次输入的密码的验证规则
				'equalto' => 'password', // 要等于'password'，也就是要与上面的密码相等
			),	
		),

	"messages" => array( // 提示消息，从上面的rules复制下来，很快捷。

			'password' => array(  
				'notnull' => "密码不能为空", 
				'minlength' => "密码长度不能少于6个字符",  
				'maxlength' => "密码长度不能大于30个字符", 
			),
		'password1'=>array(
				'notnull'=>"密码不能为空",
			    'equalto'=>"密码不一致",
			),
			
			),
				);

}