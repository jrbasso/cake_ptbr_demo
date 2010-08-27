<?php

class ValidacoesController extends AppController {

	var $name = 'Validacoes';
	var $uses = array('Validacao');

	function index() {
		if (!empty($this->data)) {
			$this->Validacao->set($this->data);
			if ($this->Validacao->validates()) {
				$this->Session->setFlash('Validação dos campos ok.');
			}
		} else {
			$this->data = array(
				'Validacao' => array(
					'cpf' => '869.283.422-00',
					'cnpj' => '04.295.166/0001-33',
					'cpf_cnpj' => '869.283.422-00',
					'telefone' => '+55 (48) 2345 6789',
					'cep' => '88001-000'
				)
			);
		}
	}

}