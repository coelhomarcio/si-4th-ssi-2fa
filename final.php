<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="./css/main.css">
        <title>Bem-vindo!</title>
    </head>

    <body>
	    <main>
		    <?php
			    include "./Authenticator.php";
			    if (!isset($_POST["loginSecret"]) || !isset($_POST["secret"])) {
				    $message = "<h1>Algo deu errado!</h1>";
				    $message .= "<p>Tente novamente...</p>";
				    echo $message;
			    }
			    else {
				    $message = "<h1>Bem-vindo $_POST[username]!</h1>";
				    echo $message;
				    $authenticator = new Authenticator();
				    $secret = $authenticator->createSecret();
				    if ($authenticator->verifyCode($_POST["secret"], $_POST["loginSecret"], 0))
					    echo "<p>Código de segurança válido!</p>";
				    else
					    echo "<p>Código de segurança inválido!</p>";
			    }
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
