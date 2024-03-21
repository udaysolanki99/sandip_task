@extends('admin.layouts.admin_guest')
@php($title = 'Dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .lgr{
        margin-left: 85%;
        font-size: 20px;
        font-weight: bold;
    }
    .black-background {
     background-color: black;
    }
    h3, p {
    color: white;
   }

</style>
<body>
    <link rel="stylesheet" type="text/css" href="style.css">
    <div class="jumbotron text-center black-background">
    <h3><i class="fas fa-calendar-alt"></i> EMPLOYEE LEAVE MANAGEMENT</h3>
    <p>Welcomes You!</p> 
    </div>
    <div class="lgr">
      <a href="{{ route('admin.auth.login') }}">LOGIN | </a>
      <a href="{{ route('admin.auth.register-form') }}">REGISTER</a>
    </div>
</body>
</html>

@endsection
