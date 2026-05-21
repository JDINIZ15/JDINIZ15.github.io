#include<iostream>
using namespace std;
main()
{
    int a;
    int soma;
    soma= 0;
    int i;
    i=1;
    int qntdd;
    qntdd=0;
    cout << "digite um valor:\n";
    while(i<=5)
    {
        cin >> a;
     if(a>0)
     {
        soma=soma+a;
     }
     if(a<0)
     {
         qntdd++;
     }
     i++;
    }
    cout << soma << "\n";
    cout << qntdd;

}
