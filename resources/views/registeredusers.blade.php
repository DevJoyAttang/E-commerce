<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Registered Users</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('ad/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('ad/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
<html lang="en">
  <head>
  <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
    @include('css')
   </head>
  <body>
          @include('sidebar')

        @include('navbar')


            <div class="container-fluid page-body-wrapper">
                <div align="center">
                    <h1 style="padding:25px,"> Registered Users</h1>


 <table  id="customers">
  <tr>
     <th>Name</th>
     <th>Email</th>
     <th>Date/Time</th>
  </tr>

  @foreach($users as $user)
    <tr>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->created_at}}</td>
    </tr>
    @endforeach
  

</table>
              </div>
            </div>

        <!-- partial -->
       
 
        
        @include('script')
          <!-- partial -->
       
  </body>
    </html>