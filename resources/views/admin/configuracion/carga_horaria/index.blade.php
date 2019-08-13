@extends('admin.template.main')
@section('title','Carga Horaria')
@section('content')
<a href="{{route('carga_horaria.create')}}">
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
		@foreach($cargaHoraria as $object)
		<tr>
			<th>{{$object->caho_id}}</th>
			<th>{{$object->caho_codigo}}</th>
			<th>{{$object->caho_descripcion}}</th>
			<th colspan="2">
				<a class="btn  btn-primary"  href="{{route('carga_horaria.edit', $object->caho_id)}}">Editar</a>
				<a class="btn  btn-primary"  href="{{route('carga_horaria.edit', $object->caho_id)}}">Eliminar</a>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection