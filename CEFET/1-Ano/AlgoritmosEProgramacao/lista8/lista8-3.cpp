#include<iostream>
#include<conio.h>
#include<stdio.h>
using namespace std;
struct Txadrez{
    int L;
    char c;

};
main()
{
    struct Txadrez xadrez;
    cout<<"linha:";
    cin >>xadrez.L;
    cout<<"coluna:";
    cin >>xadrez.c;
    cout<<xadrez.L<<xadrez.c;

}
