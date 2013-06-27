<?php 

class Categories extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->data['categories'] = Category::all();
		$this->data['body'] = 'admin/categories/index';
		$this->load->view('admin/layouts/admin', $this->data);
	}
}

?>