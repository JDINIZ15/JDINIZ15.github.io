#include<iostream>
#include<math.h>
using namespace std;
 float potencia(int x, int y)
{
    int Y;
    int i;
    int r;
    Y= fabs(y);
    if(Y==0)
    {
        return 1;
    }
     if(Y==1)
     {
         return x;
     }
      if(Y>1)
      {
          i=2;
          r=x;
          while(i<=Y)
          {
            r=r*x;
            ++i;
          }

      }
      if(y<0)
      {
          return 1.0/r;
      }
      else
      {
          return r;
      }



}
main()
 {
     int y, x;
     cout <<"digite o valor de um expoente:\n";
     cin  >>y;
     cout <<"digite o valor de uma base:\n";
     cin  >>x;
     cout << potencia(x, y);
 }
