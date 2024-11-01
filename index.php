<?php
/*
* Plugin Name: WP Iframe Geo Style for Amazon affiliates
* Description: Style Amazon affiliate iframe, without API access.
* Version: 1.1
* Author: EktorCaba
* Author URI: https://www.buymeacoffee.com/OFqRz9y
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



function wpigsfaa_ajax_custom_js() {
    echo '<script>var ajaxurl = "'.admin_url( 'admin-ajax.php' ).'";</script>';
}

add_action( 'wp_head', 'wpigsfaa_ajax_custom_js', -1000);




function wpigsfaa_widget_enqueue_script() {   
    wp_enqueue_script( 'wpigsfaa_script', plugin_dir_url( __FILE__ ) . 'assets/js/ac.js.php' );
}
add_action('wp_enqueue_scripts', 'wpigsfaa_widget_enqueue_script');




function wpigsfaa_widget_enqueue_style() {   
    wp_enqueue_style( 'wpigsfaa_style', plugin_dir_url( __FILE__ ) . 'assets/css/templates.css' );
}
add_action('wp_enqueue_scripts', 'wpigsfaa_widget_enqueue_style');






function wpigsfaa_main($atts, $content=null){

    foreach($atts as $key => $value){
        $exp_key = explode('_', $key);
        if($exp_key[0] == 'iframe'){
            $ifr_result[] = $value;
        }
    }


	$iframes_us = explode(",", $atts['iframe_us']);
	$links_us = explode(",", $atts['link_us']);
	$titles_us = explode(";", $atts['title_us']);

    $iframes_gb = explode(",", $atts['iframe_gb']);
    $links_gb = explode(",", $atts['link_gb']);
    $titles_gb = explode(";", $atts['title_gb']);

    $iframes_de = explode(",", $atts['iframe_de']);
    $links_de = explode(",", $atts['link_de']);
    $titles_de = explode(";", $atts['title_de']);

    $iframes_fr = explode(",", $atts['iframe_fr']);
    $links_fr = explode(",", $atts['link_fr']);
    $titles_fr = explode(";", $atts['title_fr']);

    $iframes_ca = explode(",", $atts['iframe_ca']);
    $links_ca = explode(",", $atts['link_ca']);
    $titles_ca = explode(";", $atts['title_ca']);

    $iframes_it = explode(",", $atts['iframe_it']);
    $links_it = explode(",", $atts['link_it']);
    $titles_it = explode(";", $atts['title_it']);

    $iframes_es = explode(",", $atts['iframe_es']);
    $links_es = explode(",", $atts['link_es']);
    $titles_es = explode(";", $atts['title_es']);

    $iframes_br = explode(",", $atts['iframe_br']);
    $links_br = explode(",", $atts['link_br']);
    $titles_br = explode(";", $atts['title_br']);

    $iframes_mx = explode(",", $atts['iframe_mx']);
    $links_mx = explode(",", $atts['link_mx']);
    $titles_mx = explode(";", $atts['title_mx']);

    $iframes_au = explode(",", $atts['iframe_au']);
    $links_au = explode(",", $atts['link_au']);
    $titles_au = explode(";", $atts['title_au']);

    $iframes_nl = explode(",", $atts['iframe_nl']);
    $links_nl = explode(",", $atts['link_nl']);
    $titles_nl = explode(";", $atts['title_nl']);

    if($iframes_gb[0]){
        $ac_iframe = $iframes_gb[0];
    }elseif($iframes_us[0]){
        $ac_iframe = $iframes_us[0];
        
    }else{
        $ac_iframe = $ifr_result[0];
    }
    

    $ac_link = "http://a-fwd.to/5djzUN2";

    $template = $atts['template'];

    $data .= '<div class="wpigsfaa_container" id="'.$atts['adid'].'"></div><script>';


	foreach($iframes_us as $k => $v){
        if($v){
            $data .= "wpigsfaa_getAmazonAd_US('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_us[$k]."','".$titles_us[$k]."');";            
        }else{
            $data .= "wpigsfaa_getAmazonAd_US('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }
	}

    foreach($iframes_gb as $k => $v){
        if($v){
            $data .= "wpigsfaa_getAmazonAd_GB('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_gb[$k]."','".$titles_gb[$k]."');";
        }else{
            $data .= "wpigsfaa_getAmazonAd_GB('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }
    }

    foreach($iframes_de as $k => $v){
        if($v){
            $data .= "wpigsfaa_getAmazonAd_DE('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_de[$k]."','".$titles_de[$k]."');";
        }else{
            $data .= "wpigsfaa_getAmazonAd_DE('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }   
    }

    foreach($iframes_fr as $k => $v){
        if($v){
            $data .= "wpigsfaa_getAmazonAd_FR('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_fr[$k]."','".$titles_fr[$k]."');";
        }else{
            $data .= "wpigsfaa_getAmazonAd_FR('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }
    }

    foreach($iframes_ca as $k => $v){
        if($v){
            $data .= "wpigsfaa_getAmazonAd_CA('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_ca[$k]."','".$titles_ca[$k]."');";
        }else{
            $data .= "wpigsfaa_getAmazonAd_CA('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }
    }

    foreach($iframes_it as $k => $v){
        if($v){
            $data .= "wpigsfaa_getAmazonAd_IT('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_it[$k]."','".$titles_it[$k]."');";
        }else{
            $data .= "wpigsfaa_getAmazonAd_IT('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }
    }

    foreach($iframes_es as $k => $v){
        if($v){
            $data .= "wpigsfaa_getAmazonAd_ES('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_es[$k]."','".$titles_es[$k]."');";
        }else{
            $data .= "wpigsfaa_getAmazonAd_ES('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }
    }

    foreach($iframes_br as $k => $v){
        if($v){
            $data .= "wpigsfaa_getAmazonAd_BR('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_br[$k]."','".$titles_br[$k]."');";
        }else{
            $data .= "wpigsfaa_getAmazonAd_BR('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }
    }

    foreach($iframes_mx as $k => $v){
        if($v){
            $data .= "wpigsfaa_getAmazonAd_MX('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_mx[$k]."','".$titles_mx[$k]."');";
        }else{
            $data .= "wpigsfaa_getAmazonAd_MX('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }
    }

    foreach($iframes_au as $k => $v){
        if($v){
            $data .= "wpigsfaa_getAmazonAd_AU('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_au[$k]."','".$titles_au[$k]."');";
        }else{
            $data .= "wpigsfaa_getAmazonAd_AU('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }
    }

    foreach($iframes_nl as $k => $v){
        if($v){ 
            $data .= "wpigsfaa_getAmazonAd_NL('".$atts['adid']."','".$template."','".htmlspecialchars_decode($v)."','".$links_nl[$k]."','".$titles_nl[$k]."');";
        }else{
            $data .= "wpigsfaa_getAmazonAd_NL('".$atts['adid']."','".$template."','".$ac_iframe."','".$ac_link."','');"; 
        }
    }


	$data .= '</script>';

	return $data;

}


add_shortcode('amazon_convert', 'wpigsfaa_main');


add_action( 'admin_init', 'wpigsfaa_tinymce_button' );


function wpigsfaa_tinymce_button() {
     if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
          add_filter( 'mce_buttons', 'wpigsfaa_register_tinymce_button' );
          add_filter( 'mce_external_plugins', 'wpigsfaa_add_tinymce_button' );
     }
}

function wpigsfaa_register_tinymce_button( $buttons ) {
     array_push( $buttons, "wpigsfaa_button_amazon" );
     return $buttons;
}

function wpigsfaa_add_tinymce_button( $plugin_array ) {
     $plugin_array['wpigsfaa_button_script'] = plugins_url( '/assets/js/ac_button.js', __FILE__ ) ;
     return $plugin_array;
}



if ( is_admin() ) {
    add_action( 'wp_ajax_getamzurl', 'wpigsfaa_ajax_getamzurl' );
    add_action( 'wp_ajax_nopriv_getamzurl', 'wpigsfaa_ajax_getamzurl' );
}



function wpigsfaa_ajax_getamzurl(){

    $url = base64_decode($_POST['url']);



        if($url){


            $response = wp_remote_head("https:".$url);
            
            $location = wp_remote_retrieve_header( $response, 'location' );

            if(!$location){
                $location = $response['http_response']->get_response_object()->url;
            }

            $result = array('url'=> htmlspecialchars_decode($location));

            header('Content-Type: application/json');
            echo json_encode($result);

        }

        die();



}





?>