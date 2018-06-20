@extends('layouts/app')

@section('content')
<div class = "__container">
  <section class = "__container-inner"> 
      <h1 id= "typedText" style= "display:inline">Explore Apps Made In Nigeria</h1>
       <p>
         When Your Team Needs To Kick off a project,hire a new employee. deploy some code,
         revire a sales contract, finalize next years's budget, measure an A/B test, plan your
         next office and more Signal has you covered
       </p>
       <div class ="btn-group white" style= "display:flex; align-items:center; justify-content:center" >
          <a class='btn btn-warning btn-lg m-2 text-white' role = "button" href={{url('/softwares')}}>Explore</a>
          @auth
            <a class='btn btn-warning btn-lg m-2 text-white' role = "button" href={{url('/logout')}}>logout</a>
          @else
            <a class='btn btn-warning btn-lg m-2 text-white' role = "button" href={{url('/login')}}>Login</a>
          @endauth
        </div>
    </section> 
</div>
<ul class = "__cards-container">
    <h1>Browse by Category</h1>
    @foreach($categories as $category)
    <li class="__card">
        <div class= "__card-desc">
            <p>{{$category->name}}</p>
            <button class = 'btn btn-secondary'>
               <a href = "{{url('/softwares?category='.$category->name)}}">Go </a>
            </button>
        </div>
        <img src={{$category->image_url}}>
    </li>
    @endforeach
</ul>
@stop