<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
 		<legend><?php printf(__('Editar %s', true), __('Usuario', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('data_nascimento', array('type' => 'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $this->Form->value('Usuario.id')), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $this->Form->value('Usuario.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Usuarios', true)), array('action' => 'index'));?></li>
	</ul>
</div>