<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: ssl_check.php 2015-12-23 19:28:14Z webchills $
 */

define('NAVBAR_TITLE', 'Weryfikacja bezpieczeństwa');
define('HEADING_TITLE', 'Weryfikacja bezpieczeństwa');

define('TEXT_INFORMATION', 'Wykryliśmy że twoja przeglądarka wygenerowała inny identyfikator sesji SSL (SSL Session ID) niż używany na naszych stronach.');
define('TEXT_INFORMATION_2', 'Ze względów bezpieczeństwa musisz się zalogować na swoje konto ponownie aby kontynuować zakupy.');
define('TEXT_INFORMATION_3','Niektóre przeglądarki jak Konqueror 3.1 nie potrafią generować ID sesji w protokole SSL którym my wymagamy. Jeżeli używasz takiej przeglądarki, zalecamy zainstalowanie innej jak np. <a href="http://www.microsoft.com/ie/" target="_blank">Microsoft Internet Explorer</a>, <a href="http://channels.netscape.com/ns/browsers/download_other.jsp" target="_blank">Netscape</a>, or <a href="http://www.mozilla.org/releases/" target="_blank">Mozilla</a>, wtedy będzie można kontynuować zakupy.');
define('TEXT_INFORMATION_4','Wprowadziliśmy taki sposób zabezpieczenia ponieważ zależy nam bazpieczeństwie Twoich danych - przepraszamy za ewentualne trudności.');
define('TEXT_INFORMATION_5','Prosimy o kontakt z właścicielem sklepu jeżeli macie Państwo jakiekolwiek pytania związane z zagadnieniami bezpieczeństwa transakcji. Towary w naszym sklepie zamawiać można również telefonicznie.');

define('BOX_INFORMATION_HEADING', 'Prywatność i bezpieczeństwo');
define('BOX_INFORMATION', 'Sprawdzamy ID sesji SSL generowanej automatycznie przez twoją przeglądarkę podczas każdego żądania strony w protokole SSL.<br /><br />To upewnia nas że to Ty jesteś osobą która porusza się po stronie używając twojego konta a nie ktoś inny.');