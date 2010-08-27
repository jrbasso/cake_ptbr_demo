<?php
class Usuario extends AppModel {
	var $name = 'Usuario';
	var $displayField = 'nome';

	var $actsAs = array(
		'CakePtbr.AjusteData'
			=> array(
				'data_nascimento',
				'nome' /* Este campo ele vai mudar se for no formato de data, mesmo sendo string
			)
	);

}
?>