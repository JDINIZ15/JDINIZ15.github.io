#include<iostream>
#include<math.h>
using namespace std;
main()
{
    int i=0;
    int N;
    int x=0;
    cout << "Digite um valor para calcular o quadrado mais proximo:";
    cin  >> N;
    while(i<N)
    {
        if(i*i<=N)
        {
            x=i*i;
        }
        i++;
    }
    cout << x;

}
