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
	        <?php
	            if (!isset($_POST["username"]) || !isset($_POST["password"]))
	                $message = "<h1>Algo deu errado!</h1>";
	            else {
		            $message = "<h1>Cadastrado com sucesso!</h1>";
		            $message .= "<p>Nome de usuário: \"$_POST[username]\"</p>";
	            }
	            echo $message;
	        ?>
	        <form action="./index.php" method="post">
		        <?php
			        include "./isset.php";
		        ?>
	            <input type="submit" value="Voltar para Home">
	        </form>
	    </main>
    </body>

</html>
