#include<iostream>
using namespace std;
main()
{
    float altura, mediaAltura = 0, idadeMedia = 0, resultado1, resultado2;
    int idade, pessoas, qttdPessoas1 = 0, qttdPessoas2 = 0;
    int i = 1;
    idadeMedia = idade;
    mediaAltura = altura;
    cout << "Qauntas pessoas responderao a pesquisa? ";
    cin >> pessoas;
    while(i <= pessoas)
    {
        cout << "Qual eh a idade e altura da pessoa? ";
        cin >> idade >> altura;
        if(altura<1.70)
        {

            idadeMedia= idade + idadeMedia;
            qttdPessoas1++;
        }
        if(idade>20)
        {
            mediaAltura= altura + mediaAltura;
            qttdPessoas2++;
        }
        i++;
    }
    resultado1 = idadeMedia/qttdPessoas1;
    resultado2 = mediaAltura/qttdPessoas2;

    cout <<  resultado1 << " / " << resultado2;

}
