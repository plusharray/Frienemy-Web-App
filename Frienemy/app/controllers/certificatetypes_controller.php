<?php


class CertificatetypesController extends AppController {
	var $name='Certificatetypes';

	var $uses = array(
		'Certificatetype'
	);

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_certificatetype', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Certificatetype->delete($id)) {
			$this->Session->setFlash(__('certificatetype_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('certificatetype_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_certificatetype', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Certificatetype->save($this->data)) {
				$this->Session->setFlash(__('certificatetype_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Certificatetype->find(array('id'=>$id),array('created','modified'));
				$this->data['Certificatetype']['created'] = $dates['Certificatetype']['created'];
				$this->data['Certificatetype']['modified'] = $dates['Certificatetype']['modified'];
				$this->Session->setFlash(__('certificatetype_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Certificatetype->read(null, $id);
		}
	}

	function index() {
		$this->Certificatetype->recursive = 0;
		$this->set('certificatetypes', $this->paginate());
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->Certificatetype->save($this->data)) {
				$this->Session->setFlash(__('certificatetype_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('certificatetype_could_not_be_saved', true));
			}
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_certificatetype', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('certificatetype', $this->Certificatetype->read(null, $id));
	}

}

?>