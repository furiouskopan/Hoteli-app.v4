<!-- @extends('app')

@section('content')
<main class="cotainer mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h3 class="card-header text-center">Signin</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('signin.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="email" placeholder="Email" id="email" class="form-control" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="/register">Don't have an account?</a>
            </div>
        </div>
</main>
@endsection -->

<!-- The Real Deal 👇 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
    <div
     style="background-image: url('https://i.redd.it/umhuar4xaxd81.jpg');
            height: 100vh; background-size: cover">
            
    <div class="d-flex justify-content-center aling-items-center" id="login_form">
        <div id="text"><h1>Најавете се</h1><hr>
            <form action="{{ route('signin.custom') }}" method="POST">
          <input type="text" name="email" id="email" class="transparent-input" placeholder="E-mail" > <br>
          @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          <input type="password" name="password" id="password" class="transparent-input" style="width:249px"placeholder="Лозинка"></form>
          @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
           <div class="d-grid gap-2">
            <button class="btn btn-primary mt-2" type="submit">Најава</button>
          </div>
          <a href="/register">Креирај нов профил</a>
           
        </div>
    </div>
    
</div>
    <style>
        
        #text{
            padding-top: 30vh;

        }
        input.transparent-input{
        background-color:rgba(0,0,0,0) !important;
        border:none !important;
        outline: none;
        }
        hr{
            border-top: 3px solid rgb(0, 0, 0)

        }
    
    </style>
</body>
</html> 