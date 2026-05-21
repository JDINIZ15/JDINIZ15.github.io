#include<iostream>
#include<conio.h>
#include<stdio.h>
using namespace std;
    enum Ttipo{Rua=1, Avenida, Largo, Jardim, Estrada} ;

    struct Tendereco
    {
        enum Ttipo tipoderua;
        string logradouro;
        int num;
        string bairro;
        string cidade;
        string estado;
        int cep;
    }    ;
main()
{
    struct Tendereco endereco;
    int i;

    cout<<"tipo de rua";
    cin >>i;
    endereco.tipoderua = (enum Ttipo) i;


    cout<<"bairro";
    scanf("\n");
    getline(cin, endereco.bairro);

    cout<<"cidade";
    getline(cin, endereco.cidade);

    cout<<"estado";
    getline(cin, endereco.estado);

    cout<<"cep";
    cin >>endereco.cep;

    cout<<"numero da casa";
    cin >>endereco.num;

    cout<<"logradouro";
    getline(cin, endereco.logradouro);





}
