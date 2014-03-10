<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 */
class PostsController extends AppController {

	public function isAuthorized($user) {
		if($user['role'] === 'admin') {
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
		$title_for_layout = 'Bryan Crowe';
		$this->set(compact('posts', 'title_for_layout'));
	}

	public function view($slug = null) {
		$post = $this->Post->find('first', [
			'conditions' => ['Post.slug' => $slug],
			'contain' => ['Comment']
		]);
		$title_for_layout = $post['Post']['title'] . ' | Bryan Crowe';
		$this->set(compact('post', 'title_for_layout'));
	}
}
