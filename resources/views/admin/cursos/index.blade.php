
@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

<div class="container">
    <h3 class="center">Lista de cursos</h3>
<div class="row">

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Descricao</th>
            <th>Imagem</th>
            <th>Publicado</th>
            <th>Acao</th>

        </tr>
        </thead>
        <tbody>

        @foreach($registros as $registro )
            <tr>
                <td>{{$registro->id}}</td>
                <td>{{$registro->nome}}</td>
                <td>{{$registro->telefone}}</td>
                <td>{{$registro->endereco}}</td>
                <td>{{$registro->cidade}}</td>
                <td>{{$registro->complemento}}</td>
                <td>{{$registro->numero}}</td>
                <td>{{$registro->email}}</td>
                <td>{{$registro->comentario}}</td>
                <td> <img  width="80"src="{{asset($registro->imagem)}}" alt={{"$registro->titulo"}}></td>
                <td>

                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>


    <div class="row">

        <a class="btn blue" href="{{route('admin.cursos.adicionar')}}">Adicionar</a>
        </div>

    </div>
@endsection
