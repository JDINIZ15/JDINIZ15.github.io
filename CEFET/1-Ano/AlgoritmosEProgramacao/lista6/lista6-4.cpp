#include<iostream>
using namespace std;
main()
{
    int i=0;
    int i2=0;
    int tam;
    cout<<"Digite o tamanho do vetor:\n";
    cin >>tam;
    int A[tam], B[tam], C[tam*2];
     while(i<tam)
    {
        cout<<"Digite o valor do vetor A";
        cin >>A[i];
        cout<<"Digite o valor do vetor B";
        cin >>B[i];
        i++;
    }
    i=0;
    while(i<tam)
    {
        C[i2]=A[i];
        i2++;
        C[i2]=B[i];
        i++;
        i2++;
    }
    i=0;
    while(i<(tam*2))
    {
        cout<<C[i];
        i++;
    }
}
