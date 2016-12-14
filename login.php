<?php

session_start();
if( isset($_SESSION['login']) and  $_SESSION['password']) {

    header("Location: ../index.php");
    exit;
}

if (isset($_POST['login'])  and isset($_POST['password'] )){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $_POST = Array();

    if($login === 'czapskid' and $password ==='czapskid'){
        $_SESSION['login'] = true;
        header("Location: ../index.php");
        exit;
    }

}


?>


<!DOCTYPE html>
<html>



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
<form method="POST" action="<? echo $_SERVER[PHP_SELF] ?>">
    <div id = "naglowek">
        Logowanie
    </div>
    <div id = "tresc">
        <br>Login:
    <input type="text" name="login">
    <br>
        Hasło:
        <input type="password" name="password"><br>
        <br>
        <input type="submit" value="Zaloguj"><br>
    </div>
          <div id = "stopka">
            Autorem strony jest Damian Czapski.
         </div>
</form>


<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fvolt.iem.pw.edu.pl%2F~czapskid%2Fprojekt3%2Flogin.php
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