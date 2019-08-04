@extends('admin.template.main')
@section('content')
<a href="{{route('investigador.create')}}">
	<button type="button" class="btn btn-success btn-block">Registrar</button>
</a>
@endsection