#include<iostream>
#include<math.h>
#include<conio.h>
using namespace std;
 int conta_delta(int a, int b, int c)
 {
 int delta;
 delta = pow(b,2) -4*a*c;
 return delta;
 }
 main()
 {
 int A, B, C;
 cout<<"De o valor de A:\n";
 cin>>A;
 cout<<"De o valor de B:\n";
 cin>>B;
 cout<<"De o valor de C:\n";
 cin>>C;
 cout<<conta_delta(A, B, C);
 getch();


 }
