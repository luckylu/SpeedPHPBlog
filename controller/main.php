<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("spblog");
mysql_query("set names utf8");
class main extends spController
{
	function index(){
		$this->username=$_SESSION['name'];
		$this->userid=$_SESSION['uid'];
		$setting=spClass("lib_setting");
		$savecom=spClass("lib_savecom");
		$re=$setting->find(null,"sid DESC");
		$post=spClass("lib_post");
		$postres=$post->spPager($this->spArgs('page', 1), 5)->findAll(null,"pid DESC");
		for($i=0;$i<5;$i++)
		{
			$commentnum[]=$savecom->findCount(array('pid'=>$postres[$i][pid]));//计算每篇文章的评论数
		}
		
		for($i=0;$i<5;$i++)
		{
			$postre[]=array
			(
				'title'=>$postres[$i][title],
				'author'=>$postres[$i][author],
				'time'=>$postres[$i][time],
				'content'=>$postres[$i][content],
				'tag'=>$postres[$i][tag],
				'commentnum'=>$commentnum[$i],
				'pid'=>$postres[$i][pid],
			);
		}
	
		$this->postre=$postre;
		$this->pager = $post->spPager()->getPager();

		
		$recom = $savecom->findAll(null,"scid DESC",null,"0,6");
		for($i=0;$i<sizeof($recom);$i++)
		{
			$posttitle[]=$post->find(array('pid'=>$recom[$i][pid]),null,"title");
		}
		for($i=0;$i<sizeof($recom);$i++)
		{
			$comtitle[$i]=array(
			'username'=>$recom[$i]['username'],
			'com'=>$recom[$i]['content'],
			'title'=>$posttitle[$i]['title']);
		}
		$cat=spClass("lib_category");
		$this->catre=$cat->findAll(null,null,"name","0,6");
		$this->comtitle=$comtitle; //边栏最新评论显示
		$links=spClass("lib_links");
		$this->links=$links->findAll();//边栏友情链接
		$this->re=$re;
		$this->display("index.html");
	}

	function show()   //显示文章
	{
		$comment=spClass("lib_comment");
		$savecom=spClass("lib_savecom");
		$pid=$this->spArgs('pid');
		$conditions=array('pid'=>$pid);
		$post=spClass('lib_post');
		$result=$post->find(array('pid'=>$pid));
		$this->result=$post->find(array('pid'=>$pid));//从post中获取cid值
		$catid=explode(",",$result['cid']);   //获取单个cid值
		$category=spClass('lib_category');
		for($i=0;$i<sizeof($catid);$i++){
		$cat[]=$category->find(array('cid'=>$catid[$i]));
		}
		for($i=0;$i<count($cat);$i++)
		{
			
			$re[]=$cat[$i][name];
		}
		$cat=spClass("lib_category");
		$this->catre=$cat->findAll(null,null,"name","0,6");//导航栏分类
		$this->comre=$savecom->findAll(array('pid'=>$pid),"scid DESC");
		
		$this->as=$re; //显示分类
		$this->username=$_SESSION['name'];
		$this->userid=$_SESSION['uid'];
				
		$savecom=spClass("lib_savecom");
		$recom = $savecom->findAll(null,"scid DESC",null,"0,6");
		for($i=0;$i<sizeof($recom);$i++)
		{
			$posttitle[]=$post->find(array('pid'=>$recom[$i][pid]),null,"title");
		}
		for($i=0;$i<sizeof($recom);$i++)
		{
			$comtitle[$i]=array(
			'username'=>$recom[$i]['username'],
			'com'=>$recom[$i]['content'],
			'title'=>$posttitle[$i]['title']);
		}
		$this->comtitle=$comtitle;//边栏最新评论显示
		
		$this->commentnum=$savecom->findCount(array('pid'=>$this->spArgs('pid')));//显示评论数
		$this->postre=$post->spPager($this->spArgs('page', 1), 5)->findAll(null,"pid DESC");//边栏最新文章显示
		$links=spClass("lib_links");
		$this->links=$links->findAll();//边栏友情链接
		$this->display("post.html");
	}

	function searchcat()  //搜索所有同一分类的文章
	{
		$post=spClass("lib_post");
		$cat=spClass("lib_category"); //用spClass分别初始化post和category表数据对象
		$catname=$this->spArgs('catname');
		$conditions=array(
			'name'=>$catname);
		$catre=$cat->find($conditions);
		if($catre){
		$postres=$post->spPager($this->spArgs('page', 1), 5)->findSql("select * from post where cid like '%$catre[cid]%'");}
		$this->pager = $post->spPager()->getPager();
		$this->postres=$postres;
		
		$savecom=spClass("lib_savecom");
		$recom = $savecom->findAll(null,"scid DESC",null,"0,6");
		for($i=0;$i<sizeof($recom);$i++)
		{
			$posttitle[]=$post->find(array('pid'=>$recom[$i][pid]),null,"title");
		}
		for($i=0;$i<sizeof($recom);$i++)
		{
			$comtitle[$i]=array(
			'username'=>$recom[$i]['username'],
			'com'=>$recom[$i]['content'],
			'title'=>$posttitle[$i]['title']);
		}
		$this->comtitle=$comtitle;//边栏最新评论显示
		$this->postre=$post->spPager($this->spArgs('page', 1), 5)->findAll(null,"pid DESC");//边栏最新文章显示
		
		$cat=spClass("lib_category");
		$this->catre=$cat->findAll(null,null,"name","0,6");//导航栏分类
		$links=spClass("lib_links");
		$this->links=$links->findAll();//边栏友情链接
		$this->catname=$catname;
		$this->display("searchcat.html");
	}
	
