<?php
if ( ! defined('ABSPATH')) exit;  // if direct access



add_action('breadcrumb_settings_tabs_content_options','breadcrumb_settings_tabs_content_options');

function breadcrumb_settings_tabs_content_options(){

    $settings_tabs_field = new settings_tabs_field();

    $breadcrumb_text = get_option( 'breadcrumb_text' );
    $breadcrumb_separator = get_option( 'breadcrumb_separator' );
    $breadcrumb_display_last_separator = get_option( 'breadcrumb_display_last_separator' );
    $breadcrumb_word_char = get_option( 'breadcrumb_word_char' );
    $breadcrumb_word_char_count = get_option( 'breadcrumb_word_char_count' );
    $breadcrumb_word_char_end = get_option( 'breadcrumb_word_char_end' );
    $breadcrumb_display_home = get_option( 'breadcrumb_display_home' );
    $breadcrumb_home_text = get_option( 'breadcrumb_home_text' );
    $breadcrumb_url_hash = get_option( 'breadcrumb_url_hash' );

    //$screen = get_current_screen();



    ?>


    <div class="section">
        <div class="section-title">General Option</div>
        <p class="description section-description">Set some basic option to get start.</p>

        <?php

        $args = array(
            'id'		=> 'breadcrumb_text',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Breadcrumb front text','breadcrumb'),
            'details'	=> __('Display custom text before breadcrumb.','breadcrumb'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_text,
            'default'		=> __('You are here', 'breadcrumb'),
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_separator',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Breadcrumb separator text','breadcrumb'),
            'details'	=> __('You can display custom separator. ex: <code>&raquo;</code>','breadcrumb'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_separator,
            'default'		=> '&raquo;',
        );

        $settings_tabs_field->generate_field($args);





        $args = array(
            'id'		=> 'breadcrumb_display_last_separator',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Display last separator','breadcrumb'),
            'details'	=> __('Display or hide last separator.','breadcrumb'),
            'type'		=> 'select',
            'value'		=> $breadcrumb_display_last_separator,
            'default'		=> 'no',
            'args'		=> array(
                'no'=>__('No','breadcrumb'),
                'yes'=>__('Yes','breadcrumb'),



            ),
        );

        $settings_tabs_field->generate_field($args);



        $args = array(
            'id'		=> 'breadcrumb_word_char',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Breadcrumb link text limit by?','breadcrumb'),
            'details'	=> __('You can limit link text by word or character','breadcrumb'),
            'type'		=> 'select',
            'value'		=> $breadcrumb_word_char,
            'default'		=> 'word',
            'args'		=> array(
                'word'=>__('Word','breadcrumb'),
                'character'=>__('Character','breadcrumb'),



            ),
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_word_char_count',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Limit count','breadcrumb'),
            'details'	=> __('Set custom limit value, number only.','breadcrumb'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_word_char_count,
            'default'		=> '5',
        );

        $settings_tabs_field->generate_field($args);

        $args = array(
            'id'		=> 'breadcrumb_word_char_end',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Ending character','breadcrumb'),
            'details'	=> __('Set custom Ending character, ex: ...','breadcrumb'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_word_char_end,
            'default'		=> '...',
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_display_home',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Display "Home" on breadcrumb?','breadcrumb'),
            'details'	=> __('You can hide or display Home on breadcrumb.','breadcrumb'),
            'type'		=> 'select',
            'value'		=> $breadcrumb_display_home,
            'default'		=> 'no',
            'args'		=> array(
                'no'=>__('No','breadcrumb'),
                'yes'=>__('Yes','breadcrumb'),



            ),
        );

        $settings_tabs_field->generate_field($args);



        $args = array(
            'id'		=> 'breadcrumb_home_text',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Custom home text','breadcrumb'),
            'details'	=> __('You can set custom text for "Home"','breadcrumb'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_home_text,
            'default'		=> __('Home','breadcrumb'),
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_url_hash',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Current URL hash','breadcrumb'),
            'details'	=> __('If you want to keep # on current url, otherwise keep empty','breadcrumb'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_url_hash,
            'default'		=> '#',
        );

        $settings_tabs_field->generate_field($args);





        ?>


    </div>
    <?php

}







add_action('breadcrumb_settings_tabs_content_style','breadcrumb_settings_tabs_content_style');

function breadcrumb_settings_tabs_content_style(){

    $settings_tabs_field = new settings_tabs_field();

    $breadcrumb_padding = get_option( 'breadcrumb_padding' );
    $breadcrumb_margin = get_option( 'breadcrumb_margin' );
    $breadcrumb_bg_color = get_option( 'breadcrumb_bg_color' );
    $breadcrumb_link_color = get_option( 'breadcrumb_link_color' );
    $breadcrumb_font_size = get_option( 'breadcrumb_font_size' );

    $breadcrumb_themes = get_option( 'breadcrumb_themes' );
    $breadcrumb_separator_color = get_option( 'breadcrumb_separator_color' );



    ?>
    <div class="section">
        <div class="section-title">Choose style</div>
        <p class="description section-description">Customize the breadcrumb.</p>

        <?php



        $args = array(
            'id'		=> 'breadcrumb_themes',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Breadcrumb Themes','breadcrumb'),
            'details'	=> __('Choose breadcrumb theme','breadcrumb'),
            'type'		=> 'radio_image',
            'value'		=> $breadcrumb_themes,
            'default'		=> 'theme5',
            'width'		=> '350px',
            'args'		=> apply_filters('breadcrumb_theme_args', array(

                'theme1'=>array('name'=>'theme1','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme1.png'),
                'theme2'=>array('name'=>'theme1','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme2.png'),

                'theme3'=>array('name'=>'theme1','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme3.png'),
                'theme4'=>array('name'=>'theme1','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme4.png'),

                'theme5'=>array('name'=>'theme5','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme5.png'),
                'theme6'=>array('name'=>'theme6','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme6.png', 'disabled'=>true, 'pro_msg'=>'Only in pro'),

                'theme7'=>array('name'=>'theme7','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme7.png', 'disabled'=>true, 'pro_msg'=>'Only in pro'),
                'theme8'=>array('name'=>'theme8','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme8.png', 'disabled'=>true, 'pro_msg'=>'Only in pro'),
                'theme9'=>array('name'=>'theme9','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme9.png', 'disabled'=>true, 'pro_msg'=>'Only in pro'),
                'theme10'=>array('name'=>'theme10','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme10.png', 'disabled'=>true, 'pro_msg'=>'Only in pro'),
                'theme11'=>array('name'=>'theme11','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme11.png', 'disabled'=>true, 'pro_msg'=>'Only in pro'),
                'theme12'=>array('name'=>'theme12','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme12.png', 'disabled'=>true, 'pro_msg'=>'Only in pro'),
                'theme13'=>array('name'=>'theme13','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme13.png', 'disabled'=>true, 'pro_msg'=>'Only in pro'),
                'theme14'=>array('name'=>'theme14','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme14.png', 'disabled'=>true, 'pro_msg'=>'Only in pro'),
                'theme15'=>array('name'=>'theme15','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme15.png', 'disabled'=>true, 'pro_msg'=>'Only in pro'),




            )),
        );

        $settings_tabs_field->generate_field($args);

        $args = array(
            'id'		=> 'breadcrumb_font_size',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Breadcrumb font size','breadcrumb'),
            'details'	=> __('Set custom font size','breadcrumb'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_font_size,
            'default'		=> '14px',
        );

        $settings_tabs_field->generate_field($args);

        $args = array(
            'id'		=> 'breadcrumb_padding',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Breadcrumb container padding','breadcrumb'),
            'details'	=> __('Put custom padding size for breadcrumb container.','breadcrumb'),
            'type'		=> 'text',
            'placeholder'		=> '10px',
            'value'		=> $breadcrumb_padding,
            'default'		=> '10px',
        );

        $settings_tabs_field->generate_field($args);



        $args = array(
            'id'		=> 'breadcrumb_margin',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Breadcrumb container margin','breadcrumb'),
            'details'	=> __('Put custom margin size for breadcrumb container.','breadcrumb'),
            'type'		=> 'text',
            'placeholder'		=> '10px',
            'value'		=> $breadcrumb_margin,
            'default'		=> '10px',
        );

        $settings_tabs_field->generate_field($args);

        $args = array(
            'id'		=> 'breadcrumb_bg_color',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Breadcrumb link background color','breadcrumb'),
            'details'	=> __('Choose custom background color for links','breadcrumb'),
            'type'		=> 'colorpicker',
            'value'		=> $breadcrumb_bg_color,
            'default'		=> '#278df4',
        );

        $settings_tabs_field->generate_field($args);

        $args = array(
            'id'		=> 'breadcrumb_link_color',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Breadcrumb link color','breadcrumb'),
            'details'	=> __('Choose custom link color','breadcrumb'),
            'type'		=> 'colorpicker',
            'value'		=> $breadcrumb_link_color,
            'default'		=> '#ffffff',
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_separator_color',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Breadcrumb separator color','breadcrumb'),
            'details'	=> __('Choose custom separator color','breadcrumb'),
            'type'		=> 'colorpicker',
            'value'		=> $breadcrumb_separator_color,
            'default'		=> '#727272',
        );

        $settings_tabs_field->generate_field($args);

        ?>


    </div>
    <?php

}







add_action('breadcrumb_settings_tabs_content_custom_scripts','breadcrumb_settings_tabs_content_custom_scripts');

function breadcrumb_settings_tabs_content_custom_scripts(){

    $settings_tabs_field = new settings_tabs_field();

    $breadcrumb_custom_css = get_option( 'breadcrumb_custom_css' );
    $breadcrumb_custom_js = get_option( 'breadcrumb_custom_js' );


    ?>
    <div class="section">
        <div class="section-title">Custom scripts</div>
        <p class="description section-description">Add your own scripts and style css.</p>

        <?php

        $args = array(
            'id'		=> 'breadcrumb_custom_css',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Custom CSS','breadcrumb'),
            'details'	=> __('Add your own CSS, do not use &lt;style>&lt;/style> tag. its recommend to use <code>!important</code> to override.','breadcrumb'),
            'type'		=> 'scripts_css',
            'value'		=> $breadcrumb_custom_css,
            'default'		=> '.breadcrumb-container{}&#10;.breadcrumb-container ul{}&#10;.breadcrumb-container li{}&#10;.breadcrumb-container a{}&#10;.breadcrumb-container .separator{}&#10;',
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_custom_js',
            //'parent' => 'breadcrumb_options',
            'title'		=> __('Custom JS','breadcrumb'),
            'details'	=> __('Add your own JS, do not use &lt;script>&lt;/script> tag.','breadcrumb'),
            'type'		=> 'scripts_js',
            'value'		=> $breadcrumb_custom_js,
            'default'		=> '',
        );

        $settings_tabs_field->generate_field($args);


        ?>


    </div>
    <?php

}








add_action('breadcrumb_settings_tabs_content_help_support', 'breadcrumb_settings_tabs_content_help_support');

if(!function_exists('breadcrumb_settings_tabs_content_help_support')) {
    function breadcrumb_settings_tabs_content_help_support($tab){

        $settings_tabs_field = new settings_tabs_field();

        ?>
        <div class="section">
            <div class="section-title"><?php echo __('Get support', 'related-post'); ?></div>
            <p class="description section-description"><?php echo __('Use following to get help and support from our expert team.', 'related-post'); ?></p>

            <?php


            ob_start();
            ?>

            <div class="copy-to-clipboard">
                <input type="text" value="[breadcrumb]"> <span class="copied">Copied</span>
                <p class="description">You can use this shortcode under post content</p>
            </div>


            <div class="copy-to-clipboard">
                <textarea cols="50" rows="2" style="background:#bfefff" onClick="this.select();"><?php echo '<?php echo do_shortcode("[breadcrumb'; echo "]"; echo '"); ?>'; ?></textarea> <span class="copied">Copied</span>
                <p class="description">PHP Code, you can use under theme .php files.</p>
            </div>



            <style type="text/css">
                .copy-to-clipboard {
                }

                .copy-to-clipboard .copied {
                    display: none;
                    background: #e5e5e5;
                    padding: 4px 10px;
                    line-height: normal;
                }
            </style>

            <script>
                jQuery(document).ready(function ($) {
                    $(document).on('click', '.copy-to-clipboard input, .copy-to-clipboard textarea', function () {
                        $(this).focus();
                        $(this).select();
                        document.execCommand('copy');
                        $(this).parent().children('.copied').fadeIn().fadeOut(2000);
                    })
                })
            </script>
            <?php
            $html = ob_get_clean();
            $args = array(
                'id' => 'breadcrumb_shortcodes',
                'title' => __('Get shortcode', 'breadcrumb-pro'),
                'details' => '',
                'type' => 'custom_html',
                'html' => $html,
            );
            $settings_tabs_field->generate_field($args);



            ob_start();
            ?>

            <p><?php echo __('Ask question for free on our forum and get quick reply from our expert team members.', 'related-post'); ?></p>
            <a class="button" href="https://www.pickplugins.com/create-support-ticket/"><?php echo __('Create support ticket', 'related-post'); ?></a>

            <p><?php echo __('Read our documentation before asking your question.', 'related-post'); ?></p>
            <a class="button" href="https://www.pickplugins.com/documentation/breadcrumb/"><?php echo __('Documentation', 'related-post'); ?></a>

            <p><?php echo __('Watch video tutorials.', 'related-post'); ?></p>
            <a class="button" href="https://www.youtube.com/playlist?list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb"><i class="fab fa-youtube"></i> <?php echo __('All tutorials', 'related-post'); ?></a>

            <ul>
                <li><i class="far fa-dot-circle"></i> <a href="https://www.youtube.com/watch?v=HTbEIOEcc0c&list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb">Install & setup</a></li>
                <li><i class="far fa-dot-circle"></i> <a href="https://www.youtube.com/watch?v=jc1EzF_5kxs&list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb&index=2"> Limit link text</a></li>
                <li><i class="far fa-dot-circle"></i> <a href="https://www.youtube.com/watch?v=91fC7hOl6W0&list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb&index=3">Customize home text</a></li>
                <li><i class="far fa-dot-circle"></i> <a href="https://www.youtube.com/watch?v=B3xpe9BZWWI&list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb&index=4">Breadcrumb install pro and setup</a></li>
                <li><i class="far fa-dot-circle"></i> <a href="https://www.youtube.com/watch?v=xdPiM7UlNTs&list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb&index=5">Hide breadcrumb on archives</a></li>
            </ul>



            <?php

            $html = ob_get_clean();

            $args = array(
                'id'		=> 'get_support',
                'parent'		=> 'related_post_settings',
                'title'		=> __('Ask question','related-post'),
                'details'	=> '',
                'type'		=> 'custom_html',
                'html'		=> $html,

            );

            $settings_tabs_field->generate_field($args);


            ob_start();
            ?>

            <p class="">We wish your 2 minutes to write your feedback about plugin. give us <span style="color: #ffae19"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>

            <a target="_blank" href="https://wordpress.org/support/plugin/breadcrumb/reviews/#new-post" class="button"><i class="fab fa-wordpress"></i> Write a review</a>


            <?php

            $html = ob_get_clean();

            $args = array(
                'id'		=> 'reviews',
                'parent'		=> 'related_post_settings',
                'title'		=> __('Submit reviews','related-post'),
                'details'	=> '',
                'type'		=> 'custom_html',
                'html'		=> $html,

            );

            $settings_tabs_field->generate_field($args);

            ?>


        </div>
        <?php


    }
}




add_action('breadcrumb_settings_tabs_content_buy_pro', 'breadcrumb_settings_tabs_content_buy_pro');

if(!function_exists('breadcrumb_settings_tabs_content_buy_pro')) {
    function breadcrumb_settings_tabs_content_buy_pro($tab){

        $settings_tabs_field = new settings_tabs_field();


        ?>
        <div class="section">
            <div class="section-title"><?php echo __('Get Premium', 'related-post'); ?></div>
            <p class="description section-description"><?php echo __('Thansk for using our plugin, if you looking for some advance feature please buy premium version.', 'related-post'); ?></p>

            <?php


            ob_start();
            ?>

            <p><?php echo __('If you love our plugin and want more feature please consider to buy pro version.', 'related-post'); ?></p>
            <a class="button" href="https://www.pickplugins.com/item/breadcrumb-awesome-breadcrumbs-style-navigation-for-wordpress/?ref=dashobard"><?php echo __('Buy premium', 'related-post'); ?></a>

            <h2>See the differences</h2>

            <table class="pro-features">
                <thead>
                <tr>
                    <th class="col-features">Features</th>
                    <th class="col-free">Free</th>
                    <th class="col-pro">Premium</th>
                </tr>
                </thead>
                <tr>
                    <td class="col-features">Hide on archives</td>
                    <td><i class="fas fa-times"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="col-features">Hide by post types</td>
                    <td><i class="fas fa-times"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>


                <tr>
                    <td class="col-features">Hide by post ids</td>
                    <td><i class="fas fa-times"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td class="col-features">Extra ready 10 themes</td>
                    <td><i class="fas fa-times"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>


                <tr>
                    <td class="col-features">Breadcrumb front text</td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td class="col-features">Breadcrumb separator text</td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td class="col-features">Display or hide last separator</td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td class="col-features">Breadcrumb link text limit</td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td class="col-features">Ending character</td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td class="col-features">Display "Home" on breadcrumb</td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td class="col-features">Custom home text</td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>



                <tr>
                    <td class="col-features">Breadcrumb text font size</td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="col-features">Breadcrumb link background color</td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td class="col-features">Breadcrumb link color</td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="col-features">Breadcrumb separator color

                    </td>
                    <td><i class="fas fa-check"></i></td>
                    <td><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <th class="col-features">Features</th>
                    <th class="col-free">Free</th>
                    <th class="col-pro">Premium</th>
                </tr>
                <tr>
                    <td class="col-features">Buy now</td>
                    <td> </td>
                    <td><a class="button" href="https://www.pickplugins.com/item/breadcrumb-awesome-breadcrumbs-style-navigation-for-wordpress/?ref=dashobard"><?php echo __('Buy premium', 'related-post'); ?></a></td>
                </tr>

            </table>



            <?php

            $html = ob_get_clean();

            $args = array(
                'id'		=> 'get_pro',
                'parent'		=> 'related_post_settings',
                'title'		=> __('Get pro version','related-post'),
                'details'	=> '',
                'type'		=> 'custom_html',
                'html'		=> $html,

            );

            $settings_tabs_field->generate_field($args);


            ?>


        </div>

        <style type="text/css">
            .pro-features{
                margin: 30px 0;
                border-collapse: collapse;
                border: 1px solid #ddd;
            }
            .pro-features th{
                width: 120px;
                background: #ddd;
                padding: 10px;
            }
            .pro-features tr{
            }
            .pro-features td{
                border-bottom: 1px solid #ddd;
                padding: 10px 10px;
                text-align: center;
            }
            .pro-features .col-features{
                width: 230px;
                text-align: left;
            }

            .pro-features .col-free{
            }
            .pro-features .col-pro{
            }

            .pro-features i.fas.fa-check {
                color: #139e3e;
                font-size: 16px;
            }
            .pro-features i.fas.fa-times {
                color: #f00;
                font-size: 17px;
            }
        </style>
        <?php


    }
}














add_action('breadcrumb_settings_tabs_right_panel_options', 'breadcrumb_settings_tabs_right_panel_options');
add_action('breadcrumb_settings_tabs_right_panel_style', 'breadcrumb_settings_tabs_right_panel_options');
add_action('breadcrumb_settings_tabs_right_panel_custom_scripts', 'breadcrumb_settings_tabs_right_panel_options');
add_action('breadcrumb_settings_tabs_right_panel_help_support', 'breadcrumb_settings_tabs_right_panel_options');
add_action('breadcrumb_settings_tabs_right_panel_buy_pro', 'breadcrumb_settings_tabs_right_panel_options');



if(!function_exists('breadcrumb_settings_tabs_right_panel_options')) {
    function breadcrumb_settings_tabs_right_panel_options($tab){

        ?>
        <h3>Help & Support</h3>
        <p><?php echo __('Ask question for free on our forum and get quick reply from our expert team members.', 'related-post'); ?></p>
        <a class="button" href="https://www.pickplugins.com/create-support-ticket/"><?php echo __('Create support ticket', 'related-post'); ?></a>

        <p><?php echo __('Read our documentation before asking your question.', 'related-post'); ?></p>
        <a class="button" href="https://www.pickplugins.com/documentation/breadcrumb/"><?php echo __('Documentation', 'related-post'); ?></a>

        <p><?php echo __('Watch video tutorials.', 'related-post'); ?></p>
        <a class="button" href="https://www.youtube.com/playlist?list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb"><i class="fab fa-youtube"></i> <?php echo __('All tutorials', 'related-post'); ?></a>

        <ul>
            <li><i class="far fa-dot-circle"></i> <a href="https://www.youtube.com/watch?v=HTbEIOEcc0c&list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb">Install & setup</a></li>
            <li><i class="far fa-dot-circle"></i> <a href="https://www.youtube.com/watch?v=jc1EzF_5kxs&list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb&index=2"> Limit link text</a></li>
            <li><i class="far fa-dot-circle"></i> <a href="https://www.youtube.com/watch?v=91fC7hOl6W0&list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb&index=3">Customize home text</a></li>
            <li><i class="far fa-dot-circle"></i> <a href="https://www.youtube.com/watch?v=B3xpe9BZWWI&list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb&index=4">Breadcrumb install pro and setup</a></li>
            <li><i class="far fa-dot-circle"></i> <a href="https://www.youtube.com/watch?v=xdPiM7UlNTs&list=PL0QP7T2SN94bnUjguNbBXAjW1yJjjeLtb&index=5">Hide breadcrumb on archives</a></li>


        </ul>

        <h3>Submit reviews</h3>

        <p class="">We wish your 2 minutes to write your feedback about plugin. give us <br/><span style="color: #ffae19"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>

        <a target="_blank" href="https://wordpress.org/support/plugin/breadcrumb/reviews/#new-post" class="button"><i class="fab fa-wordpress"></i> Write a review</a>

        <?php

    }
}






add_action('breadcrumb_settings_save', 'breadcrumb_settings_save');



if(!function_exists('breadcrumb_settings_save')) {
    function breadcrumb_settings_save(){

        $breadcrumb_text = sanitize_text_field($_POST['breadcrumb_text']);
        update_option('breadcrumb_text', $breadcrumb_text);

        $breadcrumb_separator = sanitize_text_field($_POST['breadcrumb_separator']);
        update_option('breadcrumb_separator', $breadcrumb_separator);

        $breadcrumb_display_last_separator = sanitize_text_field($_POST['breadcrumb_display_last_separator']);
        update_option('breadcrumb_display_last_separator', $breadcrumb_display_last_separator);

        $breadcrumb_word_char = sanitize_text_field($_POST['breadcrumb_word_char']);
        update_option('breadcrumb_word_char', $breadcrumb_word_char);

        $breadcrumb_word_char_count = sanitize_text_field($_POST['breadcrumb_word_char_count']);
        update_option('breadcrumb_word_char_count', $breadcrumb_word_char_count);

        $breadcrumb_word_char_end = sanitize_text_field($_POST['breadcrumb_word_char_end']);
        update_option('breadcrumb_word_char_end', $breadcrumb_word_char_end);


        $breadcrumb_margin = sanitize_text_field($_POST['breadcrumb_margin']);
        update_option('breadcrumb_margin', $breadcrumb_margin);

        $breadcrumb_padding = sanitize_text_field($_POST['breadcrumb_padding']);
        update_option('breadcrumb_padding', $breadcrumb_padding);

        $breadcrumb_font_size = sanitize_text_field($_POST['breadcrumb_font_size']);
        update_option('breadcrumb_font_size', $breadcrumb_font_size);

        $breadcrumb_link_color = sanitize_text_field($_POST['breadcrumb_link_color']);
        update_option('breadcrumb_link_color', $breadcrumb_link_color);

        $breadcrumb_separator_color = sanitize_text_field($_POST['breadcrumb_separator_color']);
        update_option('breadcrumb_separator_color', $breadcrumb_separator_color);

        $breadcrumb_bg_color = sanitize_text_field($_POST['breadcrumb_bg_color']);
        update_option('breadcrumb_bg_color', $breadcrumb_bg_color);

        $breadcrumb_themes = sanitize_text_field($_POST['breadcrumb_themes']);
        update_option('breadcrumb_themes', $breadcrumb_themes);

        $breadcrumb_display_home = sanitize_text_field($_POST['breadcrumb_display_home']);
        update_option('breadcrumb_display_home', $breadcrumb_display_home);

        $breadcrumb_home_text = sanitize_text_field($_POST['breadcrumb_home_text']);
        update_option('breadcrumb_home_text', $breadcrumb_home_text);

        $breadcrumb_url_hash = sanitize_text_field($_POST['breadcrumb_url_hash']);
        update_option('breadcrumb_url_hash', $breadcrumb_url_hash);


        $breadcrumb_custom_css = stripslashes_deep($_POST['breadcrumb_custom_css']);
        update_option('breadcrumb_custom_css', $breadcrumb_custom_css);

        $breadcrumb_custom_js = stripslashes_deep($_POST['breadcrumb_custom_js']);
        update_option('breadcrumb_custom_js', $breadcrumb_custom_js);


    }
}










