#include<iostream>
using namespace std;
int piso(float a)
 {
     int i;
     i=1;
    if(a>0)
    {
        while(i<=a)
     {
         ++i;
     }
     return i-1;

    }

    if(a<0)
    {
        while(i>a)
        {
        --i;
        }
    return i;
    }


 }

 int teto(float a)
 {
     int i;
     i=1;
    if(a>0)
    {
     while(i<a)
     {
         ++i;

     }
     return i;
    }
    if(a<0)
    {
        while(i>a)
        {

        --i;
        }
    }
    return i+1;

 }
 main()
 {
     float a;
     cout <<" digite um numero para que seja calculado seu teto e seu piso:\n";
     cin  >> a;
     cout <<"piso:" <<piso(a)<<"\n teto:"<<teto(a);







 }



