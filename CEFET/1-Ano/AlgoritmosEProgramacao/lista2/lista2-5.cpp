#include<iostream>
#include<math.h>
#include<conio.h>
using namespace std;
float converter_radiano(float angulo)
{
 float radiano;
 const float pi=3.141592;
 radiano= pi*angulo/180;
 return radiano;
}
float area_do_triangulo(float a, float b, float angulo)
{
    angulo= converter_radiano(angulo);
    float area;
    area= (a*b*sin(angulo))/2;
    return area;
}

main()
{
    float a, b, angulo;
    cout<< " de o valor do lado A:\n";
    cin>> a;
    cout<< " de o valor do lado B:\n";
    cin>> b;
    cout<< "de o valor do angulo:\n";
    cin>>angulo;
    cout<<area_do_triangulo(a, b, angulo);


}
