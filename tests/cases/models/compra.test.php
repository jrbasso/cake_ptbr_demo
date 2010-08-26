<?php
/* Compra Test cases generated on: 2010-08-26 19:08:10 : 1282863490*/
App::import('Model', 'Compra');

class CompraTestCase extends CakeTestCase {
	var $fixtures = array('app.compra', 'app.comprador');

	function startTest() {
		$this->Compra =& ClassRegistry::init('Compra');
	}

	function endTest() {
		unset($this->Compra);
		ClassRegistry::flush();
	}

}
?>