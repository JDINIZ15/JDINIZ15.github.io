#include <iostream>
#include <locale.h>
#include <stdlib.h>
using namespace std;

void ordenacaoCrescente(float &a, float &b, float &c)
{
  float x, y, z;
  x = a;
  y = b;
  z = c;

  if (x <= y && x <= z)
  {
    if (z <= y)
    {
      b = z;
      c = y;
    }
  }
  else if (y <= x && y <= z)
       {
         a = y;
         if(x <= z) b = x;
         else {
                b = z;
                c = x;
              }
       }
       else {
              a = z;
              if(x <= y)
              {
                b = x;
                c = y;
              }
              else c = x;
            }
}

main()
{
  setlocale(LC_ALL, "Portuguese");
  float X, Y, Z;

  cout << "Este programa ordena de forma decrescente três valores fornecidos os pelo usuário.\n\n";
  cout << "Forneça o primeiro número (X): ";
  cin  >> X;
  cout << "Forneça o segundo  número (Y): ";
  cin  >> Y;
  cout << "Forneça o segundo  número (Z): ";
  cin  >> Z;

  ordenacaoCrescente(X, Y, Z);

  cout << "Os valores ordenados decrescentemente são: " << Z << ", " << Y << " e " << X << ".\n";

  system("pause");
}
