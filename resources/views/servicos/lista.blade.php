
@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')


    <div class="modal fade" id="MeuModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Atualizacao</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('site.atualizar.salvar' )}}" method="post" entype="multipart/form-data">


                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <br>
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
                    <th>Acao</th>



                </tr>
                </thead>
                <tbody>
                <div>

                @foreach($data as $registro )
                    <tr>
                        <td  >{{$registro->id}}</td>
                        <td>{{$registro->nome}}</td>
                        <td>{{$registro->cpf}}</td>
                        <td>{{$registro->telefone}}</td>
                        <td>{{$registro->endereco}}</td>
                        <td>{{$registro->cidade}}</td>
                        <td>{{$registro->complemento}}</td>
                        <td>{{$registro->numero}}</td>
                        <td>{{$registro->email}}</td>
                        <td>{{$registro->comentario}}</td>
                        <td> <img  width="80" src="{{asset($registro->imagem)}}" alt={{"$registro->titulo"}}></td>
                            <td><a href="#MeuModal"   value="{{$registro->id}}" name="id_pes" role="button"  data-toggle="modal" ><button type="button" type="sumbit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-refresh"></span></button></a></td>

                        </td>
                    </tr>
                    </div>
                @endforeach

                </tbody>
                <tr>
                    <td colspan="5" valign="center" align="center">
                        {{ $data->links() }}
                    </td>
                </tr>
            </table>
        </div>
        <div>


            <div class="col-md-4">

                <form action="{{route('servicos.buscar')}}" method="post" entype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" name="pesq"  class="form-control">
                        <button type="submit" class="btn btn-info">Pesquisar</button>
                        {{csrf_field()}}<!--Função serve para enviar de modo segurar enfindo o toke-->
                    </div>

                </form>



    </div>
</div>
</div>

@endsection
