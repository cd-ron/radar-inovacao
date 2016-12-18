@extends('front.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Cadastro de eventos no Radar da Inovação
        </h2>
    </div>
</div>
<div class="col-lg-10 col-lg-offset-1">
    <div class="form-area">
        <form role="form">

            <label >Sobre o evento</label>

            <div class="form-group">
                <input type="text" name="titulo" class="form-control" placeholder="Título do evento" aria-describedby="basic-addon1">
            </div>

            <div class="form-group">
                <span >Evento gratuito:
                    <input type="checkbox" name="eventogratuito">
                </span>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Data inicial</label>
                        <input type="date" class="form-control" placeholder="Data de início">
                    </div>

                    <div class="col-md-6">
                        <label>Hora inicial</label>
                        <input type="time" class="form-control" placeholder="Hora de início">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Data final</label>
                <input type="date" class="form-control" placeholder="Data de fim">
            </div>
    
            <label for="basic-url">Your vanity URL</label>
            <div class="form-group">
                <label>Data final</label>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
            </div>

            <button class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>
@stop
