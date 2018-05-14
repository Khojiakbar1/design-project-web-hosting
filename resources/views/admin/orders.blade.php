@extends('admin.adminlayout')

@section('page-header')
    Dashboard <small>Home</small>
@stop

@section('content')

<link rel="stylesheet" href="{{asset('css/orders/bulma-docs.min.css')}}" >
<link rel="stylesheet" href="{{asset('css/orders/order.css')}}" >
<div class="conts">
    <div class="row" >
        <div class="col-md-12">
            <div class="panel panel-default"  >
                <div class="panel-body" >
                    Welcome {{ Auth::user()->name }} !!!
                </div>
<form action="/insert" method="post">

  {{ csrf_field()}}
    
    <div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">From</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control is-expanded">
        <input class="input" type="text" placeholder="{{ Auth::user()->name }}" name="name">
      </p>
    </div>
    <div class="field">
      <p class="control is-expanded">
        <input class="input is-success" type="email" placeholder="Email" value="{{ Auth::user()->email }}" name="email">
      </p>
    </div>
  </div>
</div>
<div class="field is-horizontal">
  <div class="field-label"></div>
  <div class="field-body">
    <div class="field is-expanded">
      <div class="field has-addons">
        <p class="control">
          <a class="button is-static">
            +998
          </a>
        </p>
        <p class="control is-expanded">
          <input class="input" type="tel" placeholder="Your phone number" name="phone">
        </p>
      </div>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Plan</label>
  </div>
  <div class="field-body">
    <div class="field is-narrow">
      <div class="control">
        <div class="select is-fullwidth">
          <select name="plan">
            <option value="Student">Student</option>
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Unlimited">Unlimited</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Domain</label>
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
        <input class="input is-danger" type="text" placeholder="yoursite.com" name="domain">
      </div>
      <p class="help is-danger">
        This field is required
      </p>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Project</label>
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
        <textarea class="textarea" placeholder="Explain about your project" name="project"></textarea>
      </div>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label">
    <!-- Left empty for spacing -->
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
        <button class="button is-primary" type="submit" name="submit">
          Create an Order
        </button>
      </div>
    </div>
  </div>
</div>
</form>
            </div>
        </div>
    </div>
</div>


@stop
