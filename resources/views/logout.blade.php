<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>

    <form class="logout" action="{{route ('login') }}" method="GET">
    @csrf
    <h4 class="logout">This Is Where To Logout</h4>
           
          <button type="submit" class="btn2" name="logout" >logout</button>
          

        </form>
</body>
</html>