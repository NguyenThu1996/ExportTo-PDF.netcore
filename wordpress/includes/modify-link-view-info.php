<?php
function modify_the_link_view($post_url,$post) {
    if($post->post_type=="info" || $post->post_type=="mtssb_article" ){

        return $post_url.'?id='.$post->ID;
    }
    return $post_url;
}
add_filter('post_type_link',"modify_the_link_view",110,2);
?>