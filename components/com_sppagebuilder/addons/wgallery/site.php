<?php
/**
 * Porto 1.0 @package SP Page Builder
 * Template Name - Porto
 * @author Joomlabuff http://www.joomlabuff.com
 * @copyright Copyright (c) 2016 joomlabuff
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
// no direct access
defined('_JEXEC') or die;

AddonParser::addAddon('sp_wgallery','sp_wgallery_addon');
AddonParser::addAddon('sp_gallery_item','sp_wgallery_item_addon');

//$sppbpTeamParam = array();
// $sppbTeamArray = array();
function sp_wgallery_addon($atts, $content){
	
	global $sppbpTeamParam;	
	global $sppbTeamArray;
	$app = JFactory::getApplication();
	 
	$doc = JFactory::getDocument(); 
		$media_path = JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/wgallery/assets';	
 	 
	
	$doc->addStylesheet($media_path.'/css/magnific-popup.min.css');
	 
	$doc->addScript($media_path.'/js/jquery.magnific-popup.min.js');
  
	 
	 
	extract(spAddonAtts(array(	 
		"title" => '',
		"description" =>'',		
		"items" =>'',
		 
		"class"=>'',
		"dynamicid" =>'',
		 	
		), $atts));


	$title = $title ? $title : '';
	$description = $description ? $description : '';
	 
	
	
	$sppbpTeamParam['class'] = $class;
	$output =''; 	
	
	 $output.='<ul id="historyLoadMoreWrapper'.$dynamicid.'" class="history-list sort-destination p-none m-none">';	
	 $output .=AddonParser::spDoAddon($content);	
	 $output .='</ul>';
	 $output .='<script type="text/javascript">
      jQuery(document).ready(function() {
       jQuery(".history-list").magnificPopup({
          delegate: "a",
          type: "image",
          tLoading: "Loading image #%curr%...",
          mainClass: "mfp-img-mobile",
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
           
        });
      });
    </script>';
 

	 
	return $output;

}


function sp_wgallery_item_addon( $atts ){
 
	// print_r($sppbpTeamParam); exit;
	extract(spAddonAtts(array(
		"title" => '',
		"thumb" => '',	
		"fav_count"	 =>'',
		"dynamicid" =>'',		 	
		), $atts));
	 
	$output ='';
	$output .='<li class="isotope-item">';
	$output .='<div class="history-item">';
	if($thumb):
	$output .='<a href="'.$thumb.'" class="text-decoration-none">';
	else:
	$output .='<a href="#" class="text-decoration-none">';
	
	endif;
	$output .='<span class="thumb-info thumb-info-lighten">';
	$output .='<span class="thumb-info-wrapper m-none">';
	if($thumb):
	$output .='<img src="'.$thumb.'" class="img-responsive" alt="">';
	endif;
	$output .='<span class="thumb-info-title text-uppercase font-weight-bold">';
	$output .=$title;
	$output .='</span>';
	$output .='<span class="thumb-info-likes text-color-light">';
	$output .='<i class="fa fa-heart-o background-color-primary p-xs"></i>';
	$output .=$fav_count;
	$output .='</span>';
	$output .='</span>';
	$output .='</span>';
	$output .='</a>';
	$output .='</div>';
	$output .='</li>'; 
 
	return $output;
	 
	
}

 
