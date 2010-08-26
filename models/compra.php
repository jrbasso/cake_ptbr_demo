<?php
class Compra extends AppModel {
	var $name = 'Compra';
	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

	var $belongsTo = array(
		'Comprador' => array(
			'className' => 'Comprador',
			'foreignKey' => 'comprador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>