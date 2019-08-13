@extends('admin.template.main')
@section('title','Categoria Profesor')
@section('content')
<a href="{{route('categoria_profesor.create')}}">
	<button type="button" class="btn btn-success btn-block">Registrar</button>
</a>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Codigo</th>
			<th>Descripción</th>
			<th colspan="2"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($categoriaProfesor as $object)
		<tr>
			<th>{{$object->capr_id}}</th>
			<th>{{$object->capr_codigo}}</th>
			<th>{{$object->capr_descripcion}}</th>
			<th colspan="2">
				<a class="btn  btn-primary" href="{{route('categoria_profesor.edit', $object->capr_id)}}">Editar</a>
				<a class="btn  btn-primary" href="{{route('categoria_profesor.edit', $object->capr_id)}}">Eliminar</a>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection