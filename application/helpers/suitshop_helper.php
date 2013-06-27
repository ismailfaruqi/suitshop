<?php 

/**
*
* function rupiah($input)
* 
* Return formatted string for Rupiah currency
* 
* @param input (integer): The input integer 
* @return formatted Rupiah string
*
**/
function rupiah($input)
{
	return "Rp " . number_format($input, 0, ',', '.');
}

/**
*
* function admin_pagination($klass)
*
* Renders pagination for admin page
*
* @return pagination HTML tags
*
**/
function admin_pagination($klass)
{
	$CI =& get_instance();

	$CI->load->library('pagination');
	$CI->load->helper('inflector');
	
	$config['base_url'] = site_url('admin/' . plural(strtolower(get_class($klass))) . '/index/');
	$config['total_rows'] = $klass::count();
	$config['per_page'] = $klass::$per_page;
	$config['uri_segment'] = 4;
	$config['num_links'] = 2;
	$config['use_page_numbers'] = TRUE;
	
	$config['full_tag_open'] = '<div class="pagination pagination-centered pagination-small"><ul>';
	$config['full_tag_close'] = '</ul></div>';
	$config['first_link'] = '&laquo';
	$config['first_tag_open'] = '<li>';
	$config['first_tag_close'] = '</li>';
	$config['last_link'] = '&raquo';
	$config['last_tag_open'] = '<li>';
	$config['last_tag_close'] = '</li>';
	$config['next_link'] = '&gt;';
	$config['next_tag_open'] = '<li>';
	$config['next_tag_close'] = '</li>';
	$config['prev_link'] = '&lt;';
	$config['prev_tag_open'] = '<li>';
	$config['prev_tag_close'] = '</li>';
	$config['cur_tag_open'] = '<li class="active"><a href="#">';
	$config['cur_tag_close'] = '</a></li>';
	$config['num_tag_open'] = '<li>';
	$config['num_tag_close'] = '</li>';
	
	$CI->pagination->initialize($config);
	
	return $CI->pagination->create_links();

}

?>