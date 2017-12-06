/**
 * Created by lucas on 14/05/2017.
 */

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function getTable(url)
{
    if (url == '') url = "{{route('site.servicos.listar')}}";
    $.post(url, null, function(data)
    {
        $('#table').html(data);
        linkAjax();
    },'html');
}
function linkAjax()
{
    $items = $('#table table').find('[href]');
    $.each($items, function(index, element){
        var href = $(element).attr('href');
        $(element).attr('href', 'javascript:getTable("' + href + '")');
    });
}
$(document).ready(function(){
    getTable('');
});
