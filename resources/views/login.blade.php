@extends('master')
@section('content')

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <!--    <div class="container custom-login col-sm-offset-4">
        <H1>Login</H1></div>
    -->
    <div class="container custom-login col-sm-4 col-sm-offset-4">
        <div class="row">


                <form action="login" method="POST">
                    @csrf

                    <div class="form-group">
                    <label for="Email"><h3>Email</h3></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                    <label for="pwd"><h3>Password</h3></label>
                    <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>
                <!-- <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Login</button>

                </form>
                <div>
                    <a href="{{ Route('add')}}">Register for New</a>


                </div>

            </div>



    </div>

    </body>
    </html>



@endsection
