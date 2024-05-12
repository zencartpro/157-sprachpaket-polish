<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: checkout_payment.php 2024-04-19 08:49:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Zamówienie - Krok 1');
define('NAVBAR_TITLE_2', 'Sposób Zapłaty - Krok 2');

define('HEADING_TITLE', 'Krok 2 z 3 - Informacje o płatności');


define('TEXT_SELECTED_BILLING_DESTINATION', 'Wybierz z książki adresowej adres na który mamy wysłać fakturę.');
define('TITLE_BILLING_ADDRESS', 'Adres płatnika:');


define('TEXT_SELECT_PAYMENT_METHOD', 'Wybierz preferowany sposób zapłaty dla tego zamówienia.');
define('TITLE_PLEASE_SELECT', 'Wybierz');


define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Przepraszamy, lecz nie akceptujemy tego typu płatności z Twojego kraju.</span><br />Please contact us for alternate arrangements.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Kontynuuj');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- aby potwierdzić zamówienie.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Warunki sprzedaży</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Proszę zapoznać się z warunkami i zasadami obowiązującymi w sklepie a następnie zaznaczyć kliknięciem myszką pole potwierdzenia. Informacje o Zasadach i warunkach zakupów oraz korzystania z serwisu można przeczytać <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">TUTAJ</span></a>.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Potwierdzam że zapoznałem się i akceptuję warunki i zasady sprzedaży obowiązujące w tym sklepie.</span>');

define('TEXT_YOUR_TOTAL', 'Całkowita kwota');