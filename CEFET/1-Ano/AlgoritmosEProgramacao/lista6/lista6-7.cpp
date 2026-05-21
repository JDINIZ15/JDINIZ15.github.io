#include<iostream>
using namespace std;

void mul (A[], tam)
{
    int i=0
    while(i<tam)
    {
        A[i]=A[i]*i;
    }
}
main()
{
int tam;
int i=0;

cout<<"Digite o tamanho do vetor:\n";
cin >>tam;//2

int A[tam];

while(i<tam)
{
cout<<"Digite o valor para o vetor:\n";
cin >>A[i];
i++;
}

multiplicar(A,tam);

i=0;

while(i<tam)
{
    cout <<A[i]<<"\n";
    i++;
}



}
