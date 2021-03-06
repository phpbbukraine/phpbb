<?php
/**
*
* @package testing
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

require_once dirname(__FILE__) . '/base.php';

/**
* @group functional
*/
class phpbb_functional_search_native_test extends phpbb_functional_search_base
{
	protected $search_backend = '\phpbb\search\fulltext_native';

	protected function assert_search_not_found($keywords)
	{
		$this->markTestIncomplete('Native search when fails doesn\'t show the search query');
	}
}
