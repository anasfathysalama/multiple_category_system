@extends('main')
@section('title' , 'Categories')

@push('css')

@endpush

@section('content')

    <div class="container">
        <div style="margin-bottom: 20px">
            <h1>Categories</h1>
            <button style="float: right ; margin-top: -40px" type="button" class="btn btn-primary">Create</button>
        </div>

        @include('categories.list')

        @include('categories.form')
    </div>
@endsection


@push('js')
    <script src="{{asset('js/categories/main.js')}}?v={{fileatime('js/categories/main.js')}}"></script>
@endpush
