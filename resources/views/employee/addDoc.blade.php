@extends('layouts.app')
    @section('content')
    @if(count($certification)>0)
       @foreach($certification as $cert)
            <label>{{$cert->employee['email']}}</label><br>
            <b>{{$cert['cert_file']}}</b><br>
            {{$cert['employee_id']}}<br>
            <small>{{$cert['expires_at']}}</small><br>
            <hr>

       @endforeach
    @endif
    @endsection 