@extends('layouts/app')
@section('filter-bar')
    @include('layouts/filter-bar')
@stop
@section('content')
    <div style = "min-height:80vh; display:flex;position:relative;align-items:center; justify-content:center; flex-direction:column ">
       <img src="{{url('storage/images/thanks.png')}}" style= "height:400px; width:400px; padding:30px">
       <h2 class = "p-2 d-inline" style = "color:grey; display:inline; text-align:center">Thanks For Downloading, You Check Others In This 
          <a class ="d-inline" style = "border-bottom:2px solid blue" href="{{'http://localhost:8000'}}">Category</a>
       </h2>
    </div>
@stop
