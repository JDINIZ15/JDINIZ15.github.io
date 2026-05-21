#include<iostream>
#include<math.h>
#include<conio.h>
using namespace std;
float converter_radiano(float graus)
{
 float radiano;
 const float pi=3.141592;
 radiano= pi*graus/180;
 return radiano;
}
main()
{
 float graus;
 cout<<"de o valor de um angulo em graus";
 cin>> graus;
 cout<<converter_radiano(graus);


}
