#include<iostream>
using namespace std;
main()
{
    float chico,ze;
    int anos;
    chico=1.50;
    ze=1.10;
    anos=0;
    while(ze<chico)
    {
        ze=ze+0.03;
        chico=chico+0.02;
        anos++;
    }
    cout<<anos;
}
