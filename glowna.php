<?php
//KONTYNUACJIA SESJI
session_start();
//LICZNIK
if(!isset($_SESSION['page2hits'])){
	$_SESSION['page2hits'] = 1;}
else{
	$_SESSION['page2hits']++;}
if(!isSet($_SESSION['page1hits'])){
	$_SESSION['page1hits'] = 0;}
if(!isSet($_SESSION['page3hits'])){
	$_SESSION['page3hits'] = 0;}
	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
	
	<form action="glowna.php" method="POST" >
	</form>
		<body>
			
		  <div id="title">
			<h1>Oto twoja strona główna</h1>
			<h3>Poniżej masz zdjęcie kota</h3>
			<h2>A nie! To jednak czołg..</h2>
		  </div>

				<div id="content">
					<img src="./t29a.jpg" alt="Zdjęcie t29 w Aberdeen" />
				</div>
						<div id="content">
						  <br><br><br>
						  <h3>Dość tego dobrego <a href = "logout.php"> Wyloguj się </a> </h3>
						</div>
								<div id="footer">
								  <p class="company"><strong>WPRG @ PJATK</strong>2017</p>
								</div>
										<div id="footer">
										TU możemy sprawdzić nasze wartości sesyjne:
										<br>
										Identyfikatorem sesji jest: <?php echo session_id(); ?> <br />
										Została ustawiona zmienna o nazwie:<span style="color:white"> hidden </span><br />
										Wartością zmiennej hidden jest: 
										<?php echo $_SESSION['hidden']; ?> <br />
										Została ustawiona zmienna o nazwie:<span style="color:white"> zalogowany </span><br />
										Wartością zmiennej zalogowany jest: 
										<?php echo $_SESSION['zalogowany']; ?> <br />
										Została ustawiona zmienna o nazwie:<span style="color:white"> haslo </span><br />
										Wartością zmiennej haslo jest: 
										<?php echo $_SESSION['haslo']; ?> <br />
										
										<br><br>
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
										</div>
		</body>
</html>
