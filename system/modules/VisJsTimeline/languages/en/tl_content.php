<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_start']           = array('Initial start date for timeline axis', 'Please select the initial start date for the axis of the timeline. If not provided, the earliest date present in the items set is taken as start date.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_end']             = array('Initial end date for timeline axis', 'Please select the initial end date for the axis of the timeline. If not provided, the latest date present in the items set is taken as end date.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items']           = array('Timeline items', 'Please define the items which should be visible in the timeline. At least start date and content must be given.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_start']     = array('Start date', 'Please select the start date for the element.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_end']       = array('End date', 'Please select the optional end date for the element. If an end date is defined, the element is displayed as a bar.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_content']   = array('Content', 'Please specify the content of the element. Entering HTML is allowed.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_title']     = array('Tooltip', 'Please specify an optional tooltip to be displayed when hovering this element with the mouse.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_className'] = array('CSS class', 'Please specify an optional CSS class for the element.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_active']    = array('Active', 'Please specify whether the item should be displayed (only active elements are shown in the timeline).');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_legend'] = 'vis.js - Timeline data';

/**
 * Misc
 */
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_menu']['zoomIn']    = 'Zoom in';
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_menu']['zoomOut']   = 'Zoom out';
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_menu']['moveLeft']  = 'Move left';
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_menu']['moveRight'] = 'Move right';

?>