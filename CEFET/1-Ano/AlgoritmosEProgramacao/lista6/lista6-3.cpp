#include<iostream>
#include<conio.h>
#include<stdlib.h>
#include<time.h>
using namespace std;
main()
{
    int tam, tam2;
    int i=0;
    int i2=0;
cout<<"Digite o tamanho dos vetores:\n";
cin >>tam;
tam2=tam*2;
int A[tam], B[tam], C[tam2];
while(i<tam)
    {
        cout<<"valor de A:\n";
        cin>>A[i];
        cout<<"valor de B:\n";
        cin>>B[i];
        i++;
    }
     i=0;
     while(i<tam)
     {
        C[i] = A[i];
        i++;
        i2++;
     }
     i=0;
    while(i<tam)
     {
        C[i2]=B[i];
        i++;
        i2++;
     }
     i=0;
     while(i<tam2)
     {
        cout<<C[i];
        i++;
     }








}
