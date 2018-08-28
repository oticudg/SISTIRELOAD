@extends('layout')
@section('style')
  {!! HighCharts::styles() !!}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">High Chart Demo</div>
<div class="panel-body">
                    {!! $highchart->html() !!}
                </div>
            </div>
        </div>
    </div>
</div>
{!! HighCharts::scripts() !!}
{!! $highchart->script() !!}
@endsection