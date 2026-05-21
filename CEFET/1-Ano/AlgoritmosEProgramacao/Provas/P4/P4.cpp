#include <iostream>
#include <locale.h>
#include <stdlib.h>
#include <math.h>
using namespace std;

//5,0 pontos
int mdc(int a, int b)
{
  int r;
  while (b != 0)
  {
    r = a % b;
    a = b;
    b = r;
  }
  return a;
}

main()
{
  setlocale(LC_ALL, "Portuguese");
  int a, b;

  //2,5 pontos pelo loop do programa
  do
  {
    system("cls");

    cout << "Este programa determina o MDC de dois números inteiros positivos.\n\n";
    cout << "Forneça o primeiro número: ";
    cin  >> a;
    cout << "Forneça o segundo número: ";
    cin  >> b;

    //2,5 pontos pelo teste de entrada de números válidos
    if (a > 0 && b > 0)
      cout << "MDC (" << a << " , " << b << ") = " << mdc(a, b) << "\n";
    else cout << "Números fornecidos não são estritamente positivos.\n";

    system ("pause");
  }
  while (a <= 0 || b <= 0);
}
