@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>

        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background: linear-gradient(to right, #b92b27, #1565c0)
            }

            .card {
                margin-bottom: 20px;
                border: none;
            }
            p{
               color: white;
            }

            .box {
                width: 500px;
                padding: 40px;
                position: absolute;
                top: 50%;
                left: 50%;
                background: #191919;
                ;
                text-align: center;
                transition: 0.25s;
                margin-top: 100px
            }

            .box input[type="text"],
            .box input[type="password"] {
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid #3498db;
                padding: 10px 10px;
                width: 250px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25s
            }

            .box h1 {
                color: white;
                text-transform: uppercase;
                font-weight: 500
            }

            .box input[type="text"]:focus,
            .box input[type="password"]:focus {
                width: 300px;
                border-color: #2ecc71
            }

            .box input[type="submit"] {
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid #2ecc71;
                padding: 14px 40px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25s;
                cursor: pointer
            }

            .box input[type="submit"]:hover {
                background: #2ecc71
            }

            .forgot {
                text-decoration: underline
            }

            ul.social-network {
                list-style: none;
                display: inline;
                margin-left: 0 !important;
                padding: 0
            }

            ul.social-network li {
                display: inline;
                margin: 0 5px
            }

            .social-network a.icoFacebook:hover {
                background-color: #3B5998
            }

            .social-network a.icoTwitter:hover {
                background-color: #33ccff
            }

            .social-network a.icoGoogle:hover {
                background-color: #BD3518
            }

            .social-network a.icoFacebook:hover i,
            .social-network a.icoTwitter:hover i,
            .social-network a.icoGoogle:hover i {
                color: #fff
            }

            a.socialIcon:hover,
            .socialHoverClass {
                color: #44BCDD
            }

            .social-circle li a {
                display: inline-block;
                position: relative;
                margin: 0 auto 0 auto;
                border-radius: 50%;
                text-align: center;
                width: 50px;
                height: 50px;
                font-size: 20px
            }

            .social-circle li i {
                margin: 0;
                line-height: 50px;
                text-align: center
            }

            .social-circle li a:hover i,
            .triggeredHover {
                transform: rotate(360deg);
                transition: all 0.2s
            }

            .social-circle i {
                color: #fff;
                transition: all 0.8s;
                transition: all 0.8s
            }
        </style>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form  method="POST" action="/login/in" class="box">
                            @csrf
                            <h1>Login</h1>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            
                            <p class="text-primary"> Please enter your login and password!</p> 
                            <input type="text" name="email" id="email" placeholder="Email"> 
                            <input type="password" name="password" id='password' placeholder="Password"> 
                             <a class="text-primary" href="/register">Dont Have An Account?Register First!</a>
                             <button type="submit" class="btn btn-primary px-5 mb-5 w-100">Login</button>

                                <div class="col-md-12">
                                <ul class="social-network social-circle">
                                    <li><a href="#" class="icoFacebook" title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="icoTwitter" title="Twitter"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="icoGoogle" title="Google +"><i
                                                class="fab fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
