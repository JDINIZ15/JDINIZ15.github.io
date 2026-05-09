let btn = document.querySelector(".form_btn");


btn.addEventListener("click", () =>{
  let nome = document.querySelector(".nome_usuario").value;
  let senha = document.querySelector(".senha_usuario").value;

  nome = nome.toLowerCase()

  if(nome == "clara" && senha == "0905"){
    window.location.href = "html/EuteAmo.html";
  }
  else{
    alert("Sai Fora, intruso!")
    location.reload();
  }
})
