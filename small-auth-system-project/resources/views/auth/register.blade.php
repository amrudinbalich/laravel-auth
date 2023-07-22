<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2> Register </h2>
@if ($errors->any())
<div>
<div>Something went wrong!</div>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="/register" method="POST">
@csrf
<div>
<label for="name">Name</label>
<input type="text" id="name" name="name" value="{{ old('name') }}" autofocus>
</div>
<div>
<label for="email">Email</label>
<input type="email" id="email" name="email" value="{{ old('email') }}">
</div> <div>
<label for="password">Password</label>
<input type="password" id="password" name="password" value="{{ old('password') }}">
</div>
<div>
<label for="password_confirmation">Password Confirmation</label>
<input type="password_confirmation" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
</div>
<div>
<button>Register</button>
</div>
</form>


</body>
</html>
