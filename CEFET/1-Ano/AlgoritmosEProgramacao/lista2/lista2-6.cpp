#include<iostream>
#include<math.h>
#include<conio.h>
using namespace std;
float calcular_pontos(float xa, float xb, float ya, float yb)
{
 float conta =(sqrt(pow((xa-xb),2)+pow((ya-yb),2)));
 return conta;
}
main()
{
float xa, xb, ya,yb;
cout<< "digite o valor de xa:\n";
cin>>xa;
cout<< "digite o valor de xb:\n";
cin>> xb;
cout<< "digite o valor de ya:\n";
cin>>ya;
cout<< "digite o valor de yb:\n";
cin>>yb;
cout<<calcular_pontos(xa, xb, ya,yb);
getch();
}
