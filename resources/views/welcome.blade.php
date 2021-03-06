@extends('master')
    @section('content')
<div class="container>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="{{ asset('/img/p1.jpg')}}" data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide">
                      </div>
                      <div class="item">
                        <img src="{{ asset('/img/p2.jpg')}}" data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide">
                      </div>
                      <div class="item">
                       <img src="{{ asset('/img/p3.jpg')}}" data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide">
                      </div>
                    </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
          </div>
</div>

@stop
