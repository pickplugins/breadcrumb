<?php
if ( ! defined('ABSPATH')) exit;  // if direct access



add_action('breadcrumb_settings_tabs_content_options','breadcrumb_settings_tabs_content_options');

function breadcrumb_settings_tabs_content_options(){

    $settings_tabs_field = new settings_tabs_field();

    $breadcrumb_text = get_option( 'breadcrumb_text' );
    $breadcrumb_separator = get_option( 'breadcrumb_separator' );
    $breadcrumb_display_last_separator = get_option( 'breadcrumb_display_last_separator' );
    $breadcrumb_font_size = get_option( 'breadcrumb_font_size' );
    $breadcrumb_word_char = get_option( 'breadcrumb_word_char' );
    $breadcrumb_word_char_count = get_option( 'breadcrumb_word_char_count' );
    $breadcrumb_word_char_end = get_option( 'breadcrumb_word_char_end' );
    $breadcrumb_display_home = get_option( 'breadcrumb_display_home' );
    $breadcrumb_home_text = get_option( 'breadcrumb_home_text' );
    $breadcrumb_hide_on_pages = get_option( 'breadcrumb_hide_on_pages' );
    $breadcrumb_hide_on_page_by_id = get_option( 'breadcrumb_hide_on_page_by_id' );
    $breadcrumb_url_hash = get_option( 'breadcrumb_url_hash' );

    //$screen = get_current_screen();



    ?>

    <pre><?php //echo var_export($screen, true); ?></pre>



    <div class="section">
        <div class="section-title">General Option</div>
        <p class="description section-description">Set some basic option to get start.</p>

        <?php

        $args = array(
            'id'		=> 'breadcrumb_text',
            //'parent' => 'testimonial_options',
            'title'		=> __('Breadcrumb front text','testimonial'),
            'details'	=> __('Display custom text before breadcrumb.','testimonial'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_text,
            'default'		=> __('You are here', 'breadcrumb'),
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_separator',
            //'parent' => 'testimonial_options',
            'title'		=> __('Breadcrumb separator text','testimonial'),
            'details'	=> __('You can display custom separator. ex: <code>&raquo;</code>','testimonial'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_separator,
            'default'		=> '&raquo;',
        );

        $settings_tabs_field->generate_field($args);





        $args = array(
            'id'		=> 'breadcrumb_display_last_separator',
            //'parent' => 'testimonial_options',
            'title'		=> __('Display last separator','testimonial'),
            'details'	=> __('Display or hide last separator.','testimonial'),
            'type'		=> 'select',
            'value'		=> $breadcrumb_display_last_separator,
            'default'		=> 'no',
            'args'		=> array(
                'no'=>__('No','testimonial'),
                'yes'=>__('Yes','testimonial'),



            ),
        );

        $settings_tabs_field->generate_field($args);





        $args = array(
            'id'		=> 'breadcrumb_font_size',
            //'parent' => 'testimonial_options',
            'title'		=> __('Breadcrumb font size','testimonial'),
            'details'	=> __('Set custom font size','testimonial'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_font_size,
            'default'		=> '14px',
        );

        $settings_tabs_field->generate_field($args);





        $args = array(
            'id'		=> 'breadcrumb_word_char',
            //'parent' => 'testimonial_options',
            'title'		=> __('Breadcrumb link text limit by?','testimonial'),
            'details'	=> __('You can limit link text by word or character','testimonial'),
            'type'		=> 'select',
            'value'		=> $breadcrumb_word_char,
            'default'		=> 'word',
            'args'		=> array(
                'word'=>__('Word','testimonial'),
                'character'=>__('Character','testimonial'),



            ),
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_word_char_count',
            //'parent' => 'testimonial_options',
            'title'		=> __('Limit count','testimonial'),
            'details'	=> __('Set custom limit value, number only.','testimonial'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_word_char_count,
            'default'		=> '5',
        );

        $settings_tabs_field->generate_field($args);

        $args = array(
            'id'		=> 'breadcrumb_word_char_end',
            //'parent' => 'testimonial_options',
            'title'		=> __('Ending character','testimonial'),
            'details'	=> __('Set custom Ending character, ex: ...','testimonial'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_word_char_end,
            'default'		=> '...',
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_display_home',
            //'parent' => 'testimonial_options',
            'title'		=> __('Display "Home" on breadcrumb?','testimonial'),
            'details'	=> __('You can hide or display Home on breadcrumb.','testimonial'),
            'type'		=> 'select',
            'value'		=> $breadcrumb_word_char,
            'default'		=> 'no',
            'args'		=> array(
                'no'=>__('No','testimonial'),
                'yes'=>__('Yes','testimonial'),



            ),
        );

        $settings_tabs_field->generate_field($args);



        $args = array(
            'id'		=> 'breadcrumb_home_text',
            //'parent' => 'testimonial_options',
            'title'		=> __('Ending character','testimonial'),
            'details'	=> __('Set custom Ending character, ex: ...','testimonial'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_home_text,
            'default'		=> __('Home','breadcrumb'),
        );

        $settings_tabs_field->generate_field($args);




        $args = array(
            'id'		=> 'breadcrumb_hide_on_pages',
            //'parent' => 'testimonial_options',
            'title'		=> __('Hide breadcrumb on these pages','testimonial'),
            'details'	=> __('You can hide breadcrumb on these pages.','testimonial'),
            'type'		=> 'select',
            'multiple'		=> true,
            'value'		=> $breadcrumb_hide_on_pages,
            'default'		=> array(),

            'args'		=> array(
                'home'=>__('Homepage','testimonial'),
                'front_page'=>__('Front page','testimonial'),
                'blog_front_page'=>__('Posts page','testimonial'),


            ),
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_hide_on_page_by_id',
            //'parent' => 'testimonial_options',
            'title'		=> __('Hide on page by ID','testimonial'),
            'details'	=> __('Page ids, use comma separate. ex: 12,15','testimonial'),
            'type'		=> 'text',
            'value'		=> $breadcrumb_hide_on_page_by_id,
            'default'		=> '',
        );

        $settings_tabs_field->generate_field($args);

        $args = array(
            'id'		=> 'breadcrumb_url_hash',
            //'parent' => 'testimonial_options',
            'title'		=> __('Current URL hash','testimonial'),
            'details'	=> __('If you want to keep # on current url, otherwise keep empty','testimonial'),
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

    $breadcrumb_themes = get_option( 'breadcrumb_themes' );
    $breadcrumb_separator_color = get_option( 'breadcrumb_separator_color' );



    ?>
    <div class="section">
        <div class="section-title">Choose style</div>
        <p class="description section-description">Customize the breadcrumb.</p>

        <?php



        $args = array(
            'id'		=> 'breadcrumb_themes',
            //'parent' => 'testimonial_options',
            'title'		=> __('Breadcrumb Themes','testimonial'),
            'details'	=> __('Choose breadcrumb theme','testimonial'),
            'type'		=> 'radio_image',
            'value'		=> $breadcrumb_themes,
            'default'		=> 'theme1',
            'width'		=> '350px',
            'args'		=> array(

                'theme1'=>array('name'=>'theme1','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme1.png'),
                'theme2'=>array('name'=>'theme1','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme2.png'),

                'theme3'=>array('name'=>'theme1','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme3.png'),
                'theme4'=>array('name'=>'theme1','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme4.png'),

                'theme5'=>array('name'=>'theme5','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme5.png'),
                'theme6'=>array('name'=>'theme6','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme6.png'),

                'theme7'=>array('name'=>'theme7','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme7.png'),
                'theme8'=>array('name'=>'theme8','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme8.png'),
                'theme9'=>array('name'=>'theme9','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme9.png'),
                'theme10'=>array('name'=>'theme10','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme10.png'),
                'theme11'=>array('name'=>'theme11','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme11.png'),
                'theme12'=>array('name'=>'theme12','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme12.png'),
                'theme13'=>array('name'=>'theme13','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme13.png'),
                'theme14'=>array('name'=>'theme14','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme14.png'),
                'theme15'=>array('name'=>'theme15','thumb'=>breadcrumb_plugin_url.'assets/admin/images/theme15.png'),




            ),
        );

        $settings_tabs_field->generate_field($args);



        $args = array(
            'id'		=> 'breadcrumb_padding',
            //'parent' => 'testimonial_options',
            'title'		=> __('Breadcrumb container padding','testimonial'),
            'details'	=> __('Put custom padding size for breadcrumb container.','testimonial'),
            'type'		=> 'text',
            'placeholder'		=> '10px',
            'value'		=> $breadcrumb_padding,
            'default'		=> '10px',
        );

        $settings_tabs_field->generate_field($args);



        $args = array(
            'id'		=> 'breadcrumb_margin',
            //'parent' => 'testimonial_options',
            'title'		=> __('Breadcrumb container margin','testimonial'),
            'details'	=> __('Put custom margin size for breadcrumb container.','testimonial'),
            'type'		=> 'text',
            'placeholder'		=> '10px',
            'value'		=> $breadcrumb_margin,
            'default'		=> '10px',
        );

        $settings_tabs_field->generate_field($args);

        $args = array(
            'id'		=> 'breadcrumb_bg_color',
            //'parent' => 'testimonial_options',
            'title'		=> __('Breadcrumb background Color','testimonial'),
            'details'	=> __('Choose custom background color','testimonial'),
            'type'		=> 'colorpicker',
            'value'		=> $breadcrumb_bg_color,
            'default'		=> '#727272',
        );

        $settings_tabs_field->generate_field($args);

        $args = array(
            'id'		=> 'breadcrumb_link_color',
            //'parent' => 'testimonial_options',
            'title'		=> __('Breadcrumb link color','testimonial'),
            'details'	=> __('Choose custom link color','testimonial'),
            'type'		=> 'colorpicker',
            'value'		=> $breadcrumb_link_color,
            'default'		=> '#727272',
        );

        $settings_tabs_field->generate_field($args);


        $args = array(
            'id'		=> 'breadcrumb_separator_color',
            //'parent' => 'testimonial_options',
            'title'		=> __('Breadcrumb separator color','testimonial'),
            'details'	=> __('Choose custom separator color','testimonial'),
            'type'		=> 'colorpicker',
            'value'		=> $breadcrumb_separator_color,
            'default'		=> '#727272',
        );

        $settings_tabs_field->generate_field($args);

        ?>


    </div>
    <?php

}



add_action('breadcrumb_settings_tabs_content_shortcodes','breadcrumb_settings_tabs_content_shortcodes');

function breadcrumb_settings_tabs_content_shortcodes(){

    $settings_tabs_field = new settings_tabs_field();


    ?>
    <div class="section">
        <div class="section-title">Shortcodes</div>
        <p class="description section-description">Simply copy these shortcode and user under post or page content</p>


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
            'id' => 'testimonial_shortcodes',
            'title' => __('Get shortcode', 'testimonial'),
            'details' => '',
            'type' => 'custom_html',
            'html' => $html,
        );
        $settings_tabs_field->generate_field($args);
















        ?>
    </div>
    <?php

}




add_action('breadcrumb_settings_tabs_content_custom_css','breadcrumb_settings_tabs_content_custom_css');

function breadcrumb_settings_tabs_content_custom_css(){

    $settings_tabs_field = new settings_tabs_field();

    $breadcrumb_custom_css = get_option( 'breadcrumb_custom_css' );


    ?>
    <div class="section">
        <div class="section-title">Custom CSS</div>
        <p class="description section-description">Add your own scripts and style css.</p>

        <?php

        $args = array(
            'id'		=> 'breadcrumb_custom_css',
            //'parent' => 'testimonial_options',
            'title'		=> __('Custom CSS','testimonial'),
            'details'	=> __('Add your own CSS.','testimonial'),
            'type'		=> 'scripts_css',
            'value'		=> $breadcrumb_custom_css,
            'default'		=> '.testimonial-container #testimonial-133{}&#10; ',
        );

        $settings_tabs_field->generate_field($args);









        ?>


    </div>
    <?php

}




