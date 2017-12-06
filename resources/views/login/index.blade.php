
@extends('layout.site')

@section('titulo','LRScomputadores')

@section('conteudo')



    <div class="container">

        <div class="alert-danger">
            @foreach($errors->all() as $erro)
                <ul>

                    <li>{{$erro}}</li>

                </ul>

            @endforeach

        </div>
        <div class="text-center">
        <h1>Area Restrita</h1>
</div>






                    <form action="{{route('site.login.entrar')}}" method="post"  class="form-horizontal">

                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="usr">EMAIL:</label>
                                <input type="text" class="form-control" name="email" >
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="usr">SENHA:</label>
                                <input type="password" name="senha"  class="form-control" >
                            </div>
                        </div>

                        {{csrf_field()}}<!--Função serve para enviar de modo segurar enfindo o toke-->

                        <div class=" col-md-8 col-xs-8 col-lg-offset-2 col-md-offset-1"  id="enviar" >
                            <button type="submit" class="btn btn-success"><span>Enviar</span></button>
                        </div>
                    </form>





                </div>
            </div>
        </div>
    </div>

@endsection
