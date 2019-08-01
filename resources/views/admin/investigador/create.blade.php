@extends('admin.template.main')
@section('content')

				<div class="page-heading">
					<h1><i class='fa fa-check'></i> Forms</h1>
				</div>
				<!-- Page Heading End-->
				<!-- Your awesome content goes here -->
				<div class="widget">
					<div class="widget-header transparent">
						<h2><strong>FORMULARIO INVESTIGADOR</strong></h2>
					</div>
					<div class="widget-content padding">
						<form class="form-horizontal" role="form">

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Nombres :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Apellidos :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Tipo de documento :</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option>Cedula</option>
											<option>Pasaporte</option>
											<option>Cedula extranjeria</option>
										</select>
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label"># documento :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Email :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Researchid :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Orcid :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Scopus :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Google academico :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Researchid :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Pais de afiliación :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label"># afiliación :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label"># horas de investigación :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Carga horaria :</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option>TC</option>
											<option>MT</option>
											<option>Planta</option>
										</select>
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Categoria colciencias :</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option>Categ 1</option>
											<option>Categ 2</option>
											<option>Categ 3</option>
										</select>
									</div>
								</div>
							</div>


							<div class="row">
								<div class="form-group">
									<label class="col-sm-2 control-label">Pertenece a :</label>
									<div class="col-sm-10">
										<div class="radio iradio">
											<label>
												<input type="radio" name="optionsRadios" id="optionP"
													onclick="mostrarDependenciaPrograma(this.value)" value="P">
												Un programa academico
											</label>
										</div>
										<div class="radio iradio">
											<label>
												<input type="radio" name="optionsRadios" id="optionD"
													onclick="mostrarDependenciaPrograma(this.value)" value="D">
												Una dependencia
											</label>
										</div>
									</div>
								</div>
							</div>

							<div class="row" id="rowDependencia" hidden>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Dependencia :</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option>Administrativa</option>
											<option>Investigacion</option>
											<option>Otra</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row" id="rowPrograma" hidden>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Programa academico :</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option>Ingenieria</option>
											<option>Derecho</option>
											<option>Psicologia</option>
										</select>
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Categoria profesor :</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option>Categ 1</option>
											<option>Categ 2</option>
											<option>Categ 3</option>
										</select>
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
			//mostrarDependenciaPrograma("D");
		});

		// funcion show dependencia o programas
		function mostrarDependenciaPrograma(val) {
			console.log("entro " + val);
			switch (val) {
				case "D":
					// mostrar dependencia y ocultar programas
					$("#rowDependencia").show();
					$("#rowPrograma").hide();
					return;

				case "P":
					// mostrar dependencia y ocultar programas
					$("#rowDependencia").hide();
					$("#rowPrograma").show();
					return;
			}

		}
	</script>
@endsection