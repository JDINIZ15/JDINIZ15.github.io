#include <iostream>
#include <locale.h>
#include <stdlib.h>
using namespace std;

int triangulo (float a, float b, float c)
{
  if (a + b + c != 180) return 0;
  else if (a < 90 && b < 90 && c < 90) return 1;
       else if (a == 90 || b == 90 || c == 90) return 2;
            else return 3;
}

main()
{
  setlocale(LC_ALL, "Portuguese");
  float x, y, z;

  cout << "FORNEÇA OS TRÊNGULOS FORMADOS PELOS LADOS DE UM TRIÂNGULO...\n\n";
  cout << "ÂNGULO 1: ";
  cin  >> x;

  cout << "ÂNGULO 2: ";
  cin  >> y;

  cout << "ÂNGULO 3: ";
  cin  >> z;

  switch(triangulo(x, y, z))
  {
    case 0: cout << "NÃO É TRIÂNGULO.\n\n";
            break;
    case 1: cout << "TRIÂNGULO ACUTÂNGULO.\n\n";
            break;
    case 2: cout << "TRIÂNGULO RETÂNGULO.\n\n";
            break;
    case 3: cout << "TRIÂNGULO OBTUSÂNGULO.\n\n";
            break;
  }
  system("pause");
}
