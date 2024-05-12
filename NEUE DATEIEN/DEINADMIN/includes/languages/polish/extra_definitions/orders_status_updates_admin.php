<?php
/**
 * Zen Cart German Specific
 * Constants used by the zen_update_orders_history function.
 *
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders_status_updates_admin.php 2022-11-14 10:46:14Z webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Aktualizacja statusu zamówienia');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_MALE', 'Szanowny Panie ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_FEMALE', 'Szanowna Pani ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_NEUTRAL', 'Dzień dobry ');
define('OSH_EMAIL_TEXT_UPDATEINFO', 'O statusie zamówienia poinformujemy Cię za pomocą ');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Numer zamówienia:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Szczegóły:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Data zamówienia:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Uwagi: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Twój status zamówienia został zaktualizowany.' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Stan zamówienia nie uległ zmianie:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Stan obecny:</strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Status wiekowy:</strong> %1$s, <strong>Nowy status:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Jeśli masz jakieś pytania, odpowiedz na tego maila.' . "\n");