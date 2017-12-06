
@extends('layout.site')

@section('conteudo')





        <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">


    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <div class="text-center">
                <h3 class="modal-title">Qual a nota voce avalia o site</h3>
            </div>
        </div>
                <div class="container">

                    <div class="alert-danger">
                        @foreach($errors->all() as $erro)
                            <ul>

                                <li>{{$erro}}</li>

                            </ul>

                        @endforeach

                    </div>
                    </div>
                <form action ="{{route('atualizar.home')}}"  method="post" entype="multipart/form-data">
                <div class="text-center">
                <div class="modal-body">

                    <p>
                    <div class="vote">
                        <label>
                            <input type="radio" name="fb" value="1" />
                            <i class="fa"></i>
                        </label>
                        <label>
                            <input type="radio" name="fb" value="2" />
                            <i class="fa"></i>
                        </label>
                        <label>
                            <input type="radio" name="fb" value="3" />
                            <i class="fa"></i>
                        </label>
                        <label>
                            <input type="radio" name="fb" value="4" />
                            <i class="fa"></i>
                        </label>
                        <label>
                            <input type="radio" name="fb" value="5" />
                            <i class="fa"></i>
                        </label>
                    </div>

                    <div id="voto">

                        <br>
                        <br>
                    </div>
                       <label> <h4>Comentario</h4></label>
                        <div class="form-group">

                            <textarea  name= "comentario" class="form-control" rows="5" id="comment"></textarea>
                        </div>

                        </p>
                    {{csrf_field()}}
                       <button class="btn #4caf50 green"  type="submit">Avaliar</button>

                </div>
                </div>
                </form>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>

            </div>

        </div>

    <div class="row"> <!-- 6 + 6 = 12 -->
    <div class="col-xs-2">
        <div>
                        <!--o css desse botão está no arquivo css consulta-->
                    <button type="button" id ="btna" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Avalie <span  class="glyphicon glyphicon-star"></span></button>
        </div>
    </div>



    </div>

        @if(Session::has('sucess'))
            <div >
            <div class="alert alert-success" id ="tempo">
            {{session('sucess')}}
            </div>
            </div>
        @endif







<div class="w3-content w3-display-container">
    <img class="mySlides" src="/img/nuvem.jpg" style="width:100%">
    <img class="mySlides" src="/img/nuvem.jpg" style="width:100%">
    <img class="mySlides" src="/img/sist.jpg" style="width:100%">
    <img class="mySlides" src="/img/systemas.png" style="width:100%">

    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>



<div class="container text-center">
    <h3>Bem vindo!</h3>

    <br>



    <div class="row">
        <div class="col-sm-4">
            <p class="text-center"><strong>Name</strong></p><br>
            <a href="#demo" data-toggle="collapse">
                <img src="java.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
            </a>
            <div id="demo" class="collapse">
                <p>Guitarist and Lead Vocalist</p>
                <p>Loves long walks on the beach</p>
                <p>Member since 1988</p>
            </div>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>Name</strong></p><br>
            <a href="#demo2" data-toggle="collapse">
                <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
            </a>
            <div id="demo2" class="collapse">
                <p>Drummer</p>
                <p>Loves drummin'</p>
                <p>Member since 1988</p>
            </div>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>Name</strong></p><br>
            <a href="#demo3" data-toggle="collapse">
                <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
            </a>
            <div id="demo3" class="collapse">
                <p>Bass player</p>
                <p>Loves math</p>
                <p>Member since 2005</p>
            </div>
        </div>
    </div>
</div>



@endsection
