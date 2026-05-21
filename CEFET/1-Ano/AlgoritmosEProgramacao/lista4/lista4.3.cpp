#include<iostream>
using namespace std;
string divisao(int num1, int num2)
{
    if( num1%num2==0)
    {
     if(num1%2==0)
     {
         cout <<"o primeiro numero e par e divisivel pelo segundo numero";
     }
     else
        {
         cout <<"o primeiro numero e impar e divisivel pelo segundo numero";
        }
    }
    else
    {

       if(num2%2==0)
     {
         cout <<"o segundo numero e par e nao e divisor do primeiro numero";
     }
      else
      {
         cout <<"o segundo numero e impar e nao e divisor do primeiro numero";
      }

    }
}

main()
{
int num1, num2;
cout << "Digite dois valores:";
cin  >> num1 >> num2;
cout << divisao(num1, num2);
}
