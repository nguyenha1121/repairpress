<?php
/**
 * RepairPress functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RepairPress
 */

if ( ! function_exists( 'repairpress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function repairpress_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on RepairPress, use a find and replace
	 * to change 'repairpress' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'repairpress', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'repairpress' ),
	) );

	register_nav_menus( array(
		'top-menu' => esc_html__( 'Top menu', 'repairpress' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'repairpress_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'repairpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function repairpress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'repairpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'repairpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function repairpress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'repairpress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'repairpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar footer', 'repairpress' ),
		'id'            => 'sidebar-footer',
		'description'   => esc_html__( 'Add widgets here.', 'repairpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'repairpress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function repairpress_scripts() {
	wp_enqueue_style( 'repairpress-style', get_stylesheet_uri() );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/font-awesome-4.6.3/css/font-awesome.min.css' );

	wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/OwlCarousel-master/owl-carousel/owl.carousel.js', array('jquery'), '20151215', true );

	wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/OwlCarousel-master/owl-carousel/owl.carousel.css' );

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/customizer.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'count up', get_template_directory_uri() . '/js/jquery.counterup.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'count', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), '20151215', true );

	wp_enqueue_style( 'bug-less', get_template_directory_uri().'/bugless.css' );

	wp_enqueue_script( 'repairpress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'repairpress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'repairpress_scripts' );


require_once( CORE . "/init.php" );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



//Logo site
if(!function_exists('logo_site')){
	function logo_site(){
		global $RO;
		?>
		<div class="logo-site">
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" >
		            <img class=" img-logo" src="<?php echo $RO['logo-image']['url']; ?>" alt="logo">
		        </a>
			</div>
		</div>
		<div class="contact-us">
			<div class="inf1">
				<p class="title-bner"><?php echo $RO['banner-1']; ?></p>
				<p class="value"><?php echo $RO['content-banner-1']; ?></p>
			</div>
			<div class="inf1">
				<p class="title-bner"><?php echo $RO['banner-2']; ?></p>
				<p class="value"><?php echo $RO['content-banner-2']; ?></p>
			</div>
			<div class="inf1">
				<p class="title-bner"><?php echo $RO['banner-3']; ?></p>
				<p class="value"><?php echo $RO['content-banner-3']; ?></p>
			</div>
			
			<a href="<?php echo $RO['button-link'] ;?>"><?php echo $RO['button-text']; ?></a>
		</div>
		<?php
	}
}

if(!function_exists('logo_footer')){
	function logo_footer(){
		global $RO;
		?>
		<div class="logo-footer">
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" >
		            <img class=" img-logo" src="<?php echo $RO['logo-footer']['url']; ?>" alt="logo">
		        </a>
			</div>
		</div>
		<p><?php echo $RO['desc-footer']; ?></p>
		<div class="social-menu-icons">
			<?php my_social_media_icons(); ?>		
		</div>
		<?php

	}
}

if(!function_exists('contact_footer')){
	function contact_footer(){
		global $RO;
		?>
		<p class="title-contact-footer"><?php _e('Contact info','repairpress'); ?></p>
		<div class="cont">
			<p><?php echo $RO['contact-row1']; ?></p>
			<p><?php echo $RO['contact-row2']; ?></p>
			<p><?php echo $RO['contact-row3']; ?></p>
			<p><?php echo $RO['contact-row4']; ?></p>
		</div>
		<?php
	}
}


//Add customizer option------------------------------------------------------------------------------------------------------------------------------------


function my_customizer_bank_card_icon(){
	$cards = array('paypal','visa','amex','mastercard');
	return $cards;
}

function my_customizer_social_media_array() {

	/* store social site names in array */
	$social_sites = array('twitter', 'facebook', 'google-plus', 'flickr', 'pinterest', 'youtube', 'tumblr', 'dribbble', 'rss', 'linkedin', 'instagram', 'email');

	return $social_sites;
}
add_action('customize_register', 'my_add_customizer');
 
function my_add_customizer($wp_customize) {
//Social Icon
	$wp_customize->add_section( 'my_social_settings', array(
			'title'    => __('Social Media Icons', 'repairpress'),
			'priority' => 36,
	) );
 	
	$cards = my_customizer_bank_card_icon();
	$social_sites = my_customizer_social_media_array();
	$priority = 5;
 	
	$wp_customize->add_section( 'bank_cards', array(
			'title'    => __('Bank cards', 'repairpress'),
			'priority' => 37,
	) );

	foreach($social_sites as $social_site) {
 
		$wp_customize->add_setting( "$social_site", array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw'
		) );
 
		$wp_customize->add_control( $social_site, array(
				'label'    => __( "$social_site url:", 'repairpress' ),
				'section'  => 'my_social_settings',
				'type'     => 'text',
				'priority' => $priority,
		) );
 
		$priority = $priority + 5;
	}
	foreach($cards as $card) {
 
		$wp_customize->add_setting( "$card", array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw'
		) );
 
		$wp_customize->add_control( $card, array(
				'label'    => __( "$card url:", 'repairpress' ),
				'section'  => 'bank_cards',
				'type'     => 'text',
				'priority' => $priority,
		) );
 
		$priority = $priority + 5;
	}
//Description Site
	$wp_customize->add_section( 'description-Top', array(
		'title'		=> __('Description Top','repairpress'),
		'priority'	=> 35
	) );
	$wp_customize->add_setting('description-Top',array(
		'type'				=> 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_html'
		));
	$wp_customize->add_control( 'description-Top', array(
				'label'    => __( "Description", 'repairpress' ),
				'section'  => 'description-Top',
				'type'     => 'text',
				'priority' => 1,
		) );
// Desc footer
	$wp_customize->add_section( 'description-foot', array(
		'title'		=> __('Description footer','repairpress'),
		'priority'	=> 50
	) );
	$wp_customize->add_setting('early',array(
		'type'				=> 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_html'
		));
	$wp_customize->add_control( 'early', array(
				'label'    => __( "Headding", 'repairpress' ),
				'section'  => 'description-foot',
				'type'     => 'textarea',
				'priority' => 1,
		) );
	$wp_customize->add_setting('late',array(
		'type'				=> 'theme_mod',
		'capability'        => 'edit_theme_options',
		));
	$wp_customize->add_control( 'late', array(
				'label'    => __( "Tail", 'repairpress' ),
				'section'  => 'description-foot',
				'type'     => 'textarea',
				'priority' => 2,
		) );

}
function my_bank_cards() {
 
    $cards = my_customizer_bank_card_icon();
 
    /* any inputs that aren't empty are stored in $active_sites array */
    foreach($cards as $card) {
        if( strlen( get_theme_mod( $card ) ) > 0 ) {
            $active_cards[] = $card;
        }
    }
 
    /* for each active social site, add it as a list item */
        if ( ! empty( $active_cards ) ) {
 
            echo "<ul class='cards'>";
 
            foreach ( $active_cards as $active_card ) {
 
	            /* setup the class */
		        $class = 'fa fa-cc-' . $active_card;
		        ?>
                    <li>
                        <a class="<?php echo $active_card; ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $active_card) ); ?>">
                            <i class="<?php echo esc_attr( $class ); ?>" title="<?php printf( __('%s icon', 'text-domain'), $active_card ); ?>"></i>
                        </a>
                    </li>
                <?php
               
            }
            echo "</ul>";
        }
}

function my_social_media_icons() {
 
    $social_sites = my_customizer_social_media_array();
 
    /* any inputs that aren't empty are stored in $active_sites array */
    foreach($social_sites as $social_site) {
        if( strlen( get_theme_mod( $social_site ) ) > 0 ) {
            $active_sites[] = $social_site;
        }
    }
 
    /* for each active social site, add it as a list item */
        if ( ! empty( $active_sites ) ) {
 
            echo "<ul class='social-media-icons'>";
 
            foreach ( $active_sites as $active_site ) {
 
	            /* setup the class */
		        $class = 'fa fa-' . $active_site;
 
                if ( $active_site == 'email' ) {
                    ?>
                    <li>
                        <a class="email" target="_blank" href="mailto:<?php echo antispambot( is_email( get_theme_mod( $active_site ) ) ); ?>">
                            <i class="fa fa-envelope" title="<?php _e('email icon', 'text-domain'); ?>"></i>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a class="<?php echo $active_site; ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $active_site) ); ?>">
                            <i class="<?php echo esc_attr( $class ); ?>" title="<?php printf( __('%s icon', 'text-domain'), $active_site ); ?>"></i>
                        </a>
                    </li>
                <?php
                }
            }
            echo "</ul>";
        }
}


// add class active in menu
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}



//is children
if(!function_exists('is_child')){
	function is_child($id){
		global $post;
		if(is_page()&&($post->post_parent!='')) return true;
		else return false;
	}
}


// pagination

if(!function_exists('page_nav')){
	function page_nav() {

		if( is_singular() )
			return;

		global $wp_query;

		/** Stop execution if there's only 1 page */
		if( $wp_query->max_num_pages <= 1 )
			return;

		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$max   = intval( $wp_query->max_num_pages );

		/**	Add current page to the array */
		if ( $paged >= 1 )
			$links[] = $paged;

		/**	Add the pages around the current page to the array */
		if ( $paged >= 3 ) {
			$links[] = $paged - 1;
			$links[] = $paged - 2;
		}

		if ( ( $paged + 2 ) <= $max ) {
			$links[] = $paged + 2;
			$links[] = $paged + 1;
		}

		echo '<div class="navigation"><ul>' . "\n";

		/**	Previous Post Link */
		// if ( get_previous_posts_link() )
		// 	printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

		/**	Link to first page, plus ellipses if necessary */
		if ( ! in_array( 1, $links ) ) {
			$class = 1 == $paged ? ' class="active"' : '';

			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

			if ( ! in_array( 2, $links ) )
				echo '<li>…</li>';
		}

		/**	Link to current page, plus 2 pages in either direction if necessary */
		sort( $links );
		foreach ( (array) $links as $link ) {
			$class = $paged == $link ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
		}

		/**	Link to last page, plus ellipses if necessary */
		if ( ! in_array( $max, $links ) ) {
			if ( ! in_array( $max - 1, $links ) )
				echo '<li>…</li>' . "\n";

			$class = $paged == $max ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
		}

		/**	Next Post Link */
		// if ( get_next_posts_link() )
		// 	printf( '<li>%s</li>' . "\n", get_next_posts_link() );

		echo '</ul></div>' . "\n";

	}
}
if(!function_exists('repairpress_comment')){
	function repairpress_comment($comment, $args, $depth){
		if ( 'div' === $args['style'] ) {
	        $tag       = 'div';
	        $add_below = 'comment'; 
	    } else {
	        $tag       = 'li';
	        $add_below = 'div-comment';
	    }
	    //var_dump($comment);
		?>
		<div class="aaaa" id="<?php echo 'comment-'.$comment->comment_ID;  ?>">
			<div class="cmt">
				<p class="entry-meta-author"><span class="author-name"><a href="<?php echo $comment->comment_author_url; ?> "><?php echo $comment->comment_author; ?></a></span> <span class="date-reply"><span class="date"><?php echo $comment->comment_date ; ?>					
					</span>
						<?php 
				        	$args['reply_text'] = __('Reply','hanguyen');
				        	comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</span>
				</p>
				<hr>
				<p class="comment-content"><?php echo $comment->comment_content; ?></p>
			</div>
			<div class="avt"><?php echo get_avatar($comment->comment_auhor_email,'thumbnail'); ?></div>
		</div>
		<?php
	}
}

// shortcode home page

function sc_home_slider($args,$content){
	return '<div class="item">
				<div class="container">
					<p class="slp-1">'.$args['t1'].'</p>
					<p class="slp-2">'.$args['t2'].'</p>
					<p class="slp-3">'.$args['t3'].'</p>
					<div class="cl-but">
						<span class="but-1"><a  href="'.$args['t4'].'">'.$args['t5'].'</a></span>
						<span class="but-2"><a  href="'.$args['t6'].'">'.$args['t7'].'</a></span>
					</div>
				</div>
			</div>';
}
add_shortcode('home_slider','sc_home_slider');

function sc_banner_item($args,$content){
	return '<div class="item-banner">
			<div class="banner-text">
				<p class="main-banner">'.$args['t1'].'</p>
				<p class="desc-banner">'.$args['t2'].'</p>
			</div>
			<div class="banner-icon">
				<i class="fa '.$args['t3'].'" aria-hidden="true"></i>
			</div>
		</div>';
}
add_shortcode('banner_item','sc_banner_item');

function sc_first_row_1($args, $content){
	return '<div class="first-row-item fri1 col-md-3 col-sm-3 col-xs-6">
			<img src="'.$args['src-img'].'" alt="nothing">
			<p class="title-fri">'.$args['title'].'</p>
			<p class="except-fri">'.$args['except'].'</p>
			<a class="read-more-fri" href="'.$args['src-readmore'].'">read more &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a>
		</div>';
}
add_shortcode('fri1','sc_first_row_1');

function sc_fri2($args, $content){
	return '<li>
				<a href="'.$args['href'].'"><i class="fa '.$args['name-i-tag'].'" aria-hidden="true"></i>&nbsp; <p>'.$args['title'].'</p></a>
			</li>';
}
add_shortcode('fri2','sc_fri2');

function sc_row_2_steps($args,$content){
	GLOBAL $st_c;
	$st_c +=1;
	if ($args['active']==true){
		if($st_c <10){
			return '<div class="step active">
					<div class="title-st"><i class="fa '.$args['i-tag'].'" aria-hidden="true"></i><p>'.$args['title'].'</p></div>
					<p class="desc-st">'.$args['desc'].'</p>
					<p class="count-st">'.'0'.$st_c.'.'.'</p>
				</div>';
		}
		else {
			return '<div class="step active">
					<div class="title-st"><i class="fa '.$args['i-tag'].'" aria-hidden="true"></i><p>'.$args['title'].'</p></div>
					<p class="desc-st">
						'.$args['desc'].'
					</p>
					<p class="count-st">'.$st_c.'.'.'</p>
				</div>';
		}
	}
	if($st_c <10){
		return '<div class="step">
				<div class="title-st"><i class="fa '.$args['i-tag'].'" aria-hidden="true"></i><p>'.$args['title'].'</p></div>
				<p class="desc-st">'.$args['desc'].'</p>
				<p class="count-st">'.'0'.$st_c.'.'.'</p>
			</div>';
	}
	else {
		return '<div class="step">
				<div class="title-st"><i class="fa '.$args['i-tag'].'" aria-hidden="true"></i><p>'.$args['title'].'</p></div>
				<p class="desc-st">
					'.$args['desc'].'
				</p>
				<p class="count-st">'.$st_c.'.'.'</p>
			</div>';
	}
	
}
add_shortcode('row_2_steps','sc_row_2_steps');

function sc_third_row($args,$content){
	return '<div class="item-tr">
				<div class="icon-tr"><i class="fa '.$args['i-tag'].'" aria-hidden="true"></i></div>
				<div>
					<p class="title-tr">'.$args['title'].'</p>
					<p class="desc-tr">'.$args['desc'].'</p>
				</div>
			</div>';
}
add_shortcode('third_row','sc_third_row');

function sc_sell_row($args,$content){
	return '<div class="sell-phone">
				<div class="container">
					<div class="content-sell">
						<div class="sell-text">
							<p class="title-sell">'.$args['title'].'</p>
							<p class="desc-sell">'.$args['desc'].'</p>
						</div>
						<div class="but-sell">
							<a href="'.$args['href'].'">'.$args['button'].'</a>
						</div>
					</div>
				</div>
			</div>';
}
add_shortcode('sell-row','sc_sell_row');

function sc_eden_blog_div($args, $content){
    $query = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 2
                    )
            );

    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>    
        <div class="blog-card">
        <div class="card-images">
            <?php the_post_thumbnail("thumbnail"); ?>
        </div>
        <div class="card-content">
            <header>
                <?php 
                    the_title( '<span><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a><span>' );
                ?>
            </header>
            <?php echo '<p class="date-blog">'.get_the_date().'</p>'; ?>
        </div>
    </div>
    <?php endwhile; endif; 
}
add_shortcode('blog','sc_eden_blog_div');

