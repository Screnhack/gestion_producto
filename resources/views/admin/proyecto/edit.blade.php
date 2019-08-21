@extends('admin.template.main')
@section('title','FORMULARIO PROYECTO')
@section('content')
							
							{!! Form::open(['route'=>['proyecto.update',$proyecto->proy_id],'method'=> 'PUT']) !!}
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
										<input type="text" class="form-control" name="proy_fechainicio" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Fecha Final :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="proy_fechafinal" placeholder="">
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


					<br><br><br><br><br><br><br><br><br><br>


					{!! Form::close() !!}
@endsection
@section('scripts')
<script>
		//var resizefunc = [];

		$(document).ready(function () {
			console.log("ready!");

		});











	</script>
@endsection