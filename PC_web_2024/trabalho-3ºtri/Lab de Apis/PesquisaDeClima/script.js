const btn = document.querySelector("#btn");
/*
const requisicaoClimaCidade = async () => {
  let cidade = document.querySelector("#cidade").value;
  const requisicao = await fetch(
    `https://api.openweathermap.org/data/2.5/weather?q=${cidade}&units=metric&appid=580e47708b7e8cb14193add22b6efe01&lang=pt_br`
  );
  const requisicaoConvertida = await requisicao.json();

  console.log(requisicaoConvertida);
};
*/
btn.addEventListener("click", async function () {
  let cidade = document.querySelector("#cidade").value;
  const requisicao = await fetch(
    `https://api.openweathermap.org/data/2.5/weather?q=${cidade}&units=metric&appid=580e47708b7e8cb14193add22b6efe01&lang=pt_br`
  );
  const requisicaoConvertida = await requisicao.json();

  console.log(requisicaoConvertida.main.temp);
  console.log(requisicaoConvertida.main.humidity);
  console.log(requisicaoConvertida.weather[0].description);

  const resp = document.querySelector("#resp");

  let resposta = `<p>Temperatura atual: ${requisicaoConvertida.main.temp}</p>
                <p>Humidade atual: ${requisicaoConvertida.main.humidity}</p>
                <p>Condição atual: ${requisicaoConvertida.weather[0].description}</p>`;
  if (
    requisicaoConvertida.main.temp < 5 ||
    requisicaoConvertida.main.temp > 35
  ) {
    resposta += `<p id="extremo">SITUAÇÃO EXTREMA</p>`;
  }
  resp.innerHTML = resposta;
});
