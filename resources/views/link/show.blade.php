@extends('layout')
@section('content')

    <div class="title m-b-md">
        myProject
    </div>

    <div class="links">

    	@foreach ($link as $item)
        	<div>{{$item->slug}} : <a href="{{ route('redirect',$item->slug) }}">{{$item->name}}</a></div><hr>
        @endforeach

    </div>

@endsection
