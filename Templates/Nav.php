<?php
//om man är på framsidan och inloggad:
if($_SESSION["site"] == "index") {
	echo '  <nav class="LoggedIn">
				<li><a href="WriteArticle.php">Skriv en artikel</a></li>
				<li><a href="UserPage.php">Mina Uppgifter</a></li>
				<li><a href="Index.php?intent=out">Logga ut</a></li>
			</nav>';
	}
	//om man är på framsidan fast ej inloggad
else if($_SESSION["site"] == "index" && isset($_SESSION["user"])) {
	echo '<nav class="NotLoggedIn">
			<ul>
				<li><a href="LoginOrRegister.php?intent=Register">Registrera</a></li>
				<li><a href="LoginOrRegister.php?intent=LoggaIn">Logga in</a></li>
			</ul>
		  </nav>';
	}
else if($_SESSION["site"] == "LogOrReg") {
	echo '<nav class="RegisterOrLogin">
			<ul>
				<li><a href="Index.php">Startsidan</a>
				<li><a href="LoginOrRegister.php?intent=Register">Registrera</a></li>
				<li><a href="LoginOrRegister.php?intent=LoggaIn">Logga in</a></li>
			</ul>
		  </nav>';
}
//else if... om man är på andra sidor med andra nav menyer
?>
