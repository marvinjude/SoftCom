@extends('layouts/app') 
@section('filter-bar') 
  @include('layouts/filter-bar')
@stop 
@section('content')
<div class='container' style = "padding-top:80px">
    <div class='row'>
     @if(count($softwares) > 0)
        @foreach($softwares as $software)
        <div class="col-md-3">
            <div class="__product-card">
                <img src="https://source.unsplash.com/random" alt="">
                <section class="product-card-inner">
                    <p class="product-name">{{$software->name}}</p>
                    <p class="product-details">{{$software->description}}</p>
                    <div class="to-match"></div>
                    <section class="product-info">
                        <span class="product-amount mdi mdi-currency-ngn p-1">{{$software->price}}</span>
                        <span class="mdi mdi-star float-right p-1">{{$software->downloads}}</span>
                        <span class="mdi mdi-download float-right p-1">{{$software->stars}}</span>
                    </section>
                    <section class="product-card-footer">
                        <button class="btn btn-outline-warning" >
                           <a href = "{{url('/software/'.$software->id)}}">Download</a>
                        </button>
                    </section>
                </section>
            </div>
        </div>
        @endforeach
     @else
        <!-- No Result Found -->
        <div class = "col-md-12" style="height:80vh">
           <h2 style = "text-align:center;color:grey; font-weight:bold">
             No Product Matched Your Search -  "{{$term}}"
           </h2>
        </div>
     @endif
       
     
    </div>
</div>
@stop
