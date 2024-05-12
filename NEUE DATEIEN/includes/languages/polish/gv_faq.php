<?php
/**

 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_faq.php 2022-11-14 11:53:16Z webchills $
 */

define('NAVBAR_TITLE', TEXT_GV_NAME . ' FAQ');
define('HEADING_TITLE', TEXT_GV_NAME . ' FAQ');

define('TEXT_INFORMATION', '<a id="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1').'">Jak zakupić ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2').'">Jak komuś podarować ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3').'">Jak zrealizować ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4').'">Dostałeś w prezencie ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5').'">Gdy wystąpi problem...</a><br />
');
define('SUB_HEADING_TITLE_1','Jak zakupić ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_1', TEXT_GV_NAMES . ' (nazywane dalej Bonami) są kupowane tak samo jak inne produkty w naszym sklepie. Można za nie
  zapłacić używając standardowych sposobów płatności dostępnych w sklepie.
  Gdy dokonasz zakupu wartość Bonów będzie dodana do twojego własnego Rachunku
   Bonów. Jeżeli masz środki na Rachunku Bonów zauważysz że ich wartość pokazywana jest przy dokonywaniu zakupów jak również 
   masz możliwość wysłania ich mailem.');
  
define('SUB_HEADING_TITLE_2','Jak komuś podarować ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_2','Aby podarować komuś ' . TEXT_GV_NAME . ' musisz udać się na stronę Wyślij ' . TEXT_GV_NAME . '.Odnośnik do wysłania znajdziesz w boksie Koszyka po prawej stronie niemal na każdej stronie.
  Gdy wysyłasz ' . TEXT_GV_NAME . 'musisz podać następujące dane.
  Nazwisko i adres email osoby której go wysyłasz oraz wartość bonu
  (Nie musisz wysyłać całej wartości bonu - możesz tylko część ze środków dostępnych na Rachunku Bonów).
  Dodaj też krótką wiadomość która pokaże się w mailu.
 Upewnij się że podałeś poprawne dane - będziesz mieć możliwość poprawić te dane jeszcze przed wysłaniem.');
  
  define('SUB_HEADING_TITLE_3','Jak zrealizować ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT_3','Jeżeli masz środki na Rachunku Bonów możesz je wykorzystać 
  do zakupów w sklepie. Na etapie zamawiania zobaczysz dodatkowe pole. Podaj w nim kwotę która zostanie
  pobrana z Rachunku i w efekcie o tyle mniej będziesz mieć do zapłacenia. 
  Zauważ że nadal będziesz mógł wskazać sposób zapłaty jeżeli na Rachunku nie będziesz mieć wystarczającej  
  ilości środków aby pokryś koszt zakupów.
  Jeżeli masz na Rachunku więcej środków niż wynosi suma zamówienia z koszyka różnica pozostanie na Rachunku i będziesz mógł
  z niej skorzystać przy następnych zakupach.');
  
  define('SUB_HEADING_TITLE_4','Dostałeś w prezencie  ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT_4','Jeżeli otrzymasz ' . TEXT_GV_NAME . 'mailem będzie tam informacja na temat 
  tego kto ci go wysłał oraz prawdopodobnie krótka informacja przekazana od nadawcy. Email ten oprócz tego będzie zawierał również
  ' . TEXT_GV_REDEEM . '. Dobrze jest sobie go wydrukować bo może się przydać. Możesz zrealizować
  ' . TEXT_GV_NAME . ' na dwa sposoby.<br /><br />
  1. Klikjąc na link zawarty w mailu zostaniesz przeniesiony na stronę Realizacji Bonów w naszym sklepie
  Zostaniesz poproszony o założenie konta zanim otrzymany przez ciebie ' . TEXT_GV_NAME . ' będzie zatwierdzony i 
  dodany do twojego Rachunku Bonów. Gdy to nastąpi będziesz mógł wydać pieniądze przekazane bonem na produkty z naszego sklepu.
  <br /><br />
  2. Podczas procedury zamawiania na tej samej stronie gdzie wybiera się sposób zapłaty będzie dodatkowe pole w którym możesz podać
  ' . TEXT_GV_REDEEM . '. Gdy wprowadzisz ' . TEXT_GV_REDEEM . ' i klikniesz przycisk realizacji kod zostanie sprawdzony a następnie dodany do 
  twojego Rachunku Bonów. Potem możesz wykorzystać tą kwotę na zakupy w naszym sklepie. Aby szybko uzupełnić swój osobisty rachunek wartością otrzymanego Bonu Towarowego możesz również wpisać w poniższym okienku jego kod, po czym wybrać przycisk "Realizuj". Jeśli nie jesteś zalogowany w sklepie, zostaniesz przeniesiony na stronę logowania, po czym po poprawnym zalogowaniu się automatycznie Twój Rachunek Bonów zostanie uzupełniony o odpowiednią wartość.');
  
  define('SUB_HEADING_TITLE_5','Gdy wystapi problem...');
  define('SUB_HEADING_TEXT_5','Jeżeli będziesz mieć jakieś problemy skontaktuj się z obsługą sklepu 
  wysyłając wiadomość na adres '. STORE_OWNER_EMAIL_ADDRESS . '. Pamiętaj aby podać możliwie najwięcej informacji na temat
  problemów które wystąpiły. ');
  
  define('SUB_HEADING_TITLE_0','');
  define('SUB_HEADING_TEXT_0','Wybierz któreś z pytań.');



define('TEXT_GV_REDEEM_INFO', 'Dodaj do swojego osobistego rachunku<br /> otrzymany ' . TEXT_GV_NAME . ' : ');
  define('TEXT_GV_REDEEM_ID', 'Wpisz dokładnie kod:');