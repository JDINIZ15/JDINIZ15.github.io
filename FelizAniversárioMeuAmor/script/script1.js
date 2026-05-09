const tabela = document.querySelector(".lifeCounter_table_calculate");


const dataInicial = new Date("2008-05-09T20:30:00");

function atualizarTempo(){

    const agora = new Date();

    // DIFERENÇA EM MILISSEGUNDOS
    const diferenca = agora - dataInicial;

    // SEGUNDOS TOTAIS
    const segundosTotais = Math.floor(diferenca / 1000);

    // MINUTOS
    const minutos = Math.floor(segundosTotais / 60);

    // HORAS
    const horas = Math.floor(minutos / 60);

    // DIAS
    const dias = Math.floor(horas / 24);

    // SEMANAS
    const semanas = Math.floor(dias / 7);

    // MESES (aproximação)
    const meses = Math.floor(dias / 30.44);

    // ANOS (aproximação)
    const anos = Math.floor(dias / 365.25);

    tabela.innerHTML = `
    
        <td>${anos}</td>
        <td>${meses}</td>
        <td>${semanas}</td>
        <td>${dias}</td>
        <td>${horas}</td>
        <td>${minutos}</td>
        <td>${segundosTotais}</td>

    `;
}


atualizarTempo();


setInterval(atualizarTempo, 1000);

let btn = document.querySelector("#btnCoracao");

let muralAntes = document.querySelector("#muralAntes");
let muralDepois = document.querySelector("#muralDepois");

btn.addEventListener("click", () =>{

    // SOME O CORAÇÃO
    btn.classList.add("hidden");

    // TRANSIÇÃO DAS IMAGENS
    muralAntes.classList.remove("active");

    muralDepois.classList.add("active");

});

const imagens = [

    {
        ano: "2023",
        img: "/imgs/2023.jpg"
    },

    {
        ano: "2024",
        img: "/imgs/2024.jpg"
    },

    {
        ano: "2025",
        img: "/imgs/2025.jpg"
    },

    {
        ano: "2026",
        img: "/imgs/2026.jpeg"
    }

];

let index = 0;

const imagem = document.querySelector("#carouselImg");
const ano = document.querySelector("#timelineYear");

const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");

/* ATUALIZAR */
function atualizarCarousel(){

    imagem.style.opacity = 0;
    ano.style.opacity = 0;

    setTimeout(() =>{

        imagem.src = imagens[index].img;

        ano.textContent = imagens[index].ano;

        imagem.style.opacity = 1;
        ano.style.opacity = 1;

    }, 200);

}

/* PRÓXIMO */
nextBtn.addEventListener("click", () =>{

    index++;

    if(index >= imagens.length){
        index = 0;
    }

    atualizarCarousel();

});

/* ANTERIOR */
prevBtn.addEventListener("click", () =>{

    index--;

    if(index < 0){
        index = imagens.length - 1;
    }

    atualizarCarousel();

});