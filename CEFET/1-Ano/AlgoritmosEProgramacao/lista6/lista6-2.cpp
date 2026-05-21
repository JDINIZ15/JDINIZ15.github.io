#include<iostream>
#include<conio.h>
#include<stdlib.h>
#include<time.h>
using namespace std;
main()
{
    int tam;
    int i=0;
    cout<<"digite o tamanho dos vetores para calcular;";
    cin >>tam;
    int A[tam], B[tam], C[tam];
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
        C[i]=A[i]+B[i];
        cout<<C[i]<<"\n";
        i++;
    }


}
