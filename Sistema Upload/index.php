<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Diretórios e Upload de Arquivos</title>
</head>
<body>
    <h2>Sistema de Upload de Arquivos</h2>
    <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Nome do Cômodo <select name="diretorio">
          <option value="Cozinha">Cozinha</option>
          <option value="Quarto">Quarto</option>
          <option value="Garagem">Garagem</option>
          <option value="Sala">Sala</option>
          <option value="Banheiro">Banheiro</option>
        </select><p>
        <p>Cozinha <input name="imagem1" type="file"/></p>
        <p>Quarto <input name="imagem2" type="file"/></p>
        <p>Garagem <input name="imagem3" type="file"/></p>
        <p><button type="submit">Enviar Imagens</button></p>
    </form>
</body>
</html>