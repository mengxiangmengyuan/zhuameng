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
AddonParser::addAddon('sp_portoconcept','sp_portoconcept_addon');
AddonParser::addAddon('sp_portoconcept_item','sp_portoconcept_item_addon'); 
function sp_portoconcept_addon($atts, $content){
	
	global $sppbportoconceptParam;	
	
	$app = JFactory::getApplication();
	$doc = JFactory::getDocument(); 
	$media_path = JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portoconcept/assets';	
	$doc->addStylesheet( $media_path.'/css/default.css');
	 
	
	$doc->addStylesheet($media_path.'/css/component.css');
	$doc->addScript($media_path.'/js/modernizr.custom.js');	
	$doc->addScript($media_path.'/js/jquery.appear.min.js');
	$doc->addScript($media_path.'/js/jquery.easing.min.js');
	//$doc->addScript($media_path.'/js/theme.js');
	$doc->addScript($media_path.'/js/jquery.flipshow.min.js');
	$doc->addScript($media_path.'/js/fss.js');	
	//$doc->addScript($media_path.'/js/theme.init.js');
	 
	extract(spAddonAtts(array(		
		 "block_1" =>'',		 
		 "block_2" =>'',		 
		 "block_3" =>'',	
		 "block_4" =>'',		 
		 "block_1_image" =>'',		 
		 "block_2_image" =>'',		 
		 "block_3_image" =>'',		 
		"class"=>'',
		"dynamicid" =>'',
		 	
		), $atts));

	$sppbportoconceptParam['class'] = $class;
	$output =''; 
	$output .='<div class="home-concept">';
	$output .='<div class="container">';
	$output .='<div class="row center">';
	$output .='<span class="sun"></span>';
	$output .='<span class="cloud"></span>';
	$output .='<div class="col-md-2 col-md-offset-1">';
	$output .='<div class="process-image  sppb-wow bounceIn sppb-animated" data-sppb-wow-duration="500ms" data-sppb-wow-delay="400ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 200ms; animation-name: bounceIn;">';
	
	$output .='<img src="'.$block_1_image.'" alt="" />';
	
	$output .='<strong class="text-color mb-xs">'.$block_1.'</strong>';
	$output .='</div>';
	$output .='</div>';
	$output .='<div class="col-md-2">';
	$output .='<div class="process-image  sppb-wow bounceIn sppb-animated" data-sppb-wow-duration="600ms" data-sppb-wow-delay="500ms" style="visibility: visible; animation-duration: 300ms; animation-name: bounceIn;">';
	$output .='<img src="'.$block_2_image.'" alt="" />';	
	$output .='<strong class="text-color mb-xs">'.$block_2.'</strong>';
	$output .='</div>';
	$output .='</div>';
	$output .='<div class="col-md-2">';
	$output .='<div class="process-image  sppb-wow bounceIn sppb-animated" data-sppb-wow-duration="700ms" data-sppb-wow-delay="600ms" style="visibility: visible; animation-duration: 400ms; animation-name: bounceIn;">';
	$output .='<img src="'.$block_3_image.'" alt="" />';	
	$output .='<strong class="text-color mb-xs">'.$block_3.'</strong>';
	$output .='</div>';
	$output .='</div>';
	$output .='<div class="col-md-4 col-md-offset-1">';
	$output .='<div class="project-image">';	
	$output .='<div id="fcSlideshow" class="fc-slideshow">';
	$output .='<ul class="fc-slides">';	
 	$output .= AddonParser::spDoAddon($content);
	$output .='</ul>';
	$output  .='</div>';
	$output .='<strong class="text-color pt-xl">'.$block_4.'</strong>';
	$output  .='</div>';
	$output .='</div>';
	
	
	$output  .='</div>';
	$output .='</div>';
	$output .='</div>';
	
	 
	return $output;

}


function sp_portoconcept_item_addon( $atts ){
	
	//global $sppbportoconcept_itemParam;
	
	 
	extract(spAddonAtts(array(
		"title" => '',
		"c_image" =>'',		
		), $atts));
		
  	//$class = $sppbportoconcept_itemParam['class'];											
 
	$output ='';
	$output .='	<li><img class="img-responsive" src="'.$c_image .'" alt="" /></li>';

	return $output;

}

 
