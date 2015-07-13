<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2015 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2015-2015
 * @author     Cliff Parnitzky
 * @package    VisJsTimeline
 * @license    LGPL
 */

/**
 * Add palettes to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['visJsTimelineManual'] = '{type_legend},type,headline;{visJsTimeline_legend},visJsTimeline_start,visJsTimeline_end,visJsTimeline_items;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['visJsTimeline_start'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_start'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(10) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['visJsTimeline_end'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_end'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(10) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['visJsTimeline_items'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items'],
	'inputType'               => 'multiColumnWizard',
	'eval'                    => array
	(
		'mandatory'    => true,
		'style'        => 'min-width: 100%;',
		'tl_class'     =>'clr timeline-items',
		'columnFields' => array
		(
			'start' => array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_start'],
				'exclude'          => true,
				'inputType'        => 'text',
				'eval'             => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'date_wizard', 'mandatory'=>true)
			),
			'end' => array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_end'],
				'exclude'          => true,
				'inputType'        => 'text',
				'eval'             => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'date_wizard')
			),
			'content' => array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_content'],
				'exclude'          => true,
				'inputType'        => 'text',
				'eval'             => array('style'=>'width: 95%;', 'allowHtml'=>true, 'mandatory'=>true)
			),
			'title' => array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_title'],
				'exclude'          => true,
				'inputType'        => 'text',
				'eval'             => array('style'=>'width: 95%;')
			),
			'className' => array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_className'],
				'exclude'          => true,
				'inputType'        => 'text',
				'eval'             => array('style'=>'width: 50px;', 'nospace'=>true)
			),
			'active' => array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_active'],
				'exclude'          => true,
				'default'          => true,
				'inputType'        => 'checkbox'
			)
		)
	),
	'sql'                    => "blob NULL"
); 


?>