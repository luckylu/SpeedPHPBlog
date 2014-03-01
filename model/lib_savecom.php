<?php
class lib_savecom extends spModel
{
	var $pk="scid";
	var $table="savecom";
		var $linker = array(
		array(
			'type' => 'hasone',   // 一对一关联
			'map' => 'detail',    // 关联的标识
			'mapkey' => 'pid',
			'fclass' => 'lib_savecom', 
			'fkey' => 'pid',    
			'enabled' => false     
		)
		);
}
?>