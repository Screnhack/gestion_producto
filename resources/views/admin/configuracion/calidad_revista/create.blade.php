@extends('admin.template.main')
@section('title','FORMULARIO CALIDAD REVISTA')
@section('content')
							<form class="form-horizontal" role="form" action="{{route('calidad_revista.store')}}" method="POST" autocomplete="off">
							@csrf
							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Código :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="care_codigo" placeholder="" maxlength="2">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Descripción :</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="care_descripcion" placeholder="" maxlength="20">
									</div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Estado :</label>
									<div class="col-sm-8">
										<select class="form-control" name="care_estado">
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


					</form>
@endsection
@section('scripts')
<script>
</script>
@endsection