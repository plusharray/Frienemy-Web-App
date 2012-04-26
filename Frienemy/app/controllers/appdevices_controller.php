<?php


class AppdevicesController extends AppController {
	var $name='Appdevices';

	var $uses = array(
		'Appdevice'
	);

	function index() {
		$this->Appdevice->recursive = 0;
		$this->set('appdevices', $this->paginate());
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_appdevice', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Appdevice->save($this->data)) {
				$this->Session->setFlash(__('appdevice_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Appdevice->find(array('id'=>$id),array('created','modified'));
				$this->data['Appdevice']['created'] = $dates['Appdevice']['created'];
				$this->data['Appdevice']['modified'] = $dates['Appdevice']['modified'];
				$this->Session->setFlash(__('appdevice_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Appdevice->read(null, $id);
		}
	}

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_appdevice', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Appdevice->delete($id)) {
			$this->Session->setFlash(__('appdevice_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('appdevice_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_appdevice', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('appdevice', $this->Appdevice->read(null, $id));
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->Appdevice->save($this->data)) {
				$this->Session->setFlash(__('appdevice_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('appdevice_could_not_be_saved', true));
			}
		}
	}

}

?>