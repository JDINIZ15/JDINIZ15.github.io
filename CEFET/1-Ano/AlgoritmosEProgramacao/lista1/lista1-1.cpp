#include <iostream>
#include <string>
using namespace std;

void escreverTexto(string& texto) {

    cout << texto;
}

int main() {
    string textoParaEscrever;

    cout << "Digite o texto que você deseja escrever: ";
    cin  >> textoParaEscrever;

    escreverTexto(textoParaEscrever);

}
