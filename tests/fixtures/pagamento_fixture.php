<?php
/* Pagamento Fixture generated on: 2010-08-25 19:08:47 : 1282775087 */
class PagamentoFixture extends CakeTestFixture {
	var $name = 'Pagamento';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'fonte' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'valor' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'fonte' => 'Lorem ipsum dolor sit amet',
			'valor' => 1
		),
	);
}
?>