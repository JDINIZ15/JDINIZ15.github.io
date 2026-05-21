<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
    <style>
        h1{
            font-family: sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Criação de formulário dinamicamente a partir de um array de configuração. </h1>


<?php
    $formulario = array(
        'id'=>'formCadastro',
        'tipo_submit'=>'POST', 
        'url_submit'=>'cadastro.php', 
        'itens'=> array(
            'nome'=>array('tipo'=> 'text', 'nome'=> 'nome', 'label'=> 'Nome', 'placeholder'=> 'Informe seu nome.'),
            'idade'=>array('tipo'=> 'number', 'nome'=> 'idade', 'label'=> 'Idade', 'placeholder'=> 'Informe sua idade.', 'funcao_validacao'=> 'validaIdade'),
            'sexo'=>array('tipo'=> 'radio', 'nome'=> 'sexo', 'label'=> 'Sexo', 'opcoes'=> array("M"=> "Masculino", "F"=>"Feminino", "O"=>"Outros")),
            'esporte_preferido'=>array('tipo'=> 'checkbox', 'nome'=> 'esporte_preferido', 'label'=> 'Esporte Pref.', 'opcoes'=> array("F"=> "Futebol", "V"=>"Vôlei", "N"=>"Natação", "O"=> "Outros"), 'obrigatorio'=>false),
            'cidade_nascimento'=>array('tipo'=> 'text', 'nome'=> 'cidade', 'label'=> 'Cidade de Nasc.', 'placeholder'=> 'Informe a cidade que você nasceu.'),
            'estado_nascimento'=>array('tipo'=> 'select', 'nome'=> 'estado_nascimento', 'label'=> 'Estado de Nasc.', 'opcoes'=> array("RJ"=> "Rio de Janeiro", "SP"=>"São Paulo", "ES"=>"Espírito Santo", "MG"=>"Minas Gerais", "O"=> "Outros")),
            'cpf'=>array('tipo'=> 'number', 'nome'=> 'cpf', 'label'=> 'CPF', 'placeholder'=> 'Informe seu CPF.', 'funcao_validacao'=> 'validaCpf'),
            'descricao'=>array('tipo'=> 'textarea', 'nome'=> 'descricao', 'label'=> 'Descrição', 'placeholder'=> 'Faça uma descrição sobre você.', 'obrigatorio'=>false),
            'botao_enviar'=>array('tipo'=> 'submit', 'nome'=> 'enviar', 'label'=> 'Enviar'),
            'botao_limpar_form'=>array('tipo'=> 'reset', 'nome'=> 'reset', 'label'=> 'Limpar Formulário'),
        )
    );
    //Funçaõ que cria o formulario
    function criaFormulario($x){
        echo "<form action=".$x['url_submit']."method=".$x['tipo_submit']."id=".$x['id'].">";

        foreach($x['itens'] as $chave=>$campo ){
            criaCampos($chave, $campo);
        }

        echo "</form>";
    }

    //função para criar os campos

    function criaCampos($chave, $campo){
        echo"<div class='itemWrapper'>";
            if(($campo['tipo']=="text") || ($campo['tipo']=="number")){
                criaInputSimples($campo, $chave);
            }
            if(($campo['tipo']=="submit") || ($campo['tipo']=="reset") || ($campo['tipo'] == "buttton")){
                criarBotoes($campo, $chave);
            }
            if(($campo['tipo']=="select")){
                criarSelect($campo, $chave);
            }
            if(($campo['tipo']=="checkbox") || ($campo['tipo']=="radio")){
                criarCheckRadio($campo, $chave);
            }
            if(($campo['tipo']=="textarea")){
                criaTextarea($campo, $chave);
            }
        echo"</div>";
    }


    //função para criar os campos text e number
    function criaInputSimples($x, $chave){
            //inseri o label
            echo "<label for=".$x['nome']." > ".$x['label']."</label>";
            //inseri o input
            echo "<input type=".$x['tipo']." name=".$x['nome']." placeholder=".$x['placeholder']." id=".$chave.">";
    }


    //Criar botões
    
    function criarBotoes($x, $chave){

        echo "<button type=".$x['tipo']."id=".$chave."name=".$x['nome'].">".$x['label']."</button>";
    }


    //Criar o select

    function criarSelect($x, $chaves){
        echo "<label for=".$x['nome'].">".$x['label']."</label>";
        echo "<select id=".$chaves."name=".$x['nome'].">";

        foreach($x['opcoes'] as $indice=> $campo){
            echo "<option value=".$indice.">".$campo."</option>";
        }
        echo"</select>";
    }


    //Criar os inputs checkbox e radio

    function criarCheckRadio($x, $chaves){
        echo"<label>".$x['label']."</label>";

        foreach($x['opcoes'] as $indice=>$campo){
            echo"<input type=".$x['tipo']." id=".$x['nome']."_".$indice." name=".$x['nome']." value=".$indice.">";
            echo"<label for=".$x['nome']."_".$indice.">".$campo."</label>";
        }
    }

    //cria textarea
    function criaTextarea ($x, $chave){
        echo"<label for=".$x['nome'].">".$x['label']."</label>";
        echo"<".$x['tipo']. " id=".$chave." name=".$x['nome']." placeholder=".$x['placeholder']."></".$x['tipo'].">";
    }


    criaFormulario($formulario);

?>

</body>
</html>