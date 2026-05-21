#include<iostream>
#include<math.h>
using namespace std;

int tipoDoImc(float peso, float altura)
{
    float imc = peso/ pow(altura, 2);
    if(imc < 25)
    {
        return 0;
    }

    if(imc < 30)
    {
        return 1;
    }

    if( imc < 35)
    {
        return 2;
    }

    if(imc < 40)
    {
        return 3;
    }
     else
    {
        return 4;
    }
}
main()
{
    float peso, altura;
    cout <<"digite seu peso:";
    cin  >>peso;
    cout <<"digite sua altura:";
    cin  >>altura;
    switch (tipoDoImc(peso, altura))
    {
        case 0: cout <<  "Ausente";
        break;
        case 1: cout <<"sobrepeso";
        break;
        case 2: cout <<" obesidade grau 1";
        break;
        case 3: cout <<" obesidade grau 2";
        break;
        case 4: cout <<"obesidade morbida";
        break;
    }

}
