	function comment()  //写评论
	{
		
		$comment=spClass("lib_comment");
		$user=spClass("lib_user");
		$savecom=spClass("lib_savecom");
		
		$timezone = "Asia/shanghai";
		date_default_timezone_set($timezone);
		$newrow=array(

			'content'=>$this->spArgs('content'),
			'time'=>date('Y-m-d H:i:s'),
			'pid'=>$this->spArgs('pid'),
			'uid'=>$_SESSION['uid'],
		);

		if($this->spArgs('submit')){
		$comment->create($newrow);

		}
				
		$sql="select comment.content,user.name,post.pid,comment.time from post,user,comment where comment.pid=post.pid and user.uid=comment.uid order by comment.coid DESC";  
		$query=mysql_query($sql);
		$queryre=mysql_fetch_array($query); //三表联立查询comment.content,user.name,post.pid
		$savecomrow=array(
			'pid'=>$queryre[pid],
			'username'=>$queryre[name],
			'content'=>$queryre[content],
			'time'=>$queryre[time],
			);
		$savecom->create($savecomrow);  //把查到的数据插入数据表中 
		
		$this->success('评论成功',spUrl('main','show',array('pid'=>$this->spArgs('pid'))));
		
	}
	function search()//搜索结果页
	{
		$keyword=$this->spArgs('keyword');
		$post=spClass("lib_post");
		$searchresult=$post->spPager($this->spArgs('page', 1), 5)->findSql("select * from post where title like '%$keyword%'");
		$this->pager = $post->spPager()->getPager();
		$this->searchresult=$searchresult;
		$this->keyword=$keyword;
		
		$savecom=spClass("lib_savecom");
		$recom = $savecom->findAll(null,"scid DESC",null,"0,6");
		for($i=0;$i<sizeof($recom);$i++)
		{
			$posttitle[]=$post->find(array('pid'=>$recom[$i][pid]),null,"title");
		}
		for($i=0;$i<sizeof($recom);$i++)
		{
			$comtitle[$i]=array(
			'username'=>$recom[$i]['username'],
			'com'=>$recom[$i]['content'],
			'title'=>$posttitle[$i]['title']);
		}
		$this->comtitle=$comtitle;//边栏最新评论显示
		$this->postre=$post->spPager($this->spArgs('page', 1), 5)->findAll(null,"pid DESC");//边栏最新文章显示
		
		$cat=spClass("lib_category");
		$this->catre=$cat->findAll(null,null,"name","0,6");//导航栏分类
		$links=spClass("lib_links");
		$this->links=$links->findAll();//边栏友情链接
		$this->display("search.html");
	}
	function about()
	{
		$post=spClass("lib_post");
		$savecom=spClass("lib_savecom");
		$recom = $savecom->findAll(null,"scid DESC",null,"0,6");
		for($i=0;$i<sizeof($recom);$i++)
		{
			$posttitle[]=$post->find(array('pid'=>$recom[$i][pid]),null,"title");
		}
		for($i=0;$i<sizeof($recom);$i++)
		{
			$comtitle[$i]=array(
			'username'=>$recom[$i]['username'],
			'com'=>$recom[$i]['content'],
			'title'=>$posttitle[$i]['title']);
		}
		$this->comtitle=$comtitle;//边栏最新评论显示
		$this->postre=$post->spPager($this->spArgs('page', 1), 5)->findAll(null,"pid DESC");//边栏最新文章显示
		
		$cat=spClass("lib_category");
		$this->catre=$cat->findAll(null,null,"name","0,6");//导航栏分类
		$links=spClass("lib_links");
		$this->links=$links->findAll();//边栏友情链接
		$this->display("about.html");
	}
		function contact()
	{
		$post=spClass("lib_post");
		$savecom=spClass("lib_savecom");
		$recom = $savecom->findAll(null,"scid DESC",null,"0,6");
		for($i=0;$i<sizeof($recom);$i++)
		{
			$posttitle[]=$post->find(array('pid'=>$recom[$i][pid]),null,"title");
		}
		for($i=0;$i<sizeof($recom);$i++)
		{
			$comtitle[$i]=array(
			'username'=>$recom[$i]['username'],
			'com'=>$recom[$i]['content'],
			'title'=>$posttitle[$i]['title']);
		}
		$this->comtitle=$comtitle;//边栏最新评论显示
		$this->postre=$post->spPager($this->spArgs('page', 1), 5)->findAll(null,"pid DESC");//边栏最新文章显示
		
		$cat=spClass("lib_category");
		$this->catre=$cat->findAll(null,null,"name","0,6");//导航栏分类
		$links=spClass("lib_links");
		$this->links=$links->findAll();//边栏友情链接
		$this->display("contact.html");
	}
}