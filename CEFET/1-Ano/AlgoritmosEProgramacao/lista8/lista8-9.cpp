#include<iostream>
#include<conio.h>
using namespace std;

struct Mfracao{
    float denominador;
    float numerador;
} ;
struct Mfracao adicao(struct Mfracao fracao1, struct Mfracao fracao2 )
{
     struct Mfracao fracao3;
     fracao3.numerador=fracao1.numerador*fracao2.denominador+fracao2.numerador*fracao1.denominador;
     fracao3.denominador=fracao2.denominador*fracao1.denominador;
     return fracao3;


}

main()
{
    struct Mfracao fracao1;
    struct Mfracao fracao2;
    struct Mfracao fracao3;
    cout<<"de o valor do primeiro numerador:\n";
    cin>>fracao1.numerador;
    cout<<"de o valor do segundo numerador:\n";
    cin>>fracao2.numerador;
    cout<<"de o valor do primeiro denominador:\n";
    cin>>fracao1.denominador;
    cout<<"de o valor do segundo denominador:\n";
    cin>>fracao2.denominador;
    fracao3=adicao(fracao1, fracao2);
    cout<<"soma="<<fracao3.numerador<<"/"<<fracao3.denominador<<":\n";
    }

