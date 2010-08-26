<?php if (isset($retorno)): ?>
<p>Retorno dos Correios:</p>
<?php debug($retorno); ?>
<br /><hr /><br />
<?php endif; ?>

<?php
	echo $this->Form->create('Entrega', array('url' => array('controller' => 'correios')));
	echo $this->Form->input('tipo', array('type' => 'hidden', 'value' => 'endereco'));
	echo $this->Form->input('cep', array('label' => 'CEP'));
	echo $this->Form->end('Checar endereço');
?>

<br /><br /><hr /><br /><br />

<?php
	echo $this->Form->create('Entrega', array('url' => array('controller' => 'correios')));
	echo $this->Form->input('tipo', array('type' => 'hidden', 'value' => 'frete'));

	$options = array(
		CORREIOS_SEDEX => 'Sedex',
		CORREIOS_SEDEX_A_COBRAR => 'Sedex a cobrar',
		CORREIOS_SEDEX_10 => 'Sedex 10',
		CORREIOS_SEDEX_HOJE => 'Sedex Hoje',
		CORREIOS_E_SEDEX => 'e-Sedex',
		CORREIOS_ENCOMENDA_NORMAL => 'Encomenda Normal',
		CORREIOS_PAC => 'PAC'
	);
	echo $this->Form->input('servico', array('type' => 'select', 'options' => $options));
	echo $this->Form->input('cepOrigem', array('label' => 'CEP Origem'));
	echo $this->Form->input('cepDestino', array('label' => 'CEP Destino'));
	echo $this->Form->input('peso', array('label' => 'Peso (Kg)'));
	echo $this->Form->end('Calcular frete');
?>
