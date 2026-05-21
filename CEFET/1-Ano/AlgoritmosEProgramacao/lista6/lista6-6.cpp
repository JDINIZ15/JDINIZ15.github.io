#include<iostream>
using namespace std;
void inverte(int A[], int tam)
{
int tam2=tam-1;
int B[tam];
int i=0;
while(i<tam)
{
    B[i]=A[tam2];
    i++;
    tam2--;
}
i=0;
while(i<tam)
{
    A[i]=B[i];
    i++;
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
cin >>A[i];//0 2 // 1 4
i++;
}

inverte(A,tam);

i=0;

while(i<tam)
{
    cout <<A[i]<<"\n";
    i++;
}



}
