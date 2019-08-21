@extends('admin.template.main')
@section('title','FORMULARIO CONSULTORIA')
@section('content')
{!! Form::open(['route'=>['consultoria.update',$consultoria->cons_id],'method'=> 'PUT']) !!}
							<form class="form-horizontal" role="form" action="{{route('consultoria.store')}}" method="POST" autocomplete="off">
							<input type="text" name="_token" value="{{ csrf_token()}}" style="display: none;">
							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Titulo :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prco_titulo" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Empresa :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prco_empresa" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Ciudad :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prco_cuidad" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Fecha inicio :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prco_fechainicio" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Fecha fin :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prco_fechafin" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Tiempo :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prco_tiempo" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Restringido :</label>
									<div class="col-sm-8">
										<select class="form-control" name="prco_restingido">
											<option>Si</option>
											<option>No</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Proyecto :</label>
									<div class="col-sm-8">
										<select class="form-control" name="proy_id">
											<option>c1</option>
											<option>c2</option>
											<option>c3</option>
										</select>
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Contrato :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prco_contrato" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Certificado :</label>
									<div class="col-sm-8">
										<input type="file" class="btn btn-default" name="prco_archivocertificado" title="Select file">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">contrato :</label>
									<div class="col-sm-8">
										<input type="file" class="btn btn-default" name="prco_archivocontrato" title="Select file">
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