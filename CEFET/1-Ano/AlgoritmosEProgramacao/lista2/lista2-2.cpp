#include<iostream>
#include<math.h>
#include<conio.h>
using namespace std;
float converter_temperatura(float celsius)
{
   float resultado;
   resultado=1.8*celsius+32;
   return resultado;
}
main()
{
float c;
 cout<<"digite uma temperatura em celsius para ser convertida em fahrenheit:\n";
 cin>>c;
 cout<<"sua temperatura em fahrenheit e\n"<< converter_temperatura(c);
 getch();
}
