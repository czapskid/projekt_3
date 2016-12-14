<?php
session_start();
if (!(isset($_SESSION['login']) and $_SESSION['login'])) {

    header("Location: projekt3/login.php");
    exit;

}
?>

<!DOCTYPE html>

<!--
?php
session_start();
if (!(isset($_SESSION['login']) and $_SESSION['login'])) {

    header("Location: projekt3/login.php");
    exit;

}
?>
-->

<html lang="pl">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="main.css">
      <meta name="description" content="Strona ">
      <meta name="keywords" content="cv, damian, czapski, projekt, programowanie, internetowe">
      <meta name="author" content="&copy;2016 Damian Czapski">
      <meta name="copyright" content="(c) 2016 czapskid">
      <meta name="reply-to"  content="czapskid@ee.pw.edu.pl">
      <title>Damian Czapski - Programowanie Internetowe</title>
   </head>   <body>
   		<div id = "caly_blok">

<div id = "naglowek">
            Programowanie Internetowe<br>
         </div>

      <div id = "spis_tresci"><ul>
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="o_mnie.html">O mnie</a></li>
                     <li><a href="projekt1.html">Projekt 1</a></li>
                     <li><a href="projekt2.html">Projekt 2</a></li>
                     <li><a href="projekt3.php">Projekt 3</a></li>
                     <ul>
                           <li><a href="projekt3/formularz.php">Formularz</a></li>
                     </ul>
                        
                     <li>Projekt 4</li>
                     <li>Projekt 5</li>
                     <li><a href="projekt3/logout.php">Wyloguj</a></li>
         </ul></div>


         <div id = "tresc">
            <h1>Projekt 3</h1>
            <p>W zakresie realizacji projektu należy stworzyć 2 programy w języku PHP:<br><br>

1) Program wyświetlający wersję desktopową lub mobilną strony w zależności od wersji przeglądarki.<br><br>

2) Programy do:<br>
- logowania się (user: czapskid, hasło: czapskid),<br>
- wypełnienia formularza z projektu 2 oraz wyświetlenia wpisanych wartości na ekran.<br>
- wartości wpisane do formularza zapamiętać w zmiennych sesyjnych. <br>
- logowanie powinno rozpocząć sesję. Każda nieautoryzowana próba wejścia na inną stronę w obrębie projektu powinna przekierowywać na stronę logowania.<br><br>
Źródła:<br>
<a href = "https://github.com/czapskid/projekt_3">Kod strony</a></li>

         </p>
         </div>



         <div id = "stopka">
            Autorem strony jest Damian Czapski.
         </div>

         </div>
<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fvolt.iem.pw.edu.pl%2F~czapskid%2Fprojekt3.php
">
                  <img src="http://dev.bowdenweb.com/a/i/dev/webcomm/badge-w3c-valid-html5.png" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
               </a>

<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Poprawny CSS!" />
    </a>


      </body>
</html>
