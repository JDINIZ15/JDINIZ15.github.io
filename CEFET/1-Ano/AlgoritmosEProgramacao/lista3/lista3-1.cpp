#include<iostream>
#include<conio.h>
#include<string>
#include<math.h>
using namespace std;
void calcular_ponto_medio(float xi, float yi, float xf, float yf, float &xm, float &ym)
{
   float conta1;
   float conta2;
    conta1= xi+xf;
    conta2= yi+yf;
    xm=conta1/2;
    ym=conta2/2;
}
main()
{
  float xi, yi, xf, yf, xm, ym;
    cout<<"digite o valor de xi:\n";
    cin>>xi;
    cout<<"digite o valor de xf:\n";
    cin>>xf;
    cout<<"digite o valor de yi:\n";
    cin>>yi;
    cout<<"digite o valor de yf:\n";
    cin>>yf;
  calcular_ponto_medio(xi, yi, xf, yf, xm, ym);
    cout<<"o ponto medio e"<<xm<<","<<ym;




}

