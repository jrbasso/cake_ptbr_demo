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