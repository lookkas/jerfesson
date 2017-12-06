
@extends('layout.site')



@section('conteudo')

    <div class="col-md-4">

        <form action="{{route('servicos.buscar')}}" method="post" entype="multipart/form-data">

            <div class="form-group">
                <input type="text" name="pesq"  class="form-control">
                <button type="submit" class="btn btn-info">Pesquisar</button>
                {{csrf_field()}}<!--Função serve para enviar de modo segurar enfindo o toke-->
            </div>
            </form>
</div>
    <br>
    <br>
    <br>
    <div class="container">
        <h3 class="center">Lista Cliente</h3>
        <div class="row">

            <table  class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Telefone</th>
                    <th>Endereco</th>
                    <th>Cidade</th>
                    <th>Complemento</th>
                    <th>Numero</th>
                    <th>Email</th>
                    <th>comentario</th>
                    <th>imagem</th>


                </tr>
                </thead>
                <tbody>

                @foreach($resultado as $registro )
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->nome}}</td>
                        <td>{{$registro->cpf}}</td>
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
        <div>




        </div>
    </div>


@endsection
