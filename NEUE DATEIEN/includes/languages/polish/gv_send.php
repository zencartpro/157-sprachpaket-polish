<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_send.php 2024-04-12 18:52:16Z webchills $
 */

define('HEADING_TITLE', 'Wyślij Kupon podarunkowy');
define('HEADING_TITLE_CONFIRM_SEND', 'Wysyłanie 'Kupon podarunkowyPotwierdzenie');
define('HEADING_TITLE_COMPLETED', 'Kupon podarunkowy Wysłany');
define('NAVBAR_TITLE', 'Wyślij Kupon podarunkowy');
define('EMAIL_SUBJECT', 'Wiadomość do ' . STORE_NAME);
define('HEADING_TEXT','<br />Uzupełnij poniższe dane tak abyśmy mogli wysłać Kupon podarunkowy . Aby uzyskać na ten temat więcej informacji zobacz <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_MESSAGE', 'Twoja wiadomość:'); 


define('ENTRY_AMOUNT', 'Wysyłany Kupon podarunkowy ma mieć wartość:');
define('ERROR_ENTRY_TO_NAME_CHECK', '&nbsp;&nbsp;<span class="errorText">Popraw Imię odbiorcy</span>');
define('ERROR_ENTRY_AMOUNT_CHECK', '&nbsp;&nbsp;<span class="errorText">Niewłaściwa kwota</span>');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', '&nbsp;&nbsp;<span class="errorText">Niepoprawny adres e-mail</span>');
define('MAIN_MESSAGE', 'Zdecydowałeś wysłać Kupon podarunkowy na kwotę %s do %s (adres e-mail %s).<br /><br /> Zobacz jak będzie wyglądać treść wysyłanego listu, i jeśli będziesz chciał dokonać zmian, użyj przycisku <strong>Edytuj</strong>.<br /><br />Wysyłany list będzie wyglądał jak poniżej:<br /><br />');
define('SECONDARY_MESSAGE', 'Witaj %s,<br><br>' . 'Ta wiadomość oznacza że otrzymałeś Kupon podarunkowy wart %s a obdarował cię nim %s.');
define('PERSONAL_MESSAGE', '%s pisze jeszcze:');
define('TEXT_SUCCESS', 'Gratulacje - Kupon podarunkowy  został wysłany.');
define('TEXT_SEND_ANOTHER', 'Czy wysyłasz kolejny Kupon podarunkowy?');


define('EMAIL_GV_TEXT_SUBJECT', 'Prezent od %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Gratulacje - właśnie dostałeś   Kupon podarunkowyo wartości %s');
define('EMAIL_GV_FROM', 'Ten Kupon podarunkowy wysłał ci %s');
define('EMAIL_GV_MESSAGE', 'i napisał jeszcze: ');
define('EMAIL_GV_SEND_TO', 'Cześć, %s');
define('EMAIL_GV_REDEEM', 'Aby zrealizować ten Kupon podarunkowy, kliknij w poniższy odnośnik. Zapisz sobie ' . TEXT_GV_REDEEM . ': %s  .To na wszelki wypadek - gdybyś miał jakieś problemy.');
define('EMAIL_GV_LINK', 'W celu realizacji kliknij');

define('EMAIL_GV_FIXED_FOOTER', 'JW przypadku problemów z realizacją bonu podarunkowego za pośrednictwem tego łącza, można wprowadzić numer bonu podarunkowego podczas procesu składania zamówienia.<br><br>');
define('EMAIL_GV_SHOP_FOOTER', '');