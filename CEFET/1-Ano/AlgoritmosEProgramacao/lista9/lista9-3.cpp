#include<iostream>
#include<fstream>
using namespace std;
main()
{
       ifstream entrada;
        entrada.open("dados33.txt");
        string nome1, pulalinha;
        float nota1, nota2;
        getline(entrada, pulalinha);
        getline(entrada, nome1);
        entrada >> nota1;
        entrada >> nota2;
        entrada.close();


}
