<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head >
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="notice">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <marquee behavior="" direction=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum veniam provident nesciunt possimus praesentium, minima, accusamus necessitatibus eaque, maiores itaque iste placeat cum dignissimos ad?</p></marquee>
        </div>
    </div>
</div>
</div>
    <header id="header_area" class="<?php echo get_theme_mod('sayed_menu_position'); ?>">
        <div class="container">
            <div class="row bg-color">
                <div class="col-md-3">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('sayed_logo'); ?>" alt="LOGO"></a>
                </div>
                <div class="col-md-9" id="d-menu"><?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'd-menu')); ?></div>
            </div>
        </div>
    </header>  