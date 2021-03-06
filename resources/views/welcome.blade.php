<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    @if(count($errors) > 0)   
        @foreach($errors->all() as $error)
            <div class="alert " style="  padding: 20px;  background-color: #f44336; /* Red */ color: white; border-left:6px solid #6b1905;  margin-bottom: 5px;">
                <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
                onclick="this.parentElement.style.display='none';">&times;</span>
                <p style="color: white; text-align:center;"> {{$error}} </p>
            </div> 
        @endforeach 
        @endif 
        @if(session('success'))   
        <div class="alert " style="  padding: 15px;  background-color: #44f436;  border-left:6px solid #0ca120; margin-bottom: 5px;">
            <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
            onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="sute" > {{session('success')}} </p>
        </div> 
        @endif 
        <div class="container" style="padding:50px" >
                <form action="{{ route('tSignin') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}" id="emailGroup">
                        <label>E-Mail</label>
                        <div class="controls">
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="E-Mail" class="form-control" required>
                         </div>
                    </div>

                    <div class="form-group form-group-default {{ $errors->has('password') ? ' has-error' : '' }}" id="passwordGroup">
                        <label>Password</label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group form-group-default {{ $errors->has('pin') ? ' has-error' : '' }}" id="pinGroup">
                        <label>Pin code</label>
                        <div class="controls">
                            <input type="password" name="pin" placeholder="Pin code" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn mdc-button--raised btn-primary col-md-offset-4 col-md-4 col-xs-8 col-xs-offset-2 col-sm-8 col-md-offset-2 logas" style="background:#3895ac; font-size:15px;" >
                        Login
                    </button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
    </body>
</html>
