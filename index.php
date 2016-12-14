<?php
session_start();
if (!(isset($_SESSION['login']) and $_SESSION['login'])) {

    header("Location: ../logowanie/login.php");
    exit;
}
?>



<html lang="pl">
    <head>

      <link rel="stylesheet" href="../main.css">
      <meta name="description" content="Strona ">
      <meta name="keywords" content="cv, damian, czapski, projekt, programowanie, internetowe">
      <meta name="author" content="&copy;2016 Damian Czapski">
      <meta name="copyright" content="(c) 2016 czapskid">
      <meta name="reply-to"  content="czapskid@ee.pw.edu.pl">
      <title>Damian Czapski - Programowanie Internetowe</title>
   </head>
   <body>
      <div id = "caly_blok">
        <div id = "naglowek">
            Programowanie Internetowe<br>
         </div>


      <div id = "spis_tresci"><ul>
            <li><a href="m.index.php">Strona główna</a></li>
            <li><a href="../o_mnie.html">O mnie</a></li>
                     <li><a href="../projekt1.html">Projekt 1</a></li>
                     <li><a href="../projekt2.html">Projekt 2</a></li>
                     <li><a href="../projekt3.php">Projekt 3</a></li>
                     <li>Projekt 4</li>
                     <li>Projekt 5</li>
                     <li><a href="projekt3/logout.php">Wyloguj</a></li>
          <li><a href = "view-source:http://volt.iem.pw.edu.pl/~czapskid/index.php">Źródło strony</a></li>
         </ul></div>


         <div id = "tresc">
            <h1>Strona główna - wersja mobilna</h1>
             <p>Strona ta oraz umieszczone na niej materiały zostały stworzone na potrzeby zaliczenia zajęć z Programowania Internetowego w roku 2016/2017 na wydziale Elektrycznym Politechniki Warszawskiej.</p>
            </div>


          <div id = "stopka">
            Autorem strony jest Damian Czapski.
         </div>
        </div>
      </body>
</html>
