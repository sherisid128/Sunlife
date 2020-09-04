@extends('layouts.app')
    @section('content')
    @include('inc.sideicons')
     @include('inc.nav')
                <div class="col-sm-2">

                </div>
                <div class="col-sm-10 ">
                    <h1> DASHBOARD </h1>
                        <div class="row">
                            <br>
                            <div class="col-sm-3">
                                <div class="container" style="background-color:#84a92b;height:70px;width:300px">
                                    <span id="spanid"><i id="iid" class="glyphicon glyphicon-user"></i> Patients</span>
                                    <br><br><br>
                                    <div class="container" id="containerbox" >
                                        <i id="iiid" class="glyphicon glyphicon-user"></i>
                                    </div><br>
                                    <div class="container" id="containerbox">
                                        <i id="iiid" class="glyphicon glyphicon-list-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                
                            </div>
                            <div class="col-sm-3">
                                <div class="container" style="background-color:#f0ad4e;height:70px;width:300px">
                                     <span id="spanid"><i id="iid" class="glyphicon glyphicon-heart-empty"></i> Employees {{$count}}</span>
                                <br><br><br>
                                <div class="container" id="containerbox">
                                   <i id="iiid" class="glyphicon glyphicon-heart-empty"></i>
                                </div><br>
                                <div class="container"id="containerbox">
                                    <i id="iiid" class="glyphicon glyphicon-info-sign"></i>
                                </div>
                                </div>
                                
                            </div>
                            <div class="col-sm-1">
                            
                            </div>
                            <div class="col-sm-3">
                                <div class="container" style="background-color:#d43f3b;height:70px;width:300px">
                                    <span id="spanid"><i id="iid" class="glyphicon glyphicon-alert"></i> Cerification Expired {{$count1}}</span>
                                <br><br><br>
                                <div class="container" id="containerbox">
                                    <i id="iiid" class="glyphicon glyphicon-file"></i>
                                </div><br>
                                <div class="container" id="containerbox">
                            
                                </div>
                                
                                </div>
                            </div>
                            <div class="col-sm-1">
                               
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
    @endsection
    <style>
        #containerbox{
            border:1px dotted black;
            height:150px;
            width:250px;
            border-radius:3%;
        }
        #spanid{
            color:white;
            font-size:20px;
            padding-left:10px;
        }
        #iid{
            font-size:40px;
            padding-top:12px;
            color:white;
        }
        #iiid{
            font-size:40px;
            padding-left:80px;
            padding-top:50px

        }
    </style>    