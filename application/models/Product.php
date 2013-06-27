<?php 

class Product extends ActiveRecord\Model {
	
	// belongs_to associations
	static $belongs_to = array(
		array('category')
		);

	// validations
	static $validates_presence_of = array(
		array('name'),
		array('price')
		);
	static $validates_numericality_of = array(
		array('price', 'greater_than_or_equal_to' => 0)
		);

	// callbacks
	static $before_destroy = array(
		'delete_uploaded_image'
		);

	// scopes
	public static function latest($limit)
	{
		return Product::find('all', array('limit' => $limit, 'order' => 'created_at DESC'));
	}

	// pagination
	static $per_page = 6;

	public function page($page_number)
	{
		return Product::find('all', array('offset' => ($page_number - 1) * self::$per_page, 'limit' => self::$per_page));
	}

	public function image_url()
	{
		if ($this->image)
			return base_url('uploads/product/' . $this->id . '/' . $this->image);
		else
			return FALSE;
	}

	public function upload_image()
	{
		$CI =& get_instance();
		$CI->load->library('upload');
		if (isset($_FILES['product_image']['size']) && $_FILES['product_image']['size'] > 0)
		{
			// create target directory
			$target_dir = getcwd() . '/uploads/product/' . $this->id;
			if (!file_exists($target_dir))
				mkdir($target_dir);

			$config['upload_path'] = $target_dir;
			$config['allowed_types'] = 'gif|png|jpg|bmp';
			$config['max_size'] = '1000000';
			$CI->upload->initialize($config);

			$this->delete_uploaded_image();

			if ($CI->upload->do_upload('product_image'))
			{
				$upload_data = $CI->upload->data();
				$this->image = $upload_data['file_name'];
				return TRUE;

			} else
			{
				return FALSE;
			}
		}
	}

	public function delete_uploaded_image()
	{
		$full_path = getcwd() . '/uploads/product/' . $this->id . '/' . $this->image;
		if (isset($this->image) && file_exists($full_path))
			unlink($full_path);
	}
}

?>