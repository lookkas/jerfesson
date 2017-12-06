
$( document ).ready(function() {
    $('#telefone').mask("(99)-9999Z-9999", {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });



    $(function () {



        var $seuCampoCpf = $("#CPF");
        $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });

});