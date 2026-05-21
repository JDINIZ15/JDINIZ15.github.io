
<html>
<head>
    <title>Aula 4</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Aula do dia 26/11</h1>
    <fieldset>
        <legend>Filtro</legend>
        <form action="tabela.php" method="get" id="filtro">
            <label for="nome">Nome:</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite o seu nome" value="<?= isset($_GET['nome'])?$_GET['nome']:""?>">
            <br>
            <label for="idade">Idade:</label>
            <br>
            <input type="number" id="idade" name="idade" placeholder="Digite a sua idade" value="<?= isset($_GET['idade'])?($_GET['idade']):""?>">
            <br>
            <label for="estado">Estado:</label>
            <br>
            <select id="estado" name="estado" >
            <option value="">Escolha o seu estado de nascência</option>
                <?php
                    $estados = array(
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
                    foreach($estados as $chave => $valor){
                        if($chave == $_GET['estado']){
                            echo "<option value ='" . $chave ."' selected>" . $valor . "</option>";
                        }
                        else{
                            echo "<option value ='" . $chave ."'>" . $valor . "</option>";
                        }
                    }
                ?>
            </select>
            <br>
            <label for="cidade">Cidade:</label>
            <br>
            <select id="cidade" name="cidade">
            <?php
                $cidadesEstados = array(
                    "AC" => array("Rio Branco", "Cruzeiro do Sul", "Sena Madureira", "Tarauacá"),
                    "AL" => array("Maceió", "Arapiraca", "Palmeira dos Índios", "Rio Largo"),
                    "AP" => array("Macapá", "Santana", "Laranjal do Jari", "Oiapoque"),
                    "AM" => array("Manaus", "Parintins", "Itacoatiara", "Manacapuru"),
                    "BA" => array("Salvador", "Feira de Santana", "Vitória da Conquista", "Camaçari"),
                    "CE" => array("Fortaleza", "Caucaia", "Juazeiro do Norte", "Sobral"),
                    "DF" => array("Brasília"),
                    "ES" => array("Vitória", "Vila Velha", "Serra", "Cariacica"),
                    "GO" => array("Goiânia", "Aparecida de Goiânia", "Anápolis", "Rio Verde"),
                    "MA" => array("São Luís", "Imperatriz", "Timon", "Caxias"),
                    "MT" => array("Cuiabá", "Várzea Grande", "Rondonópolis", "Sinop"),
                    "MS" => array("Campo Grande", "Dourados", "Três Lagoas", "Corumbá"),
                    "MG" => array("Belo Horizonte", "Uberlândia", "Contagem", "Juiz de Fora"),
                    "PA" => array("Belém", "Ananindeua", "Santarém", "Marabá"),
                    "PB" => array("João Pessoa", "Campina Grande", "Santa Rita", "Patos"),
                    "PR" => array("Curitiba", "Londrina", "Maringá", "Ponta Grossa"),
                    "PE" => array("Recife", "Jaboatão dos Guararapes", "Olinda", "Caruaru"),
                    "PI" => array("Teresina", "Parnaíba", "Picos", "Floriano"),
                    "RJ" => array("Rio de Janeiro", "São Gonçalo", "Duque de Caxias", "Nova Iguaçu", "Bom Jardim"),
                    "RN" => array("Natal", "Mossoró", "Parnamirim", "Caicó"),
                    "RS" => array("Porto Alegre", "Caxias do Sul", "Pelotas", "Santa Maria"),
                    "RO" => array("Porto Velho", "Ji-Paraná", "Ariquemes", "Vilhena"),
                    "RR" => array("Boa Vista", "Rorainópolis", "Caracaraí", "Alto Alegre"),
                    "SC" => array("Florianópolis", "Joinville", "Blumenau", "Chapecó"),
                    "SP" => array("São Paulo", "Campinas", "Guarulhos", "Santos"),
                    "SE" => array("Aracaju", "Nossa Senhora do Socorro", "Lagarto", "Itabaiana"),
                    "TO" => array("Palmas", "Araguaína", "Gurupi", "Porto Nacional")
                );
                echo "<option value=''>Escolha a sua cidade de nascência</option>";
                $cidadesEstadosSelecionados = $cidadesEstados[$_GET['estado']];
                foreach($cidadesEstadosSelecionados as $valor){
                    echo "<option value ='" . $valor ."'>" . $valor . "</option>";
                }
            ?>
            </select>
            <br>
            <br>
            <button type="submit" id="Filtrar" name="Filtrar">Filtrar</button>
        </form>
    </fieldset>
</body>
</html>