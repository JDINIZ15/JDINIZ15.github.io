const enviar = document.querySelector("#enviar");

let requisicaoConvertida = "";

const gerarmoedas = async () => {
  const requisicao = await fetch(
    "https://v6.exchangerate-api.com/v6/1ed01cb0a4c5d458b0edf5de/latest/USD"
  );
  requisicaoConvertida = await requisicao.json();

  console.log(requisicaoConvertida);

  let options = "";

  for (let elemento in requisicaoConvertida.conversion_rates) {
    options += ` <option value =${elemento} id=${elemento}> ${elemento} </option>`;
  }

  document.querySelector("#moeda-convertida").innerHTML = options;
};

gerarmoedas();

enviar.addEventListener("click", async function () {
  const valor = document.querySelector("#valor").value;

  const novaMoeda = document.querySelector("#moeda-convertida").value;

  let valorMoeda = requisicaoConvertida.conversion_rates[novaMoeda];

  let resp = document.querySelector("#resp");

  let resultado = valor * valorMoeda;

  resp.innerHTML = `O valor convertido é:${resultado}`;
});
