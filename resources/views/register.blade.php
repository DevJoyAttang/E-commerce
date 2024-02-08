<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
</head>
<body>

      <center>  <h2 class="reg">Register</h2> </center>
  
        
  <form action="{{route ('registration') }}" method="post">
    @csrf
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="name">
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email">
        </div>
        <div class="input-group">
          <label>role</label>
          <input type="role" name="role">
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password">
        </div>
        <div class="input-group">
          <label>Confirm password</label>
          <input type="password" name="passwordConfirmation">
        </div>
        <div class="input-group">
          <button type="submit" class="btn">Register</button>
        </div>
        <p>
                Already a member? <a href="login">Already Registered Login Here.</a>
        </p>
  </form>
</body>
</html>