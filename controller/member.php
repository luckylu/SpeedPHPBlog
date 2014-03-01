<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
class member extends spController
{
	function register()  //用户注册
	{
		$user=spClass("lib_user");
		//$user->verifier = $user->verifier_register;
		
		 //$re=$user->spVerifier($newrow);
		 $val=$this->spArgs('name');
		$user=spClass("lib_user");
		$conditions=array(
			'name'=>$val);
		$re=$user->find($conditions);
			$right=$re[name]; //检测用户名是否已存在
			
		if($this->spArgs("name")!=""&&$right=="")
		{
			$newrow=array(
			'name'=>$this->spArgs('name'),
			'password'=>md5($this->spArgs('password')),
			'url'=>$this->spArgs('url'),
			'email'=>$this->spArgs('email'),);
			$user->create($newrow);
			$this->success('注册成功',spUrl('member','login'));
		}
		elseif($this->spArgs("name")!=""&&$right!="")//如果用户名已存在，提示注册失败
		{
			
			$this->success('注册失败，用户名已存在，请重新注册',spUrl('member','register'));
		}
		/*if( false==$re&&$this->spArgs("submit"))   // 开始验证，$re返回false通过
		
			{
			 $newrows=array(
			'name'=>$this->spArgs('name'),
			'password'=>md5($this->spArgs('password')),
			'email'=>$this->spArgs('email'),
			'url'=>$this->spArgs('url'));
			$user->create($newrows);
		    }	*/		
			
			$this->display("register.html");
	}

	function login()//用户登录
	{
		$user=spClass("lib_user");
		$user->verifier=$user->verifier_login;
		$res=$user->spVerifier($this->spArgs());
		$newrow=array(
			'name'=>$this->spArgs('name'),
			'password'=>$this->spArgs('password'),
			);
		$re1=$user->find(array('uid'=>1));
		$re=$user->find(array('name'=>$this->spArgs('name')));
		if($newrow[name]==$re1[name]&&md5($newrow[password])==$re1[password]&&$_SESSION['VCODE']==$this->spArgs('checkpic')&&$this->spArgs('submit'))
		{
			
			$_SESSION['name']=$newrow[name];
			$_SESSION['uid']=1;
		spClass('spAcl')->set("GBADMIN"); //设置用户管理员权限
		
		$this->success('登录成功',spUrl('admin','index'));
		}
		elseif($re&&md5($newrow[password])==$re[password]&&$_SESSION['VCODE']==$this->spArgs('checkpic')&&$this->spArgs('submit'))
		{
			$_SESSION['name']=$newrow[name];
			$_SESSION['uid']=$re[uid];
		spClass('spAcl')->set("GBUSER");  //设置用户普通会员权限
		$this->success('登录成功',spUrl('main','index'));
		}
		elseif($re[name]!=$newrow[name]&&$this->spArgs('submit'))
		{	
		//$this->re=$res;
		$this->success('登录失败，用户名错误',spUrl('member','login'));
		}
		elseif($re[password]!=md5($newrow[password])&&$this->spArgs('submit'))
		{	
		//$this->re=$res;
		$this->success('登录失败，密码错误',spUrl('member','login'));
		}
		elseif($_SESSION['VCODE']!=$this->spArgs('checkpic')&&$this->spArgs('submit'))
		{	
		//$this->re=$res;
		$this->success('登录失败，验证码错误',spUrl('member','login'));
		}
		
		$this->display("login.html");
		

	}
	function logout()//退出
	{
		spClass('spAcl')->set("");
		session_destroy();
		$this->success("退出成功",spUrl("main","index"));
	}


	function checkname($val,$right) //注册时检测用户名是否已经存在
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
	}
}
?>