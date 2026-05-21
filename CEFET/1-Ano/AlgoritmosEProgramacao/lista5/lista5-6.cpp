#include<iostream>
using namespace std;
main()
{
    float massa;
    int tempo;
    tempo=0;
    cout <<"de o valor da massa em gramas:\n";
    cin  >>massa;
    while(massa>=0.05)
    {
        massa=massa/2.0;
        tempo=tempo+50;
    }
    cout <<tempo;


}
