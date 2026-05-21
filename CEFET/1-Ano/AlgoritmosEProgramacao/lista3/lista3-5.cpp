#include<iostream>
#include<math.h>
using namespace std;
void bascara(int &A, int &B, int C)
{
    int x1;
    int x2;

    x1=A*B*C;
    x2=A*B;

    A=x1;
    B=x2;
}
main()
{
    int A, B, C;
    cout << "De o valor do comprimento:\n";
    cin  >> A;
    cout << "De o valor da largura:\n";
    cin  >> B;
    cout << "De o valor da profundidade:\n";
    cin  >> C;
    bascara(A, B, C);
    cout <<"Volume da agua:"<< A << "\n" << "area do piso:"<<B;
}
