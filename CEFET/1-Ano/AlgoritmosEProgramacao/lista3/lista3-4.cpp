#include<iostream>
#include<math.h>
using namespace std;
void bascara(int &A, int &B, int C)
{
    int D;
    int x1;
    int x2;

    D=(B*B)-4*A*C;

    x1=(-B-sqrt(D))/2*A;
    x2=(-B+sqrt(D))/2*A;

    A=x1;
    B=x2;
}
main()
{
    int A, B, C;
    cout << "De o valor de A:\n";
    cin  >> A;
    cout << "De o valor de B:\n";
    cin  >> B;
    cout << "De o valor de C:\n";
    cin  >> C;
    bascara(A, B, C);
    cout << A << "\n" << B;
}
