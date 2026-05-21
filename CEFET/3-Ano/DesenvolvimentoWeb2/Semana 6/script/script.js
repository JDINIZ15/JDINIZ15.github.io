const btn = document.querySelector("#btn")

btn.addEventListener("click", async () => {
    try {
        const respJson = await fetch("veiculos.json");
        const resp = await respJson.json();

           criarTabela(resp)
       

      } catch (error) {
        console.log("Erro:", error);
      }
})

function criarTabela(obj){
    const resposta = document.querySelector("#resposta")

    const tabela = document.createElement("table")
    tabela.border="1px"

    const titulos = Object.keys(obj[0]);
    let linhaTitulo = document.createElement("tr")

    for(i=0; i<titulos.length;i++){
        let titulo = document.createElement("th")
        titulo.textContent = titulos[i]
        linhaTitulo.append(titulo)
    }
    tabela.append(linhaTitulo)

    obj.forEach(element => {
       let carro = Object.values(element)
       let linhaCarro = document.createElement("tr")
       carro.forEach(lement =>{
        let dado = document.createElement("td")
        dado.textContent = lement
        linhaCarro.append(dado)
       })
       tabela.append(linhaCarro)
    });

    resposta.append(tabela)
    }
