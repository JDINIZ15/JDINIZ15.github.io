#include<iostream>
#include<math.h>
using namespace std;
bool ehAlgarismo(int num1,int num2)
{
    return (num1 >='0' && num1 <= '9') && (num2 >='0' && num2 <= '9' );
}
bool caracValido(char carac)
{
    return  (carac=='+' || carac=='-' ||carac=='*' ||carac=='x' ||carac=='X' ||carac==':' ||carac=='/');
}
int calcular(int num1, int num2, char carac)
{
    if(!(caracValido(carac)) && (!(ehAlgarismo(num1, num2))))
    {
        return 0;
    }
    else
    {
        switch(carac)
        {
        case '+':
         return num1 + num2;
        case '-':
         return num1 - num2;
        case '*':
        case 'x':
        case 'X':
         return num1*num2;
        case '/':
        case ':':
         return num1/num2;
        }
    }
}
main()
{
    int num1, num2;
    char carac;
    cout <<"digite um caracter e dois numeros";
    cin  >> carac>> num1 >> num2;
    cout <<calcular(num1, num2, carac);
}
