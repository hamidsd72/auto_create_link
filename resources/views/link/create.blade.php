@extends('layout')
@section('content')

    <div class="title m-b-md">
        myProject
    </div>

    <div class="links">

        <form method="POST" action="{{ route('link.store') }}">
            @csrf
            <div>set-name<input name="name" type="text" required></div><br>
            <div>set-addrs<input name="link" type="text" required></div><br>
            <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
        </form>

    </div>

@endsection
