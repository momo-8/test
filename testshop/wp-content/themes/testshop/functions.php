<?php
function codex_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Books',
      'show_ui' => true,
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'codex_custom_init' );



function create_book_tax() {
	register_taxonomy(
		'genre',
		'book',
		array(
			'label' => __( 'Genre' ),
			'rewrite' => array( 'slug' => 'genre' ),
			'hierarchical' => true,
		)
	);
}

add_action( 'init', 'create_book_tax' );