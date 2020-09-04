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
                        <div class="col-sm-3">
                            <img src="/storage/logos/{{$employees['logo']}}" id="piccon">
                        </div>  
                        <div class="col-sm-7">
                            <a href="/employee/{{$employees['id']}}/edit" id="ii"><input type="submit"  id="edit1" class="btn btn-primary" name="edit" value="Edit"></a>
                            <a href="/employee/create" id="ii"><input type="submit"  id="edit2" class="btn btn-primary" name="adddoc" value="Add New" style="display:none"></a>
                            <a href="/employee/create" id="ii"><input type="submit"  id="edit3" class="btn btn-primary" name="addcer" value="Add New" style="display:none"></a><br>
                            <input id="btnbtn1" onClick="form1()" class="btn btn-default" type=submit name="generalInfo" value="General Info" >
                            <input id="btnbtn2" onClick="form2()" class="btn btn-default" type=submit name="EmployeeDocmunet" value="Employee Document" >
                            <input id="btnbtn3" onClick="form3()" class="btn btn-default" type=submit name="ertifications" value="Certifications" >
                            <form id="gform" >
                            
                                <div class="container">
                                    <div class="row">
                                    <br>
                                        <div class="col-sm-3">
                                            <div id="form-group">
                                                <label class="form-control"> {{$employees['firstName']}}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="form-control"> {{$employees['lastName']}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-control"> {{$employees['email']}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-sm-6">   
                                            <div class="form-group">
                                                <label class="form-control"> {{$employees['address1']}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-control"> {{$employees['address2']}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label class="form-control"> {{$employees['city']}}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label class="form-control"> {{$employees['state']}}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label class="form-control"> {{$employees['zipCode']}}</label>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        </div>
                                    </div>
                                </div>
                                  
                            </form>
                            <br>
                                    
                            <table class="table table-striped" style="display:none" id="table1"> 
                                <tr>
                                    <th><input type="checkbox" name="checkall"></th> 
                                    <th>Name of Document</th> 
                                    <th>Size</th> 
                                    <th>Modified</th> 
                                </tr>
                                @foreach($documents as $document)
                                    <tr>
                                        <td><input type="checkbox" name="checksingle"></td>
                                        <td>{{$document['doc_file1']}}</td>
                                        <td>{{$document['file_size']}} Bytes</td>
                                        <td>{{$document['updated_at']}}</td>
                                                    
                                    </tr>   
                                @endforeach  
                            </table>
                            <table class="table table-striped" style="display:none" id="table2"> 
                                <tr>
                                    <th><input type="checkbox" name="checkall"></th> 
                                    <th>Name of Document</th> 
                                    <th>Size</th> 
                                    <th>Expires At</th> 
                                </tr>
                                @foreach($certifications as $certification)
                                    <tr>
                                        <td><input type="checkbox" name="checksingle"></td>
                                        <td>{{$certification['cert_file']}}</td>
                                        <td>{{$certification['file_size']}} Bytes</td>
                                        <td>{{$certification['expires_at']}}</td>
                                                    
                                    </tr>   
                                @endforeach  
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <style>
    #piccon{
        height:200px;
        width:200px;
        margin-top:50%;
        margin-right:100%;
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
