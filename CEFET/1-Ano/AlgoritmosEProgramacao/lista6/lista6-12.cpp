#include<iostream>
using namespace std;
main()
{
int l;
int c;
int i=0;
int j;
    cout<<"digite o valor de linhas:\n";
    cin >>l;//2
    cout<<"digite o valor de colunas:\n";
    cin >>c;//3
int A[l][c];
int B[c][l];
    while(i<l)
    {
        j=0;
        while(j<c)
        {
            cout<<"Digite o valor para a linha "<<i<<" e coluna "<<j<<":\n";
            cin >>A[i][j];
            j++;
        }
        i++;
    }
    i=0;
    while(i<l)//0
    {
        j=0;//0
        while(j<c)
        {
            B[j][i]=A[i][j];
            cout<<B[j][i]<<"\n";

            j++;
        }
        i++;
    }


}
