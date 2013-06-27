<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index($page = 1)
	{
		$this->data['products'] = Product::page($page);
		$this->data['body'] = 'admin/products/index';
		$this->load->view('admin/layouts/admin', $this->data);
	}

	function add()
	{
		$this->data['product'] = new Product();
		$this->_prepare_add_form();
		$this->load->view('admin/layouts/admin', $this->data);
	}

	function edit($id)
	{
		$this->data['product'] = Product::find($id);		
		$this->_prepare_edit_form();
		$this->load->view('admin/layouts/admin', $this->data);
	}

	function create()
	{
		$this->data['product'] = new Product($this->input->post('product'));
		if ($this->data['product']->save())
		{
			if ($this->data['product']->upload_image())
				$this->data['product']->save();
			redirect(site_url('admin/products'));
		} else
		{
			$this->_prepare_add_form();
			$this->load->view('admin/layouts/admin', $this->data);
		}
		
	}

	function update($id)
	{
		$this->data['product'] = Product::find($id);
		$this->data['product']->update_attributes($this->input->post('product'));
		if ($this->data['product']->save())
		{
			if ($this->data['product']->upload_image())
				$this->data['product']->save();
			redirect(site_url('admin/products'));	
		} else
		{
			$this->_prepare_edit_form();
			$this->load->view('admin/layouts/admin', $this->data);
		}
		
	}

	function destroy($id)
	{
		$product = Product::find($id);
		$product->delete();
		redirect(site_url('admin/products'));	
	}

	protected function _prepare_add_form()
	{
		$this->data['form_title'] = 'Add Product';
		$this->data['form_action'] = site_url('admin/products/create');
		$this->data['action'] = 'Add';
		$this->data['body'] = 'admin/products/add';
	}

	protected function _prepare_edit_form()
	{
		$this->data['form_title'] = 'Edit ' . $this->data['product']->name;
		$this->data['form_action'] = site_url('admin/products/update/' . $this->data['product']->id);
		$this->data['action'] = 'Edit';
		$this->data['body'] = 'admin/products/edit';
	}
}

?>