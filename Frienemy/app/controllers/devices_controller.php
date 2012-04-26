<?php


class DevicesController extends AppController {
	var $name='Devices';

	var $uses = array(
		'Device'
	);

	function add() { 
		if (!empty($this->data)) {
			if ($this->Device->save($this->data)) {
				$this->Session->setFlash(__('device_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('device_could_not_be_saved', true));
			}
		}
	}

	function index() {
		$this->Device->recursive = 0;
		$this->set('devices', $this->paginate());
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_device', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Device->save($this->data)) {
				$this->Session->setFlash(__('device_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Device->find(array('id'=>$id),array('created','modified'));
				$this->data['Device']['created'] = $dates['Device']['created'];
				$this->data['Device']['modified'] = $dates['Device']['modified'];
				$this->Session->setFlash(__('device_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Device->read(null, $id);
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_device', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('device', $this->Device->read(null, $id));
	}

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_device', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Device->delete($id)) {
			$this->Session->setFlash(__('device_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('device_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

}

?>