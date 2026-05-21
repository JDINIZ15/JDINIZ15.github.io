#include <iostream>
#include <string>
using namespace std;

void info(string nome, int dia, int mes, int ano, char chefe, float salario)
{
    cout <<"Nome:"<<nome<<"\nData de nascimento:"<<dia<<"/"<<mes<<"/"<<ano<<"\nSalario:R$"<<salario<<"\nE chefe:(S ou N)"<<chefe;
}

main()
{
    string nome;
    int dia, mes, ano;
    float salario;
    char chefe;
    cout << "********************Cadastro do funcionario********************\n\n\n";
    cout << "Nome do funcionario:\n";
    cin  >> nome;
    cout << "\nData de nascimento:(dd/mm/aaaa)\n";
    cout << "Dia:\t";
    cin  >> dia;
    cout << "mes:\t";
    cin  >> mes;
    cout << "ano:\t";
    cin  >> ano;
    cout << "\nSalario:\n";
    cin  >> salario;
    cout << "O funcionario e chefe da empresa?(S ou N)\n";
    cin  >> chefe;

    info(nome, dia, mes, ano, chefe, salario);



}

