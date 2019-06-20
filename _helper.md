// repeater
	<?php if( have_rows('repeater_field_name') ): ?>
		<?php while ( have_rows('repeater_field_name') ) : the_row(); ?>
			<?php the_sub_field('sub_field_name'); ?>
		<?php endwhile; ?>
	<?php endif; ?>

// flexible content
	<?php if( have_rows('flexible_content_field_name') ):
		while ( have_rows('flexible_content_field_name') ) : the_row();
			if( get_row_layout() == 'paragraph' ):
				the_sub_field('text');
			elseif( get_row_layout() == 'download' ):
				$file = get_sub_field('file');
			endif;
		endwhile;
	else :
		// no layouts found
	endif; ?>

// get current language (qtranslate X)
	<?php $lang =  qtranxf_getLanguage(); ?>

// creating options page with ACF Pro
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Další nastavení',
			'menu_title'	=> 'Další nastavení',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Nastavení hlavičky',
			'menu_title'	=> 'Hlavička',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Nastavení patičky',
			'menu_title'	=> 'Patička',
			'parent_slug'	=> 'theme-general-settings',
		));
	}
