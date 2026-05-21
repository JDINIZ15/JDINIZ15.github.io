#include<iostream>
#include<conio.h>
#include<stdio.h>
using namespace std;

enum Ttipo{residencial=1, comercial, movel};

struct Ttelefone{
    enum Ttipo tipo;
    int DDD;
    int num;
};
struct Tagenda{
    string nome;
    struct Ttelefone telefone;

};
main()
{
    struct Tagenda agenda;
    int i;
    cout<<"Defina o tipo do telefone\n1-Residencial\n2-comercial\n3-movel";
    cin >>i;
    agenda.telefone.tipo=(enum Ttelefone)i;

    cout<<"Defina o DDD:";
    cin >>agenda.telefone.DDD;

    cout<<"Defina o numero do telefone:";
    cin >> agenda.telefone.num;


    cout<<"Digite o nome da pessoa";
    scanf("\n");
    getline(cin, agenda.nome);

    cout<<agenda.telefone.DDD<<agenda.telefone.num;

}
