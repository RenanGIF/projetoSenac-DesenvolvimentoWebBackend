function exibirBoasVindas(){
    let boasVindas = document.getElementById("respostaContato")
    let nomeUser = document.getElementById("nomeEntrou").value

    boasVindas.textContent = ("Seja muito bem vindo" + nomeUser + "!")
}

function exibirAdmin(){
    alert("Area destinada apenas para cadastro de produtos, digite a senha para continuar.");
    let senha = prompt("Digite o sua senha:");

    if (senha === "") {
        alert("Senha correta!");
        window.location.href = "admin.php";
    } else {
        alert("Senha incorreta!");
    }
}