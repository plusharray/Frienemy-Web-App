<?php


class CertificateserversController extends AppController {
	var $name='Certificateservers';

	var $uses = array(
		'Certificateserver'
	);

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_certificateserver', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('certificateserver', $this->Certificateserver->read(null, $id));
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->Certificateserver->save($this->data)) {
				$this->Session->setFlash(__('certificateserver_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('certificateserver_could_not_be_saved', true));
			}
		}
	}

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_certificateserver', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Certificateserver->delete($id)) {
			$this->Session->setFlash(__('certificateserver_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('certificateserver_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

	function index() {
		$this->Certificateserver->recursive = 0;
		$this->set('certificateservers', $this->paginate());
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_certificateserver', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Certificateserver->save($this->data)) {
				$this->Session->setFlash(__('certificateserver_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Certificateserver->find(array('id'=>$id),array('created','modified'));
				$this->data['Certificateserver']['created'] = $dates['Certificateserver']['created'];
				$this->data['Certificateserver']['modified'] = $dates['Certificateserver']['modified'];
				$this->Session->setFlash(__('certificateserver_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Certificateserver->read(null, $id);
		}
	}

}

?>