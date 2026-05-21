#include<iostream>
using namespace std;
int triangulo(int a, int b, int c)
{
    if(a+b >= c && b+c >= a && a+c >= b)
    {
        return true;
    }
    return false;
}
 int tipo_do_triangulo(int a, int b, int c)
 {

  if(!(triangulo(a, b, c)))
  {
      return 0;
  }

  if(a==b && b==c)
  {
      return 3;
  }
  if(a==b||b==c||c==a)
  {
      return 2;
  }
  if(a!=b && b!=c && c!=a)
  {
      return 1;
  }

 }
 main()
 {
 int a, b, c;
 cout << "de o valor de tres lados de um triangulo";
 cin  >> a >> b >> c;
  switch (tipo_do_triangulo(a, b, c))
  {
      case 3: cout<<"este triangulo e equilatero";
      break;
      case 2: cout<<"este triangulo e isosceles";
      break;
      case 1: cout<<"este triangulo e escaleno";
      break;
      case 0: cout<<"nao e um triangulo";
      break;
  }

}
















