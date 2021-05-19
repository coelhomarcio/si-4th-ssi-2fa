<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="./css/main.css">
        <title>Cadastro</title>
    </head>

    <body>
	    <main>
	        <h1>
	            Cadastro
	        </h1>
	        <form action="./register-ok.php" method="post">
	            <label for="username">Nome de usuário (6 à 9 caracteres)</label>
	            <input type="text" id="username" name="username" minlength="6"
	                   maxlength="9" required>
	            <label for="password">Senha (6 à 9 caracteres)</label>
	            <input type="password" id="password" name="password"
	                   minlength="6" maxlength="9" required>
	            <input type="submit" value="Cadastrar">
	        </form>
	        <form action="./index.php" method="post">
		        <?php
			        include "./isset.php";
		        ?>
	            <input type="submit" value="Voltar para Home">
	        </form>
	    </main>
    </body>

</html>
