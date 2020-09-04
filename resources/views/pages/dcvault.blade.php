@extends('layouts.app')
    @section('content')
        @include('inc.nav')
        @include('inc.sideicons')
            <div class="col-lg-2">

            </div>
            <div class="col-lg-10">
                <div class="container">
                    <h3> DOCUMENT VAULT</h3><input type="text" class="form-control" id="searchbr" placeholder="Search">
                    @foreach($doc as $dc)
                    <input type="checkbox" name="selectind" >   
                    <i id="ii" class="glyphicon glyphicon-file"></i><h4>{{$dc['doc_file1']}}</h4>
                    <p>{{$dc->employee['firstName']}}</p>
                    <hr>
                    @endforeach
                </div>
            </div>
      
    @endsection
    <style>
        #searchbr{
            width:20%;
            margin-left:70%;
        }
    </style>