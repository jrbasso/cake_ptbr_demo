<?php
class ComprasController extends AppController {

	var $name = 'Compras';

	function index() {
		$this->Compra->recursive = 0;
		$this->set('compras', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Compra'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('compra', $this->Compra->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Compra->create();
			if ($this->Compra->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'compra'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'compra'));
			}
		}
		$compradores = $this->Compra->Comprador->find('list');
		$this->set(compact('compradores'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Compra'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Compra->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'compra'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'compra'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Compra->read(null, $id);
		}
		$compradores = $this->Compra->Comprador->find('list');
		$this->set(compact('compradores'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'compra'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Compra->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Compra'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Compra'));
		$this->redirect(array('action' => 'index'));
	}
}
?>