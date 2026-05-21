#include<iostream>
#include<stdlib.h>
using namespace std;
int fatorial (int a)
{

    int i;
    i=1;
    int resul;
    resul=1;
    if(a==0)
    {
        return 1;
    }
    if(a>0)
    {
        while(i<=a)
        {
            resul=resul*i;
            i++;
        }

    }
    return resul;

}
main()
{
    int a;
    cout <<"digite um valor:\n";
    cin  >>a;
    cout <<fatorial(a);

}
