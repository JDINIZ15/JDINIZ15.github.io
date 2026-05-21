#include <iostream>
#include <locale.h>
#include <stdlib.h>
#include <math.h>

using namespace std;

int quantidadeDeDigitos(int x)
{
  int r = 0;

  //1,0 ponto
  if (x == 0) return 1;

  //4,0 pontos
  while (x != 0)
  {
    x = x/10;
    r = r +1;
  }

  return r;
}

int decimalParaBinario(int x)
{
  int resultado = 0, resto = 0, expoente = 0;

  while (x != 0) //1,0 ponto
  {

    //2,0 ponto
    resto = x % 2;
    resultado = resultado + resto * pow(10, expoente);

    //2,0 ponto
    x = x / 2;
    expoente = expoente + 1;
  }

  return resultado;
}

main()
{
  setlocale(LC_ALL, "Portuguese");
  int n;

  cout << "FORNEÇA UM NÚMERO INTEIRO NA BASE 10: ";
  cin  >> n;

  cout << "REPRESENTAÇÃO BINÁRIA: " << decimalParaBinario(n) << "\n";

  system("pause");
}
