#include<iostream>
using namespace std;
main()
{
int l=4;
int c=4;
int i=0;
int j;
int A[l][c];
int soma=0;
while(i<l)
    {
        j=0;
        while(j<c)
        {
            cout<<"Digite o valor para a linha "<<i<<" e coluna "<<j<<":\n";
            cin >>A[i][j];
            if(i>j)
            {
                soma=A[i][j]+soma;
            }
            j++;
        }
        i++;
    }
    cout<<soma;




}
