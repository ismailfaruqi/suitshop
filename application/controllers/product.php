<?php 

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['categories'] = Category::limit(5);
	}

	public function category($id)
	{
		$this->data['body'] = 'product/category';
		$this->load->view('layouts/application', $this->data);	
	}

	public function detail($id)
	{
		$this->data['body'] = 'product/detail';
		$this->load->view('layouts/application', $this->data);
	}
}

 ?>