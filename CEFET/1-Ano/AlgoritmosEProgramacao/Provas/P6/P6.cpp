//0,5 ponto para cada questão 2 e 3
#include <stdlib.h>
#include <time.h>
#include <math.h>
#include <iostream>
#include <fstream>
#include <locale.h> //Verificar se esse .h será será necessário na prova do aluno
using namespace std;

//1,0 ponto
struct _TPonto_
{
  float x, y;
};

//0,5 ponto
typedef _TPonto_ TPonto;


main()
{
  //0,5 ponto declaração de variáveis e pedido leitura da ordem da matriz
  const int pontos = 10;
  int i;
  TPonto ponto;
  ofstream arquivo;

  system ("cls");
  setlocale(LC_ALL, "Portuguese");

  //0,5 ponto
  arquivo.open("Pontos.txt");

  //1,0 ponto
  srand(time(NULL));
  for (i = 1; i <= pontos; i++)
  {
     //0,5 ponto      //0,5 ponto
     ponto.x = 1.0 * rand()/RAND_MAX;
     ponto.y = 1.0 * rand()/RAND_MAX;

     //0,5 ponto
     arquivo << "\n" << ponto.x << " " << ponto.y << " " << sqrt(ponto.x * ponto.x + ponto.y * ponto.y);
  }

  //0,5 ponto
  arquivo.close();

  system ("pause");
}

/*
main()
{
  //0,5 ponto declaração de variáveis e pedido leitura da ordem da matriz
  const int raio = 1;
  int pontos = 0;
  int i;
  TPonto ponto;
  string puloDeLinha;
  ifstream arquivo;

  system ("cls");
  setlocale(LC_ALL, "Portuguese");

  //0,5 ponto
  arquivo.open("Pontos.txt");

  //0,5 ponto
  getline(arquivo, puloDeLinha);
  while(1)
  {
    //0,5 ponto
    arquivo >> ponto.x;
    arquivo >> ponto.y;

    //0,5 ponto
    if (sqrt(ponto.x * ponto.x + ponto.y * ponto.y) <= raio) pontos = pontos + 1;

    //0,5 ponto
    if (arquivo.eof()) break;
  }

  //0,5 ponto
  arquivo.close();

  //0,5 pontos
  cout << "Pontos de interesse: " << pontos << "\n";

  system ("pause");
}

*/
