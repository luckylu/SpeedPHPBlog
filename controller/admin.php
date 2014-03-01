
<?php
class admin extends spController
{
	function index(){
		$this->username=$_SESSION['name'];
		
		
		$this->display("admin/index.html");
	}
	function head(){
		
		
		
		$this->display("admin/head.html");
	}
	function manage()
	{
		$post=spClass("lib_post");
		
		$re=$post->spPager($this->spArgs('page', 1), 10)->findAll(null,"pid DESC");
		$this->result=$re;
		$this->pager = $post->spPager()->getPager();
		for($i=0;$i<sizeof($re);$i++){
		$catids[]=$re[$i]['cid'];}
		for($i=0;$i<sizeof($catids);$i++){
		$catid[]=explode(",",$catids[$i]);}   //获取单个cid值
		$category=spClass('lib_category');

		for($i=0;$i<sizeof($catid);$i++){
			
			foreach($catid[$i] as &$catre){
				$cat=$category->find(array('cid'=>$catre));
				$catre=$cat['name'];
			}
			
			}

		
/*		for($i=0;$i<sizeof($cats);$i++)
		{
			for($j=0;$j<sizeof($cats[$i]);$j++)
			{
				$scat[$j]=$cats[$i][$j]['name'];
			}
				$scats[]=$scat;    //获取数组中键名为name的键值
		}*/
				for($i=0;$i<sizeof($catid);$i++)
		{
			
				if(sizeof($catid[$i])>1)                    //考虑分类大于一个的情况
				{
					for($j=0;$j<sizeof($catid[$i]);$j++)   
					{
					$ssscat.=strval($catid[$i][$j])." ";
					
					}
					$sscat=array('name'=>$ssscat);
				}
				else{
				$sscat=array('name'=>$catid[$i][0]);
				
				}
				
				$sscats[]=$sscat;
				$sscat=array();
		}
				
		
		
		for($i=0;$i<sizeof($re);$i++)   //把$re和$sscats两个数组拆分开来组合成一个新数组
		{
			$cre[]=array(
				'title'=>$re[$i]['title'],
				'catname'=>$cat[$i]['name'],
				'time'=>$re[$i]['time'],
				'pid'=>$re[$i]['pid']);
		}

		$this->cre=$cre;
		$this->display("admin/manage.html");
	}
	function add()
	{
		$cat=spClass("lib_category");
		$this->result=$cat->findAll();  //查找所有分类，然后在模版中显示
		
		
		$this->setwrite=array('url'=>spUrl('admin','write'),'btn'=>'写好了');
		$this->display("admin/write.html");
	}
	function edit()
	{
		
		$pid=$this->spArgs('pid');
		$result=spClass("lib_post");
		$conditions=array('pid'=>$pid);
		$this->p=$result->find($conditions);
		$this->setwrite=array('url'=>spUrl('admin','update'),'btn'=>'改好了');
		$cat=spClass("lib_category");
		$this->result=$cat->findAll();  //查找所有分类，然后在模版中显示
		$this->display("admin/write.html");
	}
	function write()  //写文章
	{
		$post=spClass("lib_post");
		$timezone = "Asia/shanghai";
		date_default_timezone_set($timezone);
		$cid=$this->spArgs("cid");
		foreach($cid as $key=>$value)       //取得cid值
		{
			if($key==0)
			$cid=$value;
			else
				$cid.=","."$value";
		}
		$newrow=array(
			'title'=>$this->spArgs("title"),
			'content'=>$this->spArgs("content"),
			'tag'=>$this->spArgs("tag"),
			'time'=>date('Y-m-d H:i:s'),
			'cid'=>$cid);
		
		if($this->spArgs("submit")){
		$post->create($newrow);}
		$this->success('添加文章成功',spUrl('admin','manage'));

	}
	function update()  //更新文章
	{
		$post=spClass("lib_post");
		$pid=$this->spArgs('pid');
				$cid=$this->spArgs("cid");
				$timezone = "Asia/shanghai";
		date_default_timezone_set($timezone);
		foreach($cid as $key=>$value)       //取得cid值
		{
			if($key==0)
			$cid=$value;
			else
				$cid.=","."$value";
		}
		$conditions=array('pid'=>$pid);
				$newrow=array(
			'title'=>$this->spArgs("title"),
			'content'=>$this->spArgs("content"),
			'tag'=>$this->spArgs("tag"),
			
			'cid'=>$cid);
		$post->update($conditions,$newrow);
		
		$this->success('文章更新成功',spUrl('admin','manage'));
	}
	function delete()   //删除文章
	{
		$pid=$this->spArgs('pid');
		$conditions=array('pid'=>$pid);
		$post=spClass('lib_post');
		$post->delete($conditions);
		$this->success('文章删除成功',spUrl('admin','manage'));
	}

