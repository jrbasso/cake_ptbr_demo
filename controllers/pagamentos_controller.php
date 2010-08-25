<?php
class PagamentosController extends AppController {

	var $name = 'Pagamentos';

	function index() {
		$this->Pagamento->recursive = 0;
		$this->set('pagamentos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pagamento'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pagamento', $this->Pagamento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pagamento->create();
			if ($this->Pagamento->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pagamento'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pagamento'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pagamento'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pagamento->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pagamento'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pagamento'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pagamento->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'pagamento'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pagamento->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Pagamento'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Pagamento'));
		$this->redirect(array('action' => 'index'));
	}
}
?>