<?php


class AppdevicesubscriptionsController extends AppController {
	var $name='Appdevicesubscriptions';

	var $uses = array(
		'Appdevicesubscription'
	);

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_appdevicesubscription', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('appdevicesubscription', $this->Appdevicesubscription->read(null, $id));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_appdevicesubscription', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Appdevicesubscription->save($this->data)) {
				$this->Session->setFlash(__('appdevicesubscription_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Appdevicesubscription->find(array('id'=>$id),array('created','modified'));
				$this->data['Appdevicesubscription']['created'] = $dates['Appdevicesubscription']['created'];
				$this->data['Appdevicesubscription']['modified'] = $dates['Appdevicesubscription']['modified'];
				$this->Session->setFlash(__('appdevicesubscription_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Appdevicesubscription->read(null, $id);
		}
	}

	function index() {
		$this->Appdevicesubscription->recursive = 0;
		$this->set('appdevicesubscriptions', $this->paginate());
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->Appdevicesubscription->save($this->data)) {
				$this->Session->setFlash(__('appdevicesubscription_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('appdevicesubscription_could_not_be_saved', true));
			}
		}
	}

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_appdevicesubscription', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Appdevicesubscription->delete($id)) {
			$this->Session->setFlash(__('appdevicesubscription_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('appdevicesubscription_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

}

?>