#include<iostream>
using namespace std;

int mudar_hora(int &minutos, int &hora)
{
    hora=minutos/60;
    minutos=minutos%60;


}
main()
{
    int minutos;
    int hora;
    cout << "Digite um valor em minutos:\n";
    cin  >> minutos;
    mudar_hora(minutos, hora);
    cout<<"hora:"<<hora<<"\nMinutos:"<<minutos;
}
