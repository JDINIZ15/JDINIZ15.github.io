#include<iostream>
#include<conio.h>
#include<stdio.h>
using namespace std;
struct Tracional{
    float denominador;
    float numerador;

};
main()
{
    struct Tracional racional;
    cout<<"numerador:";
    cin >>racional.numerador;
    cout<<"denominador:";
    cin >>racional.denominador;
    cout<<racional.numerador<<"/"<<racional.denominador;

}

