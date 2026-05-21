#include<iostream>
#include<string.h>
using namespace std;
 int qntt(char A[])
{
    char carac;
    int i=0;
    while(true)
    {
        carac=A[i];
        if(carac =='\0')
        {
            return i;
        }
        i++;
    }
}






main()
{
    string texto;
    cout << "Digite um texto:\n";
    getline(cin, texto);
    char A[texto.length()];
    strcpy(A, texto.c_str());
    cout<<qntt(A);
}
