<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        
             $nome = $_GET["nome"] ?? "Sem nome,";
             $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
             echo "<p>Seja bem vindo ao meu site, <strong>$nome $sobrenome!</strong></p>";
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </main>
</body>
</html>