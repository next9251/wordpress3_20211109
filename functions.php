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


function cptui_register_my_taxes_news_custom()
{

	/**
	 * Taxonomy: ニュース種別.
	 */

	$labels = [
		"name" => __("ニュース種別", "custom-post-type-ui"),
		"singular_name" => __("ニュース種別", "custom-post-type-ui"),
	];


	$args = [
		"label" => __("ニュース種別", "custom-post-type-ui"),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'news_custom', 'with_front' => true,],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "news_custom",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy("news_custom", ["news"], $args);
}
add_action('init', 'cptui_register_my_taxes_news_custom');

function cptui_register_my_taxes_interview_custom()
{

	/**
	 * Taxonomy: インタビュー.
	 */

	$labels = [
		"name" => __("インタビュー", "custom-post-type-ui"),
		"singular_name" => __("インタビュー", "custom-post-type-ui"),
	];


	$args = [
		"label" => __("インタビュー", "custom-post-type-ui"),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'interview_custom', 'with_front' => true,],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "interview_custom",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy("interview_custom", ["interview"], $args);
}
add_action('init', 'cptui_register_my_taxes_interview_custom');

?>