	function addcategory()  //添加分类
	{
		$category=spClass('lib_category');
		if($this->spArgs("submit")){
		$category->create($this->spArgs());}
		$this->success('添加分类成功',spUrl('admin','catmanage'));
	}
	function updatecategory()  //更新分类
	{
		$cid=$this->spArgs('cid');
		$category=spClass('lib_category');
		$conditions=array('cid'=>$cid);
		$newrow=array('name'=>$this->spArgs('name'));
		if($this->spArgs("submit")){
		$category->update($conditions,$newrow);}
		$this->success('修改分类成功',spUrl('admin','catmanage'));
	}
	function catmanage()  //分类管理
	{
		$cat=spClass("lib_category");
		$this->result=$cat->spPager($this->spArgs('page', 1), 10)->findAll(null,"cid DESC");
		$this->pager = $cat->spPager()->getPager();
		$this->display("admin/catmanage.html");
	}
	function addcat() //添加分类
	{
		$this->setcat=array('url'=>spUrl('admin','addcategory'),'btn'=>'加上去');
		$this->display("admin/addcat.html");
	}
	function editcat() //编辑分类
	{
		$cid=$this->spArgs('cid');
		$result=spClass("lib_category");
		$conditions=array('cid'=>$cid);
		$this->p=$result->find($conditions);
		$this->setcat=array('url'=>spUrl('admin','updatecategory'),'btn'=>'改好了');
		$this->display("admin/addcat.html");
	}
	function deletecat() //删除分类
	{
		$cat=spClass('lib_category');
		$cid=$this->spArgs('cid');
		$conditions=array('cid'=>$cid);
		$cat->delete($conditions);
		$this->success('删除分类成功',spUrl('admin','catmanage'));
	}
	function managecomment() //评论管理
	{
		$savecom=spClass("lib_savecom");
		$this->result=$savecom->spPager($this->spArgs('page', 1), 10)->findAll(null,"scid DESC");
		$this->pager = $savecom->spPager()->getPager();
		$this->display("admin/managecomment.html");

	}
	function deletecomment()
	{
		$savecom=spClass("lib_savecom");
		$savecom->delete(array('scid'=>$this->spArgs(scid)));
		$this->success('删除评论成功',spUrl('admin','managecomment'));
	}
	function manageuser()
	{
		$user=spClass("lib_user");
		$this->result=$user->spPager($this->spArgs('page', 1), 5)->findAll();
		$this->pager = $user->spPager()->getPager();
		$this->display("admin/manageuser.html");
	}
	function deleteuser()
	{
		$user=spClass("lib_user");
		$user->delete(array('uid'=>$this->spArgs(uid)));
		$this->success('删除用户成功',spUrl('admin','manageuser'));
	}
	function edituser()
	{
		$user=spClass("lib_user");
		$this->re=$user->find(array('uid'=>$this->spArgs(uid)));
		$this->display("admin/edituser.html");
	}
	function updateuser()
	{
		$user=spClass("lib_user");
		$newrow=array(
			'name'=>$this->spArgs(name),
			'email'=>$this->spArgs(email),);
		$conditions=array(
			'uid'=>$this->spArgs(uid));
		$user->update($conditions,$newrow);
		if($this->spArgs(uid)==1){
		session_destroy();}
		$this->success('更新用户成功',spUrl('admin','manageuser'));
	}
	function edituserpw()//更新密码
	{
		$user=spClass("lib_user");
		$this->res=$user->find(array('uid'=>$this->spArgs('uid')));
		$this->display("admin/updateuserpw.html");
	}

