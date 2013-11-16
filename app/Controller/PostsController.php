<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {

	public function isAuthorized($user) {
		if(in_array($this->action, ['index', 'add', 'edit', 'delete']) && $user['role'] === 'admin') {
			return true;
		}
		return parent::isAuthorized($user);
	}

	public function beforeFilter() {
		$this->Auth->allow(['posts', 'view']);
	}

	public function posts() {
		$posts = $this->Post->find('all');
		$this->set(compact('posts'));
	}

}
