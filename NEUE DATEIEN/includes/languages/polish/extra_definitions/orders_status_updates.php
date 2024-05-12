<?php
/**
 * Constants used by the zen_update_orders_history function.
 *

 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders_status_updates.php 2022-11-14 08:39:16Z webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Aktualizacja zamówienia');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Numer zamówienia:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Szczególy:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Data zamówienia:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Uwagi:: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Twój status zamówienia zostal zaktualizowany:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Stan zamówienia nie ulegl zmianie:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Stan obecny: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Status wiekowy:</strong> %1$s, <strong>Nowy status:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Jesli masz jakies pytania, odpowiedz na tego maila.' . "\n");

define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT', '[BESTELLSTATUS]');