<?php
/**
 * crazyegg - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($account_number): ?>
    <script>
        setTimeout(function(){var a=document.createElement("script");
        var b=document.getElementsByTagName("script")[0];
        a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/<?= ___h($script_account) ?>.js"+Math.floor(new Date().getTime()/3600000);
        a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
    </script>
<?php else: ?>
    <!-- NOTE - Crazyegg Account number was not set up correctly - please add account number -->
    <script>console.error("Crazyegg Account number has not been set from configuration");</script>
<?php endif ?>