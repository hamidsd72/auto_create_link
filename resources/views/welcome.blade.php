@extends('layout')
@section('content')

    <div class="title m-b-md">
        myProject
    </div>

    <div class="links">
        <a href="{{route('link.show',1)}}">show-All</a>
        <a href="{{route('link.create')}}">create-link</a>
    </div>

@endsection
