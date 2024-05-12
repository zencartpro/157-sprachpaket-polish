<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: create_account.php 2023-10-29 20:50:16Z webchills $
 */

define('NAVBAR_TITLE', 'Utwórz konto');

define('HEADING_TITLE', 'Informacje o Twoim koncie');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">INFORMACJA:</strong> Jeżeli masz już konto w naszym sklepie, zaloguj się na <a href="%s">TUTAJ</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Dziękujemy, prośba o rejestrację została przesłana do weryfikacji.');
define('EMAIL_SUBJECT', 'Witaj w sklepie ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Szanowny Panie %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Szanowna Pani %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Drogi %s' . "\n\n");


define('EMAIL_WELCOME', 'Witamy w sklepie <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Gratulacje! Aby uczynić twoją następną wizytę w naszym sklepie jeszcze przyjemniejszą specjalnie dla Ciebie stworzyliśmy specjalny Kupon Rabatowy - zobacz poniżej!' . "\n\n");

define('EMAIL_COUPON_REDEEM', 'Aby wykorzystać Kupon Rabatowy, wprowadź ' . TEXT_GV_REDEEM . '<br>  <strong>%s</strong> podczas realizacji procedury zamawiania.' . "\n\n");


define('EMAIL_GV_INCENTIVE_HEADER', 'Mamy dziś dla Ciebie miłą niespodziankę, otrzymałeś' . TEXT_GV_NAME . ' o wartości %s!' . "\n");
define('EMAIL_GV_REDEEM', 'Otrzymany ' . TEXT_GV_NAME . ' posiada następujący ' . TEXT_GV_REDEEM . ' : %s ' . "\n\n" . 'Możesz wprowadzić ' . TEXT_GV_REDEEM . ' podczas realizacji procedury zamawiania po tym jak wybierzesz towary. ');
define('EMAIL_GV_LINK', ' Możesz też zrealizować go od razu klikając w ten odnośnik:  ' . "\n");


define('EMAIL_GV_LINK_OTHER','Wartość środków na jaką opiewa ten  ' . TEXT_GV_NAME . ' zostanie dodana do Twojego konta po zalogowaniu się. Będziesz miał również możliwość wysłać ten  ' . TEXT_GV_NAME . ' swojemu znajomemu. Sposób wykorzystania tych środków jest zależny wyłącznie od Ciebie!' . "\n\n");

define('EMAIL_TEXT', 'Posiadacz konta w naszym sklepie korzysta z dodatkowych funkcji ułatwiających zakupy. Między innymi:' . "\n\n" . '<li><strong>Trwały koszyk na zakupy</strong> - wszystkie dodane produkty są zapamiętane do momentu ich zamówienia lub ręcznego usunięcia.' . "\n\n" . '<li><strong>Osobista książka adresowa</strong> - umożliwia wybranie innych adresów dostawy niż podane podczas rejestracji konta. Jest to doskonały sposób na wysłanie komuś bliskiemu prezentu.' . "\n\n" . '<li><strong>Historia zamówień</strong> - Możesz przeglądać wcześnie złożone zamówienia.' . "\n\n" . '<li><strong>Recenzje produktów</strong> - Możesz pisać recenzje zakupionych produktów widoczne dla wszystkich odwiedzających nasz sklep.' . "\n\n");
define('EMAIL_CONTACT', 'W celu uzyskania pomocy skontaktuj się drogą elektroniczną z właścicielem sklepu: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','Z poważaniem,' . "\n\n" . STORE_OWNER . "\nadministrator sklepu\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");


define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Ten adres email otrzymaliśmy od jednego z naszych klientów podczas jego rejestracji. Jeżeli to nie Ty zakładałeś to konto wyślij wiadomość do %s  ');

