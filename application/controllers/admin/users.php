<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index()
	{
		$this->data['users'] = User::find('all');
		$this->data['body'] = 'admin/users/index';
		$this->load->view('admin/layouts/admin', $this->data);
	}

	function add()
	{
		$this->data['user'] = new User();
		$this->data['form_title'] = 'Add User';
		$this->data['form_action'] = site_url('admin/users/create');
		$this->data['action'] = 'Add';
		$this->data['body'] = 'admin/users/add';
		$this->load->view('admin/layouts/admin', $this->data);
	}

	function edit($id)
	{
		$this->data['user'] = User::find($id);		
		$this->data['form_title'] = 'Edit ' . $this->data['user']->username;
		$this->data['form_action'] = site_url('admin/users/update/' . $this->data['user']->id);
		$this->data['action'] = 'Edit';
		$this->data['body'] = 'admin/users/edit';
		$this->load->view('admin/layouts/admin', $this->data);
	}

	function create()
	{
		$user = new User($this->input->post('user'));
		$user->save();
		redirect(site_url('admin/users'));
	}

	function update($id)
	{
		$user = User::find($id);
		$user->update_attributes($this->input->post('user'));
		$user->save();
		redirect(site_url('admin/users'));
	}

	function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		redirect(site_url('admin/users'));	
	}
}

?>