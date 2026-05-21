#include<iostream>
using namespace std;
main()
{
    int l;
    int c;
    int i=0;
    int j;
    int soma=0;
cout<<"digite o valor de linhas:\n";
cin >>l;
cout<<"digite o valor de colunas:\n";
cin >>c;
int A[l][c];
while(i<l)
{
    j=0;
    while(j<c)
    {
       cout<<"Matriz 1: Digite o valor para a linha "<<i<<" e coluna "<<j<<":\n";
        cin >>A[i][j];
        soma=A[i][j]+soma;
        j++;
    }
    i++;
}
soma=soma/(c*l);
cout <<soma;
}
