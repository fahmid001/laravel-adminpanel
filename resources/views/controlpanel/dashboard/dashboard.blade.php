@extends('controlpanel/mainlayout')

@section('content')
<div class="directions">
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Monthly Total sell history</li>
        </ol>
    </section>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">




        </div>
    </div>
</section>
@stop
