<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package VisJsTimeline
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'CliffParnitzky',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'CliffParnitzky\Contao\VisJsTimeline\ContentVisJsTimelineManual' => 'system/modules/VisJsTimeline/elements/ContentVisJsTimelineManual.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_vis-js-timeline' => 'system/modules/VisJsTimeline/templates/elements',
));
