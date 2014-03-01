<?php
class lib_post extends spModel
{
	var $pk="pid";
	var $table="post";

	var $linker = array(
		array(
			'type' => 'hasone',   // 一对一关联
			'map' => 'detail',    // 关联的标识
			'mapkey' => 'pid',
			'fclass' => 'lib_savecom', 
			'fkey' => 'pid',    
			'enabled' => false     
		),
		array(
			'type' => 'manytomany',   // 多对多关联
			'map' => 'user', 
			'midclass' => 'post2user',// 关联的标识
			'mapkey' => 'pid', 
			'fclass' => 'lib_user',
			'fkey' => 'uid',
			'enabled' => false
		),
	);


}