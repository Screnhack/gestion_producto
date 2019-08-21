@extends('admin.template.main')
@section('content')
<a href="{{route('proyecto.create')}}">
	<button type="button" class="btn btn-success btn-block">Registrar</button>
</a>
<table border="1">
	<thead>
	<tr>
		<th>codigo</th>
		<th>nombre</th>
		<th>fecha inicio</th>
		<th></th>
	</tr>
	</thead>
	@foreach($proyectos as $proyecto)
	<tr>
		<td>{{$proyecto->proy_codigo}}</td>
		<td>{{$proyecto->proy_nombre}}</td>
		<td>{{$proyecto->proy_fechainicio}}</td>
		<td colspan="2">
				<a class="btn  btn-primary" href="{{route('proyecto.edit', $proyecto->proy_id)}}">Editar</a>
				<a class="btn  btn-primary" href="{{route('proyecto.edit', $proyecto->proy_id)}}">Eliminar</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection