<?php
//KKONTYNUACJIA SESJI
session_start();
// LICZNIK WEJSC
if(!isset($_SESSION['page3hits'])){
	$_SESSION['page3hits'] = 1;}
else{
	$_SESSION['page3hits']++;}
if(!isSet($_SESSION['page2hits'])){
	$_SESSION['page1hits'] = 0;}
if(!isSet($_SESSION['page1hits'])){
	$_SESSION['page3hits'] = 0;}
// PROCEDURY NISZCZENIA SESJI
	if(!isset($_SESSION['zalogowany'])){
		header("Location: index.php");}
	else{
		// tu trafiają procedury zamkniecia "Destroy session z pliku sesje strona 5ta
		unset($_SESSION['zalogowany']);
		unset($_SESSION['haslo']);
		if (isset($cookie[session_name()])){
			setcookie(session_name(), '', time() - 360);}
			//header("Location: index.php");
		}
		
// HEADER I FORMULARZ		
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <style type="text/css">
  body {font-family: Verdana, Arial; font-size: 14px; font-weight: bold; background-color: coral;}
 </style>
</head>
	<body>
		<form action="logout.php" method="POST" >
               <fieldset> 
                    <legend>Właśnie się wylogowałeś</legend><br />
							<?php 
								if(session_destroy()){
									echo("Sesja została zakończona.");echo "<br />";}
								else{
									echo("Próba zakończenia sesji nie powiodła się.");echo "<br />";}
					 ?>
                    <label>Przejdź do strony logowania: </label> <a href = "index.php"> Zaloguj się</a><br />
                </fieldset>    
		</form>
												<?php 
												echo "Liczba wizyt na pierwszej stronie: ";
												echo $_SESSION['page1hits'];
												echo "<br />";
												echo "Liczba wizyt na drugiej stronie: ";
												echo $_SESSION['page2hits'];
												echo "<br />";
												echo "Liczba wizyt na trzeciej stronie: ";
												echo $_SESSION['page3hits'];
												?>
</body>
</html>
