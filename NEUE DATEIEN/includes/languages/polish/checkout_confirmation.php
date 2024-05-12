<?php
/**
 * Zen Cart German Specific (158 code in 157 /zencartpro adaptations)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: checkout_confirmation.php 2024-04-19 15:02:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Zamówienie');
define('NAVBAR_TITLE_2', 'Potwierdzenie');

define('HEADING_TITLE', 'Krok 3 z 3 - Potwierdzenie zamówienia');
define('TEXT_ZUSATZ_SCHRITT3','kliknij przycisk "POTWIERDŹ" aby potwierdzić zamówienie. Dziękujemy!');
define('BRAINTREE_MESSAGE_PLEASE_CONFIRM_ORDER', '<b>Twoja karta kredytowa została pomyślnie zweryfikowana, ale nie dokonano jeszcze płatności. Potwierdź zamówienie za pomocą poniższego przycisku. Dopiero wtedy płatność i zamówienie zostaną zrealizowane.</b>');
define('HEADING_PRODUCTS', 'Zawartość koszyka');
define('NO_COMMENTS_TEXT', 'Brak');
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Ostatni krok</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- kliknij przycisk "POTWIERDŹ" aby potwierdzić zamówienie. Dziękujemy!');
// buttonloesung
define('TABLE_HEADING_SINGLEPRICE','Cena');
define('TABLE_HEADING_PRODUCTIMAGE','Zdjęcie');
define('TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP','Potwierdzam, że zapoznałem się i akceptuję warunki i zasady sprzedaży obowiązujące w tym sklepie <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><u>Regulamin sklepu</u></a>');
define('TEXT_NON_EU_COUNTRIES','Uwaga:<br>Zamówienie zostanie wysłane do kraju spoza Unii Europejskiej. Paczki mogą podlegać opłatom celnym i należnościom przywozowym kraju, do którego zamówienie zostało wysłane. Opłaty te są zawsze obowiązkiem odbiorcy.');
