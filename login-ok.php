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
		    <?php
			    if (!isset($_POST["loginUsername"]) || !isset($_POST["loginPassword"])) {
				    $message = "<h1>Algo deu errado!</h1>";
				    $message .= "<p>Tente novamente...</p>";
				    echo $message;
			    }
			    else {
				    if ($_POST["loginUsername"] !== $_POST["username"] ||
					    $_POST["loginPassword"] !== $_POST["password"]) {
					    $message = "<h1>Algo deu errado!</h1>";
					    $message .= "<p>Nome de usuário e/ou senha inválidos</p>";
					    echo $message;
				    }
				    else {
					    $message = "<h1>Acesso bem sucedido!</h1>";
					    $message .= "<p>Nome de usuário: \"$_POST[username]\"</p>";
					    echo $message;
					    include "./Authenticator.php";
					    $authenticator = new Authenticator();
					    $name = "Coelho";
					    $secret = $authenticator->createSecret();
					    $title = "coelhomarcio.github.io";
					    $qrCodeUrl = $authenticator->getQRCodeGoogleUrl($name, $secret, $title);
					    echo "<figure><img src=\"$qrCodeUrl\" alt=\"QR Code\">";
					    echo "<figcaption>Use um aplicativo autenticador como o " .
						    "Google Authenticator ou Microsoft Authenticator para " .
						    "capturar o QR Code e validar o acesso</figcaption></figure>";
		    ?>
		    <form action="./final.php" method="post">
			    <label for="loginSecret">Digitar código de segurança</label>
			    <input type="text" id="loginSecret" name="loginSecret"
			           minlength="6" maxlength="6" required>
			    <input type="hidden" name="secret"
			           value="<?php echo "$secret"; ?>">
			    <input type="submit" value="Validar código">
			    <?php
				    include "./isset.php";
			    ?>
		    </form>
					    <?php
				    }
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
