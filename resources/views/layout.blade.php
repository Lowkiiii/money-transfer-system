<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>
<body>
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">MoneyTransferSystem</a>
            </div>
            <ul class="nav navbar-nav">
        
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="{{ url('registration') }}"><span class="glyphicon glyphicon-user"></span> Registration</a></li> 
                @else
                    <li><a href="{{ url('logout') }}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                @endguest
            
        </div>
        </nav>

        @yield('content')

</body>
</html>