function sc_about_us($args,$content){
	?>
	<div class="about-us-home">
		<div class="title-us">
			<p><?php echo $args['title-us']; ?></p>
			<span></span>
		</div>
		<div class="imgs">
			<img src="<?php echo $args['src-img1']; ?>" alt="">
			<img src="<?php echo $args['src-img2']; ?>" alt="">
		</div>
		<div class="except">
			<?php echo $args['except-us']; ?>
		</div>
		<a class="read-us" href="<?php echo $args['href']; ?>">read more &nbsp; <i class="fa fa-caret-right" aria-hidden="true"></i></a>
	</div>
	<?php
}
add_shortcode('about_us','sc_about_us');

function sc_accordion_faq($args,$content){
	?>
	<li>
		<p class="title-acc"><?php echo $args['title'] ?></p>
		<?php 
			$word = explode(" ", $args['content']);
			if(count($word) <= $args['max-length']){
				return '<div class="item-acc">
							<p class="except-acc">'.$args['content'].'</p>
						</div>
					</li>';
			}
			else {
				?>
					<div class="item-acc">
						<span class="except-acc">
						<?php for($i=0 ; $i<$args['max-length']; $i++){
							echo $word[$i]." ";} 
						?>
						</span>
						<span class="more-acc">
							<?php for($i=$args['max-length'] ; $i<=count($word); $i++){
								echo $word[$i]." ";} 
							?>
						</span>
						<p class="read-more-acc" >read more &nbsp; <i class="fa fa-caret-right" aria-hidden="true"></i></p>
					</div>
				</li>
				<?php
			}
		?>
	<?php
}
add_shortcode('accordion_faq','sc_accordion_faq');

