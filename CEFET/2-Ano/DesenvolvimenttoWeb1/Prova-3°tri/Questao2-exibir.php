<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição</title>
</head>
<body>
    <?php
 $senha1 ="252525";
 $senha1crip = sha1($senha1);
 $senha2crip = sha1($_GET["senha"]);
 if($senha1crip == $senha2crip){
    echo "Senha Válida";
 }
else{
    echo"Senha invalida";
}

    ?>
</body>
</html>