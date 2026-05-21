#include<iostream>
using namespace std;
main()
{
    int l=2;
    int c=3;
    int i=0;
    int j;
    int soma=0;
int mat[l][c];
while(i<l)
{
    j=0;
    while(j<c)
    {
       cout<<"Matriz 1: Digite o valor para a linha "<<i<<" e coluna "<<j<<":\n";
        cin >>mat[i][j];
        soma=mat[i][j]+soma;
        j++;
    }
    i++;

}
cout<<soma;











}
