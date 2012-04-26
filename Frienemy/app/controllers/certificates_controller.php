<?php


class CertificatesController extends AppController {
	var $name='Certificates';

	var $uses = array(
		'Certificate'
	);

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_certificate', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Certificate->delete($id)) {
			$this->Session->setFlash(__('certificate_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('certificate_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->Certificate->save($this->data)) {
				$this->Session->setFlash(__('certificate_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('certificate_could_not_be_saved', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_certificate', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Certificate->save($this->data)) {
				$this->Session->setFlash(__('certificate_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Certificate->find(array('id'=>$id),array('created','modified'));
				$this->data['Certificate']['created'] = $dates['Certificate']['created'];
				$this->data['Certificate']['modified'] = $dates['Certificate']['modified'];
				$this->Session->setFlash(__('certificate_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Certificate->read(null, $id);
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_certificate', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('certificate', $this->Certificate->read(null, $id));
	}

	function index() {
		$this->Certificate->recursive = 0;
		$this->set('certificates', $this->paginate());
	}

}

?>