<?php 
     //print_r($_REQUEST);
    
     include_once('config.php');

     if (isset($_GET['nomee'])|| isset ($_GET['sobrenomee'])) 
     {

        if(strlen($_GET['nomee'])== 0) {

            echo "preencha o seu nome";
        }else  if(strlen($_GET['sobrenomee'])== 0) {

            echo "preencha o seu sobrenome";
        }else {
  
            $nomee = $conn-> real_escape_string ($_GET["nomee"]);
            $sobrenomee = $conn->real_escape_string($_GET["sobrenomee"]);

            $sql_code = "SELECT * FROM cad_usuarios WHERE nome = '$nomee' AND sobrenome = '$sobrenomee'";
            $sql_query = $conn->query($sql_code) or die ("Falha na execusão". pdo::ERRMODE_WARNING);

            $quntidade = $sql_query->num_rows;

            if ($quntidade == 1 ) {

                $usuario = $sql_query->fetch_assoc();

            if(!isset ($_GET)) {
                session_start();

            }

            $_SESSION["nome"] = $usuario["nome"];
            $_SESSION["sobrenome"] = $usuario["sobrenome"];

            header("Location:logado.php");

        
        }else{
            echo "<main>Usuário não cadastrado. Realize o cadastro <a href='cadCliente.php'>aqui</a>.</main>";
        }


     }

    
    }

    
    ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <style>
        body{
            background-image: linear-gradient(to bottom, white, black);
        }
        main{
            width: 200px;
            height: 50px;
            background-color: blue;
            margin: auto;
            border-radius: 5px;
            padding: 10px;
            color: aliceblue;
            
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bolder;
        }
    </style>
   
</head>
<body>

    
</body>
</html>