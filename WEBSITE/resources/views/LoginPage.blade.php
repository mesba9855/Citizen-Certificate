@extends('Layout.app2')
@section('title','Admin Login')
@section('content')

<div class="container ">
    <div class="row justify-content-center d-flex mt-5 mb-5">

        <div class="col-md-6 card shadow border-0">
            <div class="row">
                <div style="height: 420px" class="col-md-12 p-3">
                    <form  action=" "  class="m-5 loginForm">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input required="" name="userName" value="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input  required="" name="userPassword"  value="" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-block btn-danger">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


