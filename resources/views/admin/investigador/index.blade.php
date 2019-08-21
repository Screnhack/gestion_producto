@extends('admin.template.main')
@section('content')
<a href="{{route('investigador.create')}}">
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
		@foreach($investigadores as $investigador)
		<tr>
			<td>{{$investigador->inve_id}}</td>
			<td>{{$investigador->inve_nombre}}</td>
			<td>{{$investigador->inve_apellido}}</td>
			<td>{{$investigador->inve_email}}</td>
			<td>{{$investigador->inve_researchgate}}</td>
			<td>{{$investigador->inve_orcid}}</td>
			<td>{{$investigador->inve_scopus}}</td>
			<td>{{$investigador->inve_researchid}}</td>
			<td>{{$investigador->inve_horasinvestigacion}}</td>
			<td>{{$investigador->inve_paisafiliacion}}</td>
			<td>{{$investigador->inve_numeroafiliacion}}</td>
			<td colspan="2">
				<a class="btn  btn-primary" href="{{route('investigador.edit', $investigador->inve_id)}}">Editar</a>
				<a class="btn  btn-primary" href="{{route('investigador.edit', $investigador->inve_id)}}">Eliminar</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection