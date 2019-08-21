@extends('admin.template.main')
@section('title','Categoria')
@section('content')
<a href="{{route('categoria_colciencias.create')}}">
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
		@foreach($categoriaColciencias as $object)
		<tr>
			<th>{{$object->caco_id}}</th>
			<th>{{$object->caco_codigo}}</th>
			<th>{{$object->caco_descripcion}}</th>
			<th colspan="2">
				<a class="btn  btn-primary" href="{{route('categoria_colciencias.edit', $object->caco_id)}}">Editar</a>
				<a class="btn  btn-primary" href="{{route('categoria_colciencias.edit', $object->caco_id)}}">Eliminar</a>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection