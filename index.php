<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="./css/main.css">
        <title>Home</title>
    </head>

    <body>
	    <main>
		    <h1>
			    Home
		    </h1>
		    <form action="./register.php" method="post">
			    <?php
				    include "./isset.php";
			    ?>
			    <input type="submit" value="Cadastrar">
		    </form>
		    <form action="./login.php" method="post">
			    <?php
				    include "./isset.php";
			    ?>
			    <input type="submit" value="Acessar">
		    </form>
	    </main>
    </body>

</html>
