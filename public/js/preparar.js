

function inicializar() {
    $("#btnPreparar").click(doClickEnviar);
}

function doClickEnviar(e) {
    $(this).text("preparando");
    $("#frmPreparar").submit();
}

$(function () {
    inicializar();
});