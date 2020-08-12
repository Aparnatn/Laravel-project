@extends('layout')
@section('title','About Us')
@section('content')
<div class="container">
    <h2>About US</h2>
    <p>India and its companies in well defined searchable form on companyinfoz.com. This website is complete database of Indian companies of all types. Information about companies like LLP, Pvt Ltd or Limited companies can be browsed on companyinfoz.com. You can also search information about directors of a company.</p>
    <div class="card-deck">
      <div class="card bg-primary">
        <div class="card-body text-center">
          <p class="card-text">This category contains information about companies listed on the Stock Exchanges of India.</p>
         
        </div>
      </div>
      <div class="card bg-warning">
        <div class="card-body text-center">
          <p class="card-text">Search and find companies according to the city. CompanyInfoz.com gives you extensive listing of all companies according to indian cities.</p>
        </div>
      </div>
      <div class="card bg-success">
        <div class="card-body text-center">
          <p class="card-text">Unlisted or Private Limited Companies are those types of companies where minimum number of members is two and maximum number is fifty.</p>
        </div>
      </div>
      <div class="card bg-danger">
        <div class="card-body text-center">
          <p class="card-text">Search and find companies according to the India States. CompanyInfoz.com gives you extensive listing of all companies according to indian states.</p>
        </div>
      </div>  
    </div>
  </div>
  
@endsection