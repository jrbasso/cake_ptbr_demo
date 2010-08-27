<?php

App::import('Lib', 'Localized.BrValidation');

class Validacao extends AppModel {

	var $name = 'Validacao';
	var $useTable = false;

	var $validate = array(
		'cpf' => array(
			'rule' => 'cpf',
			'message' => 'CPF inválido.'
		),
		'cnpj' => array(
			'rule' => 'cnpj',
			'message' => 'CNPJ inválido.'
		),
		'cpf_cnpj' => array(
			'rule' => array('ssn', null, 'br'),
			'message' => 'CPF ou CNPJ inválido.'
		),
		'telefone' => array(
			'rule' => array('phone', null, 'br'),
			'message' => 'Telefone inválido.'
		),
		'cep' => array(
			'rule' => array('postal', null, 'br'),
			'message' => 'CEP inválido.'
		)
	);

	function cpf($cpf) {
		return BrValidation::cpf($cpf['cpf']);
	}

	function cnpj($cnpj) {
		return BrValidation::cnpj($cnpj['cnpj']);
	}
}