<?php
/**
 * Porto 1.0 @package SP Page Builder
 * Template Name - Porto
 * @author Joomlabuff  http://www.joomlabuff.com
 * @copyright Copyright (c) 2016 joomlabuff
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
// no direct access
defined('_JEXEC') or die;
AddonParser::addAddon('sp_portocounternumbers','sp_portocounternumbers_addon'); 
function sp_portocounternumbers_addon($atts, $content){
	
	global $sppbportoclientsParam;	
	
	$app = JFactory::getApplication();
	$doc = JFactory::getDocument(); 
	$media_path = JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portocounternumbers/assets'; 
	
	$doc->addStylesheet( $media_path.'/css/animate.css');
	$doc->addScript(  $media_path.'/js/animate.js');
	 	
	extract(spAddonAtts(array(
		"number" =>'',		
		"counter_prefix" =>'',
		"counter_suffix" =>'',
		"duration" =>'',
		"counter_title" =>'',
		"counter_stitle" =>'',
		"counter_text_color"=>'',
		"icon" =>'',
		"alignment" =>'',
		"animation" =>'fadeInUp',
		"style" =>'style1',
		"class"=>'',
		"dynamicid" =>'',		 	
		), $atts));

		$sppbportoclientsParam['class'] = $class; 
		$output ='';
		$number = isset($number) ? $number : 0;
		$duration = isset($duration) ? $duration : 0;
		$counter_title = isset($counter_title) ? $counter_title : '';
		$counter_stitle = isset($counter_stitle) ? $counter_stitle : '';
		$alignment = isset($alignment) ? $alignment : '';
		$animation = isset($animation) ? $animation : '';
		
		$counter_prefix = isset($counter_prefix) ? $counter_prefix : '';
		$counter_suffix = isset($counter_suffix) ? $counter_suffix : '';
		$counter_text_color = isset($counter_text_color) ? $counter_text_color :' ';
		$class = isset($class) ? $class : '';
		
		if($style =='style2'){					 
				
				$output .='<div class="content-grid-item col-md-6 center">';
				$output .='<div class="counters">';
				$output .='<div class="counter ' .$counter_text_color.'">';
				if($counter_prefix):
				$output .='<div class="counter-prefix">'.$counter_prefix.'</div>';
				endif;
				$output .='<div class="sppb-animated-number" data-digit="'. $number .'" data-duration="' . $duration . '">  0 </div>';
				
				if($counter_suffix):
				$output .='<div class="counter-suffix">'.$counter_suffix.'</div>';
				endif;
				
				if($icon):
				$output .='<i class="fa '.$icon.'"></i>';
				endif;
				
				if($counter_title && !empty($counter_title)) {
					$output .='<label>' . $counter_title . '</label>';
				}
				
				if($counter_stitle && !empty($counter_stitle)) {
				$output .='<p class="text-color-primary mb-xl">'.$counter_stitle.'</p>';
				}
				
				$output .='</div>';
				$output .='</div>';	
				$output .='</div>';	
		}else{ 
				
		$output  .= '<div class="sppb-addon sppb-addon-animated-number '. $alignment . ' ' . $class .'">';
		$output .= '<div class="sppb-addon-content">';
		$output .='<div class="counter '   .$counter_text_color.'">';
		if($counter_prefix):
		 $output .='<div class="counter-prefix">'.$counter_prefix.'</div>';
		endif;
		$output .= '<div class="sppb-animated-number" data-digit="'. $number .'" data-duration="' . $duration . '"> '.$counter_prefix.' 0 '.$counter_suffix .'</div>';
		
		if($counter_suffix):
		 $output .='<div class="counter-suffix">'.$counter_suffix.'</div>';
		endif;
				
		if($icon):
				$output .='<i class="fa '.$icon.'"></i>';
		endif;
		$output .='</div>';
		if($counter_title && !empty($counter_title)) {
			$output .= '<div class="sppb-animated-number-title">' . $counter_title . '</div>';
		}
		
	
		if($counter_title  && !empty($counter_stitle)) {
			$output .= '<p class="text-color-primary mb-xl">' . $counter_stitle . '</p>';
		}
		
		$output .= '</div>';
		$output .= '</div>';
		}
		
		return $output; 
}	


 
 
