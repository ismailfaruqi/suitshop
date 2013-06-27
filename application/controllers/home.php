<?php 

class Home extends CI_Controller {

	public function index()
	{
		$this->data['categories'] = Category::limit(5);
		$this->data['featured_products'] = Product::find('all', 
			array('conditions' => 'is_featured = 1', 
				'limit' => 4, 
				'order' => 'created_at DESC'));
		$this->data['latest_products'] = Product::latest(4);
		$this->data['body'] = 'home/index';
		$this->load->view('layouts/application', $this->data);
	}

}

 ?>