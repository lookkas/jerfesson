
@extends('layout.site')

@section('titulo','LRScomputadores')

@section('conteudo')






    <div class="container">

        <div class="alert-danger">

            <ul>
                @foreach($errors->all() as $error)
                    <strong><li>{{$error}}</li></strong>
                @endforeach
            </ul>
        </div>


        <form action= "{{route('site.contatos.salvar')}}"  method="post"  entype="multipart/form-data"  class="form-horizontal">
            <div class="text-center">
                <h1>CONTATOS</h1>
            </div>
            {{csrf_field()}}

            <div class="form-group">
                <div class="col-md-8">
                    <label for="usr">Name:</label>

                    <input  type="text"  class="form-control"  name="nome" value="{{isset($registro->nome)? $registro->nome:''}}{{ old('nome') }}" class="validate"><br/>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="usr">Telefone:</label>

                    <input id="telefone"  maxlength="15" type="text" class="form-control" name="telefone"  value="{{isset($registro->telefone)? $registro->telefone:''}}{{ old('telefone') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    <label for="usr">Endereco:</label>

                    <input  type="text" name ="endereco"  class="form-control"   value="{{isset($registro->cidade)? $registro->cidade:''}}{{ old('cidade') }}" class="validate">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-md-4">
                    <label for="usr">Uf:</label>



                    <select id="estados" class="right-align" style="width:200px;height:30px"  value="{{isset($registro->uf)? $registro->uf:''}}{{ old('cidade') }}" class="validate" name="uf">
                        <option value="" name="uf" >Selecione UF</option>

                    </select>

                </div>
                <br>
                <div class="col-md-offset-6">

                    <label for="usr">Cidade:</label>


                    <select id="cidade" class="right-align" style="width:200px;height:30px" name="cidade" value="{{isset($registro->cidade)? $registro->cidade:''}}{{ old('cidade') }}" class="validate">
                        <option value="" name="cidade">Selecione a cidade</option>
                    </select>





                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-md-8">
                    <label for="pwd">Complemento</label>
                    <input type="text" class="form-control"  name ="complemento"  value="{{isset($registro->complemento)? $registro->complemento:''}}{{ old('complemento') }}" class="validate">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2">
                    <label for="pwd">Numero</label>
                    <input  type="text"  maxlength="4" class="form-control" class="validate" name="numero" value="{{isset($registro->numero)? $registro->numero:''}}{{ old('numero') }}">
                </div>

            </div>
            <div class="form-group">
                <div class="col-md-8">

                    <label for="pwd">Email:</label>
                    <input  type="email"  name ="email" class="form-control"  value="{{isset($registro->email)? $registro->email:''}}{{ old('email') }}" class="validate">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    <label for="pwd">Mensagem</label>
                    <textarea id="textarea1"  class="form-control" class="materialize-textarea" name="comentario"  value="{{isset($registro->comentario)? $registro->comentario:''}}{{ old('comentario') }}"  style="height:100px;"></textarea>
                </div>
            </div>

            <div class="file-field input-field col s2 ">
                <div>

                    <input type="file" name="imagem"> <!--serve para verificar se existe isset-->
                </div>
            </div>
            @if(isset($registro->imagem))
                <div class="input-field">
                    <img width="150" src="{{asset($registro->imagem)}}"/>
                </div>
            @endif
            <div class="col-lg-12"  id="enviar" >
                <button type="submit" class="btn btn-success"><span>Enviar</span></button>
            </div>


        </form>

    </div>


@endsection