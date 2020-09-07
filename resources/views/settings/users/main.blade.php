@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Usuarios</div>
                 <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Tipo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $u)
                            <tr>
                                <td>{{$u->name}}</td>
                                <td>{{$u->email}}</td>
                                <td>Root</td>
                                <td>
                                    <button class="btn btn-info">Editar  
                                    &nbsp; <i class="fas fa-edit"> </i> 
                                    </button>
                                    <button class="btn btn-danger">
                                    Eliminar
                                    &nbsp; <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                 </div>
            </div>
        </div>        
    </div>
</div>
@endsection
