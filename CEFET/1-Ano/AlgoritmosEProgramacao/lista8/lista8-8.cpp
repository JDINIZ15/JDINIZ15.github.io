#include<iostream>
#include<conio.h>
using namespace std;
struct Mponto{
    float x;
    float y;

};

struct Mponto calcular_ponto_medio( struct Mponto ponto1, struct Mponto ponto2 )
{
    struct Mponto ponto3;
   float conta1;
   float conta2;
    conta1= ponto1.x+ponto2.x;
    conta2= ponto1.y+ponto2.y;
    ponto3.x=conta1/2;
    ponto3.y=conta2/2;
    return ponto3;
}
main()
{
    struct Mponto ponto1;
    struct Mponto ponto2;
    struct Mponto ponto3;

    cout<<"digite o valor de xi:\n";
    cin>>ponto1.x;
    cout<<"digite o valor de xf:\n";
    cin>>ponto2.x;
    cout<<"digite o valor de yi:\n";
    cin>>ponto1.y;
    cout<<"digite o valor de yf:\n";
    cin>>ponto2.y;
    ponto3=calcular_ponto_medio(ponto1, ponto2);
    cout<<"o ponto medio e"<<ponto3.x<<","<<ponto3.y;




}

