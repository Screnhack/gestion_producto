@extends('admin.template.main')
@section('title','Dependencias')
@section('content')
<a href="{{route('dependencias.create')}}">
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
		@foreach($dependencias as $object)
		<tr>
			<th>{{$object->depe_id}}</th>
			<th>{{$object->depe_codigo}}</th>
			<th>{{$object->depe_descripcion}}</th>
			<th colspan="2">
				<a class="btn  btn-primary" href="{{route('dependencias.edit', $object->depe_id)}}">Editar</a>
				<a class="btn  btn-primary" href="{{route('dependencias.edit', $object->depe_id)}}">Eliminar</a>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection