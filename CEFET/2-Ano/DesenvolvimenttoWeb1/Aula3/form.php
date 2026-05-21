<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style src = "script.js"></style>
</head>
<body>
   
        <form action="./table.php" method="POST">

            <label for="nome">Insira um nome</label>
            <input type="text" id="nome" name="nome">

            <label for="idade">Insira sua idade</label>
            <input type="number" id="idade" name="idade">

            <label for="estado"> Insira o seu estado</label>
            <select name="estado" id="estado" onchange="carregaCidades(this)">
                <?php
            $estadosDoBrasil = array (
            "" => "",
            "AC" => "Acre",
            "AL" => "Alagoas",
            "AP" => "Amapá",
            "AM" => "Amazonas",
            "BA" => "Bahia",
            "CE" => "Ceará",
            "DF" => "Distrito Federal",
            "ES" => "Espírito Santo",
            "GO" => "Goiás",
            "MA" => "Maranhão",
            "MT" => "Mato Grosso",
            "MS" => "Mato Grosso do Sul",
            "MG" => "Minas Gerais",
            "PA" => "Pará",
            "PB" => "Paraíba",
            "PR" => "Paraná",
            "PE" => "Pernambuco",
            "PI" => "Piauí",
            "RJ" => "Rio de Janeiro",
            "RN" => "Rio Grande do Norte",
            "RS" => "Rio Grande do Sul",
            "RO" => "Rondônia",
            "RR" => "Roraima",
            "SC" => "Santa Catarina",
            "SP" => "São Paulo",
            "SE" => "Sergipe",
            "TO" => "Tocantins"
            );                                                                                                                                                                                                                                                                                          

            foreach($estadosDoBrasil as $chave => $elem){
                echo "<option for=".$chave.">".$elem."</option>";                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
            }
            ?>
            </select>

            <label for="cidade">Insira sua cidade</label>
            <input type="text" id="cidade" name="cidade">

            <input type="submit" id="filtrar" name="filtrar">

        </form>
</body>
</html>