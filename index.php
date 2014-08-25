<?php

/* Setup current theme. */
$theme_base = "./themes/";
$theme_name = "padhang";
$theme_path = $theme_base . $theme_name . "/";

/* i18n + l10n */
function translate ( $text = null, $domain = 'default' )
{
	return $text;
}

function __ ( $text, $domain = 'default' ) {
    return translate( $text, $domain );
}

function _e ( $text, $domain = 'default' ) {
    echo translate( $text, $domain );
}

/* WP themes mid layer. */
function get_header ( $name = null )
{
	global $theme_path;
	require $theme_path . "header.php";
}

function have_posts ()
{
	return false;
}

function the_post ()
{
}

function get_template_part ( $slug = null, $name = null )
{
	global $theme_path;
	$template = $slug . "-" . $name . ".php";
	require $theme_path . "/" . $template;
}

function get_sidebar ( $name = null )
{
	global $theme_path;
	require $theme_path . "sidebar.php";
}

function get_footer ( $name = null )
{
	global $theme_path;
	require $theme_path . "footer.php";
}

function language_attributes ( $doctype = 'html' )
{
	print "lang=\"pt-BR\"";
}

function bloginfo ( $show = '' )
{
	switch ($show)
	{
		case "charset":
			print "UTF-8";
			break;
		
		case "name":
			print "Mob Your Life";
			break;
		
		case "description":
			print "A simplicidade gera novos caminhos.";
			break;
		
		default:
			print "bloginfo-" . $show;
			break;
	}
}

function wp_title ( $sep = '»', $display = true, $seplocation = '' )
{
	print "Mob Your Life";
}

function wp_head()
{
	global $theme_path;
	print "<link rel=\"stylesheet\" href=\"" . $theme_path . "style.css\" />";
}

function body_class ( $class = '' )
{
}

function wp_parse_str ( $string = null, &$array = null )
{
	parse_str($string, $array);
	
	if (get_magic_quotes_gpc())
	{
		$array = stripslashes_deep($array);
	}
}

function wp_parse_args ( $args = null, $defaults = '' )
{
	if (is_object($args))
	{
		$r = get_object_vars($args);
	}
	elseif (is_array($args))
	{
		$r =& $args;
	}
	else
	{
		wp_parse_str($args, $r);
	}
	
	if (is_array($defaults))
	{
		return array_merge( $defaults, $r );
	}
	
	return $r;
}

function wp_nav_menu ( $args = array() )
{
    static $menu_id_slugs = array();
 
    $defaults = array( 'menu' => '', 'container' => 'div', 'container_class' => '', 'container_id' => '', 'menu_class' => 'menu', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 0, 'walker' => '', 'theme_location' => '' );
 
    $args = wp_parse_args( $args, $defaults );
}

function get_header_image ()
{
}

function esc_url ( $url = null, $protocols = null, $_context = 'display' )
{
}

function home_url ( $path = '', $scheme = null )
{
}

function admin_url ( $path = '', $scheme = 'admin' )
{
}

function do_action ( $tag = null,  $arg = '' )
{
}

function wp_footer()
{
}

function is_active_sidebar ( $index = null )
{
}

function is_home ()
{
	return true;
}

function current_user_can ( $capability = null )
{
	return false;
}

function is_search ()
{
	return false;
}

function get_search_form ( $echo = true )
{
	//require get_template_part( 'content', 'search' );
}

/* Include theme. */
require $theme_path . "index.php";

?>
