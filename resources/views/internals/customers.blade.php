@extends('layout')
@section('title','CustomersList')
@section('content')

<form action="customers" method="POST">

  <div class="form-group">

    <div class="col">
      <label for="name">Name</label>
      <input type="text" name="name" value="{{old('name')}}" class="form-control">
    </div>

  </div>
  <div>
    {{$errors->first('name')}}

  </div>

  <div class="form-group">
    <div class="col">
      <label for="email">Email</label>
      <input type="text" name="email" value="{{old('email')}}" class="form-control">
    </div>

  </div>
  <div>
    {{$errors->first('email')}}

  </div>
  <div class="form-group">
    <div class="col">
      <label for="status">Status</label>
      <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
      </select>
    </div>
    <div class="form-group">
      <div class="col">
        <label for="company_id">Company</label>
        <select name="company_id" id="active" class="form-control">
         @foreach ($companies as $company)
         <option value="{{$company->id}}">{{$company->name}}</option>
         @endforeach
        </select>
      </div>

  </div>
  <div class="col">
    <button type="submit" class="btn btn-danger">Add Customer</button>
  </div>
  @csrf

</form>
<hr>

<div class="row">
  <div class="col">
    <h3>Active Customers</h3>
    <ul>
      @foreach ($activeCustomers as $activeCustomer)
      <li>{{$activeCustomer->name}}<span class="text-muted">({{$activeCustomer->company->name}})</span></li>
      @endforeach
    </ul>
  </div>
  <div class="col">
    <h3>InActive Customers</h3>
    <ul>
      @foreach ($inactiveCustomers as $inactiveCustomer)
      <li>{{$inactiveCustomer->name}}<span class="text-muted">({{$inactiveCustomer->company->name}})</span></li>
      @endforeach
    </ul>
  </div>
</div>
<div class="row">
  <div class="col-12">
    @foreach($companies as $company)
    <h3>{{$company->name}}</h3>
    <ul>
    @foreach($company->customers as $customer )
    <li>{{$customer->name}}</li>
    @endforeach
    </ul>
    @endforeach
  </div>
</div>
@endsection