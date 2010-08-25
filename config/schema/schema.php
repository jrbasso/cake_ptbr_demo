<?php 
/* SVN FILE: $Id$ */
/* CakePtbrDemo schema generated on: 2010-08-25 19:08:27 : 1282776987*/
class CakePtbrDemoSchema extends CakeSchema {
	var $name = 'CakePtbrDemo';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $pagamentos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'fonte' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'valor' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	var $usuarios = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'data_nascimento' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
}
?>