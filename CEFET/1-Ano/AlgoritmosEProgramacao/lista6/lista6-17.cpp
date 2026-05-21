#include<iostream>
using namespace std;
main()
{
    int lf,cf,li,ci;
    cout<<"Digite a linha inicial\t";
    cin >>li;
    cout<<"Digite a coluna inicial\t";
    cin >>ci;
    cout<<"Digite a linha final\t";
    cin >>lf;
    cout<<"Digite a coluna final\t";
    cin >>cf;
     if(li>0&&li<9&&ci>0&&ci<9&&lf>0&&lf<9&&cf>0&&cf<9)
     {
         if((lf==li-2&&(cf==ci+1||cf==ci-1))||(lf==li-1&&(cf==ci+2||cf==ci-2))||(lf==li+1&&(cf==ci+2||cf==ci-2))||(lf==li+2&&(cf==ci+1||cf==ci-1)))
         {

         cout<<"movimento correto";
         }
        else{
        cout<<"movimento errado";
        }
    }
     else{
        cout<<"corno";
    }
}

