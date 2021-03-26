<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hwak-LogIn</title>
    <link href="{{ asset('css/auth/auth.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icofont.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
<div id="app">
    <main class="">
        <div class="heroSec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="heading">
                            <h1>The Hawk Is In The House!</h1>
                            <span>PLEASE LOGIN TO FIND RIGHT HOME, RIGHT NOW.</span>
                        </div>
                        <ul class="options">
                            <li class="google"><a href="{{ url('login/redirect') }}"><i class="icofont-google-plus google-icon"></i>&nbsp;&nbsp;GOOGLE LOGIN</a></li>
                            <li class="facebook"><a href="#"><i class="icofont-facebook google-icon"></i>&nbsp;&nbsp;FACEBOOK LOGIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