function sc_link_readmore_faq($args,$content){
	return ''.$args['href'];
}
add_shortcode('link_readmore_faq','sc_link_readmore_faq');

function sc_add_map($args,$content){
	return '<div class="row-map">'.$content.'</div>';
}
add_shortcode('add_map','sc_add_map');

function sc_item_gallery($args,$content){
	?>
	<div class="item-gallery col-md-3 col-sm-3 col-xs-6">
		<div class="imgs-g">
			<img src="<?php echo $args['src-before'] ;?>" alt="before">
			<img src="<?php echo $args['src-after'] ;?>" alt="after">
		</div>
		<p class="desc-g">
			<?php echo $args['desc'] ; ?>
		</p>
	</div>
	<?php
}
add_shortcode('item_gallery','sc_item_gallery');

function sc_add_testimonials($args,$content){
	?>
	<div class="item">
		<p class="respond"><?php echo $args['rep']; ?></p>
		<p class="author-tes"><?php echo $args['author']; ?></p>
	</div>
	<?php
}
add_shortcode('add_testimonials','sc_add_testimonials');


function sc_add_partners($args,$content){
	?>
	<div class="item-pa ">
		<a href="<?php echo $args['href']; ?> "><img src="<?php echo $args['src-img'] ?>" alt="img"></a>
	</div>
	<?php
}
add_shortcode('add_partners','sc_add_partners');

