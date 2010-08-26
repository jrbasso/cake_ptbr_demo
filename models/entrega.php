<?php

class Entrega extends AppModel {

	var $name = 'Entrega';
	var $useTable = false;

	var $actsAs = array('CakePtbr.Correios');

}