#include<iostream>
#include<conio.h>
#include<string>
#include<math.h>
using namespace std;

void adicao(int &nx, int ny, int &dx, int dy)
{
 int nr, dr;
 nr=nx*dy+ny*dx;
 dr=dx*dy;
 nx=nr;
 dx=dr;


}

main()
{
int nx, ny, dx, dy, Nx, Dx;
cout<<"de o valor do primeiro numerador:\n";
cin>>nx;
Nx=nx;
cout<<"de o valor do segundo numerador:\n";
cin>>ny;
cout<<"de o valor do primeiro denominador:\n";
cin>>dx;
Dx=dx;
cout<<"de o valor do segundo denominador:\n";
cin>>dy;
adicao(nx, ny, dx, dy);
cout<<"soma="<<nx<<"/"<<dx<<":\n";
}
