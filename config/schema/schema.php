<?php 
/* SVN FILE: $Id$ */
/* CakePtbrDemo schema generated on: 2010-08-25 18:08:25 : 1282773565*/
class CakePtbrDemoSchema extends CakeSchema {
	var $name = 'CakePtbrDemo';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $usuarios = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'data_nascimento' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
}
?>