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
SpAddonsConfig::addonConfig(
	array(
		'type'=>'content',
		'addon_name'=>'sp_portocounternumbers',
		'title'=> 'Porto counter numbers',
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_DESC'),
		'attr'=>array(
			'general' => array(
				'admin_label'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				),

				'number'=>array(
					'type'=>'number',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_DESC'),
					'placeholder'=>'1000',
					'std'=>'1000',
				),
				
				'counter_prefix'=>array(
					'type'=>'text',
					'title'=>'Counter value prefix',
					'desc'=>'',					
					'std'=>'',
				),
				
				'counter_suffix'=>array(
					'type'=>'text',
					'title'=>'Counter value suffix',
					'desc'=>'',					
					'std'=>'',
				),

				'duration'=>array(
					'type'=>'number',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_DURATION'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_DURATION_DESC'),
					'placeholder'=>'1000',
					'std'=>'1000',
				),

				'font_size'=>array(
					'type'=>'number',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_FONT_SIZE'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_FONT_SIZE_DESC'),
					'placeholder'=>36,
					'std'=>36,
				),

				'color'=>array(
					'type'=>'color',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_COLOR'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_COLOR_DESC'),
				),

				'counter_title'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE_DESC'),
					'std'=>'Animated Number',
				),
				
				'counter_text_color'=>array(
					'type'=>'select',
					'title'=>'Counter text color',
					'desc'=>'',
					'values'=>array(
						''=>'----',
						'text-color-dark'=>'Dark',
						'text-color-light'=>'Light',						
					)
					
				),
				'title_font_size'=>array(
					'type'=>'number',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE_FONT_SIZE'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE_FONT_SIZE_DESC'),
					'placeholder'=>18,
					'std'=>18,
				),

				'counter_stitle'=>array(
					'type'=>'text',
					'title'=>'Counter sub title',
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE_DESC'),
					'std'=>'',
				),
				'icon'=>array(
							'type'=>'icon',
							'title'=>'Icon',
							'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TAB_ITEM_ICON_DESC'),
							'std'=> ''
				),
				
				'animation'=>array(
							'type'=>'select',
							'title'=>'Animation',
							'desc'=>'',
							'values'=>array(
									'' => '',
									'fadeInUp'=>'Fade In Up',
									'fadeInDown'=>'Fade In Down',
									'fadeOutUpBig'=>'Fade In Big',
									'fadeInUpBig'=>'Fade In Big',
								),
							'std'=> ''
				),
				
			'alignment'=>array(
					'type'=>'select',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT_DESC'),
					'values'=>array(
						'sppb-text-left'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
						'sppb-text-center'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_CENTER'),
						'sppb-text-right'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
					),
					'std'=>'sppb-text-center',
				),				
				'style'=>array(
					'type'=>'select',
					'title'=>'Style',
					'desc'=>'',
					'values'=>array(
						'style1'=>'Style 1',
						'style2'=>'Style 2',						
					),
					'std'=>'style1',
				),
				'class'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
					'std'=>''
				),
			),
		),
	)
);
