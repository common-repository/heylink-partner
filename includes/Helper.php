<?php
function popupthis($result_url) {
    $protocols = array('https://','http://', 'http://www.', 'www.');
 $site_url = str_replace($protocols, '', get_bloginfo('wpurl'));
 


 $content =     file_get_contents("https://connect-stage.heylink.com/connect/v1/scripts/$site_url");

 $result  = json_decode($content);
 $result_url = filter_input(INPUT_POST, 'result_url');
 $result_url=$result->data->url;
//$src = plugins_url('/includes/links.js', __FILE__);
wp_register_script( 'links',$result_url );
wp_enqueue_script( 'links' );


}
add_action('wp_enqueue_scripts','popupthis');







