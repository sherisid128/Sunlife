@extends('layouts.app')
    @section('content')
        @include('inc.nav')
        @include('inc.sideicons')
        <div class="container" >
            <div class="row" >
                <div class="col-sm-2" >

                </div>
                <div class="col-sm-10" >
                    <h3> EMPLOYEES </h1><a href="/employee/create" ><button id="btnbtn1" name="btnadd">Add New</button></a>
                    <div class="row" >
                        <br>
                        @if(count($employees)>0)
                            @foreach($employees as $employee)
                                <div class="col-sm-4" id="sect" >
                                        <div class="container">
                                            <div class="row"  >
                                                <div class="col-lg-1" >
                                                    <img id="img1" src="/storage/logos/{{$employee->logo}}" style="height:70px;width:70px;">
                                                </div>
                                                <div class="col-sm-2" >
                                                    <small><b>Name: </b>{{$employee['firstName']}}</small>  <br>
                                                    <small><b>Hire Date: </b>{{$employee->created_at}}</small><br>
                                                    <small><b>Email:</b>{{$employee->email}}</small><br>
                                                    <small><b>City: </b>{{$employee->city}}</small>
                                                    <small><a href="/employee/{{$employee->id}}"><button id="btnlog">See Details</button></a></small>
                                                </div>
                                            </div>  
                                        </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <style>
        #conid{
            color:black;
        }
        #img1{
            border-radius:50%;
            margin-top:20%;
        }
        #sect{
            border:1px dotted black;
            border-radius:4%;
            
            margin-top:1%;
        }
        #btnbtn1{
            background-color: #76c8ba;
            margin-left:78%;
            padding-left:3%;
            padding-right:3%;
            border:none;
            border-radius:0%;
            padding-top:1%;
            padding-bottom:1%;
            font-weight:bold;
            color:white;
        }
        #btnlog{
            background-color: #76c8ba;
            color:white;
            border-radius:4%;
            margin-left:20px;
            border:none;
        }
    </style>    