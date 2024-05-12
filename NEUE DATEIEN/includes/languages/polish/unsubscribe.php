<?php
/**
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 
 * @version $Id: unsubscribe.php 2010-08-30 15:05:14Z webchills $
 */

define('NAVBAR_TITLE', 'Wypisanie');
define('HEADING_TITLE', 'Wypisanie z listy subskrybcyjnej Biuletynu informacyjnego');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br />Przykro nam że chcesz się wypisać z listy dysrybucyjnej naszego biuletynu informacyjnego. Jeżeli chodzi ci o swoją prywatność przeczytaj naszą <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">politykę prywatności</span></a>.<br /><br />Subskrybenci naszego biuletynu informacyjnego są informowani na bieżąco o wszystkich nowościach promocjach itp.<br /><br />Jeżeli mimo to nadal chcesz się wypisać kliknij na poniższy przycisk. ');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br />Przykro nam że chcesz się wypisać z listy dysrybucyjnej naszego biuletynu informacyjnego. Jeżeli chodzi ci o swoją prywatność przeczytaj naszą <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">politykę prywatności</span></a>.<br /><br />Subskrybenci naszego biuletynu informacyjnego są informowani na bieżąco o wszystkich nowościach promocjach itp.<br /><br />Jeżeli mimo to nadal chcesz się wypisać kliknij na poniższy przycisk. Zostaniesz przeniesiony na stronę swojego konta gdzie możesz zmienić swoje subskrypcje. Być może będziesz musiał się zalogować.');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br />Twój adres e-mail który został wyświetlony poniżej został usunięty z naszej listy subskrypcyjnej biuletynu informacyjnego na twoje żądanie.<br /><br />');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br />Adres e-mail który został wyświetlony poniżej nie znajdował się w naszej bazie danych albo został już z niej usunięty.  <br /><br />');