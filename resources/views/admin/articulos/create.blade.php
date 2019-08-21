@extends('admin.template.main')
@section('title','FORMULARIO ARTICULO')
@section('content')
						<form class="form-horizontal" role="form" action="{{route('articulos.store')}}" method="POST" autocomplete="off">
							@csrf
							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Nombre :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prar_nombre" placeholder="Nombre">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Publicación :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prar_publicacion" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Año :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prar_anno" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Numero: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prar_numero" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Columna: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prar_columna" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Paginas: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prar_paginas" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Issn :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prar_issn" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Isbn :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prar_isbn" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Pais :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prar_pais" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Fecha :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="prar_fecha" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Editorial :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control " name="prar_editorial" placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Revista :</label>
									<div class="col-sm-8">
										<select class="form-control" name="tipr_id">
											@foreach($revistas as $revista)
												<option value="{{$revista->reve_id}}">{{$revista->reve_descripcion}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Categoria de revista :</label>
									<div class="col-sm-8">
										<select class="form-control" name="care_id">
											@foreach($calidadRevistas as $calidadRevista)
												<option value="{{$calidadRevista->care_id}}">{{$calidadRevista->care_descripcion}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Tipologia del producto :</label>
									<div class="col-sm-8">
										<select class="form-control" name="tipr_id">
											@foreach($tipologias_productos as $tipologia_producto)
												<option value="{{$tipologia_producto->tipr_id}}">{{$tipologia_producto->tipr_descripcion}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Cuartil :</label>
									<div class="col-sm-8">
										<select class="form-control" name="cuar_id">
											@foreach($cuartiles as $cuartil)
												<option value="{{$cuartil->cuar_id}}">{{$cuartil->cuar_descripcion}}</option>
											@endforeach
										</select>
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
										<select class="form-control" name="prar_autores">
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
						</form>

				<!-- End of your awesome content -->
			

@endsection
@section('scripts')
<script>
</script>
@endsection