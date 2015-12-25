<?php
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Category List',
		'id'   => 'category-list',
		'description'   => 'Hiển thị các widget ra ngoài theo thứ tự (3x)trái->, trên->xuống',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}