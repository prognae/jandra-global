<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="/admin/login" method="post">     
            @csrf   
            @if(session('error'))
                <p style="color: red">{{ session('error') }}</p>                
            @endif

            <label for="username">Username</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password"><br><br>
            <button type="submit">Log In</button>
        </form>
    </center>
</body>
</html>