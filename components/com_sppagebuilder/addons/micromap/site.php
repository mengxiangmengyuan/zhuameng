<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');


AddonParser::addAddon('sp_micromap','sp_micromap_addon');
//AddonParser::addAddon('sp_micromap_scripts','sp_portoclients_item_addon')
function sp_micromap_addon($atts, $content){ 
	extract(spAddonAtts(array(
		"title" =>'',		
		"class" =>'',
		"heading_selector" =>'',
		"map" =>'',
		"gmap_api"=>'',
		"type"=>'',
		"zoom"=>'',
		"mousescroll"=>'',
		"map_info" => '',		 
		"contact" =>'',
		"location_url" =>'',
		"dynamicid" =>'', 
		), $atts));
		$app = JFactory::getApplication();
		$doc = JFactory::getDocument(); 
		$media_path = JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/micromap/assets';  
		jimport('joomla.application.component.helper');
		$params = JComponentHelper::getParams('com_sppagebuilder'); 
		$gmap_api = $params->get('gmap_api', ''); 
		$class = (isset($class) && $class) ? $class : '';
		$title = (isset($title) && $title) ? $title : '';
		$heading_selector = (isset($heading_selector) && $heading_selector) ? $heading_selector : 'h3'; 
		//Options
	    $map = (isset($map) && $map) ? explode(',',$map): '';  
		$gmap_api = (isset($gmap_api) && $gmap_api) ? $gmap_api : ''; 
		$type = (isset($type) && $type) ? $type : '';
		$zoom = (isset($zoom) && $zoom) ? $zoom : '';
		$mousescroll = (isset($mousescroll) && $mousescroll) ? $mousescroll : '';  
		$doc->addScript('//maps.googleapis.com/maps/api/js?key='. $gmap_api);		
		$doc->addScript($media_path.'/js/gmap.js');		
		$mdynamicid = '#googleMapsMicro-'.$dynamicid;
		$height = (isset($height) && $height) ? $height : 0;
		$css = '';
		if($height) {
			$css .= $mdynamicid . '{';
			$css .= 'height:280px;';
			$css .= 'width:280px;'; 
			$css .= '}';
		}		
		 
		$maphtml ='';		 
		$maphtml .='<div class="micro-map box-shadow-custom clearfix">';
		$maphtml .='<div class="micro-map-map">';
		$maphtml .='<div id="googleMapsMicro-'.$dynamicid.'" class="sppb-addon-portomicrogmap-canvas google-map m-none" style="height: 280px;" data-lat="' . trim($map[0]) . '" data-lng="' . trim($map[1]) . '" data-maptype="' . $type . '" data-mapzoom="' . $zoom . '" data-mousescroll="' . $mousescroll . '"></div>';
		
		$maphtml .='</div>';
		$maphtml .='<div class="micro-map-info">';
		$maphtml .='<div class="micro-map-info-detail">';
		$maphtml .='<i class="icon-location-pin icons text-color-primary"></i>';
		$maphtml .='<label>address</label>';
		$maphtml .='<strong>'.$map_info.'</strong>';
			if($location_url):
			$maphtml .='<a href="'.$location_url.'" title="">(View Location)</a>';
			endif;
			$maphtml .='</div>';
		$maphtml .='<div class="micro-map-info-detail">';
		$maphtml .='<i class="icon-phone icons text-color-primary"></i>';
		$maphtml .='<label>call us</label>';
		$maphtml .='<strong>'.$contact.'</strong>';
		$maphtml .='</div>';
		$maphtml .='</div>';
		$maphtml .='</div>';	  
		return $maphtml;
	}

  

