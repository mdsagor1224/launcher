<?php 
function launcher_setup_theme(){
    load_theme_textdomain("launcher");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme","launcher_setup_theme");


function launcher_assets(){
    wp_enqueue_style("launcher",get_stylesheet_uri());
    wp_enqueue_style("animate-css", get_theme_file_uri("/assets/css/animate.css"));
    wp_enqueue_style("icomoon-css", get_theme_file_uri("/assets/css/icomoon.css"));
    wp_enqueue_style("bootstrap-css", get_theme_file_uri("/assets/css/bootstrap.css"));
    wp_enqueue_style("style-css", get_theme_file_uri("/assets/css/style.css"));

    wp_enqueue_script("easing-js",get_theme_file_uri("/assets/js/jquery.easing.1.3.js"),array("jquery"),null,true);
    wp_enqueue_script("bootstrap-js",get_theme_file_uri("/assets/js/bootstrap.min.js"),array("jquery"),null,true);
    wp_enqueue_script("waypoints-js",get_theme_file_uri("/assets/js/jquery.waypoints.min.js"),array("jquery"),null,true);
    wp_enqueue_script("simplyCountdown-js",get_theme_file_uri("/assets/js/simplyCountdown.js"),array("jquery"),null,true);
    wp_enqueue_script("main-js",get_theme_file_uri("/assets/js/main.js"),array("jquery"),null,true);


    $launcher_year = get_post_meta(get_the_ID(),"year",true);
    $launcher_month = get_post_meta(get_the_ID(),"month",true);
    $launcher_day = get_post_meta(get_the_ID(),"day",true);

    wp_localize_script("main-js","datedata",array(
        "year" => $launcher_year,
        "month" => $launcher_month,
        "day" => $launcher_day
    ));

}


add_action("wp_enqueue_scripts","launcher_assets");


function launcher_sidebars(){
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Left', 'launcher' ),
			'id'            => 'footer-left',
			'description'   => esc_html__( 'Footer Left', 'launcher' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Right', 'launcher' ),
			'id'            => 'footer-right',
			'description'   => esc_html__( 'Footer Right', 'launcher' ),
			'before_widget' => '<section id="%1$s" class="text-right widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


}
add_action("widgets_init","launcher_sidebars");

function launcher_styles(){
    if(is_page()){
        $thumbnail_url = get_the_post_thumbnail_url(null,"large");
        ?>
        <style>
            .home-side{
                background-image: url(<?php echo $thumbnail_url;?>);
            }
        </style>
        <?php
    }
}


add_action("wp_head","launcher_styles");