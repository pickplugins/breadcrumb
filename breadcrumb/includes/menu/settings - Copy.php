<?php	


if ( ! defined('ABSPATH')) exit; // if direct access 



	if(empty($_POST['breadcrumb_hidden']))
		{
	
			$breadcrumb_text = get_option( 'breadcrumb_text' );
			$breadcrumb_separator = get_option( 'breadcrumb_separator' );
			$breadcrumb_display_last_separator = get_option( 'breadcrumb_display_last_separator' );			
			
			
			$breadcrumb_font_size = get_option( 'breadcrumb_font_size' );
			$breadcrumb_link_color = get_option( 'breadcrumb_link_color' );						
			$breadcrumb_separator_color = get_option( 'breadcrumb_separator_color' );
			$breadcrumb_bg_color = get_option( 'breadcrumb_bg_color' );							
			$breadcrumb_themes = get_option( 'breadcrumb_themes' );
			$breadcrumb_margin = get_option( 'breadcrumb_margin' );			
			$breadcrumb_padding = get_option( 'breadcrumb_padding' );			
			
			
			$breadcrumb_word_char = get_option( 'breadcrumb_word_char' );				
			$breadcrumb_word_char_count = get_option( 'breadcrumb_word_char_count' );			
			$breadcrumb_word_char_end = get_option( 'breadcrumb_word_char_end' );					
			
			$breadcrumb_display_home = get_option( 'breadcrumb_display_home' );
			$breadcrumb_home_text = get_option( 'breadcrumb_home_text' );			
			
			
			$breadcrumb_hide_on_pages = get_option( 'breadcrumb_hide_on_pages' );
			$breadcrumb_hide_on_page_by_id = get_option( 'breadcrumb_hide_on_page_by_id' );							
							
			$breadcrumb_url_hash = get_option( 'breadcrumb_url_hash' );								
			$breadcrumb_custom_css = get_option( 'breadcrumb_custom_css' );								
							
			
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
				<div class="updated"><p><strong><?php echo __('Changes Saved.', breadcrumb_textdomain ); ?></strong></p></div>
		
				<?php
				} 
		}
?>





