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
 * Run in a custom namespace, so the class can be replaced
 */
namespace CliffParnitzky\Contao\VisJsTimeline;

/**
 * Class TriathlonResultsManagerHelper
 *
 * @copyright  Cliff Parnitzky 2015-2015
 * @author     Cliff Parnitzky
 * @package    Models
 */
class ContentVisJsTimelineManual extends \Contao\ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $arrItems = array();

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_vis-js-timeline';

	/**
	 * Return if there are no files
	 * @return string
	 */
	public function generate()
	{
		$this->arrItems = deserialize($this->visJsTimeline_items);
		
		// Return if there is no data defined
		if (empty($this->visJsTimeline_items))
		{
			return '';
		}

		return parent::generate();
	}

	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		require_once(TL_ROOT . '/system/config/vis.js.php');
		
		$this->Template->start   = $this->visJsTimeline_start;
		$this->Template->startJs = $this->createJsDate($this->visJsTimeline_start);
		
		$this->Template->end   = $this->visJsTimeline_end;
		$this->Template->endJs = $this->createJsDate($this->visJsTimeline_end);
		
		$this->Template->items = $this->getItems();
		
		if (TL_MODE == 'BE')
		{
			// only load the default JS and CSS in backend, for frontend this will be done in template
			$GLOBALS['TL_JAVASCRIPT']['vis-js-timeline.js'] = 'system/modules/VisJsTimeline/assets/js/vis-js-timeline.min.js';
		}
	}
	
	/**
	 * Create the special JavaScript Date object declaration with zero based month
	 */
	private function createJsDate($intTimestamp)
	{
		if ($intTimestamp == '')
		{
			return '';
		}
		
		return 'new Date('
					. \Date::parse('Y,', $intTimestamp)
					. (\Date::parse('n', $intTimestamp) - 1) . ','
					. \Date::parse('j,', $intTimestamp)
					. \Date::parse('H,i,s', $intTimestamp)
					.')';
		
		return $strJsDate;
	}
	
	/**
	 * Get the itmes for frontend
	 */
	private function getItems()
	{
		$arrItems = array();
		
		foreach ($this->arrItems as $item)
		{
			$item['startJs'] = $this->createJsDate($item['start']);
			$item['endJs'] = $this->createJsDate($item['end']);
			
			if ($item['active'])
			{
				$arrItems[] = $item;
			}
		}
		
		return $arrItems;
	}
}