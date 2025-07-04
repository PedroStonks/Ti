let num_digitados = document.getElementById('num_digitados')
let num_quantidade = document.getElementById('num_quantidade')
let num_ordenado = document.getElementById('num_ordenado')
let index_10 = document.getElementById('index_10')

function dados_organizadados() {

    let quantidade = parseInt(prompt("Quantos dados você deseja inserir?"));

    let dados = [];

    // Loop para coletar os dados digitados pelo usuário
    for (let i = 0; i < quantidade; i++) {
        let dado = parseInt(prompt(`Digite o dado ${i + 1}:`));
        dados.push(dado);
    }

    // Adiciona os numeros digitados
    num_digitados.innerText = dados.join("  ,  ");

    // Adiciona o número 10 no final do array
    dados.push(10);

    // Ordena o array em ordem crescente
    dados.sort((a, b) => a - b); // decresente: b - a

    // Mostrar informações no html
    num_quantidade.innerText = "Você digitou " + quantidade + " números";
    num_ordenado.innerText = dados.join("  ,  ");
    index_10.innerText = dados.indexOf(10);

    /* // Exibe o array ordenado
    alert("Dados ordenados: " + dados.join(","));
    
    // Exibe a quantidade de dados inseridos pelo usuário 
    alert("Você digitou " + quantidade + " números.");
    
    // Exibe o índice do número 10 no array
    alert("O número 10 está no índice: " + dados.indexOf(10));*/3
}