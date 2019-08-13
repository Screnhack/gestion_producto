@extends('admin.template.main')
@section('title','Revistas')
@section('content')
<a href="{{route('revistas.create')}}">
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
		@foreach($revistas as $object)
		<tr>
			<th>{{$object->revi_id}}</th>
			<th>{{$object->revi_codigo}}</th>
			<th>{{$object->revi_descripcion}}</th>
			<th colspan="2">
				<a class="btn  btn-primary" href="{{route('revistas.edit', $object->revi_id)}}">Editar</a>
				<a class="btn  btn-primary" href="{{route('revistas.edit', $object->revi_id)}}">Eliminar</a>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection