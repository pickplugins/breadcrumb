<?php
if ( ! defined('ABSPATH')) exit;  // if direct access

//add_filter('breadcrumb_items_array', 'breadcrumb_items_override_permalinks');

function breadcrumb_items_override_permalinks($breadcrumb_items){

    $breadcrumb_options = get_option('breadcrumb_options');
    $permalinks = isset($breadcrumb_options['permalinks']) ? $breadcrumb_options['permalinks'] : array();



    if(is_singular('post')){

        $post_id = get_the_id();
        $breadcrumb_items = array();
        $post_permalinks = isset($permalinks['post']) ? $permalinks['post'] : array();


        if(!empty($post_permalinks))
        foreach ($post_permalinks as $permalinkIndex => $permalink):
            $breadcrumb_items_new[] = apply_filters('breadcrumb_permalink_'.$permalinkIndex, $breadcrumb_items);

        endforeach;
    }

    //echo '<pre>'.var_export($permalinks['post'], true).'</pre>';

    return $breadcrumb_items_new;

}


add_filter('breadcrumb_permalink_front_text', 'breadcrumb_permalink_front_text');

function breadcrumb_permalink_front_text($breadcrumb_items){

    $breadcrumb_text = get_option('breadcrumb_text', __('You are here','breadcrumb'));
    return array(
        'link'=> '#',
        'title' => $breadcrumb_text,
    );

}


add_filter('breadcrumb_permalink_home', 'breadcrumb_permalink_home');

function breadcrumb_permalink_home($breadcrumb_items){

    $breadcrumb_home_text = get_option('breadcrumb_home_text', __('Home','breadcrumb'));
    $home_url = get_bloginfo('url');

    return array(
        'link'=> $home_url,
        'title' => $breadcrumb_home_text,
    );

}


add_filter('breadcrumb_permalink_post_title', 'breadcrumb_permalink_post_title');

function breadcrumb_permalink_post_title($breadcrumb_items){
    $post_id = get_the_id();

    return array(
        'link'=> get_permalink($post_id),
        'title' => get_the_title($post_id),
    );

}


add_filter('breadcrumb_permalink_post_author', 'breadcrumb_permalink_post_author');

function breadcrumb_permalink_post_author($breadcrumb_items){

    $post_id = get_the_id();
    return array(
        'link'=> get_permalink($post_id),
        'title' => get_the_title($post_id),
    );

}


add_filter('breadcrumb_permalink_post_category', 'breadcrumb_permalink_post_category');

function breadcrumb_permalink_post_category($breadcrumb_items){
    $category_string = get_query_var('category_name');
    $category_arr = array();
    $taxonomy = 'category';
    $array_list = array();

    //echo '<pre>'.var_export($category_string, true).'</pre>';

    if(strpos( $category_string, '/' )){

        $category_arr = explode('/', $category_string);
        $category_count = count($category_arr);
        $last_cat = $category_arr[($category_count-1)];
        $breadcrumb_items_new = array();
        $term_data = get_term_by('slug',$last_cat, $taxonomy);

        $term_id = $term_data->term_id;
        $term_name = $term_data->name;
        $term_link = get_term_link( $term_id , $taxonomy);

        $breadcrumb_items_new[] = array(
            'link'=> $term_link,
            'title' => $term_name,
        );


        $parents_id  = get_ancestors( $term_id, $taxonomy );

        $parents_id = array_reverse($parents_id);


        //echo '<pre>'.var_export($parents_id, true).'</pre>';

        foreach($parents_id as $id){

            $parent_term_link = get_term_link( $id , $taxonomy);
            $paren_term_name = get_term_by('id', $id, $taxonomy);

            $breadcrumb_items_new[] = array(
                'link'=> $parent_term_link,
                'title' => $paren_term_name->name,
            );
        }

        //echo '<pre>'.var_export($breadcrumb_items, true).'</pre>';


        //$breadcrumb_items = $breadcrumb_items_new;

    }else{

        $term_data = get_term_by('slug',$category_string, $taxonomy);

        $term_id = isset($term_data->term_id) ? $term_data->term_id : '';
        $term_name = isset($term_data->name) ? $term_data->name : '';

        if(!empty($term_id)):
            $term_link = get_term_link( $term_id , $taxonomy);

            $breadcrumb_items_new = array(
                'link'=> $term_link,
                'title' => $term_name,
            );
        endif;

        $breadcrumb_items = array_merge($breadcrumb_items, $breadcrumb_items_new);


    }




    return $breadcrumb_items;

}


add_filter('breadcrumb_permalink_post_tag', 'breadcrumb_permalink_post_tag');

function breadcrumb_permalink_post_tag($breadcrumb_items){

    $post_id = get_the_id();
    return array(
        'link'=> get_permalink($post_id),
        'title' => get_the_title($post_id),
    );

}


add_filter('breadcrumb_permalink_post_date', 'breadcrumb_permalink_post_date');

function breadcrumb_permalink_post_date($breadcrumb_items){

    $post_id = get_the_id();
    return array(
        'link'=> get_permalink($post_id),
        'title' => get_the_title($post_id),
    );

}


add_filter('breadcrumb_permalink_post_month', 'breadcrumb_permalink_post_month');

function breadcrumb_permalink_post_month($breadcrumb_items){
    $post_id = get_the_id();

    return array(
        'link'=> get_permalink($post_id),
        'title' => get_the_title($post_id),
    );

}


add_filter('breadcrumb_permalink_post_year', 'breadcrumb_permalink_post_year');

function breadcrumb_permalink_post_year($breadcrumb_items){

    $post_id = get_the_id();
    return array(
        'link'=> get_permalink($post_id),
        'title' => get_the_title($post_id),
    );

}



add_filter('breadcrumb_permalink_post_id', 'breadcrumb_permalink_post_id');

function breadcrumb_permalink_post_id($breadcrumb_items){
    $post_id = get_the_id();

    return array(
        'link'=> get_permalink($post_id),
        'title' => get_the_title($post_id),
    );

}
