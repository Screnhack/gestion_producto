@extends('admin.template.main')
@section('title','FORMULARIO PROYECTO')
@section('content')
						<form class="form-horizontal" role="form" action="{{route('proyecto.store')}}" method="POST" autocomplete="off">
							@csrf
							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Nombre del proyecto :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="proy_nombre" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Codigo :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="proy_codigo" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Fecha inicial :</label>
									<div class="col-sm-8">
										<input type="date" class="form-control" name="proy_fechainicio" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Fecha Final :</label>
									<div class="col-sm-8">
										<input type="date" class="form-control" name="proy_fechafinal" placeholder="">
									</div>
								</div>
							</div>
							<div class="widget-header transparent">
								<h2><strong>AUTORES</strong></h2>
							</div>
							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Selecciones autores :</label>
									<div class="col-sm-8">
										<select class="form-control" name="inve_id">
											<option>TC</option>
											<option>MT</option>
											<option>Planta</option>
										</select>
									</div>
								</div>
								<div class="form-group col-sm-6">
									<button type="submit" class="btn btn-default">Agregar</button>
								</div>
							</div>
					</div>
					</form>
@endsection
@section('scripts')
<script>
</script>
@endsection