function sc_add_count_row($args,$content){
	?>
	<div class="count-content">
		  	<div class="item-count ic-1">
		  		<p class="counter c-num"><?php echo $args['num1']; ?></p>
		  		<p class="desc-count"><?php echo $args['text1']; ?></p>
		  	</div>
		  	<div class="item-count ic-1">
		  		<p class="counter c-num"><?php echo $args['num2']; ?></p>
		  		<p class="desc-count"><?php echo $args['text2']; ?></p>
		  	</div>
		  	<div class="item-count ic-1">
		  		<p class="counter c-num"><?php echo $args['num3']; ?></p>
		  		<p class="desc-count"><?php echo $args['text3']; ?></p>
		  	</div>
		  	<div class="item-count">
		  		<p class="counter c-num"><?php echo $args['num4']; ?></p>
		  		<p class="desc-count"><?php echo $args['text4']; ?></p>
		  	</div>
		  </div>
	<?php 
}
add_shortcode('add_count_row','sc_add_count_row');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Add fields to user profile screen, add new user screen
 */

function list_user_link(){
	$list = array('facebook','twitter','linkedin','youtube');
	return $list;
}

if( !function_exists('m_register_profile_fields') ) {

    //  This action for 'Add New User' screen
    add_action( 'user_new_form', 'm_register_profile_fields' );

    //  This actions for 'User Profile' screen
    add_action( 'show_user_profile', 'm_register_profile_fields' );
    add_action( 'edit_user_profile', 'm_register_profile_fields' );

    function m_register_profile_fields( $user ) {

        if ( !current_user_can( 'administrator', $user_id ) )
            return false;

        ?>
        <?php
        $list = list_user_link();
        ?>
        <h3>Advance user</h3>
        <table class="form-table">
            <tr>
                <th><label for="dropdown">Tag</label></th>
                <td>
                    <input type="text" class="regular-text" name="portal_cat" value="<?php echo esc_attr( get_the_author_meta( 'portal_cat', $user->ID ) ); ?>" id="portal_cat" /><br />
                </td>         
            </tr>
            <?php
            echo '<tr>';
            foreach ($list as $k) {
            	// var_dump($user);
            	//var_dump(get_the_author_meta( $k , $user->ID ));
            	echo '<th><label for="dropdown">'.$k.'</label></th><td>';
            	echo '<input style="max-width : 250px;" type="text" class="regular-text '.$k.'" name="'.$k.'" value="'. esc_attr( get_the_author_meta( $k , $user->ID )).'" id="'.$k.'" /><br />';
            	echo '</td>';
            }
            echo '</tr>';
            ?>
        </table>

    <?php }
}


