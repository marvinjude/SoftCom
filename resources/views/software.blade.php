@extends('layouts/app')
@section('filter-bar')
    @include('layouts/filter-bar')
@stop
@section('content')
    <div class='container pt-5 '>
        <div class='row  h-100 card-body'>
            <div class='col-md-4'>
                <div>
                    <img src="{{url('storage/images/trading.JPG')}}" class="img-thumbnail" alt="Responsive image">
                </div>
            </div>
            <div class='col-md-4'>
                <h1>{{$software->name}}</h1>
                <p class=''>{{$software->description}}</p>
                <button class="btn btn-warning">&nbsp <span class="mdi mdi-download"></span>Download</button>
                <form method="POST" action="{{route('star')}}" class="d-inline">
                    @csrf
                    <input type="hidden" name="software_id" value="{{$software->id}}">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="submit" class="btn btn-outline-warning">
                            <span class="mdi mdi-star"></span> Star
                        </button>
                        <button type="button" class="btn btn-outline-warning">{{$software->stars}}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class='row card-body'>
            <div class="col-md-12">
                <div class="list-group">
                    @foreach($comments as $comment)
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$comment->topic}}</h5>
                                <small>{{Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</small>
                            </div>
                            <p class="mb-1">{{$comment->comment}}</p>
                            <small>{{$comment->email}}</small>
                        </a>
                    @endforeach

                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <form method="post" class='p-2' action ="{{route('create_comment')}}">
                            @csrf
                            <input type="hidden" name = "software_id" value="{{$software->id}}">
                             <div class="form-group row">
                                <label for="topic" class="col-md-4 col-form-label pl-0">{{ __('Topic') }}</label>
                                <input id="topic" name = "topic" type="text" class="form-control" required/>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label pl-0">{{ __('E-Mail Address') }}</label>
                                <input id="email" name = "email" type="text" class="form-control" required/>
                            </div>
                            <div class="form-group row">
                                <label for="comment" class="col-md-4 col-form-label pl-0">{{ __('Comment') }}</label>
                                <textarea id="comment" name = "comment" style='width:100%' rows="4" required></textarea>
                            </div>
                            <input class='btn btn-warning' type='submit' style='float:right'>
                        </form>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
