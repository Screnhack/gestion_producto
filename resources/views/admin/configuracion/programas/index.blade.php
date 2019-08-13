@extends('admin.template.main')
@section('title','Programas')
@section('content')
<a href="{{route('programas.create')}}">
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
		@foreach($programas as $object)
		<tr>
			<th>{{$object->prog_id}}</th>
			<th>{{$object->prog_codigo}}</th>
			<th>{{$object->prog_descripcion}}</th>
			<th colspan="2">
				<a class="btn  btn-primary" href="{{route('programas.edit', $object->prog_id)}}">Editar</a>
				<a class="btn  btn-primary" href="{{route('programas.edit', $object->prog_id)}}">Eliminar</a>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection