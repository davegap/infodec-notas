/**
 * Created by DAVID_VEGA on 04/12/2021.
 */
$('#promedio'.val((nota1+nota2+nota3)/3));

$(document).on('ready',constructor);
function constructor() {
    promedioNotas();

}
function promedioNotas() {

    $('#formulario').on('change','#nota1,#nota2,#nota3',function () {
        var nota1=parseFloat($('#nota1').val());
        var nota2=parseFloat($('#nota2').val());
        var nota3=parseFloat($('#nota3').val());

        $('#promedio'.val((nota1+nota2+nota3)/3));
    })
};