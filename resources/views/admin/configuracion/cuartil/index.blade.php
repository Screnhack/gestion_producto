@extends('admin.template.main')
@section('title','Cuartil')
@section('content')
<a href="{{route('cuartil.create')}}">
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
		@foreach($cuartil as $object)
		<tr>
			<th>{{$object->cuar_id}}</th>
			<th>{{$object->cuar_codigo}}</th>
			<th>{{$object->cuar_descripcion}}</th>
			<th colspan="2">
				<a class="btn  btn-primary" href="{{route('cuartil.edit', $object->cuar_id)}}">Editar</a>
				<a class="btn  btn-primary" href="{{route('cuartil.edit', $object->cuar_id)}}">Eliminar</a>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection