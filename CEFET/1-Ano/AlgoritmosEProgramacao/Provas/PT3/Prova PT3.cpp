#include <iostream>
#include <fstream>
using namespace std; // É obrigação saber importar as devidas bibliotecas

//1,0 ponto
void trocar (string &s1, string &s2)
{
  string s;
  s  = s1;
  s1 = s2;
  s2 = s;
}

//2,0 pontos
void ordenar (string v[], int tamanho)
{
  int i, j;

  for(j = tamanho -1; j > 0; j--)
     for(i = 0; i < j; i++)
       if (v[i] > v[j])
            trocar(v[i], v[j]);
}

//2,0 pontos
int linhasNoArquivo(ifstream &entrada)
{
  int r = 0;
  string s;

  getline(entrada, s);
  while(1)
  {
    if (entrada.eof()) break;
    getline(entrada, s);
    r++;
  }
  return r;
}

main()
{
  //É obrigação saber declarar variáveis
  int tam, i;
  string s;
  ifstream entrada;
  ofstream saida;

  //0,5 ponto
  entrada.open("Nomes.txt");
  //0,5 ponto
  tam = linhasNoArquivo(entrada);

  string v[tam]; //É obrigação saber declarar variáveis


  entrada.seekg(0); //0,5 ponto
    getline(entrada, s); //0,5 ponto
  //1,0 ponto
  i = 0;
  while(i < tam)
  {
    getline(entrada, s);
    v[i] = s;
    i++;
  }

  entrada.close();//0,5 ponto

  ordenar(v, tam);//0,5 ponto

  //1,0 ponto
  saida.open("NomesOrdenados.txt");
  for (i = 0; i < tam; i++)
    saida << "\n" << v[i];
  saida.close();
}
