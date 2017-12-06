

@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')


<div class="container">
    <h3 class="center">Consulta</h3>
    <div class="row">

        <table  class="table">
            <thead>
            <tr>

                <th>Nome</th>
                <th>Cpf</th>

            </tr>
            </thead>
            <tbody>

            @forelse($resultados as $registro )
                <tr>

                    <td>{{$registro->nome}}</td>
                    <td>{{$registro->cpf}}</td>
                    @empty
                        <div class="alert alert-danger">
                            <strong>Nenhum dados encontrado</strong>
                        </div>



                </tr>




            @endforelse

            </tbody>
        </table>
    </div>
    <div>
    </div>
</div>
    @endsection