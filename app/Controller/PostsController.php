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
		if($user['role'] === 'admin') {
			return true;
		}
		return parent::isAuthorized($user);
	}

	public function beforeFilter() {
		$this->Auth->allow(['posts', 'view']);
	}

	public function add() {
		$this->Crud->on('beforeSave', function ($e) {
			$postData = $e->subject->controller->request->data;
			$e->subject->controller->request->data['Post']['slug'] = Inflector::slug($postData['Post']['title'], '-');
		});
		return $this->Crud->execute();
	}

	public function edit() {
		$this->Crud->on('beforeSave', function ($e) {
			$postData = $e->subject->controller->request->data;
			$e->subject->controller->request->data['Post']['slug'] = Inflector::slug($postData['Post']['title'], '-');
		});
		return $this->Crud->execute();
	}

	public function posts() {
		$posts = $this->Post->find('all', [
			'order' => 'Post.created DESC'
		]);
		$this->set(compact('posts'));
	}

	public function view($slug = null) {
		$post = $this->Post->find('first', [
			'conditions' => ['Post.slug' => $slug],
			'contain' => ['Comment']
		]);
		$this->set(compact('post'));
	}
}
