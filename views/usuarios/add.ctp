<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
 		<legend><?php printf(__('Incluir %s', true), __('Usuario', true)); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('data_nascimento', array('type' => 'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Usuarios', true)), array('action' => 'index'));?></li>
	</ul>
</div>