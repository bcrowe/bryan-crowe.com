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

	/**
	 * Retrieve all posts for the front page
	 */
	public function posts() {
		$posts = $this->Post->find('all', [
			'order' => 'Post.created DESC'
		]);
		$title_for_layout = 'Bryan Crowe';
		$this->set(compact('posts', 'title_for_layout'));
	}

	/**
	 * Retrieve a single post for full view
	 *
	 * @param string|null $slug The post's URL slug
	 * @throws NotFoundException If a slug is not provided or invalid
	 */
	public function view($slug = null) {
		if ($slug === null) {
			throw new NotFoundException(__('Invalid post.'));
		}

		$post = $this->Post->find('first', [
			'conditions' => ['Post.slug' => $slug],
			'contain' => ['Comment']
		]);

		if (!$post) {
			throw new NotFoundException(__('Invalid post.'));
		}

		$title_for_layout = $post['Post']['title'] . ' | Bryan Crowe';
		$this->set(compact('post', 'title_for_layout'));
	}
}
