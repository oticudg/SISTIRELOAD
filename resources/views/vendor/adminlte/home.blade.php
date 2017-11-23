@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
<!-- /.info-box -->
				<!-- Default box -->
				<div class="box skin-purple-light">
					<div class="box-body">
						<div class="box-header with-border text-center">
							<h3 class="box-title">Bienvenido a Sisti Remasterizado</h3>
						</div>
						<div class="info-box bg-blue" style="height: 90px;">
							 <span class="info-box-icon"><i class="fa fa-file-text-o"></i></span>
							  <div class="info-box-content">
							    <span class="info-box-text">Historias</span>
							    <span class="info-box-number">41,410</span>
							    <!-- The progress section is optional -->
							    <div class="progress">
							      <div class="progress-bar" style="width: 100%"></div>
							    </div>
							    <span class="progress-description">
							      Historias creadas.
							    </span>
							   </div>
							  <!-- /.info-box-content -->
						</div>
						<div class="info-box bg-green" style="height: 90px;">
							 <span class="info-box-icon"><i class="fa fa-stethoscope"></i></span>
							  <div class="info-box-content">
							    <span class="info-box-text">Triaje pediatrico</span>
							    <span class="info-box-number">23,159</span>
							    <!-- The progress section is optional -->
							    <div class="progress">
							      <div class="progress-bar" style="width: 100%"></div>
							    </div>
							    <span class="progress-description">
							      Entradas por triaje pediatrico.
							    </span>
							   </div>
							  <!-- /.info-box-content -->
						</div>
						<div class="info-box bg-yellow" style="height: 90px;">
							 <span class="info-box-icon"><i class="fa fa-medkit"></i></span>
							  <div class="info-box-content">
							    <span class="info-box-text" >Triaje adulto</span>
							    <span class="info-box-number">34,139</span>
							    <!-- The progress section is optional -->
							    <div class="progress">
							      <div class="progress-bar" style="width: 100%"></div>
							    </div>
							    <span class="progress-description">
							      Entradas por triaje adulto.
							    </span>
							   </div>
							  <!-- /.info-box-content -->
						</div>
						<div class="info-box bg-red" style="height: 90px;">
							 <span class="info-box-icon"><i class="fa fa-user-md"></i></span>
							  <div class="info-box-content">
							    <span class="info-box-text">Hospitalizacion</span>
							    <span class="info-box-number">15,039</span>
							    <!-- The progress section is optional -->
							    <div class="progress">
							      <div class="progress-bar" style="width: 100%"></div>
							    </div>
							    <span class="progress-description">
							      Entradas por hospitalizacion.
							    </span>
							   </div>
							  <!-- /.info-box-content -->
						</div>
						<div class="info-box bg-aqua" style="height: 90px;">
							 <span class="info-box-icon"><i class="fa fa-hospital-o"></i></span>
							  <div class="info-box-content">
							    <span class="info-box-text">Reten</span>
							    <span class="info-box-number">25,999</span>
							    <!-- The progress section is optional -->
							    <div class="progress">
							      <div class="progress-bar" style="width: 100%"></div>
							    </div>
							    <span class="progress-description">
							      Entradas por reten.
							    </span>
							   </div>
							  <!-- /.info-box-content -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