/**
 *  Save portal category field to user profile page, add new profile page etc
 */


//  This action for 'Add New User' screen
add_action( 'user_register', 'cp_save_profile_fields' );

//  This actions for 'User Profile' screen
add_action( 'personal_options_update', 'cp_save_profile_fields' );
add_action( 'edit_user_profile_update', 'cp_save_profile_fields' );

function cp_save_profile_fields( $user_id ) {
	$list = list_user_link();

    if ( !current_user_can( 'administrator', $user_id ) )
        return false;

    update_usermeta( $user_id, 'portal_cat', $_POST['portal_cat'] );

    foreach ($list as $k) {
    	update_usermeta( $user_id, $k ,$_POST[$k] );
    }

}

function add_list_user_link($user_id){
	$list = list_user_link();
	foreach ($list as $k) {
		if( strlen(  get_the_author_meta( $k, $user_id) ) > 0 ) {
            $links[] = $k;
        }
	}
	if ( ! empty( $links ) ) {
		echo '<ul class="linkss">';
		foreach ($links as $l) {
			$class = 'fa fa-'.$l;
			?>
			 <li>
	            <a class="<?php echo $l; ?>" target="_blank" href="<?php echo esc_html( get_the_author_meta( $l,$user_id) ); ?>">
	                <i class="<?php echo esc_attr( $class ); ?>" title="<?php printf( __('%s icon', 'text-domain'), $l ); ?>"></i>
	            </a>
	        </li>
			<?php
		}
		echo '</ul>';
	}
}

