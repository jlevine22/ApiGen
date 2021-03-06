<?php

/**
 * This file is part of the ApiGen (http://apigen.org)
 *
 * For the full copyright and license information, please view
 * the file LICENSE that was distributed with this source code.
 */

namespace ApiGen\Utils\Finder;

use SplFileInfo;


interface FinderInterface
{

	/**
	 * @param string|array $source
	 * @param array $exclude
	 * @param array $extensions
	 * @return SplFileInfo[]
	 */
	function find($source, array $exclude = [], array $extensions = ['php']);

}
