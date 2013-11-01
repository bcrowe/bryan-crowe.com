<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

	public function beforeFilter() {
		$this->Auth->allow(['index', 'add', 'login']);
	}

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(__('Invalid username or password, try again.'));
		}
	}

	public function logout() {
		$this->Session->destroy();
		return $this->redirect($this->Auth->logout());
	}

}
