<?php



if ( ! defined('ABSPATH')) exit;  // if direct access 


	
	
	
	function breadcrumb_custom_css($breadcrumb_themes, $breadcrumb_bg_color)
				{
					
					$html = '';
					
					if($breadcrumb_themes == 'theme1')
						{
						
							$html .= '
							
							
.breadcrumb-container.theme1 li {
	margin: 0;
	padding: 0;
}							
							
.breadcrumb-container.theme1 a {
	background: '.$breadcrumb_bg_color.';
	display: inline-block;
	margin: 0 5px;
	padding: 5px 10px;
	text-decoration: none;
}

';
						
						}
					elseif($breadcrumb_themes == 'theme2')
						{
							$html .= '
/* Theme 2*/

.breadcrumb-container.theme2 li {
	margin: 0;
	padding: 0;
}


.breadcrumb-container.theme2 a {
  background: '.$breadcrumb_bg_color.';
  border-bottom: 1px solid rgb(139, 139, 139);
  border-top: 1px solid rgba(255, 255, 255, 0);
  display: inline-block;
  margin: 0 5px;
  padding: 5px 10px;
  text-decoration: none;
}


';
						
						}
					
					elseif($breadcrumb_themes == 'theme3')
						{
							$html .= '
/* Theme 3*/

.breadcrumb-container.theme3 li {
	margin: 0;
	padding: 0;
}


.breadcrumb-container.theme3 a {
  background: '.$breadcrumb_bg_color.';
  border-top: 1px solid rgb(139, 139, 139);
  border-bottom: 1px solid rgba(355, 355, 355, 0);
  display: inline-block;
  margin: 0 5px;
  padding: 5px 10px;
  text-decoration: none;
}

';
						
						}					
					
					elseif($breadcrumb_themes == 'theme4')
						{
							$html .= '

/* Theme theme4*/

.breadcrumb-container.theme4 li {
  display: inline-block;
  margin: 0 14px;
  padding: 0;
}

.breadcrumb-container.theme4 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}


.breadcrumb-container.theme4 a::after {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) '.$breadcrumb_bg_color.';
  border-image: none;
  border-style: solid;
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  line-height: 0;
  position: absolute;
  right: -26px;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme4 .separator {
  display: none;
}

';
						
						}					
					elseif($breadcrumb_themes == 'theme5')
						{
							$html .= '

/* Theme theme5*/

.breadcrumb-container.theme5 li {
  display: inline-block;
  margin: 0 14px;
  padding: 0;
}

.breadcrumb-container.theme5 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}

.breadcrumb-container.theme5 a::before {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: '.$breadcrumb_bg_color.' '.$breadcrumb_bg_color.' '.$breadcrumb_bg_color.' rgba(0, 0, 0, 0);
  border-image: none;
  border-style: solid;
  border-width: 13px;
  content: " ";
  display: block;
  height: 0;
  left: -18px;
  position: absolute;
  top: 0;
  width: 0;
}
.breadcrumb-container.theme5 a::after {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) '.$breadcrumb_bg_color.';
  border-image: none;
  border-style: solid;
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  line-height: 0;
  position: absolute;
  right: -26px;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme5 .separator {
  display: none;
}

';
						
						}					
					
					
					elseif($breadcrumb_themes == 'theme6')
						{
							$html .= '

/* Theme theme6*/

.breadcrumb-container.theme6 li {
  display: inline-block;
  margin: 0 14px;
  padding: 0;
}

.breadcrumb-container.theme6 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}

.breadcrumb-container.theme6 a::before {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: '.$breadcrumb_bg_color.' '.$breadcrumb_bg_color.' '.$breadcrumb_bg_color.' rgba(0, 0, 0, 0);
  border-image: none;
  border-style: solid;
  border-width: 13px;
  content: " ";
  display: block;
  height: 0;
  left: -18px;
  position: absolute;
  top: 0;
  width: 0;
}


.breadcrumb-container.theme6 .separator {
  display: none;
}

