
@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Adicionar cursos</h3>
        <div class="row">


<form class="" action="{{route('admin.cursos.salvar')}}" method="post" entype="multipart/form-data">

    {{csrf_field()}}<!--Função serve para enviar de modo segurar enfindo o toke-->
    @include('admin.cursos._form')

    <button class="btn deep-orange">Salvar</button>

</form>



        </div>


        <div class="row">

            <a class="btn blue" href="{{route('admin.cursos.adicionar')}}">Adicionar</a>
        </div>

    </div>



@endsection
