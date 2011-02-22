<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<body <?php if( is_home()) : ?> class="home" <?php endif; ?>>

<div id="outer"><!--outer-->
	<div id="container"><!--container-->
    	<div id="header">
        	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
            <div id="tagline"><?php bloginfo('description'); ?></div>
        </div>
        <ul class="nav">
        	<li><a href="<?php echo get_option('home'); ?>" accesskey="1" <?php if( is_home()) : ?> class="active" <?php endif; ?> title="Back to Frontpage">Home</a></li>
			<?php
			if( is_page() ) $curpage = $post->ID;
			$pages = get_pages('sort_column=menu_order');
			foreach( $pages as $page ) {
				$this_css = '';
				$this_link = get_page_link($page->ID);
				if( $curpage == $page->ID ) $this_css = ' class="active"';
				echo "<li><a $this_css href=\"$this_link\">" . $page->post_title . "</a></li>\n\t\t";
			} ?>
        </ul>
        <div class="ffix"></div>
        <div id="content"><!--content-->