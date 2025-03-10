<?php

    //Definindo a configuração de caracteres
	header('Content-type: text/html; charset=utf-8');

	//Define Local e Timezone
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');


?>
<!doctype html>
<html lang="pt-br">

	<head>

        <meta charset="UTF-8" />
        
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no" />
        <meta name="description" content="Relógio Digital, desenvolvido por Jefferson Eva" />
        <meta name="author" content="Jefferson Eva" />
        <meta name="keywords" content="relogio, web, desenvolvimento, html, relogio digital">

		<meta name="theme-color" content="#2F4858">
		<meta name="apple-mobile-web-app-status-bar-style" content="#2F4858">
		<meta name="msapplication-navbutton-color" content="#2F4858">

        <link rel="preload" href="css/estilo.css" as="style">
        <link rel="preload" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" as="script">
        <link rel="preload" href="js/relogio.js" as="script">
		
		<link rel="stylesheet" href="css/estilo.css">

        <title>Relógio Digital - By Jefferson Eva</title>
        
    </head>

    <body>

        <div class="relogio">
            <?php include_once "funcoes/hora_exata.php"; ?>
        </div>

        <div class="footer">
            <a href="https://www.agremak.com" target="_blank">agremak.com</a> <?php echo date("Y"); ?>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
	    <script src="js/relogio.js" type="text/javascript"></script>
        
    </body>

</html>