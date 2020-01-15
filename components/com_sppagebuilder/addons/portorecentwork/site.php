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
AddonParser::addAddon('sp_portorecentwork','sp_portorecentwork_addon');
AddonParser::addAddon('sp_portorecentwork_item','sp_portorecentwork_item_addon'); 
function sp_portorecentwork_addon($atts, $content){
	
	global $sppbportoconceptParam;	
	
	$app = JFactory::getApplication();
	$doc = JFactory::getDocument(); 
 	 
	$app = JFactory::getApplication();
	$doc->addStylesheet( JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portorecentwork/media/assets/owl.carousel.min.css');
	$doc->addStylesheet( JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portorecentwork/media/assets/owl.theme.default.min.css');
	$doc->addScript( JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portorecentwork/media/owl.carousel.min.js');
 	extract(spAddonAtts(array(		
		 "title" =>'',		 
		 "description" =>'',	
		 "items" =>'',
		"loop" =>'',
		"nav" =>'',
		"dots" =>'',
		"autoplay"=>'',
		"autoplay_interval"=>'',	 
		 "class"=>'',
		"dynamicid" =>'',	 		 	
		), $atts));

	$title = $title ? $title : '';
	$description = $description ? $description : '';
	$autoplay = ($autoplay) ?  'true' : 'false';
	$items = ($items) ? $items : 1;
	$loop = ($loop) ? 'true' : 'false';
	$nav = ($nav) ? 'true' : 'false';
	$dots = ($dots) ? 'true' : 'false';

	$sppbportoconceptParam['class'] = $class;
	$output =''; 
	$output .='<div class="row">';
	$output .='<div class="col-md-12 center">';
	
	if($title): 
		$output .='<h2 class="mb-none mt-xl font-weight-semibold">'.$title.':</h2>';
	endif;
	
	if($description):
	$output .='<p class="lead mb-xlg">'.$description.'</p>';
	endif;
	
	$output .='<div class="divider divider-primary divider-small divider-small-center mb-xl">';
	$output .='<hr>';
	$output .='</div>';
	$output .='</div>';
	$output .='</div>';
	$output .='<div class="row">';
	$output .='<div class="col-md-8 col-md-offset-2">';
	$output .='<div class="carousel-areas mt-xl mb-none" >';
	$output .='<div class="owl-carousel owl-theme m-none" id="portorw-'.$dynamicid.'" >';
	$output .= AddonParser::spDoAddon($content);
	$output .='</div>';
	$output .='</div>';
	$output .='</div>';
	$output .='</div>';
	
	$output .='<script type="text/javascript">
		jQuery("#portorw-'.$dynamicid.'").owlCarousel({			
			 autoHeight: true,			 		  	 
			 items:'.$items.',
			 margin: 10,
			 loop:'.$loop.',
			 nav:'.$nav.',
			 dots:'.$dots.',		 
			 stagePadding: 0, 			
			 autoplay:'.$autoplay.',	
			 navText: [
			"",
			""
			]
		});
	</script>';
 
 	return $output;

}


function sp_portorecentwork_item_addon( $atts ){
	extract(spAddonAtts(array(
		"work_link" => '',
		"work_image" =>'',		
		), $atts));
	
	$output ='';
	$output .='<div>';
	$output .='<a href="'.$work_link.'">';
	
	if($work_image):
	$output .='<img alt="" class="img-responsive" src="'.$work_image.'">';
	endif;
	
	$output .='</a>';
	$output .='</div>';
	return $output;

}

 