<div class="wrap">

	<div id="icon-tools" class="icon32"><br></div><?php echo "<h2>".sprintf(__('%s Settings'), breadcrumb_plugin_name )."</h2>";?>
		<form  method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="breadcrumb_hidden" value="Y">
        <?php settings_fields( 'breadcrumb_plugin_options' );
				do_settings_sections( 'breadcrumb_plugin_options' );

		?>

    <div class="para-settings up-paratheme-settings">
    
        <ul class="tab-nav">
            <li nav="1" class="nav1 active"><?php echo __('Options', breadcrumb_textdomain); ?></li>
            <li nav="2" class="nav2"><?php echo __('Style', breadcrumb_textdomain); ?></li>           
            <li nav="3" class="nav3"><?php echo __('Short-Codes', breadcrumb_textdomain); ?></li>
            <li nav="4" class="nav4"><?php echo __('Help & Upgrade', breadcrumb_textdomain); ?></li>
            <li nav="5" class="nav4"><?php echo __('Custom CSS', breadcrumb_textdomain); ?></li>            
        </ul> <!-- tab-nav end -->   
    
		<ul class="box">
            <li style="display: block;" class="box1 tab-box active">
            
				<div class="option-box">
                    <p class="option-title"><?php echo __('Breadcrumb front Text', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('Keep empty to hide.', breadcrumb_textdomain); ?></p>
                    <input type="text" name="breadcrumb_text" placeholder="<?php echo __('You are here:', breadcrumb_textdomain); ?>" value="<?php if(!empty($breadcrumb_text)) echo $breadcrumb_text; ?>" />
                </div>
                
                 
				 
                
				<div class="option-box">
                    <p class="option-title"><?php echo __('Breadcrumb Separator', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('Link Separator, ex: &raquo;', breadcrumb_textdomain); ?></p>
                    <input type="text" placeholder="»" name="breadcrumb_separator" value="<?php if(!empty($breadcrumb_separator)) echo $breadcrumb_separator; ?>" />
                    
                    
                    <p class="option-info"><?php echo __('Display Last Separator', breadcrumb_textdomain); ?></p>
                    <select name="breadcrumb_display_last_separator">
                    	<option value="yes" <?php if($breadcrumb_display_last_separator == 'yes') echo 'selected'; ?> ><?php echo __('Yes', breadcrumb_textdomain); ?></option>
                    	<option value="no" <?php if($breadcrumb_display_last_separator == 'no') echo 'selected'; ?> ><?php echo __('No', breadcrumb_textdomain); ?></option>                        

                    </select>   

                    <p class="option-info"><?php echo __('Breadcrumb Separator Font Color', breadcrumb_textdomain); ?></p>
                    <input placeholder="#686868" class="breadcrumb_color" type="text" name="breadcrumb_separator_color" value="<?php if(!empty($breadcrumb_separator_color)) echo $breadcrumb_separator_color; ?>" />
                    
                    
                    
                </div>                 

				<div class="option-box">
                    <p class="option-title"><?php echo __('Breadcrumb font size', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('Ex: 14px', breadcrumb_textdomain); ?></p>
                    <input type="text" placeholder="14px" name="breadcrumb_font_size" value="<?php if(!empty($breadcrumb_font_size)) echo $breadcrumb_font_size; ?>" />

                    <p class="option-info"><?php echo __('Breadcrumb font color', breadcrumb_textdomain); ?></p>
                    <input placeholder="#686868" class="breadcrumb_color" type="text" name="breadcrumb_link_color" value="<?php if(!empty($breadcrumb_link_color)) echo $breadcrumb_link_color; ?>" />
                    
                    
                </div>  


				<div class="option-box">
                    <p class="option-title"><?php echo __('Breadcrumb Title max word/Character count', breadcrumb_textdomain); ?></p>
                    <p class="option-info"></p>
                    
                    
                    <select name="breadcrumb_word_char">
                    	<option value="word" <?php if($breadcrumb_word_char == 'word') echo 'selected'; ?> ><?php echo __('Word', breadcrumb_textdomain); ?></option>
                    	<option value="character" <?php if($breadcrumb_word_char == 'character') echo 'selected'; ?> ><?php echo __('Character', breadcrumb_textdomain); ?></option>                        
                        
                        
                    </select>
                    
                    
                    <input placeholder="4" class="breadcrumb_word_char_count" type="text" name="breadcrumb_word_char_count" value="<?php if(!empty($breadcrumb_word_char_count)) echo $breadcrumb_word_char_count; ?>" />
                    <p class="option-info"><?php echo __('Ending Character', breadcrumb_textdomain); ?></p>
                    <input placeholder="..." class="breadcrumb_word_char_end" type="text" name="breadcrumb_word_char_end" value="<?php if(!empty($breadcrumb_word_char_end)) echo $breadcrumb_word_char_end; ?>" />                    
                    
                </div> 




				<div class="option-box">
                    <p class="option-title"><?php echo __('Display/hide "Home" on breadcrumb', breadcrumb_textdomain); ?></p>
                    <p class="option-info"></p>
                    
                    
                    <select name="breadcrumb_display_home">
                    	<option value="yes" <?php if($breadcrumb_display_home == 'yes') echo 'selected'; ?> ><?php echo __('Yes', breadcrumb_textdomain); ?></option>
                    	<option value="no" <?php if($breadcrumb_display_home == 'no') echo 'selected'; ?> ><?php echo __('No', breadcrumb_textdomain); ?></option>                        
                        
                        
                    </select>
                    
                    
                    <p class="option-info"><?php echo __('Custom text for Home', breadcrumb_textdomain); ?></p>
                    <input placeholder="Home" class="breadcrumb_home_text" type="text" name="breadcrumb_home_text" value="<?php if(!empty($breadcrumb_home_text)) echo $breadcrumb_home_text; ?>" />                      
                    
                    
                    
                    
                    
                    
                    
                </div>
                
				<div class="option-box">
                <p class="option-title"><?php echo __('Hide breadcrumb on these pages', breadcrumb_textdomain); ?></p>
                <p class="option-info"></p>

                <label><input type="checkbox" name="breadcrumb_hide_on_pages[home]" value="home"
                <?php
                if(!empty($breadcrumb_hide_on_pages['home'])){
					
					echo'checked';
					}
				
				?>
                
                 />Home</label><br/>

                <label><input type="checkbox" name="breadcrumb_hide_on_pages[front_page]" value="single"
                <?php
                if(!empty($breadcrumb_hide_on_pages['front_page'])){
					
					echo'checked';
					}
				
				?>
                 />Front Page</label><br/>                  
                 
                <label><input type="checkbox" name="breadcrumb_hide_on_pages[blog_front_page]" value="single"
                <?php
                if(!empty($breadcrumb_hide_on_pages['blog_front_page'])){
					
					echo'checked';
					}
				
				?>
                 />Blog Front Page</label><br/>                  
                               
                </div>                
				            
            
				<div class="option-box">
                    <p class="option-title"><?php echo __('Hide on page by ID', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('Page id, comma separate', breadcrumb_textdomain); ?></p>
                    <input type="text" placeholder="<?php echo __('12,15', breadcrumb_textdomain); ?>" name="breadcrumb_hide_on_page_by_id" value="<?php if(!empty($breadcrumb_hide_on_page_by_id)) echo $breadcrumb_hide_on_page_by_id; ?>" />
                </div>          
                   
                   
				<div class="option-box">
                    <p class="option-title"><?php echo __('Current URL hash', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('If you want to keep # on current url, otherwise keep empty', breadcrumb_textdomain); ?></p>
                    <input type="text" placeholder="#" name="breadcrumb_url_hash" value="<?php if(!empty($breadcrumb_url_hash)) echo $breadcrumb_url_hash; ?>" />
                </div>                    
                   
                    
            
            </li>
            
            <li style="display: none;" class="box2 tab-box"> 
            
            
            
				<div class="option-box">
                    <p class="option-title"><?php echo __('Breadcrumb container padding', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('you can use as follows<br> 10px<br> 10px 10px (top-bottom, left-right)<br>', breadcrumb_textdomain); ?>
                    
                    
                    
                    </p>
                    <input type="text" placeholder="10px" name="breadcrumb_padding" value="<?php if(!empty($breadcrumb_padding)) echo $breadcrumb_padding; ?>" />
                </div>              
            
            
				<div class="option-box">
                    <p class="option-title"><?php echo __('Breadcrumb container margin', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('you can use as follows <br> 10px <br> 10px 10px (top-bottom, left-right)<br>', breadcrumb_textdomain); ?>
                    </p>
                    <input type="text" placeholder="10px" name="breadcrumb_margin" value="<?php if(!empty($breadcrumb_margin)) echo $breadcrumb_margin; ?>" />
                </div>             
            
            
            
				<div class="option-box">
                    <p class="option-title"><?php echo __('Breadcrumb Themes', breadcrumb_textdomain); ?></p>
                    <p class="option-info"></p>
                    
                    <select name="breadcrumb_themes">
                    	<option value="theme1" <?php if($breadcrumb_themes == 'theme1') echo 'selected'; ?> ><?php echo __('Themes 1', breadcrumb_textdomain); ?></option>
                    	<option value="theme2" <?php if($breadcrumb_themes == 'theme2') echo 'selected'; ?> ><?php echo __('Themes 2', breadcrumb_textdomain); ?></option>
                    	<option value="theme3" <?php if($breadcrumb_themes == 'theme3') echo 'selected'; ?> ><?php echo __('Themes 3', breadcrumb_textdomain); ?></option>
                    	<option value="theme4" <?php if($breadcrumb_themes == 'theme4') echo 'selected'; ?> ><?php echo __('Themes 4', breadcrumb_textdomain); ?></option>               
                    	<option value="theme5" <?php if($breadcrumb_themes == 'theme5') echo 'selected'; ?> ><?php echo __('Themes 5', breadcrumb_textdomain); ?></option>               
                    	<option value="theme6" <?php if($breadcrumb_themes == 'theme6') echo 'selected'; ?> ><?php echo __('Themes 6', breadcrumb_textdomain); ?></option>              
                    	<option value="theme7" <?php if($breadcrumb_themes == 'theme7') echo 'selected'; ?> ><?php echo __('Themes 7', breadcrumb_textdomain); ?></option>   
                    	<option value="theme8" <?php if($breadcrumb_themes == 'theme8') echo 'selected'; ?> ><?php echo __('Themes 8', breadcrumb_textdomain); ?></option>
                    	<option value="theme9" <?php if($breadcrumb_themes == 'theme9') echo 'selected'; ?> ><?php echo __('Themes 9', breadcrumb_textdomain); ?></option>   
                    	<option value="theme10" <?php if($breadcrumb_themes == 'theme10') echo 'selected'; ?> ><?php echo __('Themes 10', breadcrumb_textdomain); ?></option>
                    	<option value="theme11" <?php if($breadcrumb_themes == 'theme11') echo 'selected'; ?> ><?php echo __('Themes 11', breadcrumb_textdomain); ?></option>
                    	<option value="theme12" <?php if($breadcrumb_themes == 'theme12') echo 'selected'; ?> ><?php echo __('Themes 12', breadcrumb_textdomain); ?></option>
                    	<option value="theme13" <?php if($breadcrumb_themes == 'theme13') echo 'selected'; ?> ><?php echo __('Themes 13', breadcrumb_textdomain); ?></option>
                    	<option value="theme14" <?php if($breadcrumb_themes == 'theme14') echo 'selected'; ?> ><?php echo __('Themes 14', breadcrumb_textdomain); ?></option>
                    	<option value="theme15" <?php if($breadcrumb_themes == 'theme15') echo 'selected'; ?> ><?php echo __('Themes 15', breadcrumb_textdomain); ?></option>                             
                          
                    </select>
                    
                </div> 
     
 				<div class="option-box">
                    <p class="option-title"><?php echo __('Breadcrumb Background Color', breadcrumb_textdomain); ?></p>
                    <p class="option-info"></p>
                    <input placeholder="#686868" class="breadcrumb_color" type="text" name="breadcrumb_bg_color" value="<?php if(!empty($breadcrumb_bg_color)) echo $breadcrumb_bg_color; ?>" />
                </div>                         
                        
                        
                        
                        
                        
                            
               
                
                       
            </li>        
            <li style="display: none;" class="box3 tab-box">
				
				<div class="option-box">
                    <p class="option-title"><?php echo __('Short-code for php file', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('Short-code inside .php files for themes.', breadcrumb_textdomain); ?></p>
                    
                    <pre>&#60;?php<br />echo do_shortcode( '&#91;breadcrumb&#93;' ); <br />?&#62;</pre>
                    

                </div>
				
				<div class="option-box">
                    <p class="option-title"><?php echo __('Short-code for content', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('Short-code inside content anywhere inside content.', breadcrumb_textdomain); ?></p>		
                    <pre>[breadcrumb]</pre>
                    <pre></pre>

                </div>
                
            </li>
            
            
			<li style="display: none;" class="box4 tab-box">
				
				<div class="option-box">
                    <p class="option-title"><?php echo __('Need Help ?', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo sprintf(__('Feel free to Contact with any issue for this plugin, Ask any question via forum <a href="%s">%s</a> <strong style="color:#139b50;">(free)</strong>', breadcrumb_textdomain), breadcrumb_qa_url, breadcrumb_qa_url); ?> <br />

                    </p>
                    

                </div>

           
           
				<div class="option-box">
                    <p class="option-title"><?php echo __('Upgrade', breadcrumb_textdomain); ?></p>
                    <p class="option-info">
					<?php
                
					$breadcrumb_customer_type = get_option('breadcrumb_customer_type');
					$breadcrumb_version = get_option('breadcrumb_version');
				
				
				
                    if($breadcrumb_customer_type=="free")
                        {
                    
                            echo 'You are using <strong> '.$breadcrumb_customer_type.' version  '.$breadcrumb_version.'</strong> of <strong>'.breadcrumb_plugin_name.'</strong>, To get more feature you could try our premium version. ';
                            
                            echo '<br /><a href="'.breadcrumb_pro_url.'">'.breadcrumb_pro_url.'</a>';
                            
                        }
                    else
                        {
                    
                            echo 'Thanks for using <strong> premium version  '.$breadcrumb_version.'</strong> of <strong>'.breadcrumb_plugin_name.'</strong> version '.breadcrumb_plugin_version;	
                            
                            
                        }
                    
                     ?>       

                    
                    </p>

                </div>
           
           
           
           
           
           
				<div class="option-box">
                    <p class="option-title"><?php echo __('Submit Reviews...', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('We are working hard to build some awesome plugins for you and spend thousand hour for plugins. we wish your three(3) minute by submitting five star reviews at wordpress.org. if you have any issue please submit at forum.', breadcrumb_textdomain); ?></p>
                	<img src="<?php echo breadcrumb_plugin_url."assets/admin/images/five-star.png";?>" /><br />
                    <a target="_blank" href="<?php echo breadcrumb_wp_reviews; ?>">
                		<?php echo breadcrumb_wp_reviews; ?>
               		</a>
                    
                    
                    
                </div>
           
				<div class="option-box">
                    <p class="option-title"><?php echo __('Please Share', breadcrumb_textdomain); ?></p>
                    <p class="option-info"><?php echo __('If you like this plugin please share with your social share network.', breadcrumb_textdomain); ?></p>
                    <?php
                    
						echo breadcrumb_share_plugin();
					?>
                </div>
           
           
           
           	</li>
            
			<li style="display: none;" class="box5 tab-box">	
				<div class="option-box">
                    <p class="option-title"><?php echo __('Custom CSS', breadcrumb_textdomain); ?></p>
                    
                    <?php
                    
					$empty_css_sample = '';
					
					?>
                    
                    
                    <textarea style="min-height:150px; width:80%" name="breadcrumb_custom_css" ><?php if(!empty($breadcrumb_custom_css)) echo htmlentities($breadcrumb_custom_css); else echo str_replace('\n', PHP_EOL, $empty_css_sample); ?></textarea>
                </div>
                    
          	</li>            
            
        </ul>
    
    
		
    </div>






<p class="submit">
                    <input class="button button-primary" type="submit" name="Submit" value="<?php echo __('Save Changes', breadcrumb_textdomain ) ?>" />
                </p>
		</form>


</div> <!-- end wrap -->
