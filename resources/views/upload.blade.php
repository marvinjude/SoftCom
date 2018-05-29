@extends('layouts/app')
@section('filter-bar')
    @include('layouts/filter-bar')
@stop
@section('content')
 <div class="container mt-5">
     <div class = 'jumbotron justify-content-center'>
         <h1 class = 'text-center'>Upload Your Awesome Product</h1>
         <form>
             <input type = "file"/>
             <input type = "submit">
         </form>
     </div>
 </div>
@stop