	function updateuserpw()//更新密码
	{
		$user=spClass("lib_user");
		$user->verifier = $user->verifier_upuserpw;
		$newrow=array(
			'password'=>$this->spArgs('password'),
			'password1'=>$this->spArgs('password1'),);
			 $re=$user->spVerifier($newrow);
			 
		 if( false==$re&&$this->spArgs("submit"))   // 开始验证
		{
			 $newrows=array(
			'password'=>md5($this->spArgs('password')),
		);
			$conditions=array(
			'uid'=>$this->spArgs('uid'));
			$user->update($conditions,$newrows);
			$this->success('更改密码成功',spUrl('admin','manageuser'));
		    }
			elseif($re&&$this->spArgs("submit"))
		{
				$this->re=$re;//返回验证信息
				
				$this->display("admin/updateuserpw.html");
		}
		
		
	}
	function admin_nav()//后台左侧导航页
	{
		$this->username=$_SESSION['name'];
		$this->display("admin/admin_nav.html");
	}
	function admin_settings()
	{
		$setting=spClass("lib_setting");
		$re=$setting->find(null,"sid DESC");
		$this->re=$re;
		$this->display("admin/admin_setting.html");//从setting表中取出设置显示到模板上
	}


	function admin_setting()
	{
		$setting=spClass("lib_setting");
		$conditions=array(
		'name'=>$this->spArgs("blogname"),
		'description'=>$this->spArgs("blogdescription"),
		'keywords'=>$this->spArgs("blogkeywords"),
		);
		$setting->create($conditions);//把博客新设置存入setting表中
		$re=$setting->find(null,"sid DESC");
		$dsid=$re['sid']-1;
		
		$condition=array('sid'=>$dsid);
		$setting->delete($condition);//把之前的博客设置从setting表中删除
	}
	function welcome()
	{
		$post=spClass("lib_post");
		$this->postnum=$post->findCount('pid');
		$comnum=spClass("lib_savecom");
		$this->comnum=$comnum->findCount('scid');
		$this->display("admin/welcome.html");
		
	}
	function addlinks()
	{
		$this->setlinks=array('url'=>spUrl('admin','addlink'),'btn'=>'加上去');
		
		$this->display("admin/addlinks.html");
	}
	function addlink()
	{
		$links=spClass("lib_links");
		$links->create($this->spArgs());
		$this->success('添加友链成功',spUrl('admin','linksmanage'));
	}
	function linksmanage()
	{
		$links=spClass("lib_links");
		$this->result=$links->spPager($this->spArgs('page', 1), 10)->findAll(null,"lid DESC");
		$this->pager = $links->spPager()->getPager();
		$this->display("admin/linksmanage.html");
	}
	function editlinks()
	{
		$links=spClass("lib_links");
		$link=$this->spArgs("lid");
		$this->result=$links->find(array('lid'=>$link));
		$this->setlinks=array('url'=>spUrl('admin','updatelink'),'btn'=>'改好了');
		$this->display("admin/addlinks.html");
	}
	function updatelink()
	{
		$links=spClass("lib_links");
		$newrow=array(
			'name'=>$this->spArgs('name'),
			'url'=>$this->spArgs('url'));
		$conditions=array(
			'lid'=>$this->spArgs('lid'));
		$links->update($conditions,$newrow);
		$this->success('更新友链成功',spUrl('admin','linksmanage'));
	}
	function deletelinks()
	{
		$links=spClass("lib_links");
		$conditions=array(
			'lid'=>$this->spArgs('lid'));
		$links->delete($conditions);
		$this->success('删除友链成功',spUrl('admin','linksmanage'));
	}
}
?>