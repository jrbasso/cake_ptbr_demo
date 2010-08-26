<?php

class EstadosController extends AppController {

	var $name = 'Estados';
	var $uses = array('CakePtbr.EstadoBrasileiro');

	function index() {
		$this->set('all', $this->EstadoBrasileiro->find('all'));
		$this->set('list', $this->EstadoBrasileiro->find('list'));
		$this->set('estados', $this->EstadoBrasileiro->listaEstados());
		$this->set('todos', $this->EstadoBrasileiro->todosEstados(true));
		$this->set('sigla', $this->EstadoBrasileiro->estadoPorSigla('SC'));
		$this->set('estado', $this->EstadoBrasileiro->siglaPorEstado('Santa Catarina'));
		$this->set('sul', $this->EstadoBrasileiro->estadosDoSul());
	}

}