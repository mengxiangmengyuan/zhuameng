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

AddonParser::addAddon('sp_portotriplecarousel','sp_portotriplecarousel_addon');
AddonParser::addAddon('sp_portotriplecarousel_header','sp_portotriplecarousel_header_addon');
AddonParser::addAddon('sp_portotriplecarousel_body','sp_portotriplecarousel_body_addon');
AddonParser::addAddon('sp_portotriplecarousel_footer','sp_portotriplecarousel_footer_addon');

 global $spbTCH;
 global $spbTCB;
 global $spbTCF;
function sp_portotriplecarousel_addon($atts, $content){
	
	global $sppbportotriplecarouselParam;	
	global $spbTCH ;
	global $spbTCB ;
	global $spbTCF ;
	$app = JFactory::getApplication();
	$doc = JFactory::getDocument(); 
	$media_path = JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portotriplecarousel/assets'; 	
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
	$sppbportotriplecarouselParam['class'] = $class;
	$autoplay = ($autoplay) ?  'true' : 'false';
	$count = ($count) ? $count : 1;
	$loop = ($loop) ? 'true' : 'false';
	$nav = ($nav) ? 'true' : 'false';
	$dots = ($dots) ? 'true' : 'false';
	$output ='';	
	
	$doc->addScriptDeclaration('jQuery(function($){	
	$(document).ready(function(){	
		  $(".portotriplecarousel .owl-carousel").each(function(){	  
				$(this).owlCarousel({"autoHeight": true, "items": '.$count.', "margin": 10, "nav": '.$nav.', "dots": '.$dots.',"loop" :'.$loop.',"autoplay":'.$autoplay.' ,"stagePadding": 0 ,"navText": ["",""],
			  });
		});

	});
});
')	;
	
	
	AddonParser::spDoAddon($content);
	$class  = ($class) ? 'owl-carousel owl-theme '. $class :  'owl-carousel owlc-'.$dynamicid.' owl-theme ';
		$output .='<div class="carousel-areas mt-xl portotriplecarousel">';
		$output .='<div class="owl-carousel owl-theme m-none" data-plugin-options=" ">'; 
  	foreach($spbTCH as $key => $value){
		$title = isset($value['title']) ?  $value['title'] : '';
		$output .='<div>'; 
		$output .='<img class="img-responsive"  src="'.$value['image'] .'" alt="'.$title.'"  >'; 
		$output .='</div>';
	}
		$output .='</div>'; 	
		$output .='<div class="owl-carousel owl-theme m-none" data-plugin-options=" ">'; 
  	foreach($spbTCB as $key => $value){ 
		$title = isset($value['title']) ?  $value['title'] : '';
		$output .='<div>'; 
		$output .='<img class="img-responsive"  src="'.$value['image'] .'" alt="'.$title.'"  >'; 
		$output .='</div>';
	}
		$output .='</div>'; 
		$output .='<div class="owl-carousel owl-theme m-none" data-plugin-options=" ">'; 
  	foreach($spbTCF as $key => $value){ 
		$title = isset($value['title']) ?  $value['title'] : '';
		$output .='<div>'; 
		$output .='<img class="img-responsive"  src="'.$value['image'] .'" alt="'.$title.'"  >'; 
		$output .='</div>';
	}
		$output .='</div>'; 	
		$output .='</div>';
		$output .='</div>';
	 
	 
		return $output;		
}	


function sp_portotriplecarousel_body_addon( $atts ){
	global $spbTCB;	 
	extract(spAddonAtts(array(
		"title" =>'',
		"url" =>'',
		"image" =>'',		
		), $atts));
	$title =($title) ? $title : '';	
	$spbTCB[]=array('image' => $image,'title' => $title);
}

 
function sp_portotriplecarousel_footer_addon( $atts ){
	global $spbTCF;	
	extract(spAddonAtts(array(
		"title" =>'',
		"url" =>'',
		"image" =>'',		
		), $atts));
	 
	$title =($title) ? $title : '';	
	$spbTCF[]=array('image' => $image,'title' => $title);	 
}

function sp_portotriplecarousel_header_addon( $atts ){
	global $spbTCH;	 
	extract(spAddonAtts(array(
		"title" =>'',
		"url" =>'',
		"image" =>'',		
		), $atts));
	$title =($title) ? $title : '';	 
	$spbTCH[]=array('image' => $image,'title' => $title);  
}
