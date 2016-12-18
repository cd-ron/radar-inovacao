@extends('front.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Cadastro de eventos no Radar da Inovação
        </h2>
    </div>
</div>
<div class="col-md-10 col-md-offset-1">
    <div class="form-area">
        <form role="form">
            <div class="row">
                <div class="form-group col-md-10">
                    <label >Nome do evento</label>
                    <input type="text" name="titulo" class="form-control" placeholder="Título do evento" aria-describedby="basic-addon1">
                </div>

                <div class="form-group col-md-2" style="margin-top:27px">
                    <label >Evento gratuito: <input type="checkbox" name="eventogratuito">
                    </label>
                    <!--input type="checkbox" name="eventogratuito" class="form-control"-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <label>Data de início:</label>
                    <input type="date" class="form-control" placeholder="Data de início">
                </div>

                <div class="col-md-4 form-group">
                    <label>Hora de início:</label>
                    <input type="time" class="form-control" placeholder="Hora de início">
                </div>
                <div class="col-md-4 form-group">
                    <label>Data de término:</label>
                    <input type="date" class="form-control" placeholder="Data de fim">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Local:</label>
                    <input type="text" class="form-control" placeholder="Local">
                </div>
            </div>
        </form>
    </div>
</div>
@stop
