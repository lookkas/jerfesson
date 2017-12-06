




    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage"><img src="/img/footer.png" alt="" /></a>
            </div>
            <br>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                    <li><a href="{{route('site.servicos')}}"><span class="glyphicon glyphicon-wrench"></span> SERVIÇOS</a></li>
                    <li><a href="{{route('site.contato')}}"><span  class="glyphicon glyphicon-calendar"></span> FALE CONOSCO</a></li>
                    <li><a href="{{route('site.sobre')}}"><span  class="glyphicon glyphicon-user"></span> SOBRE</a></li>
                    @if(Auth::guest())
                        <li><a href="{{route('site.login')}}"><span class="glyphicon glyphicon-lock"></span> Login</a></li>

                    @else
                        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                    @endif

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Merchandise</a></li>
                            <li><a href="#">Extras</a></li>
                            <li><a href="#">Media</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>

            </div>
            <br>

        </div>
    </nav>



</header>