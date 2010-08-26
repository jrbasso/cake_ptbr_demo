<?php
/* Compra Fixture generated on: 2010-08-26 19:08:10 : 1282863490 */
class CompraFixture extends CakeTestFixture {
	var $name = 'Compra';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'comprador_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'data' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'comprador_id' => 1,
			'data' => '2010-08-26'
		),
	);
}
?>