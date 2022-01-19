@extends('Layout.app')
@section('title','Dashboard Summery')
@section('content')


<div class="container">
	<div class="row">

        <div class="col-md-3 py-2">
            <div class="card shadow border-0 bg-secondary">
                <div class="card-body">
                    <h2 class="cardTitle">{{$TotalVisitor}}</h2>
                    <h5 class="cardText">Total Visitor</h5>
                </div>
            </div>
        </div>

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

        <div class="col-md-3 py-2">
            <div class="card shadow border-0 bg-danger">
                <div class="card-body">
                    <h2 class="cardTitle">{{$TotalContact}}</h2>
                    <h5 class="cardText">Total Contact</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card shadow border-0 bg-default">
                <div class="card-body">
                    <h2 class="cardTitle">{{$TotalAbout}}</h2>
                    <h5 class="cardText">Total About</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card shadow border-0 bg-info">
                <div class="card-body">
                    <h2 class="cardTitle">{{$TotalNotice}}</h2>
                    <h5 class="cardText">Total Notice</h5>
                </div>
            </div>
        </div>

	</div>
</div>



@endsection
