@extends('admin.adminlayout')

@section('page-header')
    Dashboard <small>Home</small>
@stop

@section('content')

    <div class="row" >
        <div class="col-md-12">
            <div class="panel panel-default"  >
                <div class="panel-body" >
                    Welcome {{ Auth::user()->name }} !!! There is an instruction 
                    <h1>
                    Step 1: Choose a new (free) domain, or use an existing domain.<br>
                    <img src="{{asset('img/Buy-domain-name.png')}}"><br>
                    Step 2: Enter your account details.<br>
                    <img src="{{asset('img/account-Information.png')}}"><br>
                    Step 3: Select the right package.<br>
                    <img src="{{asset('img/3.png')}}"><br>
                    Step 5: Select a password.<br>
                    <img src="{{asset('img/5.png')}}"><br>
                    Step 6: Log into your web hosting cPanel.<br>
                    <img src="{{asset('img/last.png')}}"><br>
                    </h1>
                </div>
            </div>
        </div>
    </div>
@stop
