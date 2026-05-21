#include<iostream>
using namespace std;
bool divisao(int num1, int num2)
{
    if( num1%num2==0)
    {
     return true;
    }
    return false;

}
bool impar_ou_par(int num1, int num2)
{
    if(divisao(num1, num2)==true)
    {
      if(num1%2==0)
      {
          return true;
      }
      else
      {
       return false;
      }
    }
    else
    {
     if(num2%2==0)
     {
         return true;
     }
     else
     {
         return false;
     }


    }
}

main()
{
int num1, num2;
cout << "Digite dois valores:";
cin  >> num1 >> num2;
cout << divisao(num1, num2)<<"\n"<<impar_ou_par(num1, num2);
}
