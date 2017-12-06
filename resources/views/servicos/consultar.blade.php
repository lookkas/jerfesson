
@extends('layout.site')

@section('titulo','LRScomputadores')

@section('conteudo')

    <h3 class="center">Consulta Andamento</h3>
    <div id="w">
    <form action="{{route('servicos.consultar.lista')}}" method="post"  entype="multipart/form-data">
        <div class="row">
            <div class="input-field col s6">
                <input type="text"  class="white-text" name="consultanome"  class="form-control">
                <label class="white-text">NOME:</label>
               </div>
            </div>
        <div class="row">
                <div class="input-field col s6">
                    <input type="text" class="white-text" name="consultacpf"  class="form-control"   >
                    <label class="white-text">CPF:</label>
                    {{csrf_field()}}<!--Função serve para enviar de modo segurar enfindo o toke-->
                </div>
        </div>

        <button type="submit"  class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>


    </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


@endsection