<?php


class MessagequeuesController extends AppController {
	var $name='Messagequeues';

	var $uses = array(
		'Messagequeue'
	);

	function index() {
		$this->Messagequeue->recursive = 0;
		$this->set('messagequeues', $this->paginate());
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->Messagequeue->save($this->data)) {
				$this->Session->setFlash(__('messagequeue_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('messagequeue_could_not_be_saved', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_messagequeue', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Messagequeue->save($this->data)) {
				$this->Session->setFlash(__('messagequeue_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Messagequeue->find(array('id'=>$id),array('created','modified'));
				$this->data['Messagequeue']['created'] = $dates['Messagequeue']['created'];
				$this->data['Messagequeue']['modified'] = $dates['Messagequeue']['modified'];
				$this->Session->setFlash(__('messagequeue_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Messagequeue->read(null, $id);
		}
	}

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_messagequeue', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Messagequeue->delete($id)) {
			$this->Session->setFlash(__('messagequeue_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('messagequeue_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_messagequeue', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('messagequeue', $this->Messagequeue->read(null, $id));
	}

}

?>