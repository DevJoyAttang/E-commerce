<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
<form class="contact_form" action="{{route ('loginUser') }}" method="POST">
    @csrf
          
          <input type="text" name="email" placeholder="Your e-mail">
          <input type="password" name="password" placeholder="password"> 
          <button type="submit" class="btn" name="login" >login Here</button>
          <a href="register">New uers register Here</a>

</form>
</body>
</html>