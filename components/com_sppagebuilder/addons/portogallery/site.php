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
AddonParser::addAddon('sp_portogallery','sp_portogallery_addon'); 
function sp_portogallery_addon($atts, $content){
	global $sppbportoconceptParam;	
	
	$app = JFactory::getApplication();
	$doc = JFactory::getDocument(); 
	$media_path = JURI::base(true) . '/templates/'.$app->getTemplate().'/sppagebuilder/addons/portogallery/assets';	
 	$doc->addStylesheet($media_path.'/css/magnific-popup.min.css');
	$doc->addScript($media_path.'/js/jquery.magnific-popup.min.js');
	extract(spAddonAtts(array(	
	     /*"title"	 =>'',
	     "description" =>'', */
		 "block_1" =>'',		 
		 "block_2" =>'',		 
		 "block_3" =>'',	
		 "block_4" =>'',		 
		 
		 "block_1_image" =>'',		 
		 "block_2_image" =>'',		 
		 "block_3_image" =>'',	
		 "block_4_image" =>'',	 
		"class"=>'',
		"dynamicid" =>'',
		 	
		), $atts));

	$sppbportoconceptParam['class'] = $class;
	$output =''; 
	 
	$output .='<div class="lightbox">';
	$output .='<div class="masonry" style="position: relative; height: 570px;">';
	
	$output .='<div class="masonry-item" style="position: absolute; left: 0px; top: 0px;">';
	$output .='<span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">';
	$output .='<span class="thumb-info-wrapper">';
 	$output .='<img src="'.$block_1_image.'" class="img-responsive" alt="">';
	$output .='<span class="thumb-info-action thumb-info-action-custom">';
	$output .='<a class="mi-gallery" href="'.$block_1_image.'">';
	$output .='<span class="thumb-info-icon-custom"></span>';
	$output .='</a>';
	$output .='</span>';
	$output .='</span>';
	$output .='</span>';
	$output .='</div>';
	
	
	$output .='<div class="masonry-item w2" style="position: absolute; left: 285px; top: 0px;">';
	$output .='<span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">';
	$output .='<span class="thumb-info-wrapper">';
 	$output .='<img src="'.$block_1_image.'" class="img-responsive" alt="">';
	$output .='<span class="thumb-info-action thumb-info-action-custom">';
	$output .='<a class="mi-gallery" href="'.$block_1_image.'">';
	$output .='<span class="thumb-info-icon-custom"></span>';
	$output .='</a>';
	$output .='</span>';
	$output .='</span>';
	$output .='</span>';
	$output .='</div>';
	
	$output .='<div class="masonry-item" style="position: absolute; left: 0px; top: 285px;">';
	$output .='<span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">';
	$output .='<span class="thumb-info-wrapper">';
 	$output .='<img src="'.$block_2_image.'" class="img-responsive" alt="">';
	$output .='<span class="thumb-info-action thumb-info-action-custom">';
	$output .='<a class="mi-gallery" href="'.$block_2_image.'">';
	$output .='<span class="thumb-info-icon-custom"></span>';
	$output .='</a>';
	$output .='</span>';
	$output .='</span>';
	$output .='</span>';
	$output .='</div>';
									
	$output .='<div class="masonry-item" style="position: absolute; left: 855px; top: 0px;">';
	$output .='<span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">';
	$output .='<span class="thumb-info-wrapper">';
 	$output .='<img src="'.$block_3_image.'" class="img-responsive" alt="">';
	$output .='<span class="thumb-info-action thumb-info-action-custom">';
	$output .='<a class="mi-gallery" href="'.$block_3_image.'">';
	$output .='<span class="thumb-info-icon-custom"></span>';
	$output .='</a>';
	$output .='</span>';
	$output .='</span>';
	$output .='</span>';
	$output .='</div>';
	
	
	$output .='<div class="masonry-item" style="position: absolute; left: 855px; top: 285px;">';
	$output .='<span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">';
	$output .='<span class="thumb-info-wrapper">';
 	$output .='<img src="'.$block_4_image.'" class="img-responsive" alt="">';
	$output .='<span class="thumb-info-action thumb-info-action-custom">';
	$output .='<a class="mi-gallery" href="'.$block_4_image.'">';
	$output .='<span class="thumb-info-icon-custom"></span>';
	$output .='</a>';
	$output .='</span>';
	$output .='</span>';
	$output .='</span>';
	$output .='</div>';
	
	
	$output .='</div>';
	$output .='</div>';
	
	
 
$output .='<script>
		// Masonry
 
     jQuery(document).ready(function() {
		jQuery(".gallery").magnificPopup({delegate: "a", type: "image", mainClass: "mfp-with-zoom mfp-img-mobile",itemSelector: ".masonry-item", gallery: {"enabled": true}});
				
			});
	   jQuery(document).ready(function() {
	jQuery(".lightbox").magnificPopup({delegate: "a", type: "image", mainClass: "mfp-with-zoom mfp-img-mobile",itemSelector: ".masonry-item", gallery: {"enabled": true}});
				
			});
	 
 
	
	</script>';	

	 $output .='<script>
		// Masonry
 
     jQuery(document).ready(function() {
	jQuery(".lightbox").magnificPopup({delegate: "a", type: "image", mainClass: "mfp-with-zoom mfp-img-mobile",itemSelector: ".masonry-item", gallery: {"enabled": true}});
				
			}); 
	</script>';
 	 
	return $output;

}


 
 
