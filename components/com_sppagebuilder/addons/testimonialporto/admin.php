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
SpAddonsConfig::addonConfig(
	array( 
		'type'=>'repeatable', 
		'addon_name'=>'sp_testimonialporto',
		'category'=>'Slider',
		'title'=>JText::_('Testimonials Porto'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_DESC'),
		'attr'=>array(
			'admin_label'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
				'std'=> ''
				),
			 'title'=>array(
				'type'=>'text', 
				'title'=>'Title',
				'desc'=>'',
				'std'=> ''
				),
			'heading_selector'=>array(
					'type'=>'select',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
					'values'=>array(
						'h1'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H1'),
						'h2'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H2'),
						'h3'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H3'),
						'h4'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H4'),
						'h5'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H5'),
						'h6'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H6'),
					),
					'std'=>'h3',
					'depends'=>array(array('title', '!=', '')),
				),

			'items'=>array(
				'type'=>'number', 
				'title'=>'Enter number of item',
				'desc'=>'',
				'std'=> 1
				),
				
		'margin'=>array(
				'type'=>'number', 
				'title'=>'Enter item margin',
				'desc'=>'',
				'std'=> 30
				),
					
				
			'loop'=>array(
				'type'=>'select', 
				'title'=> 'Enable Loop',
				'desc'=> '',
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=> 1
				),
			
			'mouseDrag'=>array(
				'type'=>'select', 
				'title'=>'Enable Mouse Drag',
				'desc'=>'',
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=> 1
				),
			'autoplay'=>array(
				'type'=>'select', 
				'title'=>'Autoplay',
				'desc'=>'',
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			'autoplay_interval'=>array(
				'type'=>'text', 
				'title'=>'Set autoplay interval',
				'desc'=>'',
				'placeholder'=>'5000',
				'std'=>5000
				),		
			'nav'=>array(
				'type'=>'select', 
				'title'=>'Show Navigation',
				'desc'=>'',
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			
			'dots'=>array(
				'type'=>'select', 
				'title'=>'Show Pagination',
				'desc'=>'',
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			'style'=>array(
				'type'=>'select', 
				'title'=>'Style',
				'desc'=>'',
				'values'=>array(
					'style1'=>'Style 1',
					'style2'=>'Style 2',					 
					'style3'=>'Style 3',
					'style4'=>'Style 4',
					'style5-animate' => 'Style 5 Animate',
					'style6' => 'Law firm'
					),
				'std'=> 'style1'
				),
			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_testimonialporto_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TITLE'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TITLE_DESC'),
						'std'=>'John Doe',
						),					
					'desc'=>array(
						'type'=>'text', 
						'title'=>'Client information',
						'desc'=>'',
						'std'=>'CEO & Founder',
						),
					'avatar'=>array(
						'type'=>'media', 
						'title'=>'Client image',
						'desc'=>'',
						),
					'avatar_style'=>array(
						'type'=>'select', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_AVATAR_STYLE'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_AVATAR_STYLE_DESC'),
						'values'=>array(
							''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_STANDARD'),
							'sppb-img-rounded'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ROUNDED'),
							'sppb-img-circle'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CIRCLE'),
							),
						'std'=>'sppb-img-circle',
						),
					'avatar_position'=>array(
						'type'=>'select', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_CLIENT_AVATAR_POSITION'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_CLIENT_AVATAR_POSITION_DESC'),
						'values' =>array(
							'top'=>'Top',
							'center'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CENTER'),
							'bottom'=>'Bottom',
							),
						'std' => 'left'
						),
					'message'=>array(
						'type'=>'editor', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TEXT'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TEXT_DESC'),
						'std'=> 'When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream.'
						),
					'url'=>array(
						'type'=>'text', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_CLIENT_URL'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_CLIENT_URL_DESC'),
						),
	
					'link_target'=>array(
						'type'=>'select', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_DESC'),
						'values'=>array(
							''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
							'_blank'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
							),
						),
					)
				),
			)
		)
	);

