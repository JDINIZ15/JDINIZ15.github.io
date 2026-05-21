#include<iostream>
#include<fstream>
using namespace std;
main()
{
    ofstream saida;
    string nome;
    float nota;
    saida.open("dados22.txt", ios::app);
    cout<<"Digite o nome do aluno";
    getline(cin, nome);
    saida<<"\n"<<nome;
    cout<<"forneca a primeira nota do aluno";
    cin >>nota;
    saida<<"\n"<<nota;
    cout<<"forneca a segunda nota do aluno";
    cin >>nota;
    saida<<"\n"<<nota;

    saida.close();
}
