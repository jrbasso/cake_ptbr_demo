<div class="compras form">
<?php echo $this->Form->create('Compra');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Compra', true)); ?></legend>
	<?php
		echo $this->Form->input('comprador_id');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Compras', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Compradores', true)), array('controller' => 'compradores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Comprador', true)), array('controller' => 'compradores', 'action' => 'add')); ?> </li>
	</ul>
</div>