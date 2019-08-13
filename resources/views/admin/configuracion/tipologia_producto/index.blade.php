@extends('admin.template.main')
@section('title','Tipologia Producto')
@section('content')
<a href="{{route('tipologia_producto.create')}}">
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
		@foreach($tipologiaProducto as $object)
		<tr>
			<th>{{$object->tipr_id}}</th>
			<th>{{$object->tipr_codigo}}</th>
			<th>{{$object->tipr_descripcion}}</th>
			<th colspan="2">
				<a class="btn  btn-primary" href="{{route('tipologia_producto.edit', $object->tipr_id)}}">Editar</a>
				<a class="btn  btn-primary" href="{{route('tipologia_producto.edit', $object->tipr_id)}}">Eliminar</a>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection