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
AddonParser::addAddon('sp_portoevents','sp_portoevents_addon'); 
function sp_portoevents_addon($atts, $content){
	
	global $sppbpTeamParam;	
	global $sppbTeamArray;
	$app = JFactory::getApplication();	 
	$doc = JFactory::getDocument(); 
	$media_path = JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portoevents/assets';
	$doc->addStylesheet($media_path.'/css/magnific-popup.min.css');	 
	$doc->addScript($media_path.'/js/jquery.magnific-popup.min.js');
	jimport('joomla.application.component.helper');
	$params = JComponentHelper::getParams('com_sppagebuilder');
	$gmap_api = $params->get('gmap_api', '');	 
	$doc->addScript('//maps.googleapis.com/maps/api/js?key='. $gmap_api);
	$doc->addScript($media_path.'/js/gmap.js');	 
	   
	extract(spAddonAtts(array(	 
		"title" => '',
		"description" =>'',		
		"event_image" =>'',
		"event_icon_image" =>'',
		"event_date" =>'',
		"event_timings" =>'',
		"event_timings" =>'',
		"event_address_1" =>'',
		"event_address_2" =>'',
		"map" =>'',
		"gmap_api"=>'',
		"type"=>'',
		"zoom"=>'',
		"mousescroll"=>'',		 
		"class"=>'',
		"dynamicid" =>'',		 	
		), $atts));
	 $title = $title ? $title : '';
	 $description = $description ? $description : '';	 
	 $href='https://maps.google.com/maps?q='.$map[0].','.$map[1].','.$zoom.',en';	
	 $sppbpTeamParam['class'] = $class;
	 $output =''; 	
	 $output .='<div class="wedding-schedule center appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">';
	 $output .='<div class="wedding-schedule-photo">';
	 $output .='<img src="'.$event_image.'" alt="'.$title.'" />';
	 
	 $output .='</div>';
	 $output .='<div class="wedding-schedule-background"></div>';
	 $output .='<img class="icon-heart-white-border" src="'.$event_icon_image.'" alt="'.$title.'" />';
	 $output .='<div class="wedding-schedule-infos">';
	 $output .='<h2 class="mt-md mb-none">'.$title.'</h2>';
	 
	 $output .='<span class="date text-uppercase text-color-primary font-weight-bold">'.$event_date.'</span>';
	 $output .='<span class="hour text-lg text-uppercase text-color-tertiary font-weight-bold mb-xlg">'.$event_timings.'</span>';
	 $output .='<span class="local text-sm text-uppercase font-weight-bold mb-lg">';
	 $output .=$event_address_1;
	 $output .='<span>'.$event_address_2.'</span>';
	 $output .='</span>';
	 $output .='</div>';
	 $output .='<a class="btn btn-info popup-gmaps text-uppercase pl-lg pr-lg" href="'.$href.'">View Map &amp; Direction</a>';
	 $output .='</div>';	 
	 $output .='<script type="text/javascript">
      jQuery(document).ready(function() {
       jQuery(".popup-gmaps").magnificPopup({
          disableOn: 700,
          type: "iframe",
          mainClass: "mfp-fade",
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
           
        });
      });
    </script>';
 

	 
	return $output;

}

 

 
