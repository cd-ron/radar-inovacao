@extends('admin.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('admin.role.create') }}" class="btn btn-primary" style="float:right;">
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
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td align="center">{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td class="table-actions" align="center">

                                        <a class="btn btn-warning btn-xs" href="{{ url('admin/role/permission',$role->id) }}">
                                            <i class="ion-star"></i>
                                        </a>
                                        {!! Form::open(['method' => 'get', 'route' => ['admin.role.edit', $role->id]]) !!}
                                        {!! Form::button('<i class="fa fa-pencil"></i>', ['type' => 'submit', 'class' => 'btn btn-primary btn-xs']) !!}
                                        {!! Form::close() !!}
                                        {!! Form::open(['method' => 'delete', 'data-confirm' => 'You will not be able to recover this record!', 'route' => ['admin.role.destroy', $role->id]]) !!}
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