<?php
/*
Plugin Name: My chrismaslights
Plugin URI: https://dekpo.com
Description: This is a wonderfull plugin that enable you to make a snow storm within your website
Author: C'est pas moi surtout pas moi !
Version: 1.0
*/

function my_christmas_lights(){
    wp_enqueue_style('my_christmas_lights_css', plugin_dir_url(__FILE__).'christmaslights.css');

    wp_enqueue_script('yahoo_animate_min_js', plugin_dir_url(__FILE__).'yahoo-animate-min.js');

    wp_enqueue_script('sound_manager_js', plugin_dir_url(__FILE__).'soundmanager.js');

    wp_enqueue_script('my_christmas_lights_js', plugin_dir_url(__FILE__).'christmaslights.js');

    wp_enqueue_media('image', plugin_dir_url(__DIR__). 'image');

    wp_enqueue_media('sound', plugin_dir_url(__DIR__). 'sound');
}
add_action('wp_enqueue_scripts', 'my_christmas_lights', 10);

function my_christmas_lights_front_settings_script(){
    ?>
    <script>
        // var urlBase = 'wp-content/plugins/christmaslights/';
        // soundManager.url = 'wp-content/plugins/christmaslights/soundmanager.js';
        var urlBase = '<?php echo plugin_dir_url(__FILE__)?>';
        soundManager.url = '<?php echo plugin_dir_url(__FILE__).'sound'?>';
    </script>
    <?php 
}

add_action('wp_head','my_christmas_lights_front_settings_script' );

function christmas_lights_display(){
    ?>
    <div id="lights">
    <!-- lights go here -->
</div>
<?php
}

add_action('wp_body_open', 'christmas_lights_display');
