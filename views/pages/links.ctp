<ul>
	<li><?php echo $this->Html->link('Behavior AjusteData', array('controller' => 'usuarios')); ?> (na view usa o Helper Formatacao)</li>
	<li><?php echo $this->Html->link('Behavior AjusteFloat', array('controller' => 'pagamentos')); ?> (na view usa o Helper Formatacao)</li>
	<li><?php echo $this->Html->link('Model EstadoBrasileiro', array('controller' => 'estados')); ?> (na index tem o Helper Estados)</li>
	<li><?php echo $this->Html->link('Behavior Correios', array('controller' => 'correios')); ?></li>
	<li><?php echo $this->Html->link('Tabelas em Português', array('controller' => 'compras')); ?> (vai funcionar o CRUD se estiver com o plugin instalado)</li>
</ul>