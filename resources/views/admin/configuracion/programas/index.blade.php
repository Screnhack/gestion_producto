@extends('admin.template.main')
@section('title','Programas')
@section('content')
<!-- Page Heading Start -->
				<!-- <div class="page-heading">
            		<h1><i class='fa fa-table'></i> Tables</h1>
            		<h3>Basic & Simple Sortable Tables</h3>            	</div> -->
            	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
				<div class="row">
					<div class="col-md-3">
						<a href="{{route('programas.create')}}">
							<button type="button" class="btn btn-success btn-block">Registrar</button>
						</a>
					</div>
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header transparent">
								<!-- <h2><strong>Sortable</strong> Table</h2> -->
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">			
								<div class="table-responsive">
									<table data-sortable class="table">
										<thead>
											<tr>
												<th>ID</th>
												<th>Codigo</th>
												<th>Descripción</th>
												<th colspan="2"></th>
											</tr>
										</thead>
										<tbody>
										@foreach($programas as $object)
										<tr>
											<th>{{$object->prog_id}}</th>
											<th>{{$object->prog_codigo}}</th>
											<th>{{$object->prog_descripcion}}</th>
											<th colspan="2">
												<a class="btn  btn-warning" href="{{route('programas.edit', $object->prog_id)}}"><i class="icon-pencil-3"></i></a>
												<a class="btn  btn-danger" href="{{route('programas.edit', $object->prog_id)}}"><i class="icon-trash-3"></i></a>
											</th>
										</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Codigo</th>
			<th>Descripción</th>
			<th colspan="2"></th>
		</tr>
	</thead>
	<tbody>
		
	</tbody>
</table>
@endsection