@extends('admin.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('admin.categoryevent.index') }}" class="btn btn-primary" style="float:right;"><i class="fa fa-arrow-left"></i> Voltar</a>
            <h4 class="card-title" style="padding-left: 15px;">Categorias de Evento</h4>
        </div>
        <div class="panel-body">
            <div class="card">
                <div class="card-block">
                    @if(isset($category_event))
                        <h4 class="card-title">Editar Categoria de Evento</h4>
                        {!! Form::model($category_event, ['route' => ['admin.categoryevent.update', $category_event->id], 'method' => 'put']) !!}
                    @else
                        <h4 class="card-title">Criar Categoria de Evento</h4>
                        {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'route' => ['admin.categoryevent.store']]) !!}
                    @endif
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::openGroup('name', 'Nome') !!}
                            {!! Form::text('name') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop