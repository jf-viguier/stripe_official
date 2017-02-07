<?php
/**
 * 2007-2017 PrestaShop
 *
 * DISCLAIMER
 ** Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2015 PrestaShop SA
 * @license   http://addons.prestashop.com/en/content/12-terms-and-conditions-of-use
 * International Registered Trademark & Property of PrestaShop SA
 */
global $useSSL;
$useSSL = true;
if (!file_exists(dirname(__FILE__).'/../../config/config.inc.php')
    || !file_exists(dirname(__FILE__).'/../../init.php')
) {
    exit;
}
require dirname(__FILE__).'/../../config/config.inc.php';
require dirname(__FILE__).'/../../init.php';
$stripe = Module::getInstanceByName('stripe_official');

print_r($stripe->l('The verification process is complete and the window will close shortly'));
