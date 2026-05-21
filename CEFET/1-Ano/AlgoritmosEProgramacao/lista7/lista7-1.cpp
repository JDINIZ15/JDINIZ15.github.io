#include<iostream>
#include<string.h>
using namespace std;
void texxto(char A[], char B[])
{
    int j = 0;
    int i = 0;
    while(true)
    {
     if(A[j] == '\0')
     {
         while (i <= strlen(B))
         {
             A[j]=B[i];
             j++;
             i++;
         }
         break;

     }
        j++;
    }
}

main()
{
    string texto, texto2;
    cout << "Digite um texto:\n";
    cin  >> texto;
    cout << "Digite um texto2:\n";
    cin  >> texto2;

    char A[texto.length() + texto2.length()];
    strcpy(A, texto.c_str());

    char B[texto2.length()];
    strcpy(B, texto2.c_str());

    texxto(A, B);
    cout<<A;
}
