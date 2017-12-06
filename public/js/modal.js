$(document).ready(function(){
   $('#b').bind('submit', function() {
       e.preventDefault();
       var txt = $(this).serialize();

       $.ajax({
           type:post,
           url:"{{URL::route('site.servicos.listar')}}",
           data:txt,
           success:function(data){

               window.location.href = "{{ URL::route('site.atualizar.salvar',  data ) }}";
           }

       });
    });
});