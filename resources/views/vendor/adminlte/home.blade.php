@extends('adminlte::layouts.app')
@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">BIENVENIDO A SISTI REMASTERIZADO</h3>
                </div>
                <div class="box-body"> 
                    <div class="info-box bg-blue" style="height: 90px;">
                        <span class="info-box-icon"><i class="fa fa-file-text-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">HISTORIAS</span>
                            <span class="info-box-number">{{ $recordscount }}</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            <span class="progress-description">
                                HISTORIAS CREADAS.
                            </span>
                        </div>
                    </div>
                    <div class="info-box bg-green" style="height: 90px;">
                        <span class="info-box-icon"><i class="fa fa-stethoscope"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">TRIAJE PEDIÁTRICO</span>
                            <span class="info-box-number">{{ $pediatric }}</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            <span class="progress-description">
                                ENTRADAS POR TRIAJE PEDIÁTRICO.
                            </span>
                        </div>
                    </div>
                    <div class="info-box bg-yellow" style="height: 90px;">
                        <span class="info-box-icon"><i class="fa fa-medkit"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text" >TRIAJE ADULTO</span>
                            <span class="info-box-number">{{ $adult }}</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            <span class="progress-description">
                                ENTRADAS POR TRIAJE ADULTO.
                            </span>
                        </div>
                    </div>
                    <div class="info-box bg-red" style="height: 90px;">
                        <span class="info-box-icon"><i class="fa fa-user-md"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">HOSPITALIZACIÓN</span>
                            <span class="info-box-number">{{ $hospitalization }}</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            <span class="progress-description">
                                ENTRADAS POR HOSPITALIZACIÓN.
                            </span>
                        </div>
                    </div>
                    <div class="info-box bg-aqua" style="height: 90px;">
                        <span class="info-box-icon"><i class="fa fa-hospital-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">RETEN DE NIÑOS</span>
                            <span class="info-box-number">{{ $catch }}</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            <span class="progress-description">
                                ENTRADAS POR RETEN DE NIÑOS.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection