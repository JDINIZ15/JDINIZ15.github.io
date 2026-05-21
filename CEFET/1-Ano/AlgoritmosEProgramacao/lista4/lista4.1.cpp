#include<iostream>
#include<conio.h>
using namespace std;
bool letraMinuscula(char carac)
{
  bool resultado=false;
 if(carac >='a'&&carac <='z')
{
    resultado=true;
}
return resultado;
}
bool letraMaiuscula(char carac)
{
  bool resultado=false;
 if(carac >='A'&&carac <='Z')
{
    resultado=true;
}
return resultado;
}
bool letra (char carac)
{
  bool resultado=false;
 if(letraMinuscula(carac)||letraMaiuscula(carac))
 {
     resultado=true;
 }
    return resultado;
}
bool algarismo(char carac)
{
  bool resultado=false;
 if(carac >='0'&&carac <='9')
{
    resultado=true;
}
return resultado;
}
bool vogal(char carac)
{
  bool resultado=false;
 if(carac=='a'||carac=='e'||carac=='i'||carac=='o'||carac=='u'||carac=='A'||carac=='E'||carac=='I'||carac=='O'||carac=='U')
{
    resultado=true;
}
return resultado;
}
bool consoante(char carac)
{
  bool resultado=false;
 if(letra(carac) && !vogal(carac))
{
    resultado=true;
}
return resultado;
}
main()
{
    char carac;
    cout<< "Digite um caracter:\n" ;
    cin>>carac;
     if(letraMinuscula(carac))
     {
      cout<<"Este caracter e minusculo.\n";
     }
      else
      {
          cout<<"Este caracter nao e minusculo.\n";
      }
     if(letraMaiuscula(carac))
     {
      cout<<"Este caracter e maiusculo.\n";
     }
      else
      {
          cout<<"Este caracter nao e maiusculo.\n";
      }
      if(letra(carac))
     {
      cout<<"Este caracter e uma letra.\n";
     }
      else
      {
          cout<<"Este caracter nao e uma letra.\n";
      }
      if(algarismo(carac))
     {
      cout<<"Este caracter e um algarismo.\n";
     }
      else
      {
          cout<<"Este caracter nao e um algarismo.\n";
      }
      if(vogal(carac))
     {
      cout<<"Este caracter e uma vogal.\n";
     }
      else
      {
          cout<<"Este caracter nao e uma vogal.\n";
      }
      if(consoante(carac))
     {
      cout<<"Este caracter e uma consoante.\n";
     }
      else
      {
          cout<<"Este caracter nao e uma consoante.\n";
      }

    getch();


