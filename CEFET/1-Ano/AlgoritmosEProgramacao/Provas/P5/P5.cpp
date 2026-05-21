#include <stdlib.h>
#include <stdio.h>
#include <iostream>
#include <locale.h>
#include <time.h>
using namespace std;

bool textoPresenteEmOutro (string maior, string menor)
{
  int i, j;

  i = 0;
  j = 0;
  while (i <= maior.length()) //tem que varrer o '\0'
  {
    if (menor[j] == '\0') return true;
    if (menor[j] == maior[i]) j++;
    else j = 0;
    i = i + 1;
  }
  return false;
}

main()
{
  //0,5 ponto declaração de variáveis e pedido leitura da ordem da matriz
  int ordem, i, j, elementos = 0;
  float media = 0;

  system ("cls");
  setlocale(LC_ALL, "Portuguese");

  cout << textoPresenteEmOutro("casarao", "casa") << "\n";
  cout << textoPresenteEmOutro("EMPOBRECIMENTO", "POBRE") << "\n";
  cout << textoPresenteEmOutro("ESTOU COM FOME", "COMO") << "\n";
  cout << textoPresenteEmOutro("BROCA", "OCA") << "\n";

  cout << "PROGRAMA PARA CALCULAR A MÉDIA DOS ELEMENTOS FORA DAS DIAGONAIS DE UMA MATRIZ QUADRADA...\n\n";
  cout << "FORNEÇA A ORDEM DA MATRIZ QUADRADA: ";
  cin  >> ordem;

  int m[ordem][ordem];

  cout << "\nOS ELEMENTOS ESTAO SENDO ATRIBUÍDOS À MATRIZ ALEATORIAMENTE. VEJA OS ELEMENTOS SORTEADOS...\n";
  srand(time(NULL));
  //1,0 ponto - varredura da matriz
  for (i = 0; i < ordem; i++)
  {
    for (j = 0; j < ordem; j++)
    {
      //1,0 ponto - atribuição de número aleatório às células da matriz (em conjunto com a linha 40 (srand))
      m[i][j] = rand();

      //1,0 ponto - impressão dos elementos da matriz
      cout << "A[" << i << "][" << j << "] = " << m[i][j] << "\t";

      //1,0 ponto - cálculo da média dos elementos da matriz (em conjunto com a expressão da linha 61
      if ((i != j) && (i+j != ordem -1))
      {
         media = media + m[i][j];
         elementos++;
      }
    }
    cout << "\n";
  }
  media = media / elementos;

  //0,5 ponto impressão da média calculada
  cout << "\nMÉDIA CALCULADA: " << media << "\n";

  system ("pause");
}
