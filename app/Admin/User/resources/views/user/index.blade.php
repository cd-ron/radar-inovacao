@extends('admin.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('admin.user.create') }}" class="btn btn-primary" style="float:right;">
                <i class="fa fa-plus"></i> Novo
            </a>
            <h4 class="card-title" style="padding-left: 15px;">Usuários</h4>
        </div>
        <div class="panel-body">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de usuários</h3>
                </div>
                <div class="box-body">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Papel</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td align="center">{{ $user->id }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="table-actions" align="center">
                                        {!! Form::open(['method' => 'get', 'route' => ['admin.user.edit', $user->id]]) !!}
                                        {!! Form::button('<i class="fa fa-pencil"></i>', ['type' => 'submit', 'class' => 'btn btn-primary btn-xs']) !!}
                                        {!! Form::close() !!}
                                        {!! Form::open(['method' => 'delete', 'data-confirm' => 'You will not be able to recover this record!', 'route' => ['admin.user.destroy', $user->id]]) !!}
                                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop