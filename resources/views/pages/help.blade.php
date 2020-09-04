@extends('layouts.app')
    @section('content')
        @include('inc.nav')
        @include('inc.sideicons')
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-10">
                        <h3> HELP CENTER </h3>
                        <input type="text" id="searchin" class="form-control" name="search" placeholder="Search Help Article">
                        <input type="checkbox" name="selectall" >
                        <select> 
                            <option> Name</option>
                            <option> Size</option>
                            <option> Date Modified</option>
                            <option> Created</option>
                        </select>  
                        <br><br>
                        <input type="checkbox" name="selectind" >   
                        <i id="ii" class="glyphicon glyphicon-file"></i> <a class="form-select" id="iii" href="">How do i add a new employee</a>
                        <hr>
                        <input type="checkbox" name="selectind" >   
                        <i id="ii" class="glyphicon glyphicon-file"></i> <a class="form-select" id="iii" href="">How do i edit an employee file</a>
                        <hr>
                    </div>  
                </div>      
            </div>
        
    @endsection
    <style>
        #searchin{
            width:20%;
            margin-left:80%;
        }
        select{
            border:none;
        }
        #ii{
            font-size:50px;
            margin-left:5%;
        }
        #iii{
            font-size:25px;
            color:#333333;
           

        }

        
    </style>