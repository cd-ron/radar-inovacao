@extends('admin.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('admin.event.create') }}" class="btn btn-primary" style="float:right;">
                <i class="fa fa-plus"></i> Novo
            </a>
            <h4 class="card-title" style="padding-left: 15px;">Eventos</h4>
        </div>
        <div class="panel-body">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Eventos</h3>
                </div>
                <div class="box-body">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Organização</th>
                            <th>Organizador</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td align="center">{{ $event->id }}</td>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ $event->date }}</td>
                                    <td>{{ $event->organization }}</td>
                                    <td>{{ $event->manager }}</td>
                                    <td>{{ $event->phone }}</td>
                                    <td class="table-actions" align="center">
                                        {!! Form::open(['method' => 'get', 'route' => ['admin.event.edit', $event->id]]) !!}
                                            {!! Form::button('<i class="fa fa-pencil"></i>', ['type' => 'submit', 'class' => 'btn btn-primary btn-xs']) !!}
                                        {!! Form::close() !!}
                                        {!! Form::open(['method' => 'delete', 'data-confirm' => 'You will not be able to recover this record!', 'route' => ['admin.event.destroy', $event->id]]) !!}
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