@extends('admin.template.main')
@section('title','FORMULARIO soft')
@section('content')
{!! Form::open(['route'=>['software.update',$software->soft_id],'method'=> 'PUT']) !!}

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Nombre :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prso_nombre" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Nombre Comercial :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prso_nombrecomercial" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Año :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prso_anno" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Mes :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prso_mes" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Pais :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prso_pais" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Ciudad :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prso_ciudad" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Disponibilidad :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prso_disponibilidad" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label"># radicado tecnico :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prso_radicado" placeholder="">
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
										<input type="text" class="form-control" name="prso_contrato" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Certificado financiero :</label>
									<div class="col-sm-8">
										<input type="file" class="btn btn-default" name="prso_archivocertificado" title="Select file">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Acta de entrega :</label>
									<div class="col-sm-8">
										<input type="file" class="btn btn-default" name="prso_archivoacta" title="Select file">
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