function calcular() {
    let preco = parseFloat(document.getElementById("valor-combustivel").value);
    /*let txEficiencia = parseFloat(document.getElementById("txEficiencia").value);*/
    let litros = parseFloat(document.getElementById("litros").value);
    let ComboBox = parseFloat(document.getElementById("select").value);
    let Gasolina = parseFloat(document.getElementById("Gasolina").value);
    let Etanol = parseFloat(document.getElementById("Etanol").value);
    let total = preco * (1/ComboBox );
    document.getElementById("resultado").innerHTML = `Total a pagar: R$ ${total.toFixed(2)}`;


    
    if (isNaN(preco) || isNaN(litros) || preco <= 0 || litros <= 0 || isNaN(ComboBox ) || (Gasolina >= 0)) {
        document.getElementById("resultado").innerHTML = "Por favor, preencha todos os campos !";
        return;
    }
 

else if (Gasolina >= 0) {
    (document.getElementById('resultado').checked)
        resultado.innerText = `Abasteça com Etanol se o seu  preço for menor  ou igual a : ${totalgasolina}`;
}
else if (document.getElementById('resultado').checked){
    resultado.innerText = `Abasteça com gasolina se o seu o seu preço for menor ou igual a :  ${totaletanol}`;
}
else{
    resultado.innerText = "Nenhum valor encontrado";
}

}

function calcular1(){
    let 
}