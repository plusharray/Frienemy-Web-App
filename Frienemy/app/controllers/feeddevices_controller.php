<?php


class FeeddevicesController extends AppController {
	var $name='Feeddevices';

	var $uses = array(
		'Feeddevice'
	);

	function index() {
		$this->Feeddevice->recursive = 0;
		$this->set('feeddevices', $this->paginate());
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_feeddevice', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Feeddevice->save($this->data)) {
				$this->Session->setFlash(__('feeddevice_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Feeddevice->find(array('id'=>$id),array('created','modified'));
				$this->data['Feeddevice']['created'] = $dates['Feeddevice']['created'];
				$this->data['Feeddevice']['modified'] = $dates['Feeddevice']['modified'];
				$this->Session->setFlash(__('feeddevice_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Feeddevice->read(null, $id);
		}
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->Feeddevice->save($this->data)) {
				$this->Session->setFlash(__('feeddevice_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('feeddevice_could_not_be_saved', true));
			}
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_feeddevice', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('feeddevice', $this->Feeddevice->read(null, $id));
	}

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_feeddevice', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Feeddevice->delete($id)) {
			$this->Session->setFlash(__('feeddevice_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('feeddevice_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

}

?>