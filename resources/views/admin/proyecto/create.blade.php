@extends('admin.template.main')
@section('content')
<div class="page-heading">
					<h1><i class='fa fa-check'></i> Forms</h1>
				</div>
				<!-- Page Heading End-->

				<!-- Your awesome content goes here -->

			<div class="widget">
					<div class="widget-header transparent">
						<h2><strong>FORMULARIO PROYECTO</strong></h2>
					</div>
					<div class="widget-content padding">
						<form class="form-horizontal" role="form">

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Nombre del proyecto :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Codigo :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Fecha inicial :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Fecha Final :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="">
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
										<select class="form-control">
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


					</form>
				</div>
			</div>
@endsection
@section('scripts')
<script>
		//var resizefunc = [];

		$(document).ready(function () {
			console.log("ready!");

		});











	</script>
@endsection