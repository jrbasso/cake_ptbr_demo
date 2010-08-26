<?php
	echo $this->Form->create('ModelQualquer');
	echo $this->Form->input('campo');
	echo $this->Form->label('estado_id', 'Estado completo:'),
		$this->Estados->select('estado_id');
	echo $this->Form->label('estado_id', 'Estado em SC:'),
		$this->Estados->select('estado_id', 'SC');
	echo $this->Form->label('estado_id', 'Estado completo:'),
		$this->Estados->select('estado_id', 'SC', array('uf' => true));
	echo $this->Form->end('Enviar');
?>

<pre>$this->EstadoBrasileiro->find('list')</pre>
<?php debug($list); ?>
<br /><br />

<pre>$this->EstadoBrasileiro->listaEstados()</pre>
<?php debug($estados); ?>
<br /><br />

<pre>$this->EstadoBrasileiro->todosEstados(true)</pre>
<?php debug($todos); ?>
<br /><br />

<pre>$this->EstadoBrasileiro->estadoPorSigla('SC')</pre>
<?php debug($sigla); ?>
<br /><br />

<pre>$this->EstadoBrasileiro->siglaPorEstado('Santa Catarina')</pre>
<?php debug($estado); ?>
<br /><br />

<pre>$this->EstadoBrasileiro->estadosDoSul()</pre>
<?php debug($sul); ?>
<br /><br />