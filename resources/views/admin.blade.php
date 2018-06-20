@extends('layouts/app') @section('filter-bar') @include('layouts/filter-bar') @stop @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-dark" style="max-width: 18rem; margin-top:80px;">
                <div class="card-header">
                    All products
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h1>{{$productCount}}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-dark" style="max-width: 18rem; margin-top:80px;">
                <div class="card-header">
                    Total Downloads
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h1>{{$totalDownloads}}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-dark" style="max-width: 18rem; margin-top:80px;">
                <div class="card-header">
                    Total Users
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h1>{{$users->count()}}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-dark" style="max-width: 18rem; margin-top:80px;">
                <div class="card-header">
                    Most Rated Software
                </div>
                <div class="card-body">
                    <h3><a href="{{url('/software/' .$mostRatedProduct->id)}}">{{$mostRatedProduct->name}}</a></h1>
                     <p class = "d-inline">{{$mostRatedProduct->downloads}}
                        <span class = "text-white mdi mdi-download"></span>
                     </p> 
                      <p class = "d-inline">{{$mostRatedProduct->stars}}
                        <span class = "text-white mdi mdi-star"></span>
                     </p> 
                </div>
            </div>
        </div>
    </div>
    <div class="row p-2 mt-5">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Website</th>
                        <th>Email</th>
                        <th>No. Of Software</th>
                        <th>Stars
                            <span class="mdi mdi-star" style="color:gold"></span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->company_name}}</td>
                        <td>
                            <a href="{{$user->website}}">{{$user->website}}</a>
                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{count($user->software())}}</td>
                        <td>{{$user->stars()}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop