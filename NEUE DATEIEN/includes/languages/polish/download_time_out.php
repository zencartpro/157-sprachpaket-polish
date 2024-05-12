<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: download_time_out.php 2023-10-29 09:49:16Z webchills $
 */

define('NAVBAR_TITLE', 'Pobieranie plików ...');
define('HEADING_TITLE', 'Pobieranie plików ...');

define('TEXT_INFORMATION', 'Przepraszamy, okres ważności linku do pobrania pliku już minął.<br /><br />
  Jeśli chcesz pobrać inny plik, wróć na stronę <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Moje Konto</a> i sprawdź jakie pliki możesz pobrać.<br /><br />
  Jeśli uważasz że pojawienie się tego komunikatu jest błędem, lub masz inne uwagi lub pytania <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">skontaktuj się z administratorem sklepu</a> <br /><br />
  Dziękujemy!
  ');