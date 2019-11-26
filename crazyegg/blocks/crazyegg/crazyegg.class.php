<?php
namespace Block;
/**
 * crazyegg - Main Class
 * 
 * 
 * 
 * @copyright 2019 Schlix
 *
 * @license MIT
 *
 * @package crazyegg
 * @version 1.0
 * @author  Alip <alip.putra@schlix.com>
 * @link    https://www.schlix.com/
 */
class crazyegg extends \SCHLIX\cmsBlock
{
	public function Run()
	{
    global $__crazy_egg_loaded;
		if ($__crazy_egg_loaded !== 'loaded') // prevent the built-in duplicate blocks feature 
		{
      $account_number = $this->config['int_account_number'];

      $part1 = substr($account_number, 0, 4);
      $part2 = substr($account_number, 4, 4);
      $script_account = $part1.'/'.$part2;
      
			$__crazy_egg_loaded = 'loaded';
			$this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
		}
  }
}
