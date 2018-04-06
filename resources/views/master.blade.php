<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud con Laravel 5.4</title>


  {!!Html::style('css/bootstrap.min.css')!!}
   {!!Html::style('css/font-awesome.min.css')!!}
   {!!Html::style('css/select2.min.css')!!}


</head>
<body>
 <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Inicio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li>{!! link_to_route('complaint.index', $title = 'Lista Denuncias') !!}</li>
               <li>{!! link_to_route('category.index', $title = 'Categorias') !!}</li>
                <li>{!! link_to_route('login', $title = 'Login') !!}</li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>


<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
    {!!Html::script('/js/jquery-2.1.0.js')!!}
    
    {!!Html::script('/js/bootstrap.min.js')!!}
     {!!Html::script('/js/select2.min.js')!!}

</body>
</html>
