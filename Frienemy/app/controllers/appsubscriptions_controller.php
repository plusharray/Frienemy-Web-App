<?php


class AppsubscriptionsController extends AppController {
	var $name='Appsubscriptions';

	var $uses = array(
		'Appsubscription'
	);

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_appsubscription', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Appsubscription->delete($id)) {
			$this->Session->setFlash(__('appsubscription_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('appsubscription_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->Appsubscription->save($this->data)) {
				$this->Session->setFlash(__('appsubscription_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('appsubscription_could_not_be_saved', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_appsubscription', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Appsubscription->save($this->data)) {
				$this->Session->setFlash(__('appsubscription_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Appsubscription->find(array('id'=>$id),array('created','modified'));
				$this->data['Appsubscription']['created'] = $dates['Appsubscription']['created'];
				$this->data['Appsubscription']['modified'] = $dates['Appsubscription']['modified'];
				$this->Session->setFlash(__('appsubscription_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Appsubscription->read(null, $id);
		}
	}

	function index() {
		$this->Appsubscription->recursive = 0;
		$this->set('appsubscriptions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_appsubscription', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('appsubscription', $this->Appsubscription->read(null, $id));
	}

}

?>