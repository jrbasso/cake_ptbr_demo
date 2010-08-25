<div class="pagamentos form">
<?php echo $this->Form->create('Pagamento');?>
	<fieldset>
 		<legend><?php printf(__('Editar %s', true), __('Pagamento', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fonte');
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $this->Form->value('Pagamento.id')), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $this->Form->value('Pagamento.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Pagamentos', true)), array('action' => 'index'));?></li>
	</ul>
</div>