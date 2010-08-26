<?php
class Comprador extends AppModel {
	var $name = 'Comprador';
	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

	var $hasMany = array(
		'Compra' => array(
			'className' => 'Compra',
			'foreignKey' => 'comprador_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>