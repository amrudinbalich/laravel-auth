<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/login" method="POST">
        <h4>Login</h4>
    @csrf
    <div style="margin-bottom: 10px ; margin-top:10px; padding-bottom:5px padding-top:5px;">
    <label for="email">Email:</label>
    <input type="email" placeholder="type in your email" name="email">
    </div>
    <div style="margin-bottom: 10px ; margin-top:10px; padding-bottom:5px padding-top:5px;">
        <label for="Password">Password:</label>
        <input type="password" name="password" placeholder="type in your Password">
    </div>
    <div style="margin-bottom: 10px ; margin-top:10px; padding-bottom:5px padding-top:5px;">
        <label for="Password">Remember me</label>
        <input type="checkbox" name="remember_me">
    </div>
    <div style="margin-bottom: 10px ; margin-top:10px; padding-bottom:5px padding-top:5px;">
        <button type="submit" style="background-color: rgb(223, 21, 21) ; color : white ;">Login</button>
    </div>
    </form>
</body>
</html>
