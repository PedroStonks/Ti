function carregar(){
    var agora = new Date()
    var hora = agora.getHours()
    var minuto = agora.getMinutes()
    var horas = window.document.getElementById('horas')
    var img = window.document.getElementById('imagem')
    var corpo = window.document.getElementById('corpo')

    /*hora=20;*/

    if (hora >= 0 && hora <= 5) {
        horas.innerText = `Boa madrugada, agora são ${hora} hora ${minuto} min!`
        img.style.backgroundImage = src="image/Madrugada.jpg"
        corpo.style.backgroundColor = '#20100D'
    } else if (hora < 12) {
        horas.innerText = `Bom dia, agora são ${hora} hora ${minuto} min!`
        img.style.backgroundImage = src="image/Manha.jpg"
    } else if (hora < 18) {
        horas.innerText = `Boa tarde, agora são ${hora} hora ${minuto} min!`
        img.style.backgroundImage = src="image/Tarde.jpg"
        corpo.style.backgroundColor = '#C95E00'
    } else {
        horas.innerText = `Boa noite, agora são ${hora} hora ${minuto} min!`
        img.style.backgroundImage = src="image/Noite.jpg"
        corpo.style.backgroundColor = '#19375D'
    }
}