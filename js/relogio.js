$(document).ready(function(){

    //Função que irá carregar a página hora_exata.php a cada 1 segundo, dentro da div .relogio
    setInterval(function(){
        $(".relogio").load('funcoes/hora_exata.php');
    }, 1000);

});


