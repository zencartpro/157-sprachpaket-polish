<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: popup_cvv_help.php 2015-12-23 19:28:14Z webchills $
 */

define('HEADING_CVV', 'Co to jest Kod CVV?');
define('TEXT_CVV_HELP1', '3-cyfrowy kod weryfikacyjny kart Visa, Mastercard, Discover<br /><br />
                    Kod CVV jest dodatkowym zabezpieczeniem transakcji kartami kredytowymi.<br /><br />
                    Kod CVV znajduje się na odwrocie karty kredytowej.
                    Jego dokładne umiejscowienie na karcie prezentuje załączona ilustracja.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', '4-cyfrowy kod weryfikacyjny kart American Express<br /><br />
                    Kod CVV jest dodatkowym zabezpieczeniem transakcji kartami kredytowymi.<br /><br />
                    Kod CVV znajduje się na odwrocie karty kredytowej.
                    Jego dokładne umiejscowienie na karcie prezentuje załączona ilustracja.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Zamknij okno [x]');