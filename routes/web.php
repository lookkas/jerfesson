<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/contato/{id?}',['uses'=>'ContatoController@index']);

Route::post('/contato', ['uses'=>'ContatoController@criar']);
/*Route::post( '/contatos', function(){
    var_dump($_POST);
    //ou dd($_POST);
    return "contato  POST";
});*/
Route::put( '/contato', ['uses'=>'ContatoController@editar']);
Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/servicos',['as'=>'site.servicos','uses'=>'Home\HomeController@servicos']);
Route::get('/sobre',['as'=>'site.sobre','uses'=>'Home\HomeController@index']);
Route::get('/contatos',['as'=>'site.contato','uses'=>'Home\HomeController@contatos']);
Route::post('/contatos/salvar',['as'=>'site.contatos.salvar','uses'=>'Home\HomeController@salvar']);

Route::get('/servicos/consultar',['as'=>'servicos.consultar','uses'=>'Trabalho\ServicoController@consultar']);
Route::post('/servicos/consultar/lista',['as'=>'servicos.consultar.lista','uses'=>'Trabalho\ServicoController@lista']);
Route::post('/s',['as'=>'atualizar.home','uses'=>'Trabalho\ServicoController@avalia']);



Route::group(['middleware'=>'auth'],function(){ // funcao para protege os usuario auteticado


    Route::post('/servicos/buscar',['as'=>'servicos.buscar','uses'=>'Trabalho\ServicoController@busca']);
    Route::get('/servicos/listar',['as'=>'site.servicos.listar','uses'=>'Trabalho\ServicoController@listar']);
    Route::get('/servicos/adicionar',['as'=>'site.servicos.adicionar','uses'=>'Trabalho\ServicoController@adicionar']);
    Route::post('/servicos/listar/salvar',['as'=>'site.atualizar.salvar', 'uses'=>'Atualizar\AtualizarController@salvar']);
    Route::get('/servicos/listar/atualizar{id}',['as'=>'site.atualizar.atualizar', 'uses'=>'Atualizar\AtualizarController@atualizar']);
    Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);
    Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);

});