';
						
						}					
					
					
					elseif($breadcrumb_themes == 'theme7')
						{
							$html .= '


/* Theme theme7*/

.breadcrumb-container.theme7 li {
  display: inline-block;
  margin: 0 14px;
  padding: 0;
}

.breadcrumb-container.theme7 a {
  background:'.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}


.breadcrumb-container.theme7 a::after {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-bottom-right-radius: 3em;
  border-color: '.$breadcrumb_bg_color.' '.$breadcrumb_bg_color.' '.$breadcrumb_bg_color.' rgba(0, 0, 0, 0);
  border-image: none;
  border-style: solid solid solid none;
  border-top-right-radius: 3em;
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  line-height: 0;
  position: absolute;
  right: -13px;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme7 .separator {
  display: none;
}

';
						
						}						
					
					elseif($breadcrumb_themes == 'theme8')
						{
							$html .= '

/* Theme theme8*/

.breadcrumb-container.theme8 li {
  display: inline-block;
  margin: 0 14px;
  padding: 0;
}

.breadcrumb-container.theme8 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}


.breadcrumb-container.theme8 a::before {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-bottom-left-radius: 3em;
  border-color: '.$breadcrumb_bg_color.' rgba(0, 0, 0, 0) '.$breadcrumb_bg_color.' '.$breadcrumb_bg_color.';
  border-image: none;
  border-style: solid none solid solid;
  border-top-left-radius: 3em;
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  left: -13px;
  line-height: 0;
  position: absolute;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme8 .separator {
  display: none;
}

';
						
						}						
					
					
					elseif($breadcrumb_themes == 'theme9')
						{
							$html .= '

/* Theme theme9*/

.breadcrumb-container.theme9 li {
  display: inline-block;
  margin: 0 15px;
  padding: 0;
}

.breadcrumb-container.theme9 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}


.breadcrumb-container.theme9 a::before {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-bottom-left-radius: 3em;
  border-color: '.$breadcrumb_bg_color.' rgba(0, 0, 0, 0) '.$breadcrumb_bg_color.' '.$breadcrumb_bg_color.';
  border-image: none;
  border-style: solid none solid solid;
  border-top-left-radius: 3em;
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  left: -13px;
  line-height: 0;
  position: absolute;
  top: 0;
  width: 0;
}



.breadcrumb-container.theme9 a::after {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-bottom-right-radius: 3em;
  border-color: '.$breadcrumb_bg_color.' '.$breadcrumb_bg_color.' '.$breadcrumb_bg_color.' rgba(0, 0, 0, 0);
  border-image: none;
  border-style: solid solid solid none;
  border-top-right-radius: 3em;
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  line-height: 0;
  position: absolute;
  right: -13px;
  top: 0;
  width: 0;
}









.breadcrumb-container.theme9 .separator {
  display: none;
}

';
						
						}					
					
					
					
					
					
					elseif($breadcrumb_themes == 'theme10')
						{
							$html .= '

/* Theme theme10*/

.breadcrumb-container.theme10 li {
  display: inline-block;
  margin: 0 17px;
  padding: 0;
}

.breadcrumb-container.theme10 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}


.breadcrumb-container.theme10 a::before {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
    border: 13px solid transparent;
    border-right: 13px solid '.$breadcrumb_bg_color.';
    border-bottom: 13px solid '.$breadcrumb_bg_color.';
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  left: -26px;
  line-height: 0;
  position: absolute;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme10 .separator {
  display: none;
}
';
						
						}		
						
									
					elseif($breadcrumb_themes == 'theme11')
						{
							$html .= '

/* Theme theme11*/

.breadcrumb-container.theme11 li {
  display: inline-block;
  margin: 0 17px;
  padding: 0;
}

.breadcrumb-container.theme11 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}


.breadcrumb-container.theme11 a::before {
    border: 13px solid transparent;
    border-right: 13px solid '.$breadcrumb_bg_color.';
    border-top: 13px solid '.$breadcrumb_bg_color.';
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  left: -26px;
  line-height: 0;
  position: absolute;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme11 .separator {
  display: none;
}
';
						
						}						
					
					elseif($breadcrumb_themes == 'theme12')
						{
							$html .= '

/* Theme theme12*/

.breadcrumb-container.theme12 li {
  display: inline-block;
  margin: 0 17px;
  padding: 0;
}

.breadcrumb-container.theme12 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}


.breadcrumb-container.theme12 a::before {
    border: 1.5em solid transparent;
    border-left: 1.5em solid '.$breadcrumb_bg_color.';
    border-top: 1.5em solid '.$breadcrumb_bg_color.';
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  right: -26px;
  line-height: 0;
  position: absolute;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme12 .separator {
  display: none;
}

';
						
						}					
					elseif($breadcrumb_themes == 'theme13')
						{
							$html .= '


/* Theme theme13*/

.breadcrumb-container.theme13 li {
  display: inline-block;
  margin: 0 17px;
  padding: 0;
}

.breadcrumb-container.theme13 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}


.breadcrumb-container.theme13 a::before {
    border: 1.5em solid transparent;
    border-left: 1.5em solid '.$breadcrumb_bg_color.';
    border-bottom: 1.5em solid '.$breadcrumb_bg_color.';
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  right: -26px;
  line-height: 0;
  position: absolute;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme13 .separator {
  display: none;
}

';
						
						}					
					
					
					elseif($breadcrumb_themes == 'theme14')
						{
							$html .= '

/* Theme theme14*/

.breadcrumb-container.theme14 li {
  display: inline-block;
  margin: 0 17px;
  padding: 0;
}

.breadcrumb-container.theme14 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}

.breadcrumb-container.theme14 a::before {
    border: 13px solid transparent;
    border-right: 13px solid '.$breadcrumb_bg_color.';
    border-top: 13px solid '.$breadcrumb_bg_color.';
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  left: -26px;
  line-height: 0;
  position: absolute;
  top: 0;
  width: 0;
}
.breadcrumb-container.theme14 a::after {
    border: 1.5em solid transparent;
    border-left: 1.5em solid '.$breadcrumb_bg_color.';
    border-bottom: 1.5em solid '.$breadcrumb_bg_color.';
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  right: -26px;
  line-height: 0;
  position: absolute;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme14 .separator {
  display: none;
}

';
						
						}						
					
					
					
					elseif($breadcrumb_themes == 'theme15')
						{
							$html .= '

/* Theme theme15*/

.breadcrumb-container.theme15 li {
  display: inline-block;
  margin: 0 17px;
  padding: 0;
}

.breadcrumb-container.theme15 a {
  background: '.$breadcrumb_bg_color.';
  color: rgb(102, 102, 102);
  display: inline-block;
  font-size: 14px;
  height: 16px;
  margin: 0;
  padding: 5px 10px;
  text-decoration: none;
  position:relative;
}
.breadcrumb-container.theme15 a::before {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
    border: 13px solid transparent;
    border-right: 13px solid '.$breadcrumb_bg_color.';
    border-bottom: 13px solid '.$breadcrumb_bg_color.';
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  left: -26px;
  line-height: 0;
  position: absolute;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme15 a::after {
    border: 1.5em solid transparent;
    border-left: 1.5em solid '.$breadcrumb_bg_color.';
    border-top: 1.5em solid '.$breadcrumb_bg_color.';
  border-width: 13px;
  content: " ";
  display: inline-block;
  height: 0;
  right: -26px;
  line-height: 0;
  position: absolute;
  top: 0;
  width: 0;
}

.breadcrumb-container.theme15 .separator {
  display: none;
}

';
						
						}					

					
					
					elseif($breadcrumb_themes == 'theme20')
						{
							$html .= '';
						
						}	
				
				
				
				
				
				
				
						
						return $html;
						
				
				
				}
	
	
	
	