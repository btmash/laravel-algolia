@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Search for books</div>

                    <div class="card-body">
                        <div id="app">
                            <ais-index app-id="{{ config('scout.algolia.id') }}"
                                       api-key="{{ env('ALGOLIA_SEARCH_KEY') }}"
                                       index-name="{{ env('ALGOLIA_BOOK_INDEX_ID') }}">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <ais-input class="form-control" placeholder="Search contacts..."></ais-input>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">Search</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ais-results>
                                    <template scope="{ result }">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img class="img-fluid" :src="result.image" />
                                            </div>
                                            <div class="col-sm-9">
                                                <h1>@{{ result.title }}</h1>
                                                <h4>ISBN: @{{ result.isbn }} by @{{ result.author }} published by @{{ result.publisher }}</h4>
                                                <h6>Price: $@{{ result.price }}</h6>
                                                <ul>
                                                    <li>@{{ result.keywords }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </template>
                                </ais-results>
                            </ais-index>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection