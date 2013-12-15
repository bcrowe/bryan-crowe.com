<?php
App::uses('AppController', 'Controller');
/**
 * Comments Controller
 *
 * @property Comment $Comment
 * @property PaginatorComponent $Paginator
 */
class CommentsController extends AppController {

	public function isAuthorized($user) {
		if($user['role'] === 'admin') {
			return true;
		}
		return parent::isAuthorized($user);
	}

	public function beforeFilter() {
		$this->Auth->allow(['add']);
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Comment->save($this->request->data);
			return $this->redirect($this-referer());
		}
	}
}
