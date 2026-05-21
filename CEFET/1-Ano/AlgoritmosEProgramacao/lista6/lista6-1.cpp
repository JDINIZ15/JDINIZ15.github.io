#include<iostream>
#include<conio.h>
#include<stdlib.h>
#include<time.h>
using namespace std;
main()
{
    int tam, i;
    i=0;
    cout<<"Digite o tamanho do vetor:";
    cin >>tam;
    int A[tam], B[tam];
    while(i<tam)
    {
        cout<<"digite os valores";
        cin >>A[i];
        B[i]=A[i];
        i++;
    }
    i=0;
    while(i<tam)
    {
        cout<<B[i]<<"\n";
        i++;
    }


}
