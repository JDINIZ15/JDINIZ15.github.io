#include<iostream>
#include<math.h>
using namespace std;
 bool letra(char carac)
 {
 return (carac >='A' && carac <='Z') || (carac >='a' && carac <='z');
 }

   int posicaodaLetra(char carac)
 {
  if(!(letra(carac)))
  {
      return 0;
  }
  else
  {
    switch(carac)
    {
    case 'a','A':
        return 1;
    case 'b':
    case 'B':
        return 2;
    case 'c':
    case 'C':
        return 3;
    case 'd':
    case 'D':
        return 4;
    case 'e':
    case 'E':
        return 5;
    case 'f':
    case 'F':
        return 6;
    case 'g':
    case 'G':
        return 7;
    case 'h':
    case 'H':
        return 8;
    case 'i':
    case 'I':
        return 9;
    case 'j':
    case 'J':
        return 10;
    case 'k':
    case 'K':
        return 11;
    case 'l':
    case 'L':
        return 12;
    case 'm':
    case 'M':
        return 13;
    case 'n':
    case 'N':
        return 14;
    case 'o':
    case 'O':
        return 15;
    case 'p':
    case 'P':
        return 16;
    case 'q':
    case 'Q':
        return 17;
    case 'r':
    case 'R':
        return 18;
    case 's':
    case 'S':
        return 19;
    case 't':
    case 'T':
        return 20;
    case 'u':
    case 'U':
        return 21;
    case 'v':
    case 'V':
        return 22;
    case 'w':
    case 'W':
        return 23;
    case 'x':
    case 'X':
        return 24;
    case 'y':
    case 'Y':
        return 25;
    case 'z':
    case 'Z':
        return 26;

    }

  }
 }
main()
{
char carac;
cout <<"digite um caracter:";
cin  >> carac;
if(!(letra(carac)))
{
    cout <<"este caracter nao e valido.";
}
else
{
cout <<"a letra "<<carac<<" esta na posicao:"<<posicaodaLetra(carac);



}
















}
