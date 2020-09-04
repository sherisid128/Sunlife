@extends('layouts.app')
    @section('content')
    <div class="col-md-6 col-sm-12">
        <div class="splileft" style="background-image: url('{{ asset('/Images/aa.png')}}');">

        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="spliright">
            <div class="centered">
                <h1 style="color:#76c8ba"> SUNLIFE </h1>
                <h3 style="color:#76c8ba">Assisted Living</h3>
                <br><br>
                <form action="#" method="POST">        
                    <h3 style="margin-right:270px"> Welcome </h3>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" name="userName" id="form-control-s" class="form-control" placeholder="USERNAME">
                    </div><br><br>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="userPass" placeholder="PASSWORD"><br>
                    </div><br>
                    <p class="p1"><input type="checkbox" name="rememberMe">  REMEMBER ME</p><br>
                    <input type="submit" name="loginBtn" id="btndef" class="btn btn-primary" value="LOGIN"><br><br>
                    <a href="/forgetPassword" class="forgetPas">FORGOT PASSWORD</a>
                    

                </form>
                <br><br><br><br>
                <a href="#" class="terms" > Terms of Use </a>
                <a href="#" class="privcy"> PRIVACY POLICY </a> 
                
            </div>
        </div>
    </div>
    @endsection
    <style>
        .splileft, .spliright{
        height:50vh;
        width:100%;
        
        }
        @media screen and (min-width:768px)
        {
        .splileft, .spliright{
            height:100vh;
        }
        }
        .splileft{
        left: 0;

        background-repeat:no-repeat;
        background-size:100% 100%;
                }
    </style>
        
    