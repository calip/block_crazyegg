<?php
/**
 * crazyegg - Config
 * 
 * 
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<h4><?= ___('Crazy Egg Settings') ?></h4>

<schlix-config:textbox config-key='int_account_number' label='<?= ___('Account Number') ?>' required='required' class='form-control' /> 