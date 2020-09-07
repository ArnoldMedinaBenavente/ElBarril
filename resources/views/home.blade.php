@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Pagína Principal</div>
                 <div class="card-body">
                    <a href="/home/ladingPage">
                      <button class="btn btn-primary btn-sm">Administrar</button>
                  </a>
                 </div>
            </div>
        </div>
         <div class="col-md-4">
            <div class="card">
                <div class="card-header">Inventario</div>
                 <div class="card-body">
                    <button class="btn btn-primary btn-sm">Administrar</button>
                 </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ajustes</div>
                 <div class="card-body">
                  <a href="/home/settings"> 
                    <button class="btn btn-primary btn-sm">Administrar</button>
                  </a> 
                 </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
