#include <iostream>
#include <string>
using namespace std;

void nome(string Nome, string sobrenome)
{

cout <<sobrenome<<","<<Nome;

}





int main() {
    string Nome;
    string sobrenome;

    cout << "Digite o nome: ";
    cin  >> Nome;
    cout << "Digite o sobrenome: ";
    cin  >> sobrenome;


    nome(Nome, sobrenome);

}
