@extends('admin.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('admin.role.index') }}" class="btn btn-primary" style="float:right;"><i class="fa fa-arrow-left"></i> Voltar</a>
            <h4 class="card-title" style="padding-left: 15px;">Usuários</h4>
        </div>
        <div class="panel-body">
            <div class="card">
                <div class="card-block">
                    @if(isset($role))
                        <h4 class="card-title">Editar usuário</h4>
                        {!! Form::model($role, ['route' => ['admin.role.update', $role->id], 'method' => 'put']) !!}
                    @else
                        <h4 class="card-title">Criar usuário</h4>
                        {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'route' => ['admin.role.store']]) !!}
                    @endif
                    <div class="row">
                        <div class="col-lg-4">
                            {!! Form::openGroup('name', 'Nome') !!}
                            {!! Form::text('name') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>

                    <div class="form-actions" align="right">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop