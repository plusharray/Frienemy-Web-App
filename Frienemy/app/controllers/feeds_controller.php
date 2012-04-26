<?php


class FeedsController extends AppController {
	var $name='Feeds';

	var $uses = array(
		'Feed'
	);

	function add() { 
		if (!empty($this->data)) {
			if ($this->Feed->save($this->data)) {
				$this->Session->setFlash(__('feed_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('feed_could_not_be_saved', true));
			}
		}
	}

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_feed', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Feed->delete($id)) {
			$this->Session->setFlash(__('feed_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('feed_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_feed', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Feed->save($this->data)) {
				$this->Session->setFlash(__('feed_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Feed->find(array('id'=>$id),array('created','modified'));
				$this->data['Feed']['created'] = $dates['Feed']['created'];
				$this->data['Feed']['modified'] = $dates['Feed']['modified'];
				$this->Session->setFlash(__('feed_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Feed->read(null, $id);
		}
	}

	function index() {
		$this->Feed->recursive = 0;
		$this->set('feeds', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_feed', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('feed', $this->Feed->read(null, $id));
	}

}

?>