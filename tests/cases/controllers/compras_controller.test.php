<?php
/* Compras Test cases generated on: 2010-08-26 19:08:22 : 1282863502*/
App::import('Controller', 'Compras');

class TestComprasController extends ComprasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ComprasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.compra', 'app.comprador');

	function startTest() {
		$this->Compras =& new TestComprasController();
		$this->Compras->constructClasses();
	}

	function endTest() {
		unset($this->Compras);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>