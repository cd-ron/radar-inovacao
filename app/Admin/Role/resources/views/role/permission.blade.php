@extends('admin.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('admin.role.index') }}" class="btn btn-primary" style="float:right;"><i class="fa fa-arrow-left"></i> Voltar</a>
            <h4 class="card-title" style="padding-left: 15px;">Permissões do {{ $role->name }}</h4>
        </div>
        <div class="panel-body">
            <div class="card">
                <div class="card-block">
                    {!! Form::model($role, array('url' => 'admin/role/permission/'.$role->id, 'method' => 'post')) !!}
                    <table class="table table-bordered">
                        <thead>
                            <td>Nome</td>
                            <td>Slug</td>
                            <td>
                                Todos <input type="checkbox" id="checkAll"/>
                            </td>
                        </thead>
                     <tbody>
                        @foreach($permission as $key => $item)
                            <tr>
                             <td>{{ $item->name }}</td>
                             <td>{{ $item->slug }}</td>
                             <td>
                                 @if(in_array($item->id, $permission_roles))
                                     <input name="{{$item->slug}}" type="checkbox" value="1" checked="checked">
                                 @else
                                     <input name="{{$item->slug}}" type="checkbox" value="1">
                                 @endif
                             </td>
                            </tr>
                        @endforeach
                     </tbody>
                    </table>
                    <div class="form-actions" align="right">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#checkAll").change(function () {
                $("input:checkbox").prop('checked', $(this).prop("checked"));
            });
        })
    </script>

@stop