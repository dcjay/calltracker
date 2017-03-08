@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif

@extends('layouts.layout')

@section('content')

		

@stop