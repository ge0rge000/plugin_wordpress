<?php

/**
 * Plugin Name:       My Basics Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


/// add bar after THE opening body 

add_action('wp_body_open','tb_head');


function tb_head()
{
    echo ('<h3 class="tb">welcome to  SRC TOURSIM </h3>
    ');
};


///add css to topbar
add_action('wp_print_styles','tb_css');


function tb_css(){
    echo( '
    <style>
        h3.tb {color:#fff; magin:0 ;padding:30px ;text-align:center; background:orange}
    </style>
    ');
}


?>

