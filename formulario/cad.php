<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Seu Cadastro foi efetuado! </h1>
    </header>
    <main>
        <?php 
        //var_dump($_GET); // Super Variavel Global $_GET, $_POST, $_COOKIES
        // A $_REQUEST é uma junção das 3 citadas acima
        // utilizar preferencialmente o método post

        $nome = $_POST["nome"] ?? ""; 
        $sobrenome = $_POST["sobrenome"] ?? "";
        $dataNascimento = $_POST["dataNascimento"] ?? "";
        $sexo = $_POST["sexo"] ?? "";

        $dataNascimentoObj = new DateTime($dataNascimento);
        $dataNascimentoFormatada = $dataNascimentoObj->format('d/m/Y');
        $dataAtualObj = new DateTime();
        $idade = $dataNascimentoObj->diff($dataAtualObj)->y;
            
        if ($sexo == "F") {
            echo "Bem vinda <strong>$nome $sobrenome</strong>!<br><br>";
            echo "Data de Nascimento:". $dataNascimentoObj->format('d/m/Y')."<br><br>"; //usando método format e ponto para unir 2 elementos
            echo "Idade: $idade anos";
        } elseif ($sexo == "M") {
            echo "Bem vindo <strong>$nome $sobrenome</strong>!<br><br>";
            echo "Data de Nascimento: $dataNascimentoFormatada <br><br>"; //usando oração unificada pela variável
            echo "Idade: $idade anos";
        } else {
            echo "ERRO: Verifique os dados informados!";
        }
            
   
       ?>

    <p><a href="javascript:history.go(-1)">Voltar</a></p>

    </main>
</body>
</html>