<?php
//om man är på framsidan och inloggad:
if(1 == 2) {
	echo '  <nav>
				<a href="WriteArticle.php">Skriv en artikel</a>
				<a href="UserPage.php">Mina Uppgifter</a>
				<a href="">Logga ut</a>
			</nav>';
	}
	//om man är på framsidan fast ej inloggad
else if(1 == 1) {
		echo '<nav class="NotLoggedIn">
				<a href="LoginOrRegister.php?intent=Register">Registrera</a>
				<a href="LoginOrRegister.php?intent=LoggaIn">Logga in</a>
			  </nav>';
	}
//else if... om man är på andra sidor med andra nav menyer
?>
