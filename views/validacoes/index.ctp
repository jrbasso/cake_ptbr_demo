<?php
	echo $this->Form->create('Validacao', array('url' => array('controller' => 'validacoes')));
	echo $this->Form->input('cpf');
	echo $this->Form->input('cnpj');
	echo $this->Form->input('cpf_cnpj');
	echo $this->Form->input('telefone');
	echo $this->Form->input('cep');
	echo $this->Form->end('Enviar');
?>