<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public function isAuthorized($user) {
		if($user['role'] === 'admin') {
			return true;
		}
		return parent::isAuthorized($user);
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(['login', 'logout']);
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
