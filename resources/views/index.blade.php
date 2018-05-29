@extends('layouts/app')

@section('content')
<div class = "__container">
  <section class = "__container-inner"> 
        <h1 id= "typedText" style= "display:inline">Where Work Happens</h1>
       <p>
         When Your Team Needs To Kick off a project,hire a new employee. deploy some code,
         revire a sales contract, finalize next years's budget, measure an A/B test, plan your
         next office and more Signal has you covered
       </p>
        <button><a href={{url('/softwares')}}>Explore</a></button>
    </section> 
</div>
<ul class = "__cards-container">
    @foreach($categories as $category)
    <li class="__card">
        <div class= "__card-desc">
            <p>{{$category->name}}</p>
            <button class = 'btn btn-secondary'>Go</button>
        </div>
        <img src={{$category->image_url}}>
    </li>
    @endforeach
</ul>
@stop