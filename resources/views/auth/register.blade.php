<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    
</head>
<body>
    
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Crypto Monitor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('getLogin') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
body {
  background-image: url('https://images.hdqwalls.com/download/bitcoin-cryptocurrency5k-ne-1920x1200.jpg');
  background-repeat: no-repeat;
  
}
</style>
 <div class="row mb-3">
     <form action="{{route('postRegister')}}" method="POST" class="col-md-6 col-xs-12 offset-md-3 auth-form" method="POST" class="col-md-6 col-xs-12 offset-md-3 "  id="regitration_form">
     	  @csrf
          <div class="form-title">
            <h2>Register</h2>
          </div>
		  <br>
     	   <div class="row">
     	   	<div class="col-md-6">
	     	  <div class="form-group">
			    <label for="first_name">First Name</label>
			    <input type="text" class="form-control" value="{{old('first_name')}}" name="first_name" id="first_name" placeholder="First Name">
				@if($errors->any('first_name'))
					<span class="text-danger">{{$errors->first('first_name')}}</span>
				@endif
			  </div>
			  <br>
     	   	</div>
     	   	<div class="col-md-6">
	     	  <div class="form-group">
			    <label for="last_name">Last Name</label>
			    <input type="text" class="form-control" value="{{old('last_name')}}" name="last_name" id="last_name" placeholder="Last Name">
			    @if($errors->any('last_name'))
					<span class="text-danger">{{$errors->first('last_name')}}</span>
				@endif
			  </div>
     	   	</div>
     	   </div>
		  <div class="form-group">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" value="{{old('email')}}" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
			@if($errors->any('email'))
				<span class="text-danger">{{$errors->first('email')}}</span>
			@endif
		  </div>
		  <br>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" autocomplete="false" id="password" placeholder="Password">
			@if($errors->any('password'))
				<span class="text-danger">{{$errors->first('password')}}</span>
			@endif
		  </div>
		  <br>
		  <div class="form-group">
		    <label for="confirm_password">Confirm Password</label>
		    <input type="password" class="form-control" name="confirm_password" autocomplete="false" id="confirm_password" placeholder="Confirm Password">
			@if($errors->any('confirm_password'))
				<span class="text-danger">{{$errors->first('confirm_password')}}</span>
			@endif
		  </div>
		  <br>
		   <div><button type="submit" class="btn btn-primary mt-2">Submit</button>&nbsp; Already have an account? <a href="{{route('getLogin')}}">Login</a></div>
	</form>	
</div>
