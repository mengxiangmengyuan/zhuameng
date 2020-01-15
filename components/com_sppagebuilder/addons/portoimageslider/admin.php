<?php
/**
 * Porto 1.0 @package SP Page Builder
 * Template Name - Porto
 * @author Priya Bose http://www.joomlabuff.com
 * @copyright Copyright (c) 2016 joomlabuff
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
// no direct access
defined('_JEXEC') or die;
SpAddonsConfig::addonConfig(
	array(
				
		'type'=>'content',
		'addon_name'=>'sp_portoimageslider',
		'category'=>'General',
		'title'=>'Porto Image Slider',
		'desc'=> '',
		'attr'=>array(
			'general' => array(
				'admin_label'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				),

				'title'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
					'std'=>  ''
				),

				
					
			'loop'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_SLIDE_LOOP'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_SLIDE_LOOP_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=> 1
				),
			
			'mouseDrag'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_SLIDE_MOUSEDRAG'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_SLIDE_MOUSEDRAG_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=> 1
				),
			'autoplay'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_AUTOPLAY'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_AUTOPLAY_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			'autoplay_interval'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_AUTOPLAY_INTERVAL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_AUTOPLAY_INTERVAL_DESC'),
				'placeholder'=>'5000',
				'std'=>5000
				),		
			'nav'=>array(
				'type'=>'select', 
				'title'=> 'Show navigation',
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_SHOW_ARROWS_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			
			'dots'=>array(
				'type'=>'select', 
				'title'=> 'Show pagination',
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_SHOW_PAGINATION_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				), 
 
 
				'count'=>array(
					'type'=>'select',
					'title'=>'Item per row',
					'desc'=>'',
					'values'=>array(
						'1'=>1,
						'2'=>2,
						'3'=>3,
						'4'=>4,
						'5'=>5,
						'6'=>6,
					),
					'std'=>'6',
				),
 

				'class'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
					'std'=>''
				),

				// Repeatable Items
				'sp_portoimageslider_item'=>array(
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENTS'),
					'attr'=>array(
						'title'=>array(
							'type'=>'text',
							'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_TITLE'),
							'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_TITLE_DESC'),
							'std'=>'Image1'
						),

						'image'=>array(
							'type'=>'media',
							'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_IMAGE'),
							'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_IMAGE_DESC'),
							'format'=>'image'
						),

						'url'=>array(
							'type'=>'text',
							'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_URL'),
							'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENT_URL_DESC'),
							'std'=>'',
							'placeholder'=>'http://',
						),
					),
				),
			),
		),
	)
);
