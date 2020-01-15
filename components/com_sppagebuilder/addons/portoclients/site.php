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
AddonParser::addAddon('sp_portoclients','sp_portoclients_addon');
AddonParser::addAddon('sp_portoclients_item','sp_portoclients_item_addon'); 
function sp_portoclients_addon($atts, $content){ 
	global $sppbportoclientsParam;	 
	$app = JFactory::getApplication();
	$doc = JFactory::getDocument(); 
	$media_path = JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portoclients/assets';  
	$doc->addStylesheet( $media_path.'/assets/owl.carousel.min.css');
	$doc->addStylesheet(  $media_path.'/assets/owl.theme.default.min.css');
	$doc->addScript(  $media_path.'/owl.carousel.min.js');
	$doc->addScript(  $media_path.'/script.js'); 
	extract(spAddonAtts(array(
		"count" =>'',		
		"loop" =>'',
		"nav" =>'',
		"dots" =>'',
		"autoplay"=>'',
		"autoplay_interval"=>'',
		"arrows"=>'',
		"class"=>'',
		"dynamicid" =>'',		 	
		), $atts)); 
		$sppbportoclientsParam['class'] = $class;
	$autoplay = ($autoplay) ?  'true' : 'false';
	$count = ($count) ? $count : 6;
	$loop = ($loop) ? 'true' : 'false';
	$nav = ($nav) ? 'true' : 'false';
	$dots = ($dots) ? 'true' : 'false';

	 $output ='';
 	$class  = ($class) ? 'owl-carousel owl-theme '. $class :  'owl-carousel owlc-'.$dynamicid.' owl-theme ';
  	$output ='<div id="pclientsowlc-'.$dynamicid.'" class="'.$class.'">';
  	 $output .= AddonParser::spDoAddon($content);
	 $output .='</div>';
 	 $output .='<script type="text/javascript">  
	 jQuery("#pclientsowlc-'.$dynamicid.'").owlCarousel({ 
			animateOut: "fadeOut",			 
			margin:30,
			loop:'.$loop.',
			mouseDrag:true,       
			startPosition:0,
			nav:'.$nav.',
			responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:'.$count.'
					}
				},
			dots:'.$dots.',
			autoplay:'.$autoplay.',
			navText: ["",""],
	
		}); 
	</script>'; 
	return $output;		
}	


function sp_portoclients_item_addon( $atts ){ 
	extract(spAddonAtts(array(
		"title" =>'',
		"url" =>'',
		"image" =>'',		
		), $atts)); 
	$output ='';
	$output .='<div>';
	$output .='<a href="'.$url.'">';
	$output .='<img class="img-responsive"  src="'.$image .'" alt="'.$title.'">';
	$output .='</a>';
	$output .='</div>';  
	return $output; 
}

 
