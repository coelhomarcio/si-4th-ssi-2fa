<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="./css/main.css">
        <title>Acesso</title>
    </head>

    <body>
	    <main>
		    <h1>
			    Acesso
		    </h1>
		    <form action="./login-ok.php" method="post">
			    <label for="loginUsername">Nome de usuário</label>
			    <input type="text" id="loginUsername" name="loginUsername"
			           minlength="6" maxlength="9" required>
			    <label for="loginPassword">Senha</label>
			    <input type="password" id="loginPassword" name="loginPassword"
			           minlength="6" maxlength="9" required>
			    <input type="submit" value="Acessar">
			    <?php
				    include "./isset.php";
			    ?>
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
