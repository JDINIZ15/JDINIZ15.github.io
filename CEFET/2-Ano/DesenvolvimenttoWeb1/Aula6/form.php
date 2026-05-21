
<html>
<head>
    <title>Aula 4</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
        <form action="table.php" method="get" id="filtro">
            <label for="nome">Nome:</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do animal" value="<?= isset($_GET['nome'])?$_GET['nome']:""?>">
            <br>
            <label for="classe">Classe:</label>
            <br>
            <select id="classe" name="classe" >
            <option value="">Escolha a classe do animal</option>
                <?php
                    $classes = array(
                        "MA" => "Mamifero",
                        "MAR" => "Marsupial",
                        "RE" => "Repteis",
                        "BA" => "Bactérias",
                    );
                    foreach($classes as $chave => $valor){
                        if($chave == $_GET['classe']){
                            echo "<option value ='" . $chave ."' selected>" . $valor . "</option>";
                        }
                        else{
                            echo "<option value ='" . $chave ."'>" . $valor . "</option>";
                        }
                    }
                ?>
            </select>
            <br>
            <label for="especie">Especie:</label>
            <br>
            <select id="especie" name="especie">
            </select>
            <br>
            <button type="submit" id="Filtrar" name="Filtrar">Filtrar</button>
        </form>
</body>
</html>