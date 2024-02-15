<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>

        <main>
        <form action="teste.php" method="get">
            <label for="nomee">Nome</label>
            <input type="text" name="nomee" id="idnomee">
            <label for="sabrenomee">Sobrenome</label>
            <input type="text" name="sobrenomee" id="idsobrenomee">
            <input type="submit" value="Enviar">
        </form>
        </main>
    

        <main>
        <form action="cadCliente.php" method="get">
           
            <input type="submit" value="Cadastrar cliente">
        </form>
        </main>

    
</body>
</html>