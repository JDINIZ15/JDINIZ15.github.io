#include<iostream>
#include<math.h>
using namespace std;
bool e_vogal(char carac)
{
    bool r;
    r= carac=='A'||carac=='E'||carac=='I'||carac=='O'||carac=='U'||carac=='a'||carac=='e'||carac=='i'||carac=='o'||carac=='u';
    return r;
}
bool e_algarismo(char carac)
{
    bool r;
    r= carac=='0'||carac=='1'||carac=='2'||carac=='3'||carac=='4'||carac=='5'||carac=='6'||carac=='7'||carac=='8'||carac=='9';
    return r;
}
bool e_minuscula(char carac)
{
    bool r;
    r= carac >='a'&&carac <='z';
    return r;
}
bool e_maiuscula(char carac)
{
    bool r;
    r= carac >='A'&&carac <='Z';
    return r;
}
bool e_letra(char carac)
{
    bool r;
    r= carac >='A'&&carac <='Z'||carac >='a'&&carac <='z';
    return r;
}
bool e_consoante(char carac)
{
    bool r;
    r= e_letra(carac)&&!e_vogal(carac);
    return r;
}
bool e_par(int n)
{
    bool r;
    r= n%2==0;
    return r;
}
main()
{

    char carac;
    cout<<"digite um caracter:";;
    cin>> carac;
    cout<<e_vogal(carac)<<"\n";
    cout<<e_algarismo(carac)<<"\n";
    cout<<e_minuscula(carac)<<"\n";
    cout<<e_maiuscula(carac)<<"\n";
    cout<<e_letra(carac)<<"\n";
    cout<<e_consoante(carac)<<"\n";
    cout<<e_par(carac)<<"\n";
}
