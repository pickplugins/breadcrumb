<?php	


if ( ! defined('ABSPATH')) exit; // if direct access 






if(empty($_POST['breadcrumb_hidden']))
{


}
else
{
    if($_POST['breadcrumb_hidden'] == 'Y') {
        //Form data sent

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







        if(!empty($_POST['breadcrumb_hide_on_pages'])){
            $breadcrumb_hide_on_pages = stripslashes_deep($_POST['breadcrumb_hide_on_pages']);
        }
        else{
            $breadcrumb_hide_on_pages = array();
        }

        update_option('breadcrumb_hide_on_pages', $breadcrumb_hide_on_pages);

        $breadcrumb_hide_on_page_by_id = stripslashes_deep($_POST['breadcrumb_hide_on_page_by_id']);
        update_option('breadcrumb_hide_on_page_by_id', $breadcrumb_hide_on_page_by_id);



        $breadcrumb_url_hash = sanitize_text_field($_POST['breadcrumb_url_hash']);
        update_option('breadcrumb_url_hash', $breadcrumb_url_hash);


        $breadcrumb_custom_css = stripslashes_deep($_POST['breadcrumb_custom_css']);
        update_option('breadcrumb_custom_css', $breadcrumb_custom_css);


        ?>
        <div class="updated"><p><strong><?php echo __('Changes Saved.', 'breadcrumb' ); ?></strong></p></div>

        <?php
    }
}






$current_tab = isset($_POST['tab']) ? $_POST['tab'] : 'options';




$breadcrumb_settings_tab = array();


$breadcrumb_settings_tab[] = array(
    'id' => 'options',
    'title' => sprintf(__('%s Options','related-post'),'<i class="fas fa-laptop-code"></i>'),
    'priority' => 1,
    'active' => ($current_tab == 'options') ? true : false,
);

$breadcrumb_settings_tab[] = array(
    'id' => 'style',
    'title' => sprintf(__('%s Style','related-post'),'<i class="fas fa-palette"></i>'),
    'priority' => 2,
    'active' => ($current_tab == 'style') ? true : false,
);

$breadcrumb_settings_tab[] = array(
    'id' => 'custom_scripts',
    'title' => sprintf(__('%s Custom Scripts','related-post'),'<i class="fas fa-code"></i>'),
    'priority' => 4,
    'active' => ($current_tab == 'custom_scripts') ? true : false,
);

$breadcrumb_settings_tab[] = array(
    'id' => 'help_support',
    'title' => sprintf(__('%s Help & Support','related-post'),'<i class="fas fa-hands-helping"></i>'),
    'priority' => 5,
    'active' => ($current_tab == 'help_support') ? true : false,
);



$breadcrumb_settings_tab[] = array(
    'id' => 'buy_pro',
    'title' => sprintf(__('%s Buy Pro','related-post'),'<i class="fas fa-store"></i>'),
    'priority' => 8,
    'active' => ($current_tab == 'buy_pro') ? true : false,
);


$breadcrumb_settings_tabs = apply_filters('breadcrumb_settings_tabs', $breadcrumb_settings_tab);


$tabs_sorted = array();
foreach ($breadcrumb_settings_tabs as $page_key => $tab) $tabs_sorted[$page_key] = isset( $tab['priority'] ) ? $tab['priority'] : 0;
array_multisort($tabs_sorted, SORT_ASC, $breadcrumb_settings_tabs);


wp_enqueue_script('jquery');
wp_enqueue_script('jquery-ui-sortable');
wp_enqueue_script( 'jquery-ui-core' );
wp_enqueue_script('jquery-ui-accordion');
wp_enqueue_style( 'wp-color-picker' );
wp_enqueue_script('wp-color-picker');
wp_enqueue_style('font-awesome-5');
wp_enqueue_style('settings-tabs');
wp_enqueue_script('settings-tabs');



?>





<div class="wrap">

	<div id="icon-tools" class="icon32"><br></div><?php echo "<h2>".sprintf(__('%s Settings'), breadcrumb_plugin_name )."</h2>";?>
		<form  method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	    <input type="hidden" name="breadcrumb_hidden" value="Y">
            <input type="hidden" name="tab" value="<?php echo $current_tab; ?>">



            <div class="settings-tabs vertical has-right-panel">
                <ul class="tab-navs">
                    <?php
                    foreach ($breadcrumb_settings_tabs as $tab){
                        $id = $tab['id'];
                        $title = $tab['title'];
                        $active = $tab['active'];
                        $data_visible = isset($tab['data_visible']) ? $tab['data_visible'] : '';
                        $hidden = isset($tab['hidden']) ? $tab['hidden'] : false;
                        ?>
                        <li <?php if(!empty($data_visible)):  ?> data_visible="<?php echo $data_visible; ?>" <?php endif; ?> class="tab-nav <?php if($hidden) echo 'hidden';?> <?php if($active) echo 'active';?>" data-id="<?php echo $id; ?>"><?php echo $title; ?></li>
                        <?php
                    }
                    ?>
                </ul>

                <div class="settings-tabs-right-panel">
                    <?php
                    foreach ($breadcrumb_settings_tabs as $tab) {
                        $id = $tab['id'];
                        $active = $tab['active'];

                        ?>
                        <div class="right-panel-content <?php if($active) echo 'active';?> right-panel-content-<?php echo $id; ?>">
                            <?php

                            do_action('breadcrumb_settings_tabs_right_panel_'.$id);
                            ?>

                        </div>
                        <?php

                    }
                    ?>
                </div>

                <?php
                foreach ($breadcrumb_settings_tabs as $tab){
                    $id = $tab['id'];
                    $title = $tab['title'];
                    $active = $tab['active'];


                    ?>

                    <div class="tab-content <?php if($active) echo 'active';?>" id="<?php echo $id; ?>">
                        <?php
                        do_action('breadcrumb_settings_tabs_content_'.$id, $tab);
                        ?>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="clear clearfix"></div>





            <p class="submit">
                <input class="button button-primary" type="submit" name="Submit" value="<?php echo __('Save Changes', 'breadcrumb' ) ?>" />
            </p>
		</form>


</div> <!-- end wrap -->
