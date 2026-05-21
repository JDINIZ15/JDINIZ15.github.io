#include<iostream>
using namespace std;
main()
{
int l=5;
int c=5;
int i=0;
int j;
int A[l][c];
int soma_l4=0;
int soma_c2=0;
int soma_dp=0;
int soma_ds=0;
int soma_td=0;
while(i<l)
    {
        j=0;
        while(j<c)
        {
            cout<<"Digite o valor para a linha "<<i<<" e coluna "<<j<<":\n";
            cin >>A[i][j];
            if(i==3)
            {
                soma_l4=soma_l4+A[i][j];
            }
            if(j==2)
            {
                soma_c2=soma_c2+A[i][j];
            }
            if(i==j)
            {
                soma_dp=soma_dp+A[i][j];
            }
            if(i+j==4)
            {
                soma_ds=soma_ds+A[i][j];
            }

            soma_td=A[i][j]+soma_td;


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
           cout<<A[i][j]<<"\t";
            j++;
        }
        cout<<"\n";3


        i++;
    }

    cout<<soma_l4<<"\n";
    cout<<soma_c2<<"\n";
    cout<<soma_dp<<"\n";
    cout<<soma_ds<<"\n";
    cout<<soma_td<<"\n";
}
