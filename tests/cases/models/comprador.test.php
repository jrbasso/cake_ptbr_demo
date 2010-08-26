<?php
/* Comprador Test cases generated on: 2010-08-26 20:08:28 : 1282863628*/
App::import('Model', 'Comprador');

class CompradorTestCase extends CakeTestCase {
	var $fixtures = array('app.comprador');

	function startTest() {
		$this->Comprador =& ClassRegistry::init('Comprador');
	}

	function endTest() {
		unset($this->Comprador);
		ClassRegistry::flush();
	}

}
?>