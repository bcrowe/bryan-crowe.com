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
		$posts = $this->Post->find('all', [
			'order' => 'Post.created DESC'
		]);
		$this->set(compact('posts'));
	}

	public function view($id = null) {
		$post = $this->Post->find('first', [
			'conditions' => ['Post.id' => $id],
			'contain' => ['Comment']
		]);
		$this->set(compact('post'));
	}

}
