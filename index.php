	<?php
		//ABSOLUTNY POCZATEK SESJI
		session_start();
		//LICZNIK
		if(!isset($_SESSION['page1hits'])){
			$_SESSION['page1hits'] = 1;}
		else{
			$_SESSION['page1hits']++;}
		if(!isSet($_SESSION['page2hits'])){
			$_SESSION['page2hits'] = 0;}
		if(!isSet($_SESSION['page3hits'])){
			$_SESSION['page3hits'] = 0;}
		//USTALENIE ZMIENNYCH POMOCNYCH W LOGOWANIU	
		$_SESSION['hidden'] = "1";
		$_SESSION['zalogowany'] = "nikt";
	?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <style type="text/css">
  body {font-family: Verdana, Arial; font-size: 14px; font-weight: bold; background-color: coral;}
 </style>
</head>
	<body>
		<form action="index.php" method="POST" >
               <fieldset> 
                    <legend>Zaloguj się</legend><br />
                    <label>Login: </label> <input type="text" name="login" /><br />
                    <label>Hasło: </label> <input type="password" name="pass" /><br />
                    <input type="submit" value="Prześlij" >
					<input name= "reset" type="reset"  value="Czyść" >
                </fieldset>    
		</form>


<?php
// MECHANIZM LOGOWANIA
$_SESSION['haslo'] = $_POST['pass'];
$_SESSION['zalogowany'] = $_POST['login'];
if(isset($_SESSION['hidden'])) {
    unset($_SESSION['hidden']);
 
    // Przykład logowania na wartościach z formularza w POST: if(($_POST['login']!="admin")||($_POST['pass']!="992338")){
    if(($_SESSION['zalogowany']!="admin" )||($_SESSION['haslo']!="admin" )){
		echo "Zły login lub hasło, spróbuj ponownie!"; }
    else{header("Location:glowna.php", true); }
}
 
?>
<br>
</br>
WARTOŚĆI SESJI DO WGLĄDU:
Identyfikatorem sesji jest: 
<?php echo session_id(); ?> <br />
Została ustawiona zmienna o nazwie: <span style="color:red"> hidden </span><br />
Wartością zmiennej hidden jest: 
<?php echo $_SESSION['hidden']; ?> <br />
Została ustawiona zmienna o nazwie: <span style="color:red"> zalogowany </span><br />
Wartością zmiennej zlogowany jest: 
<?php echo $_SESSION['zalogowany']; ?> <br />
Została ustawiona zmienna o nazwie: <span style="color:red"> haslo </span><br />
Wartością zmiennej haslo jest: 
<?php echo $_SESSION['haslo']; ?> <br />
<br><br>
<?php
// WARTOŚCI LICZNIKA 
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