function sc_teammate($args,$content){

	// The Query
	$user_query = new WP_User_Query( array( 'role' => 'Administrator' ) );

	?>
	<div class="content-about-team">
		<div class="container">
			<div class="title-team">
				<div class="our-team"><?php _e('Our team','repairpress'); ;?></div><div class="line"></div>
			</div>
			<div class="row">
				<div class="content-team ">
				<?php 
				if ( ! empty( $user_query->results ) ) {
					foreach ( $user_query->results as $user ) {
						?>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="item-team">
								<div class="item-img">
									<?php echo get_avatar($user->email,'large') ;?>
									<p class="bureau"><?php echo get_the_author_meta('portal_cat',$user->ID) ;?></p>
								</div>
								<div class="content-items">
									<h3 class="item-name"><?php echo $user->display_name; ?></h3>
									<p class="item-desc"><?php echo get_the_author_meta('description',$user->ID) ;?></p>
									<hr>
									<div class="mxh"><p><?php _e('Meet me on:','repairpress') ?></p><?php add_list_user_link($user->ID);?></div>
								</div>
							</div>
						</div>
						<?php
					}
				} else {
					echo 'No users found.';
				}
				?>
				</div>
			</div>
		</div>
	</div>
<?php
}
add_shortcode('team','sc_teammate');


function sc_future($args,$content){
	?>
	<div class="future">
		<div class="container">
			<div class="row">
				<div class="content-fu">
					<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					for($i=1 ; $i<= $args['num-item'] ; $i++){
						echo '<p class="title-fu">'.$args['title-'.$i].'</p>'.'<p class="desc-fu">'.$args['content-'.$i].'</p>';
					}
					?>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 img-fu">
						<img src="<?php echo esc_url($args['src-img']); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
add_shortcode('future','sc_future');