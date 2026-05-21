#include<iostream>
using namespace std;
main()
{
    int num;
    int par=0;
    int  impar=0;
    char SN ='S';

    while(SN == 'S')
    {
      cout << "Digite um numero:\n";
      cin  >> num;

      if(num%2==0)
      {
          par++;
      }
      if(num%2!=0)
      {

        impar++;
      }
      cout << "Quer continuar a da numeros?(S ou N)\n";
      cin  >> SN;


    }
    cout <<"par:"<<par<<"\nimpar:"<<impar;
}
