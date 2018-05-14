@extends('admin.adminlayout')


    <link rel="stylesheet" href="{{asset('css/assets/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/assets/css/font-awesome.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/css/main.css?version=0.6')}}">



@section('page-header')
    <b>Hosting Order</b>  <small>Please choose one of hosting plans</small>
@stop

@section('content')

    <div class="row" >
        <div class="col-md-12">
            <div class="panel panel-default"  >
                <div class="panel-body" >
                    <!-- Welcome to Ordering Hosting {{ Auth::user()->name }} !!! -->
<main class="main page">  
    <div class="tariff line">
      <div class="container">
        <div class="title">
          <h1>Hosting plans</h1>
        </div>
        <div class="content">
          <div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="inner-host">  
    <div class="heading">
        <h3>STUDENT</h3>
    </div>
    <div class="text">
        <div class="first">
            <p>250 MB space</p>
        </div>
        <div class="type">
            <ul>
                <li><b>1</b><p> Site</p></li>
                <li><b>2</b><p> Database MySQL</p></li>                
                <li><b>3</b><p> Email inbox</p></li>
                <li class="no"><b> - </b><p> Free domen as a gift</p></li>
                <li><img src="{{asset('css/assets/mark.png')}}" class="img-responsive"><p>in the zone of TAS-IX</p></li> 
                <li class="no"><b> - </b><p> Free SSL-certificate</p></li>
            </ul>  
        </div>
        <div class="hosting-footer">
            <p><b>FREE</b> For students</p>
            <div class="link"><a href="http://final.test/admin/orders" target="_blank">Choose</a></div>
        </div>
    </div>
  </div>  
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="inner-host recom">  
    <div class="heading">
        <h3>SMALL</h3>
    </div>
    <div class="text">
        <div class="first">
            <p>500 MB space</p>
        </div>
        <div class="type">
            <ul>
                <li><b>3</b><p> Sites</p></li>
                <li><b>6</b><p> DataBase MySQL</p></li>               
                <li><b>9</b> <p> Email inbox </p></li>
                <li><b>1</b><p>  Free domen as a gift</p></li>
                <li><img src="{{asset('css/assets/mark.png')}}" class="img-responsive"><p>in the zone of TAS-IX</p></li>   
                <li><img src="{{asset('css/assets/mark.png')}}" class="img-responsive"><p> Free SSL-certificate</p></li>
            </ul>  
        </div>
        <div class="hosting-footer">
            <p><b>260 000</b> Sum per year</p>
            <div class="link"><a href="http://final.test/admin/orders" target="_blank">Choose</a></div>
        </div>
    </div>
  </div>  
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="inner-host">  
    <div class="heading">
        <h3>MEDIUM </h3>
    </div>
    <div class="text">
        <div class="first">
            <p>1000 MB space</p>
        </div>
        <div class="type">
            <ul>
                <li><b>5</b><p> Sites</p></li>
                <li><b>10</b><p> DataBase MySQL</p></li>               
                <li><b>15</b><p>  Email inbox </p></li>
                <li><b>2</b><p>  Free domen as a gift</p></li>
                <li><img src="{{asset('css/assets/mark.png')}}" class="img-responsive"><p>in the zone of TAS-IX</p></li>     
                <li><img src="{{asset('css/assets/mark.png')}}" class="img-responsive"><p>Free SSL-certificate</p></li>
            </ul>  
        </div>
        <div class="hosting-footer">
            <p><b>380 000</b> per year</p>
            <div class="link"><a href="http://final.test/admin/orders" target="_blank">Choose</a></div>
        </div>
    </div>
  </div>  
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="inner-host">  
    <div class="heading">
        <h3>UNLIMITED</h3>
    </div>
    <div class="text">
        <div class="first">
            <p>500 MB space</p>
        </div>
        <div class="type">
            <ul>
                <li><b>3</b><p> Sites</p></li>
                <li><b>6</b><p> DataBase MySQL</p></li>               
                <li><b>9</b> <p> Email inbox </p></li>
                <li><b>1</b><p>  Free domen as a gift</p></li>
                <li><img src="{{asset('css/assets/mark.png')}}" class="img-responsive"><p>in the zone of TAS-IX</p></li>   
                <li><img src="{{asset('css/assets/mark.png')}}" class="img-responsive"><p> Free SSL-certificate</p></li>
            </ul>  
        </div>
        <div class="hosting-footer">
            <p><b>500 000</b> Sum per year</p>
            <div class="link"><a href="http://final.test/admin/orders" target="_blank">Choose</a></div>
        </div>
    </div>
  </div>  
</div>
</div>
</div>
</div>
</div>
</main>
                </div>
            </div>
        </div>
    </div>
@stop
