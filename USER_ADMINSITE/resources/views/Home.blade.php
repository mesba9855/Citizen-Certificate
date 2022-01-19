@extends('Layout.app')
@section('title','Dashboard Summery')
@section('content')


<div class="container">
	<div class="row">

        <div class="col-md-3 py-2">
            <div class="card shadow border-0 bg-success">
                <div class="card-body">
                    <h2 class="cardTitle">{{$TotalApply}}</h2>
                    <h5 class="cardText">Total Apply</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card shadow border-0 bg-info">
                <div class="card-body">
                    <h2 class="cardTitle">{{$TotalFile}}</h2>
                    <h5 class="cardText">Total File</h5>
                </div>
            </div>
        </div>


	</div>
</div>



@endsection
