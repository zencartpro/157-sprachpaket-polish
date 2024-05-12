<?php
/**
 * Zen Cart German Specific (158 code in 157)
 
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: login.php 2023-10-29 09:49:16Z webchills $
 */

define('NAVBAR_TITLE', 'Logowanie');
define('HEADING_TITLE', 'Witaj, zaloguj się');

define('HEADING_NEW_CUSTOMER', 'Chcesz założyć nowe konto?<br>Podaj nam informacje niezbędne do fakturowania:');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Załóż konto w sklepie');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Tworząc konto w sklepie ' . STORE_NAME . ' będziesz mógł szybciej robić zakupy, śledzić status swoich zamówień i oglądać historię swoich zakupów.<br /> Pragniemy Cię zapewnić, że dane podane nam podczas rejestracji wykorzystane zostaną jedynie do prawidłowej realizacji Twoich zamówień i są chronione zgodnie z Ustawą o Ochronie Danych Osobowych. Więcej szczegółów na ten temat znajdziesz w panelu "Informacje".');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Posiadasz konto PayPal? Jeśli tak możesz skorzystać z przycisku -PayPal Express Checkout- aby dokonać zakupu bez konieczności zakładania konta w naszym sklepie.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">lub</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Tworząc konto w sklepie ' . STORE_NAME . ' będziesz mógł szybciej robić zakupy, śledzić status swoich zamówień i oglądać historię swoich zakupów.<br /> Pragniemy Cię zapewnić, że dane podane nam podczas rejestracji wykorzystane zostaną jedynie do prawidłowej realizacji Twoich zamówień i są chronione zgodnie z Ustawą o Ochronie Danych Osobowych. Więcej szczegółów na ten temat znajdziesz w panelu "Informacje".');

define('HEADING_RETURNING_CUSTOMER', 'Masz już konto w naszym sklepie?<br /> Zaloguj się tutaj');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Zaloguj się');
define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Jeśli masz już założone konto w <strong>' . STORE_NAME . '</strong> zaloguj się tuataj');



define('TEXT_LOGIN_ERROR', 'Błąd: Adres e-mail i/lub hasło nie zgadzają się.');
define('TEXT_VISITORS_CART', '<strong>INFORMACJA:</strong> Zawartość Twojego &quot;Koszyka gościa&quot; zostanie dodana do Twojego &quot;Koszyka klienta&quot; w momencie zalogowania się na swoim koncie. <a href="javascript:session_win();">[Więcej informacji]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Polityka prywatności</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Proszę zapoznać się z polityką prywatności i następnie zaznaczyć pole wyboru. Szczegółowe informacje o polityce prywatności znajdziesz</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">na tej stronie</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Potwierdzam że zapoznałem się i akceptuję zasady polityki prywatności obowiązujące w tym sklepie.</span>');

define('ERROR_SECURITY_ERROR', 'Wykryto próbę naruszenia bezpieczeństwa podczas logowania.');

define('TEXT_LOGIN_BANNED', 'BŁĄD: Dostęp zabroniony.');
define('HEADING_PAYPAL_CUSTOMER_SPLIT', 'Logowanie i płatność za pomocą PayPal');
define('TEXT_PAYPAL_CUSTOMER_SPLIT', 'Express Checkout w systemie PayPal: Podczas rejestracji w systemie PayPal za pomocą przycisku PayPal Express dane kontaktowe użytkownika przechowywane w systemie PayPal są wykorzystywane do utworzenia konta klienta w naszym sklepie internetowym. Nie musisz wprowadzać swoich danych i przetwarzać płatności za pośrednictwem PayPal.');
