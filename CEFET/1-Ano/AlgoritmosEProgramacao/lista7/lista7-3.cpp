#include<iostream>
#include<string.h>
using namespace std;
int comparar(char A[], char B[])
{
    int i=0;
    while(true)
    {
        if(A[i]<B[i])
        {
            return -1;
        }
        if(A[i]>B[i])
        {
            return +1;
        }

    }
}


main()
{
    string texto, texto2;
    cout << "Digite um texto:\n";
    cin  >> texto;
    cout << "Digite um texto2:\n";
    cin  >> texto2;

    char A[texto.length()];
    strcpy(A, texto.c_str());

    char B[texto2.length()];
    strcpy(B, texto2.c_str());

    texxto(A, B);
    cout<<A;
}
