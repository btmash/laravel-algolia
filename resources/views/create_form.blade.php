@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add a new book') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('store_new_book') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="isbn" class="col-sm-4 col-form-label text-md-right">{{ __('ISBN') }}</label>
                                <input id="isbn" name="isbn" type="text">
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('title') }}</label>
                                <input id="title" name="title" type="text">
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-4 col-form-label text-md-right">{{ __('Description') }}</label>
                                <input id="description" name="description" type="text">
                            </div>
                            <div class="form-group row">
                                <label for="author" class="col-sm-4 col-form-label text-md-right">{{ __('Author') }}</label>
                                <input id="author" name="author" type="text">
                            </div>
                            <div class="form-group row">
                                <label for="publisher" class="col-sm-4 col-form-label text-md-right">{{ __('Publisher') }}</label>
                                <input id="publisher" name="publisher" type="text">
                            </div>
                            <div class="form-group row">
                                <label for="keywords" class="col-sm-4 col-form-label text-md-right">{{ __('Keywords') }}</label>
                                <input id="keywords" name="keywords" type="text">
                            </div>
                            <div class="form-group row">
                                <label for="condition" class="col-sm-4 col-form-label text-md-right">{{ __('Condition') }}</label>
                                <input id="condition" name="condition" type="text">
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-sm-4 col-form-label text-md-right">{{ __('Price') }}</label>
                                <input id="price" name="price" type="text">
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Book') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
