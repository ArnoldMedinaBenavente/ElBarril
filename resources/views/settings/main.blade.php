@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Usuarios</div>
                 <div class="card-body">
                     <a href="/home/settings/users">
                        <button class="btn btn-primary btn-sm">Administrar</button>
                      </a>
                 </div>
            </div>
        </div>        
    </div>
</div>
@endsection
