@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} userPosts</div>

                <div class="card-body">
                    @foreach($posts as $post)
    <ul>
        <li>{{$post}}</li>
        <li>Tytuł ogłoszenia : {{$post->title}}</li>
        <li>Opis : {{$post->description}}</li>
        <li>Dodano dnia : {{$post->created_at}}</li>
    </ul>
    @endforeach               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
