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
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_start']           = array('Initiales Startdatum der Zeitleisten-Achse', 'Bitte wählen Sie das initiale Startdatum für die Achse der Zeitleiste aus. Falls nicht angegeben wird das früheste Datum der Elemente in der Zeitleiste als Startdatum verwendet.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_end']             = array('Initiales Enddatum der Zeitleisten-Achse', 'Bitte wählen Sie das initiale Enddatum für die Achse der Zeitleiste aus. Falls nicht angegeben wird das späteste Datum der Elemente in der Zeitleiste als Enddatum verwendet.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items']           = array('Zeitleisten-Elemente', 'Bitte geben Sie die Elemente an, die in der Zeitleiste sichtbar sein sollen. Mindestens Startdatum und Inhalt müssen angegeben sein.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_start']     = array('Startdatum', 'Bitte geben Sie das Startdatum für das Element an.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_end']       = array('Enddatum', 'Bitte geben Sie ein optionales Enddatum für das Element an. Wenn ein Enddatum definiert ist wird das Element als Balken dargestellt.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_content']   = array('Inhalt', 'Bitte geben Sie den Inhalt für das Element an. Die Eingabe von HTML ist erlaubt.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_title']     = array('Tooltip', 'Bitte geben Sie einen optionalen Tooltip an, der beim Überfahren mit der Maus zu diesem Element angezeigt werden soll.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_className'] = array('CSS Klasse', 'Bitte geben Sie eine optionale CSS Klasse für das Element an.');
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_items_active']    = array('Aktiv', 'Bitte geben Sie an, ob das Element angezeigt werden soll (nur aktive Elemente werden in der Zeitleiste dargestellt).');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_legend'] = 'vis.js - Zeitleisten-Daten';

/**
 * Misc
 */
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_menu']['zoomIn']    = 'Vergrößern';
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_menu']['zoomOut']   = 'Verkleinern';
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_menu']['moveLeft']  = 'Nach links bewegen';
$GLOBALS['TL_LANG']['tl_content']['visJsTimeline_menu']['moveRight'] = 'Nach rechts bewegen';

?>