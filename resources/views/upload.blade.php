@extends('layouts/app') @section('filter-bar') @include('layouts/filter-bar') @stop @section('content')
<div class="container mt-5">
    <div class='jumbotron justify-content-center'>
        <div class="card">
            <div class="card-header">{{ __('New product') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ url('software') }}">
                    @csrf @if(session()->has('message'))

                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                required autofocus> @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                        <div class="col-md-6">
                            <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}"
                                required autofocus> @if ($errors->has('price'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                        <div class="col-md-6">
                            <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description"
                                value="{{ old('description') }}" required autofocus></textarea>

                            @if ($errors->has('description'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                        <div class="col-md-6">
                            <select id="category" type="category" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category"
                                value="{{ old('category') }}" required>
                              
                              @foreach($categories as $category)
                               <option value='{{$category->id}}'>{{$category->name}}</option>
                              @endforeach
                             
        
                            </select>

                            <!-- {{!! Form::select('age', $categories) !!}} -->
                            @if ($errors->has('category'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('category') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image"> @if ($errors->has('image'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="software" class="col-md-4 col-form-label text-md-right">{{ __('Software') }}</label>

                        <div class="col-md-6">
                            <input id="software" type="file" class="form-control{{ $errors->has('software') ? ' is-invalid' : '' }}" name="software"> @if ($errors->has('software'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('software') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required> @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Upload') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop