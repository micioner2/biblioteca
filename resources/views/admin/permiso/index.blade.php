
@extends("theme/$theme/layout")

@section('titulo')
    Permisos
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Permisos</h3>
            </div>
            
            <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permisos as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                   
            </div>
        </div>
    </div>

    
@endsection