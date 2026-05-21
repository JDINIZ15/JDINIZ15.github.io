<?php
declare(strict_types = 1);

// Inclui as classes (ajuste os caminhos conforme a sua estrutura de pastas)
require_once "Pessoa.php";
require_once "Professor.php";
require_once "ProfessorMestre.php";
require_once "Aluno.php";

echo "<pre>"; // deixa a saída mais organizada

try {
    // ======== TESTE PESSOA ========
    echo "=== Testando Pessoa ===\n";
    $pessoa = new Pessoa("João da Silva", "123.456.789-00", 2299887766);
    echo "Nome: " . $pessoa->getNome() . "\n";
    echo "CPF: " . $pessoa->getCPF() . "\n";
    echo "Telefone: " . $pessoa->getTelefone() . "\n\n";

    // ======== TESTE PROFESSOR ========
    echo "=== Testando Professor ===\n";
    $professor = new Professor("Maria Souza", "321.654.987-00", 22991234567);
    $salario = $professor->calcularSalario(120, 50);

    echo "Nome: " . $professor->getNome() . "\n";
    echo "Horas de aula/mês: 120 \n";
    echo "Valor hora: R$50 \n";
    echo "Salário calculado: R$" . number_format($salario, 2, ',', '.') . "\n\n";

    // ======== TESTE PROFESSOR MESTRE ========
    echo "=== Testando Professor Mestre ===\n";
    $mestre = new ProfessorMestre("Carlos Almeida", "987.654.321-00", 22993456789);
    $mestre->setHorasAulas(100);
    $mestre->setValorSalario(80.0);
    $mestre->setTemaDissertacao("A influência da tecnologia na educação moderna");

    echo "Nome: " . $mestre->getNome() . "\n";
    echo "Tema da dissertação: " . $mestre->getTemaDissertacao() . "\n";
    echo "Salário: R$" . number_format($mestre->calcularSalario(), 2, ',', '.') . "\n\n";

    // ======== TESTE ALUNO ========
    echo "=== Testando Aluno ===\n";
    $aluno = new Aluno("Ana Paula", "159.753.486-00", 22997654321);
    $aluno->setMatricula("2025A1234");

    echo "Nome: " . $aluno->getNome() . "\n";
    echo "Matrícula: " . $aluno->getMatricula() . "\n";
    echo "Telefone: " . $aluno->getTelefone() . "\n";

} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

echo "</pre>";
