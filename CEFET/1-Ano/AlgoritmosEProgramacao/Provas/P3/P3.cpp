#include <iostream>
#include <locale.h>
#include <stdlib.h>
#include <math.h>
using namespace std;

int qtdDeDivisoresPositivos(int n)
{
  int i, r = 0;
  //1,0 ponto...
  if (n == 0) return 0;
  else //5,0 pontos...
       {
         i = 1;
         while (i <= fabs(n))
         {
           if (n % i == 0) r++;
           i++;
         }
         return r;
       }
}

main()
{
  setlocale(LC_ALL, "Portuguese");
  int X;

  cout << "Este programa indica se um número inteiro positivo á um número primo.\n\n";
  cout << "Forneça o número inteiro positivo que deseja verificar: ";
  cin  >> X;

  //4,0 pontos...
  if (X > 0)
    if (qtdDeDivisoresPositivos(X) == 2)
      cout << X << " é um número primo.\n\n";
    else cout << X << " NÃO é um número primo.\n\n";
  else cout << "Entrada inválida.\n\n";

  system("pause");
}
