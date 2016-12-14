<?php 
@$Imie=$_POST['Imie'];
@$Nazwisko=$_POST['Nazwisko'];
@$PESEL=$_POST['PESEL'];
@$Plec=$_POST['Plec'];
@$Wiek = $_POST['Wiek'];
@$Kierunek = $_POST['kierunek'];
@$Komentarz = $_POST['koment'];

@$tresc = "	Imię: $Imie <br \>	
		Nazwisko: $Nazwisko <br \>
		PESEL:  $PESEL <br \> 
		Wiek:  $Wiek  <br \>   
		Płeć:  $Plec  <br \>
	   	Kierunek studiów: $Kierunek <br \>
		Komentarz: $Komentarz <br \>"; 

echo " $tresc ";

$_SESSION['imie'] = $_POST['Imie'];
$_SESSION['nazwisko'] = $_POST['Nazwisko'];
$_SESSION['pesel'] = $_POST['PESEL'];
$_SESSION['plec'] = $_POST['Plec'];
$_SESSION['wiek'] = $_POST['Wiek'];
$_SESSION['kierunek'] = $_POST['kierunek'];
$_SESSION['koment'] = $_POST['koment'];

echo "Sesyjny komentarz: ";
echo $_SESSION['koment'];

?>
