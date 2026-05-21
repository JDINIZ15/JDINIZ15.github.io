#include<iostream>
using namespace std;
main()
{
  string sexo, cor, cabelo;
  int idade, maior, ii, quantidade, quantidade2;
  quantidade=0;
  quantidade2=0;
  ii=1;
    while(1)
    {
        cout <<"idade";
        cin  >>idade;
        if(idade==-1)
        {
            break;
        }
        cout <<"sexo (masculino e feminino)";
        cin  >>sexo;
        cout <<"cor dos olhos (azuis, verdes ou castanhos)";
        cin  >>cor;
        cout <<"cor dos cabelos (louros, castanhos, pretos)";
        cin  >>cabelo;

        if(idade>maior||ii==1)
        {
            maior=idade;
            ++ii;
        }
        if(sexo=="feminino"&&idade>=18&&idade<=65)
        {
            ++quantidade;
        }

        if(cor=="verdes"&&cabelo=="louro")
        {
            ++quantidade2;
        }

    }
    cout<<maior<<"\n"<<quantidade<<"\n"<<quantidade2;



}
