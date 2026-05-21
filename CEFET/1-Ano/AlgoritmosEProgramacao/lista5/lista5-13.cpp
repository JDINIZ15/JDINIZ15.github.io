#include<iostream>
using namespace std;
main()
{
    int n;
    n=1;
    int par;
    int impar;
    par=0;
    impar=0;
    char sn;
    while(1)
    {
        cout <<"digite um valor";
        cin >>n;
         if(n%2==0)
        {
            ++par;
        }
        if(n%2!=0)
        {
            ++impar;
        }
        cout <<"deseja fornecer um novo número?s/n";
        cin  >>sn;

        if(sn=='n')
        {
            break;
        }


    }
    cout<<par<<"\n"<<impar;
}
