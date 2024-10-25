const tela = document.querySelector("#tela");
const img = document.querySelector("#img");
const raduqui = document.querySelector("#raduqui");

let ryupos = { left: 50, right: 0 };
let x = 0;
let interval;

function atualiza() {
  interval = setInterval(() => {
    if (x < window.innerWidth) {
      x += 10;
      raduqui.style.left = `${x}px`;
    }
  }, 10);
}

function tradepos() {
  setTimeout(() => {
    img.src = "img/ryu-ginga.gif";
  }, 500);
}

document.addEventListener("keydown", (event) => {
  if ((event.key == "A" || event.key == "a") && ryupos.left > 0) {
    img.style.left = `${(ryupos.left -= 10)}px`;
  }
  if ((event.key == "D" || event.key == "d") && ryupos.left < 1740) {
    img.style.left = `${(ryupos.left += 10)}px`;
  }

  if (event.key == " ") {
    x = ryupos.left + 150;
    raduqui.style.left = `${x}px`;
    raduqui.style.display = "block";
    raduqui.style.opacity = 1;
    img.src = "img/ryu-magia.png";
    atualiza();
    tradepos();
  }
});
