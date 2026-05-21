#include <iostream>
#include <locale.h>
#include <stdlib.h>
#include <fstream>
using namespace std;

void troca(float &a, float &b)
{
  float auxiliar;
  auxiliar = a;
  a = b;
  b = auxiliar;
}

main()
{
  setlocale(LC_ALL, "Portuguese");
  float X, Y;

  cout << "Este programa inverte dois valores definidos pelo usuário às suas variáveis.\n\n";
  cout << "Forneça o primeiro número (X): ";
  cin  >> X;

  cout << "Forneça o segundo  número (Y): ";
  cin  >> Y;

  troca (X, Y);

  cout << "\n";
  cout << "Valor final para X: " << X << "\n";
  cout << "Valor final para Y: " << Y << "\n";
  cout << "\n";

  system("pause");
}
