<div class="compras index">
	<h2><?php __('Compras');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('comprador_id');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($compras as $compra):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $compra['Compra']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($compra['Comprador']['nome'], array('controller' => 'compradores', 'action' => 'view', $compra['Comprador']['id'])); ?>
		</td>
		<td><?php echo $compra['Compra']['data']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $compra['Compra']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $compra['Compra']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $compra['Compra']['id']), null, sprintf(__('Você tem certeza que deseja excluir o id #%s?', true), $compra['Compra']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% registros de %count%, começando no registro %start% e terminando no %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('próxima', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Compra', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Compradores', true)), array('controller' => 'compradores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Comprador', true)), array('controller' => 'compradores', 'action' => 'add')); ?> </li>
	</ul>
</div>