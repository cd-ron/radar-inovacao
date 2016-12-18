@extends('front.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Eventos
            </h1>
        </div>
    </div>
    @foreach($events as $event)
        <div class="row">
            <div class="col-md-5">
                <a href="#">
                    <img class="img-rounded" src="images/feiragamer.jpg" alt="" width="100%">
                </a>
            </div>
            <div class="col-md-1 date-info">
                <h3>{{ $event->date->day }}</h3>
                <p>{{ $event->verifyMonth($event->date->month) }}</p>
            </div>
            <div class="col-md-6">
                <h4>{{$event->name}}</h4>
                <p>{{ substr($event->description, 0, 100)}}</p>
                <a class="btn btn-primary" href="#">Veja mais <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>
    @endforeach
@stop