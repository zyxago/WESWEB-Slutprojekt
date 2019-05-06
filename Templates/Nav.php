<?php
//om man är på framsidan och inloggad:
if($_SESSION["site"] == "index" && isset($_SESSION["user"])) {
	echo   '<nav>
				<li><a href="WriteArticle.php">Skriv en artikel</a></li>
				<li><a href="UserPage.php">Mina Uppgifter</a></li>
				<li><a href="Index.php?intent=out">Logga ut</a></li>
			</nav>';
	}
//om man är på framsidan fast ej inloggad
else if($_SESSION["site"] == "index" && !isset($_SESSION["user"])) {
	echo '<nav class="NotLoggedIn">
			<ul>
				<li><a href="LoginOrRegister.php?intent=Register">Registrera</a></li>
				<li><a href="LoginOrRegister.php?intent=LoggaIn">Logga in</a></li>
			</ul>
		  </nav>';
	}
//om man är på sidan för inloggning eller registrering
else if($_SESSION["site"] == "LogOrReg") {
	echo '<nav class="LogOrReg">
			<ul>
				<li><a href="Index.php">Startsidan</a>
			</ul>
		  </nav>';
}
//om man är på sidan för att skriva artikel
else if($_SESSION["site"] == "write") {
	echo '<nav>
			<ul>
				<li><a href="Index.php">Startsidan</a>
				<li><a href="UserPage.php">Mina Uppgifter</a></li>
				<li><a href="Index.php?intent=out">Logga ut</a></li>
			</ul>
		  </nav>';
}
//om man är på sidan för att ändra användarens uppgifter
else if($_SESSION["site"] == "userPage") {
	echo '<nav>
			<ul>
				<li><a href="Index.php">Startsidan</a>
				<li><a href="WriteArticle.php">Skriv en artikel</a></li>
				<li><a href="Index.php?intent=out">Logga ut</a></li>
			</ul>
		  </nav>';
}
?>
