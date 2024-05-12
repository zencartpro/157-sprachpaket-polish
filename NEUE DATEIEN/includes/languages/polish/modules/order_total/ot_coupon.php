<?php
/**
 * Zen Cart German Specific (zencartpro adaptations)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0 
 * @version $Id: ot_coupon.php 2023-10-29 20:57:14Z webchills $
 */

  define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Kupony rabatowe');
  define('MODULE_ORDER_TOTAL_COUPON_HEADER', TEXT_GV_NAMES . '/Kupony rabatowe');
  define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Kupon rabatowy');
  define('MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE', TEXT_GV_REDEEM);
  define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Wpisz Kod Kuponu Rabatowego. Wartość Kuponu Rabatowego zostanie odliczona z wartości zamówienia.</p><p>INFORMACJA: W zamówieniu możesz użyć tylko jednego kuponu rabatowego.</p>');
  define('MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE', 'Kod Kuponu Rabatowego: ');
define('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER', 'REMOVE');
  define('TEXT_REMOVE_REDEEM_COUPON', '');
  define('MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR', ' Dla ustawienia -wliczaj podatek- = true, niepoprawne ustawienie = None');
define('MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS', '<p>Aby usunąć kupon promocyjny, wprowadź tekst ' . TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER . ' i naciśnij ENTER lub RETURN</p>');