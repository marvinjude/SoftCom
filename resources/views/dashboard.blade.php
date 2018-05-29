@extends('layouts/app')
@section('filter-bar')
    @include('layouts/filter-bar')
@stop
@section('content')
 <div class="container ">
     <div class = "row">
         <div class ="col-md-3">
             <div class="card text-white bg-dark" style="max-width: 18rem; margin-top:80px;">
                 <div class = "card-header">
                     All products
                 </div>
                 <div class = "card-body">
                     <h5 class ="card-title"></h5>
                     <h1>{{$productsCount}}</h1>
                 </div>
             </div>
         </div>

         <div class ="col-md-3">
             <div class="card text-white bg-dark" style="max-width: 18rem; margin-top:80px;">
                 <div class = "card-header">
                     Total Downloads
                 </div>
                 <div class = "card-body">
                     <h5 class ="card-title"></h5>
                     <h1>90k</h1>
                 </div>
             </div>
         </div>

         <div class ="col-md-3">
             <div class="card text-white bg-dark" style="max-width: 18rem; margin-top:80px;">
                 <div class = "card-header">
                     Overall Rating
                 </div>
                 <div class = "card-body">
                     <h5 class ="card-title"></h5>
                     <h1>4.1</h1>
                 </div>
             </div>
         </div>

         <div class ="col-md-3">
             <div class="card text-white bg-primary" style="max-width: 18rem; margin-top:80px;border:2px dashed slateblue">
                 <div class = "card-body">
                     <a class ="btn" href = "{{route('upload')}}">
                         <b style = "color:white">Add New<span class = "mdi mdi-plus"></span></b>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="container">
    <div class='row'>
     @if(count($allSoftware) > 0)
       @foreach($allSoftware as $software)
        <div class="col-md-3">
            <div class="__product-card">
                <img src="{{asset('storage/images/health.png')}}" alt="">
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
                        <a class="btn btn-outline-warning" href="{{route('product', ['id' => $software->id])}}">Download</a>
                    </section>
                </section>
            </div>
        </div>
       @endforeach
    @else
    <div class="col-md-12 mt-3">
       <div class = "jumbotron d-flex flex-column align-items-center">
          <h4 class="text-center"> No software Yet</h4>
          <a href ="{{route('upload')}}" class = "btn btn-primary align-item-center" style = "max-width:100px">Upload Now</a>
       </div>
    </div>
    @endif

    </div>
 </div>
@stop
