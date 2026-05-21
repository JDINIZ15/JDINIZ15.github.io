#include<iostream>
#include<fstream>
using namespace std;
main()
{
    ofstream saida;
    string nome;
    float nota;

    saida.open("dados1.txt");

    cout<<"Digite o nome do aluno";
    scanf("\n");
    getline(cin, nome);
    saida<<nome;
    cout<<"Insira a nota do aluno";
    cin >>nota;
    saida<<"\n"<<nota;

    saida.close();



    ifstream entrada;
        entrada.open("dados1.txt");
        string nome1, pulalinha;
        float nota1;
        getline(entrada, pulalinha);
        getline(entrada, nome1);
        entrada >> nota1;
        entrada.close();


    ofstream saida1;
    saida1.open("dados2.txt");
    saida1<<nome1;
    saida1<<"\n"<<nota1;

    saida.close();

}
