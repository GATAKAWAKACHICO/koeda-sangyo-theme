<?php 
function tpl_021_rwd_theme_options_init() {
	if ( false === tpl_021_rwd_get_theme_options() )
		add_option( 'tpl_021_rwd_theme_options', tpl_021_rwd_get_default_theme_options() );

	register_setting(
		'tpl_021_rwd_options',
		'tpl_021_rwd_theme_options',
		'tpl_021_rwd_theme_options_validate'
	);
}
add_action( 'admin_init', 'tpl_021_rwd_theme_options_init' );

function tpl_021_rwd_option_page_capability( $capability ) {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_tpl_021_rwd_options', 'tpl_021_rwd_option_page_capability' );

function tpl_021_rwd_theme_options_add_page() {
	$theme_page = add_theme_page(
		'テーマ設定',
		'テーマ設定',
		'edit_theme_options',
		'theme_options',
		'tpl_021_rwd_theme_options_render_page'
	);

	if ( ! $theme_page )
		return;
}
add_action( 'admin_menu', 'tpl_021_rwd_theme_options_add_page' );


function tpl_021_rwd_get_default_theme_options() {
	$default_theme_options = array(
		'logo' => 'logo.png',
	);
}

function tpl_021_rwd_get_theme_options() {
	return get_option( 'tpl_021_rwd_theme_options', tpl_021_rwd_get_default_theme_options() );
}

get_template_part('inc/theme-options-edit');


/*	ヘッダー ロゴ
/*---------------------------------------------------------*/
function tpl_021_rwd_print_Logo() {
	$options = tpl_021_rwd_get_theme_options();
	$logo = $options['logo'];
	if ($logo) {
		print '<img src="'.$logo.'" alt="'.get_bloginfo('name').'">';
	} else {
		echo bloginfo('name');
	}
}
function tpl_021_rwd_print_Logo_name() {
	$options = tpl_021_rwd_get_theme_options();
	$logoName = $options['logoName'];
	if ($logoName) {
		print $logoName;
	}
}
function tpl_021_rwd_print_Logo_slogan() {
	$options = tpl_021_rwd_get_theme_options();
	$logoSlogan = $options['logoSlogan'];
	if ($logoSlogan) {
		print '<span>'.$logoSlogan.'</span>';
	}
}

	
/*	ヘッダー 電話番号
/*---------------------------------------------------------*/
function tpl_021_rwd_print_tel() {
	$options = tpl_021_rwd_get_theme_options();
	$contactTel = $options['contactTel'];
		if ($contactTel) {
			print '<p class="tel"><span>電話:</span> '.$contactTel.'</p>'."\n";
		}
}

/*	ヘッダー 受付時間
/*---------------------------------------------------------*/
function tpl_021_rwd_print_open_time() {
	$options = tpl_021_rwd_get_theme_options();
	$openTime = $options['openTime'];
		if ($openTime) {
			print '<p class="open">FAX: '.$openTime.'</p>'."\n";
		}
}


/*	メイン画像
/*---------------------------------------------------------*/
function tpl_021_rwd_print_mainImgLink() {
	$options = tpl_021_rwd_get_theme_options();
	$mainImgLink = $options['mainImgLink'];
		if ($mainImgLink) {
			print '<a href="'.$mainImgLink.'">';
		}
}

function tpl_021_rwd_print_mainImgLinkClose() {
	$options = tpl_021_rwd_get_theme_options();
	$mainImgLink = $options['mainImgLink'];
		if ($mainImgLink) {
			print '</a>';
		}
}
