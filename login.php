<?php

	//var_dump($_GET);
	
	//echo "<br>";
	
	//var_dump($_POST);
	
		$singupEmailError = "*";

	//kas keegi vajutas nuppu ja see on olemas
	
	if (isset($_POST["singupEmail"])) {
		
		//on oleam
		// kas epost on tühi
		if (empty($_POST["sinupEmail"])) {
			// on tühi
			
			$singupEmailError = "*Väli on kosustuslik";
		}
	}
	
	//////////////////////////////////////////////////////
	
			$singupPasswordError = "*";

	
	if (isset($_POST["singupPassword"])) {
		

		if (empty($_POST["sinupPassword"])) {

		
			$singupPasswordError = "*Väli on kosustuslik";
		}
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

	<h1>Logi sesse</h1>
	
	<form method="POST" >
	    <label>E-post</label><br>
		<input name="loginEmail" type="email">
		
		<br><br>
		
		<label>Parool</label><br>
		<input name="loginPassword" type="password">
		
		<br><br>
		
		<input type="submit" value="Logi sisse">
		
	</form>
	
	
	<h1>Loo kasutaja</h1>
	
	<form method="POST" >
		<input name="singupEmail" placeholder="E-post" type="email">  <?php echo $singupEmailError; ?>
		
		<br><br>
		
		<input name="singupPassword" placeholder="Parool" type="password">  <?php echo $singupPasswordError; ?>
		
		<br><br>
		
		<input type="submit" value="Loo kasutaja">
		
	</form>
		
	</body>
</html>

