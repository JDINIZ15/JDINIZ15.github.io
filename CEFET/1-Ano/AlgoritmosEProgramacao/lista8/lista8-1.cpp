#include<iostream>
#include<conio.h>
using namespace std;

    enum Tsexo{Masculino=1, Feminino};
    enum Testado{Solteiro=1, casado, viuvo, separado, desquitado};

main()
{
    int i, j;

    enum Tsexo sexo;

    enum Testado estado;
    cout<<"Informe seu sexo";
    cin >>i;
    cout<<"Informe seu estado civil";
    cin >>j;
    sexo = (enum Tsexo)i;
    estado = (enum Testado)j;
    switch(i){
    case 1:
        cout<<"Masculino\n";
    break;
    case 2:
        cout<<"Feminino\n;";
    }
    switch(j)
    {
    case 1:
        cout<<"Solteiro";
    break;
    case 2:
        cout<<"Casado";
    break;
    case 3:
        cout<<"Viuvo";
    break;
    case 4:
        cout<<"Separado";
    break;
    case 5:
        cout<<"Desquitado";
    }


}
