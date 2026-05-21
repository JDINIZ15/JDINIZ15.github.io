#include<iostream>
#include<conio.h>
#include<stdio.h>
using namespace std;
enum Tcor{verde=1, amarelo, azul, branco};

struct Tcadeira{
    int coluna;
    enum Tcor cor;
    char fileiras;
};
main()
{
    int i;
    struct Tcadeira cadeira;
    cout<<"Cor:\n1-verde\n2-amarelo\n3-azul\n4-branco";
    cin >>i;
    cadeira.cor=(enum Tcor)i;
    cout<<"fileira'de A a Y':";
    cin >>cadeira.fileiras;
    cout<<"coluna'de 1 a 10':";
    cin >>cadeira.coluna;
    cout<<cadeira.fileiras<<"/"<<cadeira.coluna;
     switch(i)
    {
    case 1:
        cout<<"verde";
    break;
    case 2:
        cout<<"amarelo";
    break;
    case 3:
        cout<<"azul";
    break;
    case 4:
        cout<<"branco";
    }

}
