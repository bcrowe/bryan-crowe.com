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
		$this->Paginator->settings = array(
			'limit' => 10, 
		);
		$posts = $this->Paginator->paginate('Post');
		$this->set(compact('posts'));
	}

}
