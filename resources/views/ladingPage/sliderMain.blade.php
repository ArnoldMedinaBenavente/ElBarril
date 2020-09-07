@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-12 text-right">
		<button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#modalNew">
			<i class="fas fa-plus"></i>
			&nbsp;Nuevo
		</button>
	</div>
	<br>
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Slider Main</div>
				<div class="card-body">
					<table class="table table-sm">
						<thead>
							<tr>
								<th>Contenido Visual</th>
								<th>Titulo</th>
								<th>Contenido</th>
								<th>Fecha</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($slider as $s)
							<tr>
								<td>{{$s->path}}</td>
								<td>{{$s->title}}</td>
								<td>{{$s->contet}}</td>
								<td>{{$s->created_at}}</td>
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

<!-- Modal Nueva Imagen-->
<div class="modal fade" id="modalNew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="/home/ladingPage/sliderMain/create" method="post" enctype="multipart/form-data">
				@csrf 
				<div class="modal-body">
					<div class="form-group">
						<label for="contentVisual">Contvenido Visual</label>
						<input type="file" class="form-control" id="contentVisual" name="contentVisual" >
					
					</div>
					<div class="form-group">
						<label for="title">Titulo</label>
						<input type="text" class="form-control" id="title" name="title" >
					</div>
					<div class="form-group">
						<label for="content">Contenido</label>
						<input type="text" class="form-control" id="content" name="content" >
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">
					<i class="fas fa-save"></i>
				   </button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
@endsection
