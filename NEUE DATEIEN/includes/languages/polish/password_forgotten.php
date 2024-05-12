<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0 
 * @version $Id: password_forgotten.php 2018-04-01 10:05:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Logowanie');
define('NAVBAR_TITLE_2', 'Zapomniane hasło');

define('HEADING_TITLE', 'Przypomnij moje hasło');

define('TEXT_MAIN', 'Jeżeli zapomniałeś hasło podaj swój adres e-mail a my wyślemy ci wiadomość z nowym hasłem.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nowe haslo');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Z adresu ' . $_SERVER['REMOTE_ADDR']  . ' zostało wysłane żądanie nowego hasła.' . "\n\n" . 'Twoje nowe hasło w sklepie \'' . STORE_NAME . '\' to:' . "\n\n" . '   %s' . "\n\n");

define('SUCCESS_PASSWORD_SENT', 'Nowe hasło zostało wysłane na Twój adres e-mail.');