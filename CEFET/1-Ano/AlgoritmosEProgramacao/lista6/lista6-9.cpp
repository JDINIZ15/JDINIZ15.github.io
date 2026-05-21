#include<iostream>
using namespace std;
main()
{
int l, c;
int i = 0;
int j = 0;
cout<<"Digite a quantidade de linhas das matrizes:\n";
cin >>l;
cout<<"Digite a quantidade de colunas das matrizes:\n";
cin >>c;
int A[l][c];
int B[l][c];
int soma[l][c];
while(i<l)
{
    j=0;
    while(j<c)
    {
        cout<<"Matriz 1: Digite o valor para a linha "<<i<<" e coluna "<<j<<":\n";
        cin >>A[i][j];
        cout<<"Matriz 2: Digite o valor para a linha "<<i<<" e coluna "<<j<<":\n";
        cin >>B[i][j];
        soma[i][j]=A[i][j]+B[i][j];
        j++;
    }
    i++;

}
i=0;
while(i<l)
{
    j=0;
    while(j<c)
    {
        cout<<soma[i][j];
        j++;
    }
    i++;
}
}
