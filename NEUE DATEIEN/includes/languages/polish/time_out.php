<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: time_out.php 2023-10-29 07:49:16Z webchills $
 */

define('NAVBAR_TITLE', 'Brak wymaganych informacji');
define('HEADING_TITLE', 'Brak informacji o użytkowniku - musisz się najpierw zalogować na swoim koncie lub dokonać rejestracji!');
define('HEADING_TITLE_LOGGED_IN', 'Sesja Wygasła - zostałeś automatycznie wylogowany. Musisz się zalogować ponownie.');
define('TEXT_INFORMATION','Przepraszamy, ale ze względów bezpieczeństwa musieliśmy przerwać połączenie,
aby uniemożliwić osobom nieupoważnionym uzyskanie dostępu do danych logowania..
  <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">Login</a>
  Koszyk zakupów zostanie przywrócony'.
  (DOWNLOAD_ENABLED == 'true' ? ', Pobrałeś(-aś) artykuły i chcesz je otrzymywać' : '') . ',
  Przejdź do <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Moje konto</a>, aby wyświetlić swoje zamówienie.');
define('TEXT_INFORMATION_LOGGED_IN', 'Jesteś zalogowany na swoje konto i możesz teraz kontynuować zakupy. Wybierz pozycję menu.');
define('HEADING_RETURNING_CUSTOMER', 'Login');
