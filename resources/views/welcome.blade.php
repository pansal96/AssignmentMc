<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Home page</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
              
            }
            h1{
                margin-top:20px;
                text-align: center;
            }
            .login{
               margin-left:450px;
               margin-top:100px;
               border-style: groove;
               border-radius: 50px;
               border-color: #00bfff;
               width:400px;
               height:100px;
            }
            .btn{
                margin-left:45px;
                margin-top:0px;
            
            }
            
        </style>

    </head>
    <body>
        <div class="container">
            <h1 style="text:center;">Welcome...!!!</h1>
            <div class="row">
                <div class="col-sm-6 p-4 bg-info text-white"></div>
                <div class="col-sm-6 p-4 bg-info text-white"></div>           
            </div>

            <div class="login">
                <div class="btn">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a class="btn btn-primary" href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <a  class="btn btn-success" href="{{ route('login') }}">Log in</a>

                                @if (Route::has('register'))
                                    <a class="btn btn-success"  href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>   

        </div>      
       
    </body>
    </html>
