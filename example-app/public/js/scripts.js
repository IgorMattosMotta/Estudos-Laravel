document.addEventListener('DOMContentLoaded', function () {
    var mensagemDiv = document.getElementById('mensagem');


    var tempoParaSumir = 3000;

    setTimeout(function () {
        mensagemDiv.style.display = 'none';
    }, tempoParaSumir);
});