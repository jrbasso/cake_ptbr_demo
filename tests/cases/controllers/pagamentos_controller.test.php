<?php
/* Pagamentos Test cases generated on: 2010-08-25 19:08:59 : 1282775099*/
App::import('Controller', 'Pagamentos');

class TestPagamentosController extends PagamentosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PagamentosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.pagamento');

	function startTest() {
		$this->Pagamentos =& new TestPagamentosController();
		$this->Pagamentos->constructClasses();
	}

	function endTest() {
		unset($this->Pagamentos);
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