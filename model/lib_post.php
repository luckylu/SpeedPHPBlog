<?php
class lib_post extends spModel
{
	var $pk="pid";
	var $table="post";

	var $linker = array(
		array(
			'type' => 'hasone',   // һ��һ����
			'map' => 'detail',    // �����ı�ʶ
			'mapkey' => 'pid',
			'fclass' => 'lib_savecom', 
			'fkey' => 'pid',    
			'enabled' => false     
		),
		array(
			'type' => 'manytomany',   // ��Զ����
			'map' => 'user', 
			'midclass' => 'post2user',// �����ı�ʶ
			'mapkey' => 'pid', 
			'fclass' => 'lib_user',
			'fkey' => 'uid',
			'enabled' => false
		),
	);


}