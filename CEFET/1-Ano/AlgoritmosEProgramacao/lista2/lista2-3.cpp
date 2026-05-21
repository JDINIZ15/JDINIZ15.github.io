#include<iostream>
#include<math.h>
#include<conio.h>
using namespace std;
float calcular_raio(float raio)
{
    float volume;
    const float pi = 3.141592;
    volume=
    4.0/3.0*pi*pow(raio, 3);
    return volume;
}
main()
{
    float raio;
    cout<<"digite o raio de uma esfera para que seu volume seja calculado:\n";
    cin>>raio;
    cout<<"o volume de sua esfera e:"<<calcular_raio(raio);
    getch();

}
