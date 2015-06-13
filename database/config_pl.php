<?php
/*
* Dane konfiguracyjne strony zależne od języka
* Więcej: http://opensolution.org/docs/?p=pl-settings
*/
setlocale( LC_CTYPE, 'pl_PL' );

/*
* Id strony startowej (głównej)
* Więcej: http://opensolution.org/docs/?p=pl-settings#start_page
*/
$config['start_page'] = "1";

/*
* Logo strony. Możesz wstawić tu także obrazek stosując kod HTML
* Więcej: http://opensolution.org/docs/?p=pl-settings#logo
*/
$config['logo'] = "Najlepsze<span>.</span><strong>Browarki</strong>";

/*
* Tytuł wyświetlający się w znaczniku TITLE obok nazwy aktualnie przeglądanej podstrony
* Więcej: http://opensolution.org/docs/?p=pl-settings#title
*/
$config['title'] = "Najlepsze.Browarki - przegląd tanich browarów";

/*
* Opis strony wyświetlający się w znaczniku META DESCRIPTION, jeśli strona nie posiada wpisanego opisu meta
* Więcej: http://opensolution.org/docs/?p=pl-settings#description
*/
$config['description'] = "Opis znanych i nieznanych wyrobów browarniczych";

/*
* Slogan, który wyświetla się domyślnie pod logo. Można tu zastosować kod HTML
* Więcej: http://opensolution.org/docs/?p=pl-settings#slogan
*/
$config['slogan'] = "przegląd tanich browarów";

/*
* Treść stopki strony, która domyślnie znajduje się po lewej stronie
* Więcej: http://opensolution.org/docs/?p=pl-settings#foot_info
*/
$config['foot_info'] = 'Wszelkie prawa zastrzeżone';
?>