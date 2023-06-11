@extends('layouts.app')

@section('title','Bài Viết')

@section('content')
    <p class="text-primary">
        @foreach ($categories as $category )
            <h3>{{ $category->ten_tloai }}</h3>
        @endforeach
    </p>
@endsection