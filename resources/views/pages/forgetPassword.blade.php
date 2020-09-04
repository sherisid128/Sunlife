@extends('layouts.app')
    @section('content')
    <div class="col-md-6 col-sm-12">
        <div class="splileft" style="background-image: url('{{ asset('/Images/aa.png')}}');">
            <div class="centered">

            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="spliright">
            <div class="centered">
                <h1 style="color:#76c8ba"> SUNLIFE </h1>
                <h3 style="color:#76c8ba">Assisted Living</h3>
                <br><br>
                <form action="#" method="POST">  
                    @csrf      
                    <h4 style="font-weight:bold"> FORGOT PASSWORD </h4>
                    <p> Please Enter Your Email Address and we will send you and email for recovering your Password</p>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" name="forgotEmail" id="form-control-s" class="form-control" placeholder="YOUR EMAIL address">
                    </div><br><br>
                    <input type="submit" name="loginBtn" id="btndef" class="btn btn-primary" value="LOGIN"><br><br>
    
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
    