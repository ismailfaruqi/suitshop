<?php 

class Category extends ActiveRecord\Model {

	// has_many associations
	// static $has_many = array(
	// 	array('children', 'class_name' => 'Category', 'foreign_key' => 'parent_id'),
	// 	array('products')
	// 	);

	// belongs_to associations
	// static $belongs_to = array(
	// 	array('parent', 'class_name' => 'Category', 'foreign_key' => 'parent_id')
	// 	);

	// scopes
	public static function limit($limit)
	{
		return Category::find('all', array('limit' => $limit));
	}
}

?>