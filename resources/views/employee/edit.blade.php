@extends('layouts.app')
    @section('content')
        @include('inc.nav')
        @include('inc.sideicons')
        <div class="container">
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-7">
                            <input id="btnbtn1" onClick="form1()" class="btn btn-default" type=submit name="generalInfo" value="General Info" >
                            <input id="btnbtn2" onClick="form2()" class="btn btn-default" type=submit name="EmployeeDocmunet" value="Employee Document" >
                            <input id="btnbtn3" onClick="form3()" class="btn btn-default" type=submit name="ertifications" value="Certifications" >
                            <form id="gform" action="{{ action('EmployeeController@update',$employee->id) }}" method="PUT" enctype="multipart/form-data" >
                            @csrf <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div id="form-group">
                                                <input type="text" name="FirstName" class="form-control" value="{{$employee->firstName}}" >
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="text" name="LastName" class="form-control" value="{{$employee->lastName}}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" value="{{$employee->email}}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-sm-6">   
                                            <div class="form-group">
                                                <input type="text" name="address1" class="form-control"  value="{{$employee->address1}}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="address2" class="form-control"  value="{{$employee->address2}}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="city" class="form-control"  value="{{$employee->city}}" >
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="state" class="form-control" p value="{{$employee->state}}" >
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="zipcode" class="form-control"  value="{{$employee->zipCode}}" >
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">

                                                <div class="form-group">
                                                    <input type="file" name="logo" class="form-control" enctype="multipart/form-data" >
                                                </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" id="btnreg"> Update </button>
                                </div>    
                            </form>
                            <br>
                            <form id="table1" style="display:none" method="post" action="/employee/uploadDoc" enctype="multipart/form-data">
                                <div class="form-group">
                                    <br>
                                    @csrf <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    <label>User Documents</label>
                                    <input type="file" name="docfile[]" class="form-control" multiple enctype="multipart/form-data"><br>
                                    <label> Enter Employee Email</label>
                                    <input type="email" name="emaill" placeholder="Employee Email" class="form-control">
                                    <input type="submit" name="submitdoc" value="Add Documents" id="btnbtn1">
                                </div>
                            </form>
                            <form id="table2" style="display:none" method="post" action="/employee/uploadCert" enctype="multipart/form-data">
                                <div class="form-group">
                                    <br>
                                    @csrf <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    <label>User Certifications</label>
                                    <input type="file" name="cerfile[]" class="form-control" multiple><br>
                                    <label>Enter Certificate Expiry Date</label><br>
                                    <input type="date" name="exdate" id="btnbtn1"><br><br>
                                    <label> Enter Employee Email</label>
                                    <input type="email" name="emaill" placeholder="Employee Email" class="form-control">
                                    <input type="submit" name="submitdoc" value="Add Documents" id="btnbtn1">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
     <style>
    #piccon{
        height:300px;
        width:300px;
    }
    #btnbtn1{
        background-color: #76c8ba;
        border:none;
        border-radius:0%;
        padding-top:2%;
        padding-bottom:2%;
        font-weight:bold;
        color:white;
    }
    #btnbtn2{
        background-color: #76c8ba;
        border:none;
        border-radius:0%;
        padding-top:2%;
        padding-bottom:2%;
        font-weight:bold;
        color:white;
    }
    #btnbtn3{
        background-color: #76c8ba;
        border:none;
        border-radius:0%;
        padding-top:2%;
        padding-bottom:2%;
        font-weight:bold;
        color:white;
    }
    #edit1{
        background-color: #76c8ba;
        margin-left:78%;
        padding-left:8%;
        padding-right:8%;
        border:none;
        border-radius:0%;
        padding-top:2%;
        padding-bottom:2%;
        font-weight:bold;
        
    }
    #edit2{
        background-color: #76c8ba;
        margin-left:78%;
        padding-left:5%;
        padding-right:5%;
        border:none;
        border-radius:0%;
        padding-top:2%;
        padding-bottom:2%;
        font-weight:bold;
        color:white;
    }
    #edit3{
        background-color: #76c8ba;
        margin-left:78%;
        padding-left:5%;
        padding-right:5%;
        border:none;
        border-radius:0%;
        padding-top:2%;
        padding-bottom:2%;
        font-weight:bold;
    }
    #btnreg{
        background-color: #76c8ba;
        border:none;
        border-radius:0%;
        font-weight:bold;
    }
    th,td{
       padding: 20%;
       spacing:20%;
    }
    #ii{
        font-size:35px;
    }
    </style>
    <script type="text/javascript">
        function form1(){
            $('#gform').show();
            $('#table1').hide();
            $('#table2').hide();
            $('#edit1').show();
            $('#edit2').hide();
            $('#edit3').hide();
        }
        function form2(){
            $('#gform').hide();
            $('#table1').show();
            $('#table2').hide();
            $('#edit1').hide();
            $('#edit2').show();
            $('#edit3').hide();
        }
        function form3(){
            $('#gform').hide();
            $('#table1').hide();
            $('#table2').show();
            $('#edit1').hide();
            $('#edit2').hide();
            $('#edit3').show();
        }
        
        
        

   
    </script>


