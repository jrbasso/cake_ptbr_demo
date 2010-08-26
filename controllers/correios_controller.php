<?php

class CorreiosController extends AppController {

	var $name = 'Correios';
	var $uses = array('Entrega');

	function index() {
		if (!empty($this->data['Entrega'])) {
			extract($this->data['Entrega']);
			if (!isset($tipo) || !in_array($tipo, array('endereco', 'frete'))) {
				return;
			}
			$retorno = false;
			if ($tipo === 'endereco') {
				$retorno = $this->Entrega->endereco($cep);
			} else {
				$retorno = $this->Entrega->valorFrete($servico, $cepOrigem, $cepDestino, $peso);
			}
			$this->_msgErro($retorno);
			$this->set(compact('retorno'));
		}
	}

	function _msgErro(&$retorno) {
		if (is_integer($retorno)) {
			switch ($retorno) {
				case ERRO_CORREIOS_PARAMETROS_INVALIDOS:
					$retorno = 'Parâmetros inválidos';
					break;
				case ERRO_CORREIOS_EXCESSO_PESO:
					$retorno = 'Excesso de peso';
					break;
				case ERRO_CORREIOS_FALHA_COMUNICACAO:
					$retorno = 'Falha de comunicação';
					break;
				case ERRO_CORREIOS_CONTEUDO_INVALIDO:
					$retorno = 'Conteúdo que veio dos Correios não é o esperado';
					break;
				default:
					$retorno = 'Foi erro mesmo?';
			}
		} elseif ($retorno === false) {
			$retorno = 'A pesquisa foi feita?';
		}
	}

}