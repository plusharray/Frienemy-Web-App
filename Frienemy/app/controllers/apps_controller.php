<?php


class AppsController extends AppController {
	var $name='Apps';

	var $uses = array(
		'App'
	);

	function index() {
		$this->App->recursive = 0;
		$this->set('apps', $this->paginate());
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_app', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->App->save($this->data)) {
				$this->Session->setFlash(__('app_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->App->find(array('id'=>$id),array('created','modified'));
				$this->data['App']['created'] = $dates['App']['created'];
				$this->data['App']['modified'] = $dates['App']['modified'];
				$this->Session->setFlash(__('app_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->App->read(null, $id);
		}
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->App->save($this->data)) {
				$this->Session->setFlash(__('app_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('app_could_not_be_saved', true));
			}
		}
	}

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_app', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->App->delete($id)) {
			$this->Session->setFlash(__('app_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('app_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_app', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('app', $this->App->read(null, $id));
	}

}

?>