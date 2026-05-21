#include<iostream>
using namespace std;
main()
{
string nome;
float salario, menor_salario, maior_salario;
int quantidade;
float total=0;
int i;
i=1;
while(1)
{
cout <<"digite o nome do funcionario:\n";
cin  >>nome;
if(nome=="fim")
{
break;
}

cout <<"digite o salario do funcionario\n";
    cin  >>salario;
    total=salario+total;
    ++quantidade;
     if(salario>maior_salario)
    {
        maior_salario=salario;
    }
     if(salario<menor_salario||i==1)
    {
        menor_salario=salario;
        ++i;
    }








}
cout<< total/quantidade<<"\n";
cout<< menor_salario <<"\n";
cout<< maior_salario <<"\n";



}
