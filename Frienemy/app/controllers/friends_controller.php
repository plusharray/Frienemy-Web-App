<?php


class FriendsController extends AppController {
	var $name='Friends';

	var $uses = array(
		'Friend'
	);

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('invalid_friend', true));
				$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Friend->save($this->data)) {
				$this->Session->setFlash(__('friend_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$dates = $this->Friend->find(array('id'=>$id),array('created','modified'));
				$this->data['Friend']['created'] = $dates['Friend']['created'];
				$this->data['Friend']['modified'] = $dates['Friend']['modified'];
				$this->Session->setFlash(__('friend_could_not_be_saved', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Friend->read(null, $id);
		}
	}

	function delete($id) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_friend', true));
				$this->redirect(array('action' => 'index'));
		}
		if ($this->Friend->delete($id)) {
			$this->Session->setFlash(__('friend_has_been_deleted', true).': '.$id,'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('friend_was_not_deleted', true));
				$this->redirect(array('action' => 'index'));
	}

	function add() { 
		if (!empty($this->data)) {
			if ($this->Friend->save($this->data)) {
				$this->Session->setFlash(__('friend_has_been_saved', true),'default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('friend_could_not_be_saved', true));
			}
		}
	}

	function index() {
		$this->Friend->recursive = 0;
		$this->set('friends', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('invalid_friend', true));
				$this->redirect(array('action' => 'index'));
		}
		$this->set('friend', $this->Friend->read(null, $id));
	}

}

?>