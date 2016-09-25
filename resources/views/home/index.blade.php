<!DOCTYPE html>
<html lang="en" ng-app="sonhodecasados">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('bower_components/angular-material/angular-material.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--link href="{{URL::asset('bower_components/bootstrap/assets/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="{{URL::asset('bower_components/bootstrap/assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <!--script src="{{URL::asset('bower_components/bootstrap/assets/js/ie-emulation-modes-warning.js')}}"></script-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Sonho de casados</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">SITES DE CASAMENTO</h1>
                <p class="lead">Seu site de casamento vai surpreender seus convidados. Crie um site lindo e personalizado.</p>
                <form>
                    <div class="form-group">
                    <input type="text" class="sc-input input-lg" id="desc_nome_noiva" name="desc_nome_noiva" ng-model="dados.nome_noiva" placeholder="Nome da Noiva">
                    </div>
                    <div class="form-group">
                    <input type="text" class="sc-input input-lg" id="desc_nome_noivo" name="desc_nome_noivo" ng-model="dados.nome_noivo" placeholder="Nome do Noivo">
                    </div>
                    <div class="form-group">
                        <md-datepicker ng-model="datePicker" value="00/00/0000"></md-datepicker>
                    </div>

                    <div class="form-group">
                        <input type="checkbox"><span>Ainda não tenho uma data prevista.</span>
                    </div>
                    <p class="form-group">
                        <a href="#" class="sc-btn input-lg">EXPERIMENTE GRÁTIS</a>
                    </p>
                </form>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--script src="../../assets/js/ie10-viewport-bug-workaround.js"></script-->
</body>
<script src="{{URL::asset('bower_components/angular/angular.js')}}"></script>
<script src="{{URL::asset('bower_components/angular-locale-pt-br/angular-locale_pt-br.js')}}"></script>
<script src="{{URL::asset('bower_components/angular-material/angular-material.js')}}"></script>
<script src="{{URL::asset('bower_components/angular-aria/angular-aria.js')}}"></script>
<script src="{{URL::asset('bower_components/angular-messages/angular-messages.js')}}"></script>
<script src="{{URL::asset('bower_components/angular-animate/angular-animate.js')}}"></script>

<script src="{{URL::asset('js/controller/sonhodecasados.js')}}"></script>
<script src="{{URL::asset('js/controller/home-controller.js')}}"></script>
</html>
