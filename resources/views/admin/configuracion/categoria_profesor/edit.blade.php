@extends('admin.template.main')
@section('title','FORMULARIO CATEGORIAS PROFESOR')
@section('content')
{!! Form::open(['route'=>['categoria_profesor.update',$categoria_profesor->capr_id],'method'=> 'PUT']) !!}
							@csrf
                            <div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Descripción :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="capr_descripcion" placeholder="" value="{{$categoria_profesor->capr_descripcion}}" maxlength="20">
									</div>
                                </div>
                                <div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Código :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="capr_codigo" placeholder="" value="{{$categoria_profesor->capr_codigo}}" maxlength="2">
									</div>
								</div>
								
                            </div>
                            <div class="row">
                            <div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Estado :</label>
									<div class="col-sm-8">
										<select class="form-control" name="capr_estado">
											<option value="1">Activo</option>
											<option value="0">Inactivo</option>
										</select>
									</div>
								</div>
                            </div>
                            <div class="row">
                            <div class="form-group col-sm-6">
									<button type="submit" class="btn btn-default">Registrar</button>
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