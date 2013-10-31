<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {

	public function beforeFilter() {
		$this->Auth->allow(['index', 'add', 'posts']);
	}

	public function posts() {
		$posts = $this->Post->find('all');
		$this->set(compact('posts'));
	}

}
