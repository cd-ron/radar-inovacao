@extends('admin.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('admin.event.index') }}" class="btn btn-primary" style="float:right;"><i class="fa fa-arrow-left"></i> Voltar</a>
            <h4 class="card-title" style="padding-left: 15px;">Eventos</h4>
        </div>
        <div class="panel-body">
            <div class="card">
                <div class="card-block">
                    @if(isset($event))
                        <h4 class="card-title">Editar Evento</h4>
                        {!! Form::model($event, ['route' => ['admin.event.update', $event->id], 'method' => 'put']) !!}
                    @else
                        <h4 class="card-title">Criar Evento</h4>
                        {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'route' => ['admin.event.store']]) !!}
                    @endif
                        <div class="row">
                            <div class="col-lg-3">
                                {!! Form::openGroup('category_event_id', 'Categoria do Evento') !!}
                                {!! Form::select('category_event_id', $categories) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::openGroup('city_id', 'Cidade do Evento') !!}
                                {!! Form::select('city_id', $cities) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::openGroup('date', 'Data') !!}
                                {!! Form::text('date', null, ['class' => 'date']) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::openGroup('hour', 'Horário') !!}
                                {!! Form::text('hour', null, ['class' => 'time']) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                {!! Form::openGroup('name', 'Nome') !!}
                                {!! Form::text('name') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::openGroup('local', 'Local') !!}
                                {!! Form::text('local') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::openGroup('organization', 'Organização') !!}
                                {!! Form::text('organization') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::openGroup('manager', 'Organizador') !!}
                                {!! Form::text('manager') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                {!! Form::openGroup('email', 'E-mail') !!}
                                {!! Form::email('email') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::openGroup('site', 'Site') !!}
                                {!! Form::text('site') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::openGroup('phone', 'Telefone') !!}
                                {!! Form::text('phone', null, ['class' => 'phone']) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::openGroup('ingress', 'Ingresso') !!}
                                {!! Form::text('ingress') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                {!! Form::openGroup('description', 'Descrição') !!}
                                {!! Form::textarea('description') !!}
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
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00');
            $('.phone').mask('(00) 00000-0000');
        });
    </script>
@stop
