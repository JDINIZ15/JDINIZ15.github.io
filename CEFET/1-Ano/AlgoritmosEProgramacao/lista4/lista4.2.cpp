#include<iostream>
using namespace std;
int funcaoModulo(int num)
{
  if(num < 0)
  {
   return num * -1;
  }
  return num;
}
main()
{
 int num;
 cout << "Digite um numero ";
 cin  >> num;
 cout << funcaoModulo(num);




}
