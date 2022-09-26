<?php

//Theme Title
add_theme_support('title-tag');

//Thumblil Image Area
add_theme_support('post-thumbnails', array('page', 'post'));
add_image_size('post-thumbnails', 970, 350, true);

//Except to 40 Words

function sayed_excerpt_more($more){
    return '<br><a href "">'.'Read More'.'</a>';
}
add_filter('excerpt_more', 'sayed_excerpt_more');

function sayed_excerpt_length($length){
    return 80;
}
add_filter('excerpt_length', 'sayed_excerpt_length');