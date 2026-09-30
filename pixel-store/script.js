function exibirBoasVindas(){
    let boasVindas = document.getElementById("respostaContato")
    let nomeUser = document.getElementById("nomeEntrou").value

    boasVindas.textContent = ("Seja muito bem vindo" + nomeUser + "!")
}
