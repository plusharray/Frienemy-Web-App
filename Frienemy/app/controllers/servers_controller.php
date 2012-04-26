<?php


class ServersController extends AppController {
	var $name='Servers';

	var $uses = array(
		'Server'
	);

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_server', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Server->delete($id)) {
			$this->Session->setFlash(__('server_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('server_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->Server->save($this->data)) {
				$this->Session->setFlash(__('server_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('server_could_not_be_saved', true));
			}
		}
	}

	function index() {
		$this->Server->recursive = 0;
		$this->set('servers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_server', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('server', $this->Server->read(null, $id));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_server', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Server->save($this->data)) {
				$this->Session->setFlash(__('server_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Server->find(array('id'=>$id),array('created','modified'));
				$this->data['Server']['created'] = $dates['Server']['created'];
				$this->data['Server']['modified'] = $dates['Server']['modified'];
				$this->Session->setFlash(__('server_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Server->read(null, $id);
		}
	}

}

?>