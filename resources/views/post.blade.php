@extends('layouts.app')

@section('title','Bài Viết')

@section('content')
    <div class="row">
        
        @foreach ( $posts as $post )
        <div class="col-md-3">
            <div class="card mb-2">
                <img src="{{ asset('image/tacgia/'.$post->hinhanh) }}" class="card-img-top" alt="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">{{ $post->tieude }}</h4>
                  <h5 class="card-title text-secondary">{{ $post->ten_bhat }}</h5>
                  <p class="card-text">{{ $post->tomtat }}</p>
                  <p class="card-text"><small class="text-muted">{{ $post->ngayviet }}</small></p>
                </div>
            </div>
           
        </div>
        @endforeach
    </div>
@endsection