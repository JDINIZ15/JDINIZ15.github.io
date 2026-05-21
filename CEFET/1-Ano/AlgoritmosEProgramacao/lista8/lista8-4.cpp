#include<iostream>
#include<conio.h>
#include<stdio.h>
using namespace std;
struct Txadrez{
    float x;
    float y;

};
main()
{
    struct Txadrez xadrez;
    cout<<"eixo x:";
    cin >>xadrez.x;
    cout<<"eixo y:";
    cin >>xadrez.y;
    cout<<xadrez.x<<xadrez.y;

}
