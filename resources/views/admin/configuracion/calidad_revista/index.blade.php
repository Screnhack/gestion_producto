@extends('admin.template.main')
@section('title','Calidad Revista')
@section('content')
<a href="{{route('calidad_revista.create')}}">
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
		@foreach($calidadRevista as $object)
		<tr>
			<th>{{$object->care_id}}</th>
			<th>{{$object->care_codigo}}</th>
			<th>{{$object->care_descripcion}}</th>
			<th colspan="2">
				<a class="btn  btn-primary" href="{{route('carga_horaria.edit', $object->care_id)}}">Editar</a>
				<a class="btn  btn-primary" href="{{route('carga_horaria.edit', $object->care_id)}}">Eliminar</a>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection