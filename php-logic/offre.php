<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta nom="viewport" content="width=device-width, initial-scale=1">
	<title>Offre travail</title>
	<link rel="stylesheet" href="../port.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="bodyHome">
	<header class="header">
		<a href="../Portfolio.html" class="logo">Akram.</a>
		<nav class="navbar">
			<a href="../Portfolio.html" class="active">Home</a>
			<a href="../about.html" class="nl">About</a>
			<a href="../services.html" class="nl">Services</a>
			<a href="../portf.html" class="nl">Portfolio</a>
			<a href="../contact.html" class="nl">Contact</a>
            <a href="offre.php" class="nl">Offre Travail</a>
	</header>
	<div class="container_form">
        <form id="form" action="login.php" method="POST">
            <h1>Login pour continuer: </h1>
            <div class="input-control">
                <label for="usernom">Nom utilisateur</label>
                <input id="usernom" nom="usernom" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" nom="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="mdp">Mot de passe</label>
                <input id="mdp"nom="mdp" type="mdp">
                <div class="error"></div>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>	
</body>
