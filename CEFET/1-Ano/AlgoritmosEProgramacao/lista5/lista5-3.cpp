#include<iostream>
#include<stdlib.h>
using namespace std;
bool ehPrimo(int a)
{
    int i;
    i=2;
    while(i<a)
    {
        if(a%i==0)
        {
            return false;
        }
        i++;
    }
    return true;
}
main()
{
    int a;
    cout <<"digite um valor:\n";
    cin  >>a;
    cout <<ehPrimo(a);

}
