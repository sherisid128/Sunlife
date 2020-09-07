@extends('layouts.app')
    @section('content')
        @include('inc.nav')
        @include('inc.sideicons')
            <div class="col-lg-2">

            </div>
            <div class="col-lg-10">
                <div class="container">
                    <h3> DOCUMENT VAULT</h3><input type="text" class="form-control" id="searchbr" placeholder="Search" style="display:inline"><input type="submit" id="btnbtn1" value="Search"><br><br>
                    <table class="table table-striped">
                    <tr>
                        <th> <input type="checkbox" name="selectind" ></th>
                        <th><select><option>Name</option><option> Size</option><option>Created</option><option>Updated</option></select> </th>
                        <th> Size </th>
                        <th> Modified </th>
                    </tr>
                    @foreach($doc as $dc)
                    <tr> 
                        <td><input type="checkbox" name="selectind" ></td>
                        <td> <i id="ii" class="glyphicon glyphicon-file"></i><h4 style="display:inline">{{$dc['doc_file1']}}</h4></td>
                        <td>{{$dc['file_size']}}</td>
                        <td> {{$dc['updated_at']}}</td>

                    </tr>
                    @endforeach
                </div>
            </div>
      
    @endsection
    <style>
        #searchbr{
            width:20%;
            margin-left:60%;
        }
        #ii{
            font-size:30px;
        }
         #btnbtn1{
        background-color: #76c8ba;
        border:none;
        border-radius:0%;
        padding-left:1%;
        padding-right:1%;
        padding-top:0.5%;
        padding-bottom:0.5%;
        font-weight:bold;
        color:white;
        margin-left:2%;
    }
        
    </style>