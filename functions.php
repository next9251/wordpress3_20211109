<?php

//cssの読み込み
function twpp_enqueue_styles()
{
	wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
	wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');


//管理バーの非表示
add_filter('show_admin_bar', '__return_false');


//JavaScriptの取得
function twpp_enqueue_scripts()
{
	wp_enqueue_script(
		'main-js-sheet',
		get_template_directory_uri() . '/js/main.js',
		array(),
		false,
		true
	);
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');


//カスタム投稿タイプを管理画面に追加

function cpt_register_news()
{ //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "news",
		"edit_item" => "news",
	];
	$args = [
		"label" => "news", //管理画面に出てくる名前
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => ["slug" => "news", "with_front" => true], //スラッグをworksに設定
		"query_var" => true,
		"menu_position" => 5,
		"supports" => ["title", "editor", "thumbnail"],
	];
	register_post_type("news", $args);
}
add_action('init', 'cpt_register_news');


//カスタム投稿タイプを管理画面に追加

function cpt_register_interview()
{ //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "interview",
		"edit_item" => "interview",
	];
	$args = [
		"label" => "interview", //管理画面に出てくる名前
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => ["slug" => "news", "with_front" => true], //スラッグをworksに設定
		"query_var" => true,
		"menu_position" => 6,
		"supports" => ["title", "editor", "thumbnail"],
	];
	register_post_type("interview", $args);
}
add_action('init', 'cpt_register_interview');

?>



