#include<iostream>
using namespace std;
int maiorEntreDois(int num1, int num2)
{
    if(num1>num2)
    {
        return num1;
    }
    return num2;
}
int maiorEntreTres(int num1, int num2, int num3)
{
    return (maiorEntreDois(num1, num2)>num3) ? maiorEntreDois(num1, num2) : num3;
}
main()
{
int num1, num2, num3;
cout << "Digite tres valores:";
cin  >> num1 >> num2 >> num3;
cout << "o maior entre os tres e:"<< maiorEntreTres(num1, num2, num3);
}
