<?php
/* Pagamento Test cases generated on: 2010-08-25 19:08:47 : 1282775087*/
App::import('Model', 'Pagamento');

class PagamentoTestCase extends CakeTestCase {
	var $fixtures = array('app.pagamento');

	function startTest() {
		$this->Pagamento =& ClassRegistry::init('Pagamento');
	}

	function endTest() {
		unset($this->Pagamento);
		ClassRegistry::flush();
	}

}
?>