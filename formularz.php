<?php
session_start();
if (!(isset($_SESSION['login']) and $_SESSION['login'])) {

    header("Location: projekt3/login.php");
    exit;

}
?>
<!DOCTYPE html>

<html lang="pl">
    <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="../main.css">
      <meta name="description" content="Strona ">
      <meta name="keywords" content="cv, damian, czapski, projekt, programowanie, internetowe">
      <meta name="author" content="&copy;2016 Damian Czapski">
      <meta name="copyright" content="(c) 2016 czapskid">
      <meta name="reply-to"  content="czapskid@ee.pw.edu.pl">
      <title>Damian Czapski - Programowanie Internetowe</title>
   </head>
   <body>
<FORM action="formularzSkrypt.php" name= "form1" METHOD="post" onsubmit="if (sprawdzWyslij())  return true; return false" >

   		<div id = "caly_blok">

         <div id = "naglowek">
            Programowanie Internetowe<br>
         </div>


      <div id = "spis_tresci"><ul>
            <li><a href="../index.php">Strona główna</a></li>
            <li><a href="../o_mnie.html">O mnie</a></li>
                     <li><a href="../projekt1.html">Projekt 1</a></li>
                     <li><a href="../projekt2.html">Projekt 2</a></li>
                     <li><a href="../projekt3.php">Projekt 3</a></li>
                     <ul>
                           <li><a href="formularz.php">Formularz</a></li>
                     </ul>
                        <!--
                     <li><a href="projekt4.html">Projekt 4</a></li>
                     <li><a href="projekt5.html">Projekt 5</a></li> -->
                     <li>Projekt 4</li>
                     <li>Projekt 5</li>
                     <li><a href="logout.php">Wyloguj</a></li>
         </ul></div>


         <div id = "tresc">
            <h1>Zadanie 3 - formularz</h1>
            Uzupełnij pola zgodnie z ich opisem, po czym zatwierdź całość przyciskiem "Wyślij".<br><br>

            <script src="skrypt2.js"></script> 

            <table id="formularz">

                <tr>
                    <td>Imię (obowiązkowe)</td>
                    <td>
                        <input type="text" name="Imie" onkeypress="return filtrLiter(event);" id="formularzImie">
                    </td>
                </tr><tr>
                    <td>Nazwisko (obowiązkowe)</td>        
                    <td>
                        <input type="text" name="Nazwisko" onkeypress="return filtrLiter(event);" id="formularzNazwisko">
                    </td>
                </tr><tr>
                    <td>Data urodzenia </td>
                    <td>
                        <input onchange="obliczWiek()" onkeyup="obliczWiek()" type="date" id="formularzKalendarz" />
                    </td>
                </tr><tr>
                    <td>PESEL (obowiązkowe)</td>
                    <td>
                        <input type="text" name="PESEL" onkeypress="return filtrCyfr(event)" id="formularzPESEL">
                    </td>
                </tr><tr>
                    <td>Wiek</td>
                    <td>
                        <input type="text" name="Wiek" id="formularzWiek">
                    </td>
                </tr><tr>
                    <td>Płeć (obowiązkowe)</td>
                    <td>
                        <select name="Plec" id="formularzMenu">
                            <option value="Kobieta">Kobieta</option>
                            <option value="Mężczyzna">Mężczyzna</option>
                        </select>
                    </td>
                </tr><tr>
                    <td>Kierunek studiów</td>
                    <td>
                        <fieldset id="formularzWybor">
                            <legend id = "kierunekTytul">Wybierz kierunek</legend>
                            <input type="radio" value="Informatyka" name="kierunek" checked="checked"/> Informatyka
                            <input type="radio" value="Elektrotechnika" name="kierunek"/> Elektrotechnika
                            <input type="radio" value="Matematyka" name="kierunek"/> Matematyka
                        </fieldset>
                    </td>
                </tr><tr>
                    <td><br>Wyślij obrazek (obowiązkowe)</td>
                    <td><br>
                        <INPUT TYPE="file" id="formularzPlik" name="file" accept=".jpg,.tif,.png,.jpeg,.gif" >
                    </td>
                </tr><tr>
                    <td>Komentarz</td>
                    <td>
                        <br><TEXTAREA name="koment" id="formularzKom" onkeyup="liczZnaki()"></TEXTAREA><br>
                    </td>
                </tr><tr>
                    <td>Liczba znaków</td>
                    <td>
                        <input id="formularzLiczba" type=text readonly name="LimitZnakow" value="0">
                    </td>
                </tr><tr>
                    <td>Zgoda na przetwarzanie danych<br>(obowiązkowe)</td>
                    <td>
                        <input type="checkbox" name="Przetwarzanie" id="formularzCheck" value = "tak"> Wyrażam zgodę
                    </td>
                </tr><tr>
                    <td colspan="2" ><br><div id = "formularzHehe">
<input type="submit" value="Wyślij" id="formularzPrzyc">
					</div></td>
                </tr><tr>
                    <td colspan="2" ><br><div id="formularzOK"></div><br></td>
                </tr>

             </table>
</FORM>

            <div id = "zad2Napis">
               Programowanie Internetowe
            </div>
         </div>



         <div id = "stopka">
            Autorem strony jest Damian Czapski.
         </div>


         </div>

      </body>
</html>