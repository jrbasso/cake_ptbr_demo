<?php
/* Usuario Test cases generated on: 2010-08-25 18:08:49 : 1282772809*/
App::import('Model', 'Usuario');

class UsuarioTestCase extends CakeTestCase {
	var $fixtures = array('app.usuario');

	function startTest() {
		$this->Usuario =& ClassRegistry::init('Usuario');
	}

	function endTest() {
		unset($this->Usuario);
		ClassRegistry::flush();
	}

}
?>