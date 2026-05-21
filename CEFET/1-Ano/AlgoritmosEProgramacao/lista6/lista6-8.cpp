#include<iostream>
using namespace std;
int maior_vetor(int A[], int tam)
{
    int maior;
    int i=0;
    maior=A[i];
    while(i<tam)
    {
        if(A[i]>maior)
        {
            maior=A[i];
        }
        i++;
    }
    return maior;
}
main()
{
    int tam;
    int i=0;
    cout<<"Digite o tamanho do vetor:\n";
    cin >>tam;
    int A[tam];
    while(i<tam)
    {
        cout<<"Digite o valor do vetor";
        cin >>A[i];
        i++;
    }
    cout<<maior_vetor(A,tam);
}
