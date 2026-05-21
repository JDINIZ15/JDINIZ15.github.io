#include<iostream>
#include<math.h>
using namespace std;
string mes(int num)
{
    if(num ==1 ||num ==2 ||num ==3 ||num ==4 ||num ==5 ||num ==6 ||num ==7 ||num ==8 ||num ==9 ||num ==10 ||num ==11 ||num ==12 )
    {
        switch(num)
        {
            case 1: cout<< "janeiro";
            break;
            case 2: cout<< "fevereiro";
            break;
            case 3: cout<< "marco";
            break;
            case 4: cout<< "abril";
            break;
            case 5: cout<< "maio";
            break;
            case 6: cout<< "junho";
            break;
            case 7: cout<< "julho";
            break;
            case 8: cout<< "agosto";
            break;
            case 9: cout<< "setembro";
            break;
            case 10: cout<< "outubro";
            break;
            case 11: cout<< "novembro";
            break;
            case 12: cout<< "dezembro";
            break;
        }
    }
    else
    {
      cout<<" ";
    }

}

main()
{
    int num;
    cout <<"digite o numero de um mes";
    cin>> num;
    cout << mes(num);

}























